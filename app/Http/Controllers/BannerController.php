<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.banners.index', [
            'banners' => Banner::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $banner = Banner::create([
        'banner_name'  => $request->banner_name,
        'banner_image' => 'hudai.jpg',
        'created_at'   => Carbon::now(),
       ]); 

       $uploaded_file = $request->file('banner_image');
       $file_name = $banner->id. '.' .$uploaded_file->extension('banner_image');
       $location = public_path('uploads/banners/' . $file_name);
       Image::make($uploaded_file)->save($location);
       Banner::findOrFail($banner->id)->update([
        'banner_image' => $file_name,
       ]);
       return back()->withSuccess('Banner added');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($banner_id)
    {
        $banner = Banner::findOrFail($banner_id);
        if($banner->status == 0)
        {
            Banner::findOrFail($banner->id)->update([
                'status' => 1,
            ]);
            return back()->withSuccess('Banner Activated');
        }
        else 
        {
            Banner::findOrFail($banner->id)->update([
                'status' => 0,
            ]);
            return back()->withSuccess('Banner Deactivated');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update($banner_id)
    {
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
