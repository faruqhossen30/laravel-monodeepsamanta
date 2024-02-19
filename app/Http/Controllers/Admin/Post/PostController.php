<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post\Post;
use App\Models\Post\PostCategory;
use App\Models\Post\PostSoftware;
use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $softwares = Software::get();
        return view('admin.post.create', compact('categories','softwares'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'project_description' => 'required',
            'description' => 'required',
        ]);

        // return $request->all();

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/post/' . $thumbnailname);
        }
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'short_description' => $request->short_description,
            'project_description' => $request->project_description,
            'description' => $request->description,
            'thumbnail' => $thumbnailname,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword
        ];

        $post = Post::create($data);

        if(!empty($request->category_ids)){
             foreach($request->category_ids as $id){
                PostCategory::create([
                    'post_id'=>$post->id,
                    'category_id'=>$id
                ]);
             }
        }

        if(!empty($request->software_ids)){
             foreach($request->software_ids as $id){
                PostSoftware::create([
                    'post_id'=>$post->id,
                    'software_id'=>$id
                ]);
             }
        }

        Session::flash('create');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $post = Post::firstWhere('id', $id);
        // return $post;
        return view('admin.post.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        // return $request->all();


        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword
        ];

        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/post/' . $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }

        $porfolio = Post::firstWhere('id', $id)->update($data);

        Session::flash('create');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::firstWhere('id', $id)->delete();
        Session::flash('destroy');
        return redirect()->route('post.index');
    }
}
