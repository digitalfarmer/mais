<?php

namespace mais\Http\Controllers;

use mais\CallPlanModel;
use Calendar;
use Illuminate\Http\Request;

class ClientCallPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = [];

        $data = CallPlanModel::all();
 
        if($data->count()){
 
           foreach ($data as $key => $value) {
 
             $events[] = Calendar::event(
               
                //$value->customer_name,
                 $value->customer_code,
                 true,
                 new \DateTime($value->call_plan_date),
                 
                 new \DateTime($value->call_plan_date.' +1 day')
 
             );
 
           }
 
        }
 
       $calendar = Calendar::addEvents($events); 
 
       return view('client.callplan', compact('calendar'));
       // return view('client.callplan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
