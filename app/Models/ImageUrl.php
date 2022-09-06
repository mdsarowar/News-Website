<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageUrl extends Model
{
    use HasFactory;
    protected $fillable=[
        'news_image',
        'imageurl',
    ];
    protected static $imagenews;
    protected static $imageUrl;
    protected static $directory;
    protected static $imageName;
    protected static $image;


    public static function saveData($request){
        self::$image=$request->file('news_image');

        if (self::$image){
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/imageurl/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            self::$imageUrl='';
        }


        self::$imagenews=new ImageUrl();
        self::$imagenews->news_image            =self::$imageUrl;
        self::$imagenews->imageurl            =url('/').'/'.self::$imageUrl;
        self::$imagenews->save();
    }

}
