<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class ContactsController extends Controller
{
    //
    function saveContact(Request $req){
        $info= new Info;
        $info->name=$req->name;
        $info->email=$req->email;
        $info->phone=$req->phone;
        $info->subject=$req->subject;
        $info->message=$req->message;
        $info->save();
        return back()->with('success', 'Data Submitted! ');
        return redirect('home');
    }
    function show(){
        $info= Info::all();
        return view('list',['infos'=>$info]);
    }
    function delete($id){
        $info=Info::find($id);
        $info->delete();
        return back()->with('delete', 'Data Successfully Deleted! ');
        return redirect('list');
    }
    function showContact($id){
        $info= Info::find($id);
        return view('edit',['info'=>$info]);
    }
    function update(Request $req){
        $info=Info::find($req->id);
        $info->name=$req->name;
        $info->email=$req->email;
        $info->phone=$req->phone;
        $info->subject=$req->subject;
        $info->message=$req->message;
        $info->save();
        return redirect('list')->with('update', 'Data Updated! ');
    }
}
