<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mdl_main;
use Carbon\Carbon;
use Auth;
use Session;
use DB;

class Ctrl_kodeakses extends BaseController
{
    //get home
    public function index(Request $request)
    {
        $title = "Kode Akses";
            return view('kodeakses.index',compact('title'));
    }

    public function edit($id)
    {
        $title = "Edit Kode Akses";
            return view('kodeakses.edit',compact('title'));
    }
}
