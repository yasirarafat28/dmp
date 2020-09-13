<?php

namespace App\Http\Controllers;

use App\Coarea;
use App\AreaSection;
use App\Area;
use Illuminate\Http\Request;

class CoareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::where('status', 'active')->orderBy('created_at', 'DESC')->get();
        $sections = AreaSection::orderBy('created_at', 'DESC')->get();
        $records =  Coarea::orderBy('created_at', 'DESC')->get();
        return view('dmp.coarea', compact('records', 'areas', 'sections'));
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
        $this->validate($request, [
            'name' => 'required',
            'area_id' => 'required',
            'section_id' => 'required'
        ]);

        $area = new Coarea();
        $area->area_id = $request->area_id;
        $area->section_id = $request->section_id;
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
        $this->validate($request, [
            'name' => 'required',
            'area_id' => 'required',
            'section_id' => 'required'
        ]);

        $area = Coarea::find($id);
        $area->area_id = $request->area_id;
        $area->section_id = $request->section_id;
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
        $area = Coarea::destroy($id);

        return back()->withSuccess('Section deleted successfully!');
    }



    public function getcoarea(Request $request)
    {

        $this->validate($request, [
            'area_id' => 'required'
        ]);

        return Coarea::where('area_id', $request->area_id)->where(function ($q) use ($request) {
            if (isset($request->section_id) && $request->section_id) {
                $q->where('section_id', $request->section_id);
            }
        })->get();
    }
}
