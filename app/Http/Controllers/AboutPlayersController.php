<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\AboutPlayers;
use Image;
use Illuminate\Http\Request;

class AboutPlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        return view('backend.players.index', [
            'players' => AboutPlayers::latest()->get(),
        ]);
    }

    public function post(Request $request)
    {
       $id =  AboutPlayers::insertGetId($request->except('_token') + ['created_at' => Carbon::now(),]);
        
        $uploaded_image = $request->file('about_players_image');
        $filename = $id. '.' .$uploaded_image->extension('about_players_image');
        $location = public_path('uploads/about_players/'. $filename);
        Image::make($uploaded_image)->save($location); 
        
        AboutPlayers::findOrFail($id)->update([
            'about_players_image' => $filename,
        ]);

        return back();


    }
}
