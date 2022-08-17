<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.videolar.index');
    }

    public function eklenenvid(){
        $vid = Video::all();
        return view('back.videolar.adds',compact('vid'));
    }


    public function vidpost(Request $request){
        $request->validate([
            'title'=>'min:1',
            'youtube' => 'min:5',
            'image'=>'required|image|mimes:jpeg,png,jpg',
        ]);

        $vid = new Video;
        $vid->title = $request->title;
        $vid->youtube = $request->youtube;
        $vid->content = $request->editor;
        if ($request->hasFile('image')){
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/vid/'),$imageName);
            $vid->image='/uploads/vid/'.$imageName;
        }
        $vid->slug=Str::slug($request->title);
        $vid->save();
        toastSuccess('Başarıyla olusturuldu','İşlem tamam!');
        return redirect()->route('back.videolar');
    }

    public function delete($id){
        $vid = Video::findOrFail($id);
        $vid->delete();
        toastr()->success('Yazı başarı ile silindi');
        return redirect()->back();
    }

    public function switch(Request $request){

        $vid=Video::findOrFail($request->id);
        $vid->status=$request->statu=='true' ? 1 : 0;
        $vid->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
