<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function show(){
        return response()->json([
            'success'   => true,
            'message'   => 'Data Laundry',
            'data'      => Laundry::get()
        ], 200);
    }

    public function create(Request $request){
        Laundry::create([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'telepon'   => $request->telepon
        ]);
        return response()->json([
            'success'   => true,
            'message'   => 'Data berhasil disimpan'
        ], 200);
    }

    public function delete(Request $request){
        Laundry::where(['id' => $request->id])->delete();
        return response()->json([
            'success'   => true,
            'message'   => 'Data berhasil dihapus'
        ], 200);
    }

    public function update(Request $request){
        // echo json_encode($request->all()); die();
        Laundry::where(['id' => $request->id])->update([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'telepon'   => $request->telepon
        ]);
        return response()->json([
            'success'   => true,
            'message'   => 'Data berhasil diubah'
        ], 200);
    }
}
