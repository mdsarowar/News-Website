<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static $news;
    protected static $imageUrl;
    protected static $repimageUrl;
    protected static $directory;
    protected static $imageName;
    protected static $image;
    protected static $reporterimage;


    public static function saveData($request){
        self::$image=$request->file('news_image');


        if (self::$image){
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/news-images/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            self::$imageUrl='';
        }

        self::$reporterimage=$request->file('reporter_image');
        if (self::$reporterimage){
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/news-images/reporter-image/';
            self::$reporterimage->move(self::$directory,self::$imageName);
            self::$repimageUrl=self::$directory.self::$imageName;

        }else{
            self::$repimageUrl='';
        }


        self::$news=new News();
        self::$news->category_id            =$request->category_id;
        self::$news->news_title             =$request->news_title;
        self::$news->writer_name             =$request->writer_name;
        self::$news->news_image                  =self::$imageUrl;
        self::$news->reporter_image                  =self::$repimageUrl;
        self::$news->image_title            =$request->image_title;
        self::$news->content                =$request->content;
        self::$news->save();
    }

    public static function updateData($request,$id){
        $newstable=News::find($id);
        self::$image=$request->file('news_image');
        self::$reporterimage=$request->file('reporter_image');
        if (self::$image){
            if (file_exists($newstable->news_image)){
                unlink($newstable->news_image);
            }
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/news-images/';
            self::$image->move(self::$directory,self::$imageUrl);
            self::$imageUrl=self::$directory.self::$imageName;

        }else{
            if(isset($newstable->news_image)){
                self::$imageUrl=$newstable->news_image;
            }else{
                self::$imageUrl='';
            }

        }
        if (self::$reporterimage){
            if (file_exists($newstable->reporter_image)){
                unlink($newstable->reporter_image);
            }
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$directory='admin/news-images/';
            self::$reporterimage->move(self::$directory,self::$imageUrl);
            self::$repimageUrl=self::$directory.self::$imageName;

        }else{
            if(isset($newstable->reporter_image)){
                self::$repimageUrl=$newstable->reporter_image;
            }else{
                self::$repimageUrl='';
            }

        }

        $newstable->category_id          =$request->category_id;
        $newstable->news_title           =$request->news_title;
        $newstable->writer_name             =$request->writer_name;
        $newstable->news_image                =self::$imageUrl;
        $newstable->reporter_image                =self::$repimageUrl;
        $newstable->image_title            =$request->image_title;
        $newstable->content              =$request->content;
        $newstable->save();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
   public function subCategory(){
        return $this->belongsTo(Sub_category::class);
   }
}
