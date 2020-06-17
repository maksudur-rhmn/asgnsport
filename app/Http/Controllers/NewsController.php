<?php

namespace App\Http\Controllers;

use Mail;
use Image;
use App\News;
use Carbon\Carbon;
use App\Subscriber;
use App\Mail\ReadOurNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
       $this->middleware('verified');
   }

   public function index()
   {
       return view('backend.news.index',[
           'news' => News::latest()->paginate(6),
       ]);
   }

   public function store(Request $request)
   {
       $id = News::insertGetId($request->except('_token') + ['created_at' => Carbon::now(), 'news_dt' => 'hhaha']);

       $uploaded = $request->file('news_image1');
       $filename = $id. '.' .$uploaded->getClientOriginalExtension('news_image1');
       $location = public_path('uploads/news/' . $filename);
       Image::make($uploaded)->save($location);

       News::findOrFail($id)->update([
        'news_image1' => $filename,
       ]);
       
       $emails = Subscriber::all();
        
        
       foreach($emails as $email)
       {
           Mail::to($email->email)->send(new ReadOurNews($id));
       }

       return back();

   }
}
