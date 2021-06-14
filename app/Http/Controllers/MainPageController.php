<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Text;
use App\Models\News;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class MainPageController extends Controller
{
    //
    public function index(){
        $slides = Slide::all();
        $sections = Text::all();
        $news = News::orderBy('id', 'desc')->take(2)->get();
        
        // $news1 = News::first();
        // $news2 = News::first(1);
        $foundation = null;
        
        if(Auth::user()){
            $foundation = Auth::user()->foundation;
        }
        // dd($slides);
        // dd($news1->title);
        return view('welcome',compact('slides','sections','foundation','news'));


    }
}
