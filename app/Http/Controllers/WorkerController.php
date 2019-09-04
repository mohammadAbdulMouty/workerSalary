<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use Illuminate\Support\Facades\DB;
class WorkerController extends Controller
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
        return view('worker.addworker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $worker = new Worker;
        $worker->name= $request->name;
        $worker->startWork = $request->startwork;
        $worker->save();
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
    public function spcialWorker(){
        $worker = Worker::all();
        return view('statistics.special',compact('worker'));
    }
    public function AjaxspcialWorker(Request $request){
        $workerid = $request->user_id;
        $query = "SELECT sum(primaryTime)as primaryTime ,sum(overTime) as overTime , sum(overTime)*1.5 as overcalculate  FROM `working_hours` WHERE workerId = $workerid";
        $users = DB::select($query);
        $queryprice= "SELECT * FROM `price_of_hours` WHERE workerId =  $workerid";
        $priceofhour = DB::select($queryprice);
        $queryDept = "SELECT sum(Amount) as amount FROM `debts` WHERE workerId =  $workerid";
        $depts = DB::select($queryDept);
        $amount = "SELECT sum(Amount) as amount FROM `payments` WHERE `workerId` = $workerid";
        $amountsum = DB::select($amount);
        return ['worker'=>$users,'priceofhour'=>$priceofhour,'depts'=>$depts,'payments'=>$amountsum];

    
        
    }
}
