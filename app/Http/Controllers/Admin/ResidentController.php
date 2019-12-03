<?php

namespace App\Http\Controllers\Admin;

use App\House;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResidentController extends Controller
{
    //

    public function index()
    {
        //

        $records = User::where('role','resident')->orderBy('created_at','DESC')->get();
        return view('dmp.resident',compact('records'));
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


        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user = new  User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->father = $request->father;
        $user->mother = $request->mother;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->occupation_type = $request->occupation_type;
        $user->occupation_institution = $request->occupation_institution;
        $user->family_member = $request->family_member;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->dob = $request->dob;
        $user->region = $request->region;
        $user->permanent_area = $request->permanent_area;
        $user->nid = $request->nid;
        $user->passport = $request->passport;
        $user->role = 'resident';
        $user->save();

        $user->assignRole('house_owner');

        $house = new House();
        $house->owner_id = $user->id;
        $house->name = $request->House_Name;
        $house->house_number = $request->house_number;
        $house->area = $request->area;
        $house->co_area = $request->co_area;
        $house->section = $request->section;
        $house->gate_number = $request->gate_number;
        $house->road_number = $request->road_number;
        $house->flat_qty = $request->flat_qty;
        $house->description = $request->description;
        $house->save();

        return back()->withSuccess('Successfully Inserted');
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



        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->father = $request->father;
        $user->mother = $request->mother;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->occupation_type = $request->occupation_type;
        $user->occupation_institution = $request->occupation_institution;
        $user->family_member = $request->family_member;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->dob = $request->dob;
        $user->region = $request->region;
        $user->permanent_area = $request->permanent_area;
        $user->nid = $request->nid;
        $user->passport = $request->passport;
        $user->role = 'resident';
        $user->save();

        $user->assignRole('house_owner');

        $house = new House();
        $house->owner_id = $user->id;
        $house->name = $request->House_Name;
        $house->house_number = $request->house_number;
        $house->area = $request->area;
        $house->co_area = $request->co_area;
        $house->section = $request->section;
        $house->gate_number = $request->gate_number;
        $house->road_number = $request->road_number;
        $house->flat_qty = $request->flat_qty;
        $house->description = $request->description;
        $house->save();

        return back()->withSuccess('Successfully Modified');
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


        $user = User::destroy($id);
        return back()->withSuccess('Successfully Deleted');
    }
}
