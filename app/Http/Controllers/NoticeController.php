<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $records = Notice::orderBy('created_at','DESC')->get();

        return view('dmp.notice',compact('records'));
    }
   public function indexHouse()
    {
        //

        $records = Notice::orderBy('created_at','DESC')->get();

        return view('houseOwner.notice',compact('records'));
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

        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->status = 'active';
        $notice->save();
        return back()->withSuccess('Successfully Inserted!');
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


        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->status = 'active';
        $notice->save();
        return back()->withSuccess('Successfully Modified!');
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

        $notice = Notice::destroy($id);

        return back()->withSuccess('Successfully Deleted!');
    }
}
