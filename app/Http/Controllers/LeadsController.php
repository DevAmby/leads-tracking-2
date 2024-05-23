<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    //
    public function getLeads(Request $request)
    {
        $selectedDate = $request->input('date');

        $selectedDate = date('Y-m-d', strtotime($selectedDate));

        $leads = Leads::whereDate('created_at', $selectedDate)->get();

        if ($leads->isEmpty()) {
            return response()->json(['message' => 'No leads generated today']);
        }

        return response()->json($leads);
    }
}
