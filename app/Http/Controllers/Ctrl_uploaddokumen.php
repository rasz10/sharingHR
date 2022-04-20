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

class Ctrl_uploaddokumen extends BaseController
{
    public function index(Request $request)
    {
        $title = "Upload Dokumen";
            return view('upload.create',compact('title'));
    }

    public function edit($id)
    {
        $title = "Update Upload";
            return view('upload.edit',compact('title'));
    }
}
