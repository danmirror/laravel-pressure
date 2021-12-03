<?php

namespace App\Http\Controllers;
use App\data;
use App\setPoint;
use App\Events\eventTrigger;
use Illuminate\Http\Request;

class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function event()
    // {
    //     event( new eventTrigger());
    // }
    // public function ov()
    // {
    //     return view('indexoverlay');
    // }
    public function index(Request $request)
    {
        // $time = date("d");
        $time = strtotime(date("Y-m-d H:i:s"));
        $times = date("dmY", $time+7*60*60);


        // dd($times);
        $cari = $request->cari;
        $cari_time =  $cari;
        
        $parameter = setPoint::all()->first();

        if($cari == null){
            $data = data::where('hari','like',"%".$times."%")->get();
        }
        else{
            $data = data::where('jam','like',"%".$cari_time."%")->get();
        }
  
        // dd($data);
        return view('index',[
            'data' => $data,
            'parameter' => $parameter]);
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
            'data1'=>'required',
            'data2'=>'required',
            'data3'=>'required',
            'data4'=>'required',
        ]);
        $time = strtotime(date("Y-m-d H:i:s"));
        $jam = date("HdmY", $time+7*60*60);
        $hari = date("dmY", $time+7*60*60);
        // dd($times);

        $data = new data([
            'data1' => $request['data1'],
            'data2' => $request['data2'],
            'data3' => $request['data3'],
            'data4' => $request['data4'],
            'jam' => $jam,
            'hari' => $hari,
        ]);

        if ($data->save()){
            $message = [
                'msg'=>'sending done',
            ];
            return response()->json($message,201);
        }
        $response = [
            'msg' => 'error upload',
        ];
        return response()->json($response,404);
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
}
