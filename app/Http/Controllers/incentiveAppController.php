<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class incentiveAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('manageIncentive.viewApplicationDetails');
    }

    public function appStatus()
    {
        //
        return view('manageIncentive.viewApplicationStatus');
    }

    // Jaip Staff @ Admin
    public function showPendingStatus()
    {
        //
        return view('manageIncentive.pendingApplication');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // display form applyIncentive
        return view('manageIncentive.applyIncentive');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
