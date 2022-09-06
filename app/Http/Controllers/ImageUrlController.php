<?php

namespace App\Http\Controllers;

use App\Models\ImageUrl;
use Illuminate\Http\Request;

class ImageUrlController extends Controller
{
    public function addimageurl(){
        return view('admin.imageurl.create',[
            'imageurls'=>ImageUrl::all(),
        ]);
    }

    public function newimageurl(Request $request){
        ImageUrl::saveData($request);
        return redirect()->route('add_imageurl')->with('message','imageurl Create successfully');
    }

    public function deleteimageurl($id){
        $image=ImageUrl::find($id);
        $image->delete();
        return redirect()->route('add_imageurl')->with('message','imageurl delete successfully');

    }
}
