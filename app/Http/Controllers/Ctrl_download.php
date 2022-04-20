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

class Ctrl_download extends BaseController
{
    public function index($id)
    {
        $title = "Download Dok";
            return view('download.index',compact('title'));
    }
}
