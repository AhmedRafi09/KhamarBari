<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $blog_cats_1 = Blog::where('category', 'খাদ্যের গুনাগুণ')->get();
        $blog_cats_2 = Blog::where('category', 'হেলথ টিপস')->get();
        $blog_cats_3 = Blog::where('category', 'রেসিপি')->get();
        $blog_cats_4 = Blog::where('category', 'কোরবানি')->get();
        return view('blog.all_blogs')->with('blogs', $blogs)
                                    ->with('blog_cats_1', $blog_cats_1)
                                    ->with('blog_cats_2', $blog_cats_2)
                                    ->with('blog_cats_3', $blog_cats_3)
                                    ->with('blog_cats_4', $blog_cats_4);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create_new_blog');
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
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'img_url' => 'required',
            'category' => 'required'

        ]);

        $blog = new Blog;

        if ($request->hasFile('img_url')) {
            $avatar = $request->file('img_url');
            $filename = '/images/blogs/' . $request->file('img_url')->getClientOriginalName();
            //$filename = '/images/products/' . '.' . $avatar->getClientOriginalExtension();
            //Image::make($avatar)->resize(300, 200)->save(public_path('images/products/' . $filename));

            $blog->author = $request->input('author');
            $blog->title = $request->input('title');
            $blog->img_url      = $filename;
            $blog->description = $request->input('description');
            $blog->category = $request->input('category');
            

            
            $blog->save();

            return redirect('/home')->with('status', 'Blog Created Successfully!');

        }
        else{
            return redirect('/home')->with('status', 'Error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = Blog::find($id);
        return view('blog.show_blog')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
