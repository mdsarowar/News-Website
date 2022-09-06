<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function addfooter(){
        return view('admin.setting.footer.create');
    }

    public function newfooter(Request $request){
        Footer::saveData($request);
        return redirect()->back()->with('message','Footer Create successfully');
    }

    public function managefooter(){
        return view('admin.setting.footer.manage',[
            'footers'=>Footer::all(),
        ]);

    }

    public function footerStatusChange($id){
        $news=Footer::findOrFail($id);
        $news->status=$news->status == 0 ? 1:0 ;
        $news->save();
        return redirect()->back()->with('message','Status Change Successfully');
    }

    public function editfooter($id){
        return view('admin.setting.footer.create',[
            'footer'=>Footer::find($id),
        ]);
    }

    public function updatefooter(Request $request,$id){
        Footer::updateData($request,$id);
        return redirect('manage_footer')->with('message','Footer Update successfully');
    }

    public function deletefooter($id){
        $news=Footer::find($id);
        $news->delete();
        return redirect()->back()->with('message','Footer Delete Successfully');

    }
}
