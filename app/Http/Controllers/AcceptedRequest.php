<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcceptedRequest as Accepted;

class AcceptedRequest extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $acceptedRequests = Accepted::where('user_id', $user->id)->get();

        return view('acceptedRequest', compact('acceptedRequests'));
    }
}
