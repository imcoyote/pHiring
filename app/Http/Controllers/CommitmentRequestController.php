<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitmentRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('hiring.hiring_request_panel');
    }
}
