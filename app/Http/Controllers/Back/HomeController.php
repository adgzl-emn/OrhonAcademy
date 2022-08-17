<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use App\Models\Category;
use App\Models\Video;
use App\Models\Blog;
use App\Models\Production;
use App\Models\Admins;


class HomeController extends Controller
{
    public function index(){
        $sponsorlar = Sponsor::all()->count();
        $kategorilera = Category::where('status',1)->get()->count();
        $kategoriler = Category::all()->count();
        $videolar = Video::all()->count();
        $videolara = Video::where('status',1)->get()->count();
        $bloglar = Blog::all()->count();
        $bloglara = Blog::where('status',1)->get()->count();
        $prod = Production::all()->count();
        $proda = Production::where('status',1)->get()->count();
        $users = Admins::all();
       

        return view('back.index',compact('sponsorlar','kategoriler','kategorilera','videolar','videolara',
        'bloglar','bloglara','prod','proda','users'));
    }
}
