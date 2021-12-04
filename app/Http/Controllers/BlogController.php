<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\View;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.indexcontroller');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.createblog', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $findcatergory = Category::where('slug', $request->name)->first();
        if (is_null($findcatergory)) {
            $request->validate([
                'name' => 'required|unique:categories'
            ]);
            $created = Category::create([
                'name' => $request->name,
                'slug' => Str::of($request->name)->slug('-')
            ]);
            $findcatergory = Category::where('slug', $created->slug)->first();
        }

        $request->validate([
            'title' => 'required|max:100',
            'text' => 'required'
        ]);
        $slug = Str::of($request->title)->slug('-') . rand();
        Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'text' => $request->text,
            'category_id' => $findcatergory->id,
            'user_id' => Auth::user()->id,
            'publish' => '1'
        ]);

        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug,Request $request)
    {
        $findblog = Blog::where('slug', $slug)->first();
        $findview = View::where('ip_user',$request->ip())->where('blog_id',$findblog->id)->first();
        if(is_null($findview)){
            View::create([
                'blog_id' => $findblog->id,
                'ip_user' => $request->ip(),
            ]);
        }
        return view('indexpage.blog',[
            'blog' => $findblog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $findblog = blog::where('slug', $slug)->first();
        return view('blog.editblog', [
            'blog' => $findblog,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $findcatergory = Category::where('slug', $request->name)->first();
        if (is_null($findcatergory)) {
            $request->validate([
                'name' => 'required|unique:categories'
            ]);
            $created = Category::create([
                'name' => $request->name,
                'slug' => Str::of($request->name)->slug('-')
            ]);
            $findcatergory = Category::where('slug', $created->slug)->first();
        }
        $request->validate([
            'title' => 'required|max:100',
            'text' => 'required'
        ]);
        $slug = Str::of($request->title)->slug('-') . rand();
        $blog->update([
            'title' => $request->title,
            'slug' => $slug,
            'text' => $request->text,
            'category_id' => $findcatergory->id,
        ]);

        return redirect('/blogs');
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
