<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use PDF;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('service.index', compact('services'));
    }
    public function show($id){
        $sC = Service::where('user_id','=',$id)->count(); 
        $detail = Service::where('id','=', $id)->first();
        return view('detail', compact('detail', 'sC'));
    }
    public function cetak(){
        $services = Service::all();

        $pdf = PDF::loadview('service.cetak_service',['services'=>$services])->setOptions(['defaultFont' => 'sans-serif']);
	    // return $pdf->download('laporan-user-pdf.pdf');
	    return $pdf->stream();
    }
}
