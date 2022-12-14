<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class MemberListController extends Controller
{
    function show(){
        $data= Member::all();
        return view('list',['members'=>$data]);
    }
}
