<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use App\WorkingHours;
use Illuminate\Support\Facades\DB;
class workHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $worker = Worker::all();
        return view('workingHours.addWorkingHours',compact('worker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workerHour = new WorkingHours;
        $workerHour->date = $request->date2;
        $workerHour->primaryTime = $request->workingtime;
        $workerHour->overTime = $request->overtime;
        $workerHour->workerId = $request->worker;
        $workerHour->save();
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
    public function special(){
        $worker = Worker::all();
        return view('workingHours.specialWorkerHours',compact('worker'));
    }
    public function specialpost(Request $request){
        $worker = Worker::find($request->worker);
        $hours = DB::select("SELECT * FROM `working_hours` WHERE `workerId` = $worker->id order by date DESC");
        return view('workingHours.showSpecialHours',compact('worker','hours'));
    }
}
