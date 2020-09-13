<?php

namespace App\Http\Controllers\HouseOwner;

use App\House;
use App\Migration;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResidentController extends Controller
{
    //

    public function index()
    {
        $house = House::where('owner_id', Auth::id())->first();
        $records = Migration::with('house', 'resident')->where('house_id', $house->id)->orderBy('created_at', 'DESC')->get();
        return view('houseOwner.resident', compact('records'));
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

        $request->validate([

            'name' => 'required',
            'email' => 'required|string| email|max:255|unique:users',
            'phone' => 'required',
        ]);

        $user = new  User();
        $user->name = $request->name;
        $user->email = $request->email;
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
        $user->present_area = $request->present_area;
        $user->floor_number = $request->floor_number;
        $user->apartmant_number = $request->apartmant_number;
        $user->nid = $request->nid;
        $user->passport = $request->passport;
        $user->role = 'resident';
        $user->save();

        $user->assignRole('resident');
        $house = House::where('owner_id', Auth::id())->first();

        $migration = new Migration();
        $migration->house_id = $house->id;
        $migration->resident_id = $user->id;
        $migration->status = 'active';
        $migration->save();

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


        $request->validate([

            'name' => 'required',
            'email' => 'required|string| email|max:255|unique:users,email,' . $id,
            'phone' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
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
        $user->present_area = $request->present_area;
        $user->floor_number = $request->floor_number;
        $user->apartmant_number = $request->apartmant_number;
        $user->nid = $request->nid;
        $user->passport = $request->passport;
        $user->role = 'resident';
        $user->status = 'pending';
        $user->save();


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
