<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Str;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsorlar = Sponsor::all();
        return view('back.sponsorlar.index',compact('sponsorlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.sponsorlar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sname'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg'
        ]);

         //return dd($request->all());
        $sponsor = new Sponsor;
        $sponsor->sname = $request->sname;
        $sponsor->content = $request->editor;
        if ($request->hasFile('image')){
            $imageName=Str::slug($request->sname).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $sponsor->image='/uploads/'.$imageName;
        }
        $sponsor->save();
        toastSuccess('Sponsor Başarıyla olusturuldu','İşlem tamam!');
        return redirect()->back();
        /**

        if ($request->hasFile('image')){
        $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $article->image='/uploads/'.$imageName;
        }
        $article->save();
        toastr()->success('Başarıyla Oluşturuldu','Tebrikler!');

        return redirect()->route('yazilar.index');
         */
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function delete($id){

        $sponsor= Sponsor::findOrFail($id);
        $sponsor->delete();
        toastr()->success('Kategori başarı ile silindi');
        return redirect()->back();
    }
}
