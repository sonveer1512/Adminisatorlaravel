<?php

use Illuminate\Support\Facades\Session;

if (!function_exists('getuserdetail')) {
    function getuserdetail($string)
    {
        $sess = session('admin_login');
        return $sess[$string] ?? '';
    }
}

if (!function_exists('haveaccess')) {
    function haveaccess()
    {
        $sess = Session::get('admin_login');
        $role = $sess['role'];
        if($role != 'Admin'){
          return view('errors/403');

        }
    }
}
