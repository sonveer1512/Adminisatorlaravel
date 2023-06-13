<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\DistributorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DistributorController extends Controller
{
    public function index()
    {
        $sess = Session::get('admin_login');
        $role = $sess['role'];
        if ($role != 'Admin') {
            return view('errors/403');
        }

        return view('distributor/list');
    }

    public function add(Request $request)
    {
        $rules = [
            'loginpassword' => 'required',
            'name' => 'required|unique:admin|regex:/^[a-zA-Z]+$/',
            'email' =>'required|unique:admin|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'address' => 'regex:/^[a-zA-Z0-9\s\.,#-]+$/',
            'logo' => 'required|file|mimes:jpeg,jpg,png,gif|max:2048', // max size in KB
            'mobile' => 'required|unique:admin|regex:/^\+?(?:\d\s?){10,14}$/',
            'companyname' => 'required|regex:/^[a-zA-Z]+$/',
            'cgst'           =>'regex:/^([0-9]{2}[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9A-Za-z]{1}Z[0-9A-Za-z]{1})$/',
            'companyaddress' => 'regex:/^[a-zA-Z0-9\s\.,#-]+$/',
            'loginemail' =>'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
        ];

        $messages = [
            'loginpassword.regex' => 'Please enter a Strong Password *.',
            'loginpassword.required' => 'The password field is required.',
            'name.regex' => 'Please enter a only alphabet *.',
            'email.regex' => 'Please enter a Email Valid *.',
            'address.regex' => 'Please enter a  Valid  Formate address*.',
            'logo.max' => 'Please upload an image 2MB',
            'logo.mimes' => 'Please upload an image with a valid file extension (jpg, jpeg, png, gif, svg).',
            'mobile.regex' => 'Please enter  only 10 digit Number *.',
            'companyname.regex' => 'Please enter a only alphabet *.',
            'cgst.regex' => 'Please enter a valid GST number',
            'companyaddress' => 'Please enter a  Valid  Formate address*.',
        ];
        $validate = Validator::make($request->all(), $rules, $messages);
        if ($validate->fails()) {
            return response()->json([
                'code' => 401,
                'message' => $validate->errors()->toArray(),
            ]);
        } else {
            $data['name'] = $request->name;
            $data['mobile'] = $request->mobile;
            $data['admin_id'] = getuserdetail('id');
            $data['password'] = Hash::make($request->loginpassword);
            $data['role'] = $request->distributor;
            $data['added_by'] = getuserdetail('id');
            $data['email'] = $request->loginemail;
            $data['c_name'] = $request->companyname;
            $data['c_address'] = $request->companyaddress;
            $data['address'] = $request->address;
            $data['c_gst'] = $request->cgst;
            $data['url'] = getuserdetail('url');

            // if ($request->logo) {
            //     $imagelogo = $request->logo->getClientOriginalName();
            //     $newfileName = time() . '.' . $imagelogo;
            //     $img = $request->logo->move(public_path() . '/uploads/distributor/', $newfileName); //this wil save file folder
            //     $data['image'] = ('/uploads/distributor/', $newfileName);
            // }
            if (!empty($request->file('logo'))) {
                $file = $request->file('logo');
                date_default_timezone_set('Asia/Kolkata');
    
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/distributor'), $filename);
                $data['image'] = "uploads/distributor/$filename";
               }

            $results = AdminModel::insert($data);
            if ($results) {
                return response()->json(['code' => 200,'message' => 'Distributor Added Successfully',]);
            } else {
                return response()->json(['code' => 201,'message' => 'Something Went Wrong',]);
            }
        }
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $distributor = DistributorModel::where('id', $id)->first();
        return view('distributor/edit', compact('distributor'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $data['name'] = $request->name ?? '';
        $data['mobile'] = $request->mobile ?? '';
        $data['c_name'] = $request->companyname ?? '';
        $data['c_address'] = $request->companyaddress ?? '';
        $data['address'] = $request->address ?? '';
        $data['c_gst'] = $request->cgst ?? '';
        

        // if ($request->logo) {
        //     $imagelogo = $request->logo->getClientOriginalName();
        //     $newfileName = time() . '.' . $imagelogo;
        //     $request->logo->move(public_path() . '/uploads/distributor/',$newfileName); //this wil save file folder
        //     $data['image'] = $request->logo;
        // }
        if (!empty($request->file('logo'))) {
            $file = $request->file('logo');
            date_default_timezone_set('Asia/Kolkata');

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/distributor'), $filename);
            $data['image'] = "uploads/distributor/$filename";
           }

        $up_date = AdminModel::Where('id', $id)->update($data);
       
        if ($up_date) {
            return response()->json(['code' => 200,'message' => 'Distributor Update Successfully',]);
        } else {
            return response()->json(['code' => 201,'message' => 'Something Went Wrong',]);
        }
    }

    public function get_distributor()
    {
        $data['distributor'] = DistributorModel::where('flag', '!=', '2')->where('role','distributor')->orderby('id', 'desc')->get();
        return view('distributor/list_ajax', $data);
    }
    function changepass(Request $request){
        $id = $request->id;
        $distributor['pass'] = DistributorModel::where('id', $id)->first();
        return view('distributor/chnagepass',$distributor);
    }

    function change_pass_update(Request $request){

        $validate = Validator::make($request->all(),[
            'new_pass' => 'required',
            'confirm_pass' =>'required|min:6' ,
        ]);
        if($validate->fails()){
            return response()->json(['code'=>401 ,'message'=>$validate->errors()->toArray()]);
        }else{
            $id = $request->id;
            if($request->new_pass == $request->confirm_pass){

                $data['password'] = Hash::make($request->new_pass);
                $update_pass = AdminModel::where('id',$id)->update($data);

                if($update_pass){
                    return response()->json(['code'=>200,'message'=>'Password Updated']);
                }else{
                    return response()->json(['code'=>402,'message'=>'something Went Wrong']);
                }

            }else{
                return response()->json(['code' => 403, 'message' => 'New Password & Confirm Password Should be same']);
            }

  
        }
    }
}
