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
        if (!empty($request->a3)) {
            $data += ['a3' => $request->a3];
        }
        if (!empty($request->a4)) {
            $data += ['a4' => $request->a4];
        }
        if (!empty($request->b1)) {
            $data += ['b1' => $request->b1];
        }
        if (!empty($request->b2)) {
            $data += ['b2' => $request->b2];
        }
        if (!empty($request->b3)) {
            $data += ['b3' => $request->b3];
        }
        if (!empty($request->b4)) {
            $data += ['b4' => $request->b4];
        }
        if (!empty($request->c1)) {
            $data += ['c1' => $request->c1];
        }
        if (!empty($request->c2)) {
            $data += ['c2' => $request->c2];
        }
        if (!empty($request->c3)) {
            $data += ['c3' => $request->c3];
        }
        if (!empty($request->c4)) {
            $data += ['c4' => $request->c4];
        }
        if (!empty($request->d1)) {
            $data += ['d1' => $request->d1];
        }
        if (!empty($request->d2)) {
            $data += ['d2' => $request->d2];
        }
        if (!empty($request->d3)) {
            $data += ['d3' => $request->d3];
        }
        if (!empty($request->d4)) {
            $data += ['d4' => $request->d4];
        }
        if (!empty($request->e1)) {
            $data += ['e1' => $request->e1];
        }
        if (!empty($request->e2)) {
            $data += ['e2' => $request->e2];
        }
        if (!empty($request->e3)) {
            $data += ['e3' => $request->e3];
        }
        if (!empty($request->e4)) {
            $data += ['e4' => $request->e4];
        }
        if (!empty($request->f1)) {
            $data += ['f1' => $request->f1];
        }
        if (!empty($request->f2)) {
            $data += ['f2' => $request->f2];
        }
        if (!empty($request->f3)) {
            $data += ['f3' => $request->f3];
        }
        if (!empty($request->f4)) {
            $data += ['f4' => $request->f4];
        }


        $where = ['type' => $request->type, 'date' => Carbon::now()->format('Y-m-d')];
        // $lottery = LotteryDetail::where($where)->first();
        // if (!empty($lottery)) {
        //     $lottery->update($data);
        // } else {
        //     $data += $where;
            LotteryDetail::create($data)->id;
        //}

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
