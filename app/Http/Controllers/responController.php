<?php

namespace App\Http\Controllers;
use App\respon;
use Illuminate\Http\Request;

class responController extends Controller
{
    public function store(Request $request)
    {
        // dd("ddd");
        // $this->validate($request,[
        //     'data1'=>'required',
        //     'data2'=>'required',
        //     'data3'=>'required',
        //     'data4'=>'required',
        // ]);

        $parameter = respon::all()->first();
        if($parameter == null){
            if($request['pressure_control']==null)
                $request['pressure_control'] ="0";
            if($request['volume_control']==null)
                $request['volume_control'] ="0";
            if($request['boiler_control']==null)
                $request['boiler_control'] ="0";
            if($request['condensor_control']==null)
                $request['condensor_control'] ="0";
            

            $data = new respon([
                'btn1' => $request['pressure_control'],
                'btn2' => $request['volume_control'],
                'btn3' => $request['boiler_control'],
                'btn4' => $request['condensor_control'],
                
            ]);
            if ($data->save()){
                return redirect('/setPoint')->with('alert-success-control','Inisialisasi data berhasil');
            }
        }
        else{
            $parameter->btn1 = $request['pressure_control'];
            $parameter->btn2 = $request['volume_control'];
            $parameter->btn3 = $request['boiler_control'];
            $parameter->btn4 = $request['condensor_control'];
           
            if ($parameter->save()){
                return redirect('/setPoint')->with('alert-success-control','Data berhasil disetting');
            }
        }
    }
}
