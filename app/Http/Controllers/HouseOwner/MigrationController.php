<?php

namespace App\Http\Controllers\HouseOwner;

use App\House;
use App\Migration;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();
        $residents = User::where('role','resident')->get();
        $records = Migration::with('house','resident')->orderBy('created_at','DESC')->get();

        return view('houseOwner.migration',compact('houses','residents','records'));
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
        $this->validate($request,[
            'resident_id'=>'required',
            'house_id'=>'required',
            'flat_details'=>'required',
        ]);

        Migration::where('resident_id',$request->resident_id)->update([
            'status'=>'inactive'
        ]);

        $migration = new Migration();
        $migration->resident_id = $request->resident_id;
        $migration->house_id = $request->house_id;
        $migration->flat_info = $request->flat_details;
        $migration->description = $request->comment;
        $migration->status = 'active';
        $migration->save();

        return back()->withSuccess('Resident Migrated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
