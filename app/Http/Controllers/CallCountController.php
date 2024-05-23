<?php

namespace App\Http\Controllers;

use App\Models\CallCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CallCountController extends Controller
{
    //
    public function storeCallCounts(Request $request)
    {
        $callCount = new CallCount();
        $callCount->instagram = $request->instagram_call;
        $callCount->facebook = $request->facebook_call;
        $callCount->twitter = $request->twitter_call;
        $callCount->telegram = $request->telegram_call;
        $callCount->tiktok = $request->tiktok_call;
        $callCount->whatsapp = $request->whatsapp_call;
        $callCount->office = $request->office_call;
        $callCount->event = $request->event_call;
        $callCount->street = $request->street_call;
        $callCount->snapchat = $request->snapchat_call;
        $callCount->real_estate_agent = $request->real_estate_agent_call;
        $callCount->others = $request->others_call;
        $callCount->total_cold_calls = $request->total_cold_call;
        $callCount->save();

        return Redirect::back()->with('success', 'Data stored successfully');
    }


    public function getTotalCalls(Request $request)
    {
        $selectedDate = $request->input('date');

        $selectedDate = date('Y-m-d', strtotime($selectedDate));

        $totalCalls = CallCount::whereDate('created_at', $selectedDate)->first();

        if ($totalCalls) {
            $totalColdCalls = $totalCalls->total_cold_calls;
        } else {
            $totalColdCalls = 0;
        }

        return response()->json(['totalColdCalls' => $totalColdCalls]);
    }
}
