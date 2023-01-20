<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LotteryDetail;
use Carbon\Carbon;

class LotteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lottery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $data = [];
        if (!empty($request->a1)) {
            $data += ['a1' => $request->a1];
        }        
        if (!empty($request->a2)) {
            $data += ['a2' => $request->a2];
        }      


        $where = ['type' => $request->type, 'date' => Carbon::now()->format('Y-m-d')];
         $lottery = LotteryDetail::where($where)->first();
         if (!empty($lottery)) {
             $lottery->update($data);
         } else {
             $data += $where;
            LotteryDetail::create($data)->id;
        }

        return response()->json(['message' => 'Lottery details saved successfully!'], 200);
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

    public function results()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $result = LotteryDetail::where('date', $currentDate)->get();
        return response()->json(['msg'=>'Lottery result fetched successfully','data' => $result],200);
    }
}
