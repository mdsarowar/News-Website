<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;

class frontviewController extends Controller
{
    public function Home(){
        $categoryban=Category::where('category_name','বাংলাদেশ')->first();
        $banid=$categoryban->id;
        $categoryanto=Category::where('category_name','আন্তর্জাতিক')->first();
        $antoid=$categoryanto->id;
        $categoryspor=Category::where('category_name','খেলাধুলা')->first();
        $sportsid=$categoryspor->id;
        $relezion=Category::where('category_name','ধর্ম')->first();
        $relezid=$relezion->id;
        $entertainment=Category::where('category_name','বিনোদন')->first();
        $entertainmentid=$entertainment->id;
        $cottogram=Category::where('category_name','চট্টগ্রাম সময়')->first();
        $cottgramid=$cottogram->id;
        return view('frontend.home.home',[
            'news1'=>News::where('status',1)->latest()->first(),
            'news2'=>News::where('status',1)->take(2)->latest()->skip(1)->get(),
            'news3'=>News::where('status',1)->take(4)->latest()->skip(3)->get(),

            'bangladeshs'=>News::where('category_id',$banid)->take(3)->latest()->get(),
            'worlds'=>News::where('category_id',$antoid)->take(3)->latest()->get(),
            'sports'=>News::where('category_id',$sportsid)->take(3)->latest()->get(),

            'relezs'=>News::where('category_id',$relezid)->take(2)->latest()->get(),
            'sportsa'=>News::where('category_id',$sportsid)->take(2)->latest()->get(),
            'news4'=>News::where('status',1)->take(4)->latest()->skip(3)->get(),

            'entertainments1'=>News::where('category_id',$entertainmentid)->take(2)->latest()->get(),
            'entertainments2'=>News::where('category_id',$entertainmentid)->take(3)->latest()->skip(2)->get(),


            'bangladesh1'=>News::where('category_id',$banid)->take(2)->latest()->get(),
            'bangladesh2'=>News::where('category_id',$banid)->take(3)->latest()->skip(2)->get(),

            'cottogram1'=>News::where('category_id',$cottgramid)->take(1)->latest()->get(),
            'cottogram2'=>News::where('category_id',$cottgramid)->take(4)->latest()->skip(1)->get(),


            'sports1'=>News::where('category_id',$sportsid)->take(2)->latest()->get(),
            'sports2'=>News::where('category_id',$sportsid)->take(3)->latest()->skip(2)->get(),


        ]);
    }
    public function CategoryNews($id){
        return view('frontend.pages.allnews',[
            'allnewses'=>News::where('category_id',$id)->take(15)->latest()->get(),
            'categoryname'=>Category::find($id),
        ]);
    }
    public function Details($id){
        return view('frontend.pages.details',[
            'details'=>News::find($id),
//            'categoryname'=>Category::find($id),
        ]);
    }
    public function categoryPage(){
        return view('frontend.category.categoryview');
    }

    public function contactPage(){
        return view('frontend.contact.contact');
    }

    public function contactPost(Request $request,$id){
        Category::updateProduct($request,$id);
        Contact::saveData($request);
        return redirect()->back()->with('message','Your message send successfully');
    }
}
