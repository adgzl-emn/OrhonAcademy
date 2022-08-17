<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Production;
use Illuminate\Support\Str;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Production::all();
        return view('back.production.index',compact('prod'));
    }

    public function showadd(){
        return view('back.production.create');

    }

    public function add(Request $request){

        $plink = '@<div data-testid="hero-rating-bar__aggregate-rating__score" class="sc-7ab21ed2-2 kYEdvH"><span class="sc-7ab21ed2-1 jGRxWM">(.*?)</span><span>/<!-- -->10</span></div>@si';
        $botara = file_get_contents($request->link);
        preg_match_all($plink,$botara,$gelenpuan);
        $puan = $gelenpuan[0][0];

        $prod = new Production;
        $prod->title = $request->title;
        $prod->link= $request->link;
        $prod->imdb = strip_tags($puan);
        $prod->youtube = $request->youtube;
        $prod->content = $request->editor;
        $prod->slug=Str::slug($request->title);
        $prod->save();
        return redirect()->route('back.production');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function switch(Request $request){

        $prod=Production::findOrFail($request->id);
        $prod->status=$request->statu=='true' ? 1 : 0;
        $prod->save();
    }


    public function delete($id){

        $prod = Production::findOrFail($id);
        $prod->delete();
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Production::find($id);
        return view('back.production.update',compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //return dd($request->post());
         $prod = Production::findOrFail($id);
         $plink = '@<div data-testid="hero-rating-bar__aggregate-rating__score" class="sc-7ab21ed2-2 kYEdvH"><span class="sc-7ab21ed2-1 jGRxWM">(.*?)</span><span>/<!-- -->10</span></div>@si';
         $botara = file_get_contents($request->link);
         preg_match_all($plink,$botara,$gelenpuan);
         $puan = $gelenpuan[0][0];

         if ($request->youtube == NULL){
            $prod->title = $request->title;
            $prod->link= $request->link;
            $prod->imdb = strip_tags($puan);
            $prod->content = $request->editor;
            $prod->slug=Str::slug($request->title);
            $prod->save();
         }
         else{
            $prod->title = $request->title;
            $prod->link= $request->link;
            $prod->imdb = strip_tags($puan);
            $prod->youtube = $request->youtube;
            $prod->content = $request->editor;
            $prod->slug=Str::slug($request->title);
            $prod->save();
         }
         return redirect()->route('back.productions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
