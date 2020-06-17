<?php

namespace App\Http\Controllers;

use App\Blog;
use App\News;
use App\Video;
use App\Banner;
use App\AboutPlayers;
use App\LatestPlayer;
use Mail;
use App\Mail\VisitorQueries;
use App\Match_result;
use App\Match_statistic;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index()
   {
       return view('frontend.index',[
           'banners' => Banner::where('status', 0)->get(),
           'match_result' => Match_result::latest()->first(),
           'match_statistics' => Match_statistic::all(),
           'videos'           => Video::all(),
           'players'          => AboutPlayers::latest()->get(),
           'blogs'            => Blog::latest()->get(),
       ]);
   }

   public function about()
   {
       return view('frontend.about');
   }

   public function fixture()
   {
       return view('frontend.fixture',[
        'statistics' => Match_statistic::paginate(1),
       ]);

   }

   public function players()
   {
       return view('frontend.players', [
        'players'  => AboutPlayers::latest()->get(),
       ]);
   }

   public function playerDetails($player_id)
   {
       $details = AboutPlayers::findOrFail($player_id);
       return view('frontend.player_details',compact('details'));
   }

   public function scouts()
   {
       return view('frontend.scouts');
   }

   public function news()
   {
       return view('frontend.news',[
        'news' => News::latest()->paginate(6),
       ]);
   }

   public function single($news_id)
   {
       $news = News::findOrFail($news_id);
       return view('frontend.news_details', compact('news'));
   }

   public function blogs()
   {
       return view('frontend.blogs',[
        'blogs' => Blog::latest()->paginate(6),
       ]);
   }

   public function contact()
   {
       return view('frontend.contact');
   }

   public function blogsingle($blog_id)
   {
    $blogs = Blog::findOrFail($blog_id);
    return view('frontend.blog_details', compact('blogs'));
   }

   public function contactpost(Request $request)
   {
     $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required',
     ]);

     $name = $request->name;
     $email = $request->email;
     $phone = $request->phone;
     $message = $request->message;

     Mail::to('info@asgnsport.com')->send(new VisitorQueries($name, $email, $phone, $message));

     return back()->withSuccess('Message received successfully.We will get back to you as soon as possible');

   }
}
