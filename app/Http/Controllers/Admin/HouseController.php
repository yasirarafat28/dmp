<?php

namespace App\Http\Controllers\Admin;

use App\Area;
use App\AreaSection;
use App\Coarea;
use App\House;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $areas = Area::where('status', 'active')->orderBy('created_at', 'DESC')->get();
        $sections = AreaSection::orderBy('created_at', 'DESC')->get();
        $coareas = Coarea::orderBy('created_at', 'DESC')->get();
        $records = House::with('owner', 'area_details')->where(function ($q) use ($request) {
            if (isset($request->area_id) && $request->area_id) {
                $q->where('area', $request->area_id);
            }
            if (isset($request->section_id) && $request->section_id) {
                $q->where('section', $request->section_id);
            }
            if (isset($request->coarea_id) && $request->coarea_id) {
                $q->where('co_area', $request->coarea_id);
            }
        })->orderBy('created_at', 'DESC')->get();
        return view('dmp.house', compact('records', 'areas', 'sections', 'coareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::where('status', 'active')->orderBy('created_at', 'DESC')->get();
        return view('dmp.house-create', compact('areas'));
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

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
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
        $user->nid = $request->nid;
        $user->passport = $request->passport;
        $user->role = 'house_owner';
        $user->save();

        $user->assignRole('house_owner');

        $house = new House();
        $house->owner_id = $user->id;
        $house->name = $request->House_Name;
        $house->house_number = $request->house_number;
        $house->area = $request->area_id;
        $house->section = $request->section_id;
        $house->co_area = $request->coarea_id;
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



        $house = House::find($id);
        $user = User::find($house->owner_id);
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
        $user->present_area = $request->present_area;
        $user->nid = $request->nid;
        $user->passport = $request->passport;
        $user->role = 'house_owner';
        $user->save();

        //$house = new House();
        $house->owner_id = $user->id;
        $house->name = $request->House_Name;
        $house->house_number = $request->house_number;
        $house->area = $request->area_id;
        $house->section = $request->section_id;
        $house->co_area = $request->coarea_id;
        $house->gate_number = $request->gate_number;
        $house->road_number = $request->road_number;
        $house->flat_qty = $request->flat_qty;
        $house->description = $request->description;
        $house->long = $request->long;
        $house->lat = $request->lat;
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
        $user = House::destroy($id);
        return back()->withSuccess('Successfully Deleted');
    }
}
