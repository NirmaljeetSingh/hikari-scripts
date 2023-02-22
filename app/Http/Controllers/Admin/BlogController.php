<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\BlogImages;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "<pre>";
        // print_r(Blog::with('admin')->get()->toArray());
        //
        // return Auth::guard('admin')->user()->id;
        return view('admin.blogs.index',['blogs' => Blog::with('admin')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blogs.create',['edit' => 'no']);
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
        // echo "<pre>";
        // print_r($request->all());
        // die();
        $request->validate([
            'title' => ['required','max:255'],
            'description' => 'required',
            'type' => 'required',
        ],[
            'type.required' => 'Select For blog'
        ]);
        // die(';');
        try {
            //code...
            $blogs = Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $request->type,
                'admin_id' => Auth::guard('admin')->user()->id ?? 0
            ]);
            $i = [];
            foreach($request->images as $img)
            {
                // $path = $img->store('public/images');
                BlogImages::create([
                    'blog_id' => $blogs->id,
                    'image' => upload($path,'images')
                ]);
                // $i[] = Storage::disk('local')->save($img);
            }
            // echo "<pre>";
            // print_r($i);
            // die();
        } catch (\Throwable $th) {
            // die($th->getMessage());
            return redirect()->back()->withError(['fatal' => $th->getMessage()]);
        }
        return redirect()->route('admin.blog')->with(['created' => 'Blog Saved']);
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
    public function edit(Blog $id)
    {
        //
        return view('admin.blogs.create',['blog' => $id,'edit' => 'yes']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blog $id)
    {
        //
        $request->validate([
            'title' => ['required','max:255'],
            'description' => 'required',
            'type' => 'required',
        ],[
            'type.required' => 'Select For blog'
        ]);
        // die(';');
        try {
            //code...
            $id->update([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $request->type,
            ]);
        } catch (\Throwable $th) {
            // die($th->getMessage());
            return redirect()->back()->withError(['fatal' => $th->getMessage()]);
        }
        return redirect()->route('admin.blog')->with(['created' => 'Blog Saved']);
    }
    public function featured(Blog $id)
    {
        //
        $id->update([
            'featured' => ($id->featured == 'yes') ? 'no' : 'yes'
        ]);
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $id)
    {
        //
        $b_i = BlogImages::where('blog_id',$id)->get();
        foreach($b_i as $b)
        {
            $img = explode('/',$b->image);
            $i_d = public_path('storage/images/'.last($img));
            if(file_exists($i_d))
            {
                unlink($i_d);
            }
        }
        $id->delete();
        return redirect()->back();
    }
}
