<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LotteryDetail;
use App\Services\LotteryService;

use Carbon\Carbon;

class LotteryController extends Controller
{
   

     public function __construct(LotteryService $lotteryService)
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lottery = LotteryDetail::paginate();
        return view('lottery.view',compact('lottery'));
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
        if(!empty($result)){
            $response = [];
            $currentDatetime = Carbon::now()->format('Y-m-d H:i:s');

                foreach($result as $key => $value){
                    $result[$key]['published'] = false;
                    if($value['type'] == 8 && $currentDatetime > $value['date'].' 08:00:00' ){
                        $result[$key]['published'] = true;
                    } 
                    if($value['type'] == 10 && $currentDatetime > $value['date'].' 10:00:00' ){
                        $result[$key]['published'] = true;
                    } 
                    if($value['type'] == 1 && $currentDatetime > $value['date'].' 01:00:00' ){
                        $result[$key]['published'] = true;
                    } 
                    if($value['type'] == 3 && $currentDatetime > $value['date'].' 03:00:00' ){
                        $result[$key]['published'] = true;
                    } 
                    if($value['type'] == 5 && $currentDatetime > $value['date'].' 05:00:00' ){
                        $result[$key]['published'] = true;
                    } 
                    if($value['type'] == 7 && $currentDatetime > $value['date'].' 07:00:00' ){
                        $result[$key]['published'] = true;
                    } 

                }
        }

        //dd($result->toArray(),$currentDatetime);
        return response()->json(['msg'=>'Lottery result fetched successfully','data' => $result],200);
    }

    public function paginate(){

        return $this->lotteryService->paginate();
    }
}
