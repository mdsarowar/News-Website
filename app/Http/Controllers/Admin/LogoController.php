<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function addlogo(){
        return view('admin.setting.logo.create-logo');
    }

    public function newlogo(Request $request){
        Logo::saveData($request);
        return redirect()->back()->with('message','Logo Create successfully');
    }

    public function managelogo(){
        return view('admin.setting.logo.manage',[
            'logoimage'=>Logo::all(),
        ]);

    }

//    public function NewsStatusChange($id){
//        $news=Footer::findOrFail($id);
//        $news->status=$news->status == 0 ? 1:0 ;
//        $news->save();
//        return redirect()->back()->with('message','Status Change Successfully');
//    }

    public function editlogo($id){
        return view('admin.setting.logo.create-logo',[
            'logo'=>Logo::find($id),
        ]);
    }

    public function updatelogo(Request $request,$id){
        Logo::updateData($request,$id);
        return redirect('manage_logo')->with('message','Logo Update successfully');
    }

    public function deletelogo($id){
        $news=Logo::find($id);
        $news->delete();
        return redirect()->back()->with('message','Logo Delete Successfully');

    }
}
