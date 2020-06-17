<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Match_result;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MatchResultController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }

   public function index()
   {
       return view('backend.match_result.index', [
           'match_results' => Match_result::latest()->get(),
       ]);
   }

   public function store(Request $request)
   {
       $match_id = Match_result::insertGetId($request->except('_token') + ['created_at' => Carbon::now(),]);
       $uploaded_file_home = $request->file('home_team_logo');
       $filename_home = str_replace(' ', '', $request->home_team_name). '.' .$uploaded_file_home->extension('home_team_logo');
       $location_home = public_path('uploads/logos/'. $filename_home);
       Image::make($uploaded_file_home)->resize(150, 164)->save($location_home); 

       $uploaded_file_away = $request->file('away_team_logo');
       $filename_away = str_replace(' ', '', $request->away_team_name). '.' .$uploaded_file_home->extension('away_team_logo');
       $location_away = public_path('uploads/logos/'. $filename_away);
       Image::make($uploaded_file_away)->resize(150, 164)->save($location_away);

       Match_result::findOrFail($match_id)->update([
        'home_team_logo' => $filename_home,
        'away_team_logo' => $filename_away,
       ]);

       return back()->withSuccess('Result Added');
   }

 // END  
}
