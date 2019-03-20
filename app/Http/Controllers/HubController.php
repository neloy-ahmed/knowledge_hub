<?php

namespace App\Http\Controllers;

use App\Hub;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hubs = Hub::all();
        return view('hub.index', compact('hubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_hub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'hub_address'=>'required',
        'hub_area'=>'required',
        'map_link'=>'required',
        'close_days'=>'required',
        'start_time'=>'required',
        'end_time'=>'required'

      ]);


      $request['close_days'] = implode(',', $request['close_days']);


      Hub::create(['hub_address'=>$request->hub_address,
      'hub_area'=>$request->hub_area,
      'map_link'=>$request->map_link,
      'off_day'=>$request->close_days,
      'start_time'=>Carbon::parse($request->start_time),
      'end_time'=>Carbon::parse($request->end_time),
      'user_id'=>1,
      'status'=>1
    ]);

      return redirect('/hub');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function show(Hub $hub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function edit(Hub $hub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hub $hub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hub  $hub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hub $hub)
    {
        //
    }
}
