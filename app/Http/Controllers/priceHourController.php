<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use App\PriceOfHour;
class priceHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $priceOfHour = PriceOfHour::all();
        return view('pricehour.all',compact('priceOfHour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $worker = Worker::all();
        return view('pricehour.pricehouradd',compact('worker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $PriceOfHour = new PriceOfHour();
        $PriceOfHour->workerId = $request->worker; 
        $PriceOfHour->price = $request->hourprice; 
        $PriceOfHour->startDate = $request->startdate; 
        $PriceOfHour->endDate = $request->enddate;
        $PriceOfHour->save();
        return back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
