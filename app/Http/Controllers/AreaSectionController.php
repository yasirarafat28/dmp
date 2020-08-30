<?php

namespace App\Http\Controllers;

use App\Area;
use App\AreaSection;
use Illuminate\Http\Request;

class AreaSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::where('status','active')->orderBy('created_at','DESC')->get();
        $records = AreaSection::orderBy('created_at','DESC')->get();
        return view('dmp.sections',compact('records','areas'));
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
            'name'=>'required',
            'area_id'=>'required'
        ]);

        $area = new AreaSection();
        $area->area_id = $request->area_id;
        $area->name = $request->name;
        $area->save();

        return back()->withSuccess('Section added successfully!');
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

        $this->validate($request,[
            'name'=>'required',
            'area_id'=>'required'
        ]);

        $area = AreaSection::find($id);
        $area->area_id = $request->area_id;
        $area->name = $request->name;
        $area->save();

        return back()->withSuccess('Section added successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = AreaSection::destroy($id);

        return back()->withSuccess('Section added successfully!');
    }
}
