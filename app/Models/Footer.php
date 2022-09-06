<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static $footer;
    protected static $imageUrl;
    protected static $directory;
    protected static $imageName;
    protected static $image;


    public static function saveData($request){
        self::$image=$request->file('footer_image');

        if (self::$image){
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/footer/footer-image/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            self::$imageUrl='';
        }


        self::$footer=new Footer();
        self::$footer->sompadok_name                    =$request->sompadok_name;
        self::$footer->prokasok_name                    =$request->prokasok_name;
        self::$footer->footer_image            =self::$imageUrl;
        self::$footer->image_title            =$request->image_title;
        self::$footer->content                =$request->content;
        self::$footer->save();
    }

    public static function updateData($request,$id){
        $footertable=Footer::find($id);
        self::$image=$request->file('footer_image');
        if (self::$image){
            if (file_exists($footertable->footer_image)){
                unlink($footertable->footer_image);
            }
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/footer/footer-image/';
            self::$image->move(self::$directory,self::$imageUrl);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            if(isset($footertable->footer_image)){
                self::$imageUrl=$footertable->footer_image;
            }else{
                self::$imageUrl='';
            }

        }

        $footertable->sompadok_name           =$request->sompadok_name;
        $footertable->prokasok_name           =$request->prokasok_name;
        $footertable->footer_image                =self::$imageUrl;
        $footertable->image_title            =$request->image_title;
        $footertable->content              =$request->content;
        $footertable->save();
    }
}
