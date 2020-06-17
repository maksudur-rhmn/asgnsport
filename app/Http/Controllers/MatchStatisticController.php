<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Match_statistic;
use Illuminate\Http\Request;
use Image;

class MatchStatisticController extends Controller
{
    public function index()
    {
        return view('backend.match_statistics.index',[
            'match_statistics' => Match_statistic::all(),
        ]);
    }

    public function store(Request $request)
    {
        $stat_id = Match_statistic::insertGetId($request->except('_token') + ['created_at' => Carbon::now()]);

        $uploaded_files = $request->file('home_team_logo');
        $filename = $stat_id. '-logohome.' .$uploaded_files->extension('home_team_logo');
        $location = public_path('uploads/match_statistics/'. $filename);
        Image::make($uploaded_files)->save($location);

        $uploaded_files1 = $request->file('away_team_logo');
        $filename1 = $stat_id. '-logoaway.' .$uploaded_files1->extension('away_team_logo');
        $location1 = public_path('uploads/match_statistics/'. $filename1);
        Image::make($uploaded_files1)->save($location1);

        $uploaded_files2 = $request->file('match_fixture');
        $filename2 = $stat_id. '-fixture.' .$uploaded_files2->extension('match_fixture');
        $location2 = public_path('uploads/match_statistics/'. $filename2);
        Image::make($uploaded_files2)->save($location2);

        $uploaded_files3 = $request->file('match_table');
        $filename3 = $stat_id. '-table.' .$uploaded_files3->extension('match_table');
        $location3 = public_path('uploads/match_statistics/'. $filename3);
        Image::make($uploaded_files3)->save($location3);

        Match_statistic::find($stat_id)->update([
            'home_team_logo' => $filename,
            'away_team_logo' => $filename1,
            'match_fixture' => $filename2,
            'match_table' => $filename3,
        ]);

        return back();

    }
}
