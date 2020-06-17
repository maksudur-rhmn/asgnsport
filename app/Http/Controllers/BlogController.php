<?php

namespace App\Http\Controllers;

use Image;
use App\Blog;
use App\Mail\ReadOurNewBlog;
use Carbon\Carbon;
use App\Subscriber;
use Mail;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
 
    public function index()
    {
        return view('backend.blogs.index',[
            'blog' => Blog::latest()->paginate(6),
        ]);
    }
 
    public function store(Request $request)
    {
        $id = Blog::insertGetId($request->except('_token') + ['created_at' => Carbon::now()]);
 
        $uploaded = $request->file('blog_image1');
        $filename = $id. '.' .$uploaded->getClientOriginalExtension('blog_image1');
        $location = public_path('uploads/blogs/' . $filename);
        Image::make($uploaded)->save($location);
 
        Blog::findOrFail($id)->update([
         'blog_image1' => $filename,
        ]);

        $emails = Subscriber::all();
        
        
        foreach($emails as $email)
        {
            Mail::to($email->email)->send(new ReadOurNewBlog($id));
        }

        return back();
 
    }
}
