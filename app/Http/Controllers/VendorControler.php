<?php

namespace App\Http\Controllers;

use App\Models\VendorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class VendorControler extends Controller
{
    public function index(){
        return view('vendor/list');
    }
    

    public function add(Request $request){
        $rules = [
            'loginpassword'  => 'required',
            'name'           =>'required|unique:vendor|regex:/^[a-zA-Z]+$/',
            'loginemail'          =>'required|unique:vendor|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'address'        =>'required|regex:/^[a-zA-Z0-9\s\.,#-]+$/',
            'logo'           =>'required|file|mimes:jpeg,jpg,png,gif|max:2048', // max size in KB
            'mobile'         =>'required|regex:/^\+?(?:\d\s?){10,14}$/',
            'companyname'    =>'required|unique:vendor|regex:/^[a-zA-Z]+$/',
            'cgst'           =>'regex:/^([0-9]{2}[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9A-Za-z]{1}Z[0-9A-Za-z]{1})$/',
            'companyaddress' =>'required|regex:/^[a-zA-Z0-9\s\.,#-]+$/',
           
        ];
        $messages = [
            'loginpassword.regex'    => 'Please enter a Strong Password *.',
            'loginpassword.required' => 'The password field is required.',
            'name.regex'             => 'Please enter a only alphabet *.',
            'loginemail.regex'            => 'Please enter a Email Valid *.',
            'address.regex'          => 'Please enter a  Valid  Formate address*.',
            'logo.max'               =>  'Please upload an image 2MB',
            'logo.mimes'             => 'Please upload an image with a valid file extension (jpg, jpeg, png, gif, svg).',
            'mobile.regex'           =>'Please enter  only 10 digit Number *.',
            'companyname.regex'      => 'Please enter a only alphabet *.',
            'cgst.regex'             => 'Please enter a valid GST number',
            'companyaddress'         =>'Please enter a  Valid  Formate address*.',

        ];
        $validate = Validator::make($request->all(),$rules,$messages);
        if($validate->fails()){
            return response()->json(['code'=>401,'message' =>$validate->errors()->toArray()]);
        }else{

            $data['name'] = $request->name;
            $data['mobile'] = $request->mobile;
            $data['password'] = Hash::make($request->loginpassword);
            $data['role'] = $request->vendor;
            $data['email'] = $request->loginemail;
            $data['c_name'] = $request->companyname;
            $data['c_address'] = $request->companyaddress;
            $data['address'] = $request->address;
            $data['c_gst'] = $request->cgst;
            $data['distributor_id'] = getuserdetail('id');
            $data['vendor_url'] = getuserdetail('url');
            
            if (!empty($request->file('logo'))) {
                $file = $request->file('logo');
                date_default_timezone_set('Asia/Kolkata');
    
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/vendor'), $filename);
                $data['vendor_logo'] = "uploads/vendor/$filename";
               }
            $insert_data = VendorModel::insert($data);
            if($insert_data){
                return response()->json(['code'=>200,'message'=>'Vendor Added Successfully ']);
            }else{
                return response()->json(['code'=>201,'message'=>'Something Went Wrong']);
            }
        
        }
    }
    public function edit(Request $request){
        $id = $request->id;
        $vendor = VendorModel::where('id',$id)->first();
        return view('vendor/edit',compact('vendor'));
    }



    public function update(Request $request){

        $id = $request->id;
        $data['name'] = $request->name ?? '';
        $data['mobile'] = $request->mobile ?? '';
        $data['c_name'] = $request->companyname ?? '';
        $data['c_address'] = $request->companyaddress ?? '';
        $data['address'] = $request->address ?? '';
        $data['c_gst'] = $request->cgst ?? '';
        
       
        if($request->logo){
            $imagelogo = $request->logo->getClientOriginalExtension();
            $newfileName = time().'.'.$imagelogo;
            $request->logo->move(public_path().'/uploads/vendor/',$newfileName); //this wil save file folder
            $data['vendor_logo'] = $request->logo;
        }
        
        $update_data = VendorModel::where('id',$id)->update($data);
        if($update_data){
            return response()->json(['code'=>200,'message'=>'Vendor Updated Successfully']);
        }else{
            return response()->json(['code'=>201,'message'=>'Something Went Wrong']);
        }

    }
    public function get_vendor(){

        $vendor = VendorModel::where('flag','!=','2')->orderby('id','desc');
      
        if(getuserdetail('role') != 'Admin') {
            $vendor = $vendor->where('distributor_id',getuserdetail('id'));
        }
        $vendor = $vendor->get();
       
        return view('vendor/list_ajax',compact('vendor'));
    }

    public function changepass(Request $request){

        $id = $request->id;
        $vendor['pass'] = VendorModel::where('id', $id)->first();
        return view('vendor/chnagepass',$vendor);
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
                $update_pass = VendorModel::where('id',$id)->update($data);

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
