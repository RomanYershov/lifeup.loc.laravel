<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OneMonthStat;
use Illuminate\Support\Facades\Auth;
use App\DiaryHelper;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->ajax()){
           $onemonthstat=OneMonthStat::with('user')
               ->where('user_id' ,Auth::user()->id)->get()
               ->where('date',$request->date)->first();
           if(!isset($onemonthstat)) return view('diary.noData');
           return view('diary.statistic')->with(compact('onemonthstat'));
       }
       $onemonthstat=OneMonthStat::with('user')->where('user_id' ,Auth::user()->id)->first();

       return view('diary.table')->with(compact("onemonthstat"));
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
    public function update(Request $request)
    {
        if($request->ajax()){
          $updatedStat=OneMonthStat::where('id', $request->stat_id)->first();
          $updatedStat->statistics=DiaryHelper::getStatByString($request->inp);
          $updatedStat->save();
          return "ok";
        }
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
