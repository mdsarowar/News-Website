<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static $logo;
    protected static $imageUrl;
    protected static $directory;
    protected static $imageName;
    protected static $image;


    public static function saveData($request){
        self::$image=$request->file('logo_image');

        if (self::$image){
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/logo/logo-image/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            self::$imageUrl='';
        }


        self::$logo=new Logo();
        self::$logo->logo_image            =self::$imageUrl;
        self::$logo->save();
    }

    public static function updateData($request,$id){
        $logotable=Logo::find($id);
        self::$image=$request->file('logo_image');
        if (self::$image){
            if (file_exists($logotable->logo_image)){
                unlink($logotable->logo_image);
            }
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/logo/logo-image/';
            self::$image->move(self::$directory,self::$imageUrl);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            if(isset($logotable->logo_image)){
                self::$imageUrl=$logotable->logo_image;
            }else{
                self::$imageUrl='';
            }

        }

        $logotable->logo_image                =self::$imageUrl;
        $logotable->save();
    }
}
