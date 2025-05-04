<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        $client = $request->get('authenticated_client');
        return response()->json($client->product()->get());
    }
}