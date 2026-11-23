<?php

namespace App\Http\Controllers;

use App\Http\Requests\airplanevalidation;
use App\Http\Resources\resourceui;
use App\Models\airplane;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
public function store(airplanevalidation $request){
    $airplane = airplane::create($request->all());
    return response()->json(['message'=>'هواپیما ایجاد شد','data'=>$airplane]);
}
public function show(airplane $airplane){
    return response()->json(['message'=>'اطلاعات هواپیما ارسال شد','data'=>new resourceui($airplane)]);
}
public function update(Request $request, airplane $airplane){
    $airplane->update($request->all());
    $airplane = airplane::find($airplane->id);
    return response()->json(['message:تغییر شما اعمال شد','data'=>$airplane]);
}
public function delete (airplane $airplane){
    $airplane->delete();
    return response()->json(['message'=>'هواپیما با موفقیت حذف شد','data'=>$airplane]);
}


}
