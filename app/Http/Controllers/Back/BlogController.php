<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =Category::where('status',1)->orderBy('created_at','DESC')->get();
        return view('back.blogs.createblog',compact('categories'));
    }
    public function blogs(){
        $blogs = Blog::all();
        return view('back.blogs.blogs',compact('blogs'));
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
           // return dd($request->all());
          $request->validate([
   //           'title'=>'min:1',
                'image'=>'required|image|mimes:jpeg,png,jpg',
   //           'editor' => 'min:20',
   //           'youtube' => 'min:5'
          ]);

            $blog = new Blog;
            $blog->title = $request->title;
            $blog->category_id= $request->category;
            if ($request->hasFile('image')){
                $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads/blog/'),$imageName);
                $blog->image='/uploads/blog/'.$imageName;
            }
            $blog->youtube = $request->youtube;
            $blog->content = $request->editor;
            $blog->slug=Str::slug($request->title);
            $blog->save();
            toastSuccess('Blog Başarıyla Oluşturuldu','Tebrikler');
            //toastSuccess('Blog Başarıyla olusturuldu','İşlem tamam!');
            return redirect()->route('back.blog');
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
        $blogs = Blog::findOrFail($id);
        $categories = Category::all();
        return view('back.blogs.updateblog',compact('blogs','categories'));
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
        $blog = Blog::findOrFail($id);

        if ($request->youtube == NULL){
            $blog->title = $request->title;
            $blog->category_id = $request->category;
            $blog->content = $request->editor;
            $blog->slug=Str::slug($request->title);
            if ($request->hasFile('image')){
                $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads/blog/'),$imageName);
                $blog->image='/uploads/blog/'.$imageName;
            }
            $blog->save();
        }
        else{
            $blog->title = $request->title;
            $blog->youtube = $request->youtube;
            $blog->category_id = $request->category;
            $blog->content = $request->editor;
            $blog->slug=Str::slug($request->title);
            if ($request->hasFile('image')){
                $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads/blog/'),$imageName);
                $blog->image='/uploads/blog/'.$imageName;
            }
            $blog->save();
        }
        return redirect()->route('back.blogs');

    }

    public function switch(Request $request){

       $blog=Blog::findOrFail($request->id);
       $blog->status=$request->statu=='true' ? 1 : 0;
       $blog->save();
    }

    public function delete($id){

        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->back();
    }

    public function trashed(){
        $blog = Blog::onlyTrashed()->orderBy('deleted_at','DESC')->get();
        return view('back.blogs.trashed',compact('blog'));
    }

    public function recover($id){
        Blog::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function forcedelete($id){
        $blog = Blog::onlyTrashed()->findOrFail($id);
        if (File::exists($blog->image)){
            File::delete(public_path($blog->image));
        }
        $blog->forceDelete();
        return redirect()->route('back.blog.trashed');
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
