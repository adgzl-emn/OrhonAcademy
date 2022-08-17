<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iletisim;

class IletisimController extends Controller
{
    public function index(){
        $iletisim = Iletisim::all();
        return view('back.iletisim',compact('iletisim'));
    }

    public function deletemessage($id){

        $iletisim = Iletisim::findOrFail($id);
        $iletisim->delete();
        toastr()->success('Mesaj başarı ile silindi');
        return redirect()->back();

    }

    public function getiletisim(){
        //
    }

}
