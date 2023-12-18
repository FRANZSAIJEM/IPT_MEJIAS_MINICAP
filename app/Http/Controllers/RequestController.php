<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as PluginRequest; // Use an alias to avoid naming conflict

class RequestController extends Controller
{
    public function storeRequest(Request $request)
    {
        // Validate the form data if needed

        // Create a new request record in the database
        PluginRequest::create([
            'user_id' => $request->input('user_id'),
            'plugin_id' => $request->input('plugin_id'),
        ]);

        // You can add a success message or redirect the user
        return redirect()->back()->with('success', 'Plugin requested successfully!');
    }

    public function index()
    {
        $requests = PluginRequest::with(['user', 'plugin'])->get();

        return view('requests', compact('requests'));
    }
}
