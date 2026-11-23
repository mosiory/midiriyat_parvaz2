<?php

namespace App\Http\Controllers;

use App\Http\Requests\pilotplanevalidation;
use App\Http\Resources\resourceuipilot;
use App\Models\airplane;
use App\Models\pilot;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function store(pilotplanevalidation $request){
        $pilot = pilot::create($request->all());
        return response()->json(['message'=>'خلبان با موفقیت افزوده شد','data'=>$pilot]);
    }

    public function show(pilot $pilot){
        return response()->json(['message'=>'اطلاعات خلبان با موفقیت ارسال شد','data'=>new resourceuipilot($pilot)]);
    }

    public function update(Request $request, pilot $pilot){
        $pilot->update($request->all());
        $pilot = pilot::find($pilot->id);
        return response()->json(['message:تغییر شما اعمال شد','data'=>$pilot]);
    }


    public function delete (pilot $pilot){
        $pilot->delete();
        return response()->json(['message'=>'هواپیما با موفقیت حذف شد','data'=>$pilot]);
    }

    public function token(pilot $pilot)
    {
        $pilotToken = $pilot->createToken('User | Api');
        return response()->json(['message' => 'کاربر با موفقیت ثبت شد',
            'token' => $pilotToken->plainTextToken  ,$pilot]);
    }






}
