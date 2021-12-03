<?php

namespace App\Http\Controllers;
use App\setPoint;
use Illuminate\Http\Request;

class setPointController extends Controller
{
    public function index()
    {
        $parameter = setPoint::all()->first();
        return view('setPoint',[
            'parameter' => $parameter,
        ]);
    }

    public function store(Request $request)
    {
        // dd("ddd");
        // $this->validate($request,[
        //     'data1'=>'required',
        //     'data2'=>'required',
        //     'data3'=>'required',
        //     'data4'=>'required',
        // ]);

        $parameter = setPoint::all()->first();
        if($parameter == null){
            if($request['min_pres']==null)
                $request['min_pres'] ="0";
            if($request['max_pres']==null)
                $request['max_pres'] ="0";
            if($request['min_volume']==null)
                $request['min_volume'] ="0";
            if($request['max_volume']==null)
                $request['max_volume'] ="0";
            if($request['min_boiler']==null)
                $request['min_boiler'] ="0";
            if($request['max_boiler']==null)
                $request['max_boiler'] ="0";
            if($request['min_condensor']==null)
                $request['min_condensor'] ="0";
            if($request['max_condensor']==null)
                $request['max_condensor'] ="0";

            $data = new setPoint([
                'min_pressure' => $request['min_pres'],
                'max_pressure' => $request['max_pres'],
                'min_volume' => $request['min_volume'],
                'max_volume' => $request['max_volume'],
                'min_boiler' => $request['min_boiler'],
                'max_boiler' => $request['max_boiler'],
                'min_condensor' => $request['min_condensor'],
                'max_condensor' => $request['max_condensor'],
            ]);
            if ($data->save()){
                return redirect('/setPoint')->with('alert-success','Inisialisasi data berhasil');
            }
        }
        else{
            $parameter->min_pressure = $request['min_pres'];
            $parameter->max_pressure = $request['max_pres'];
            $parameter->min_volume = $request['min_volume'];
            $parameter->max_volume = $request['max_volume'];
            $parameter->min_boiler = $request['min_boiler'];
            $parameter->max_boiler = $request['max_boiler'];
            $parameter->min_condensor = $request['min_condensor'];
            $parameter->max_condensor = $request['max_condensor'];
            if ($parameter->save()){
                return redirect('/setPoint')->with('alert-success','Data berhasil disetting');
            }
        }
    }
}
