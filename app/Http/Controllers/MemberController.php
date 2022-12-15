<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\member;

class MemberController extends Controller
{
    
    //  function addData(){
    //     echo "database connection is establised ";
    //    }

    function addData(Request $req){
        $member=new Member;
        $member->name=$req->membername;
        $member->email=$req->memberemail;
        $member->address=$req->memberaddr;
        $member->save();
        return redirect('add');

    }
}
