<?php

namespace App\Http\Controllers;

use App\departement;
use App\job_offer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{

    function __construct()
    {
        //$this->middleware->auth();
    }


    function create()
    {
        $departmentList = departement::all();

        return view('job.create', compact('departmentList'));
    }

    function store(Request $request)
    {
        /*
         * Validate data
         * Consolidate
         * Store
         */

        $validatedData = $request->validate([
            'jobTitle' => 'required',
            'publisDate' => 'required',
            'endDate' => 'required',
            'department' => 'required'
        ]);

        auth()->user()->publish(new job_offer($validatedData));
    }
}
