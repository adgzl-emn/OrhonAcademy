<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Iletisim;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Video;
use App\Models\Lang;
use App\Models\Production;
use Illuminate\Support\Facades\App;

class HomesController extends Controller
{
//lang kod tekrarına gırdı onu const sınıf ayarla

    public function index(Request $request){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        $sponsors = Sponsor::all();
        return view('fronts.homepage',compact('sponsors'));
    }

    public function lang(Request $request){
        $lan = Lang::find(1);
        $lan->dil = $request->dil;
        $lan->save();

    }


    public function blogs(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        $blogs = Blog::where('status',1)->orderBy('created_at','DESC')->get();
        $categories = Category::where('status',1)->orderBy('created_at','DESC')->get();
        return view('fronts.blog.blogs',compact('blogs','categories'));
    }

    public function video(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        $publising = Video::where('status',1)->orderBy('created_at','DESC')->get();
        return view('fronts.akvideo.index',compact('publising'));
    }

    public function sponsorlar(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        $sponsorlar = Sponsor::all();
        return view('fronts.sponsorlar.index',compact('sponsorlar'));
    }

    public function about(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        return view('fronts.about');
    }

    public function production(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        $prod = Production::where('status',1)->orderBy('created_at','DESC')->get();
        return view('fronts.production.production',compact('prod'));
    }

    public function yayıncılık(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        return view('fronts.yayıncılık.index');
    }

    public function yatırım(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        return view('fronts.yatırım.index');
    }

    public function iletisim(){
        $lan = Lang::find(1);
        App::setLocale($lan->dil);
        return view('fronts.iletisim');
    }

    public function iletisimpost(Request $request){

        $iletisim = new Iletisim;
        $iletisim->name = $request->name;
        $iletisim->baslik = $request->baslik;
        $iletisim->mail = $request->email;
        $iletisim->message = $request->message;
        $iletisim->save();
        toastSuccess('Mesajınız başrıyla iletildi','Teşekkürler');
        return redirect()->route('iletisim');

    }

}
