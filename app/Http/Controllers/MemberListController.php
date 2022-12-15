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
    function delete($id)
    {
        $data=Member::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id)
    {
       $data=Member::find($id);
       return view('edit',['data'=>$data]);
       
    }

    function update(Request $req)
    {
       $data=Member::find($req->id);
      $data->name=$req->membername; 
      $data->email=$req->memberemail;
      $data->address=$req->memberaddr;
      $data->save();
      return redirect('list');


    
       
    }
}
