<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workouts = Workout::all();

        return inertia(
            'Workout/Index',
            [
                'workouts' => $workouts
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia(
            'Workout/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Workout::create(
            $request->validate([
                'exercise' => 'required',
                'muscle' => 'required',
                'datum' => 'required',
                'set' => 'required|integer|min:1|max:50',
                'weight_min' => 'required|integer|min:1|max:200',
                'weight_max' => 'required|integer|min:1|max:200',
            ])
        );

        return redirect()
            ->route('workouts.index')
            ->with('success', 'Workout was created successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout)
    {
        return inertia(
            'Workout/Show',
            [
                'workout' => $workout
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Workout $workout)
    {
        return inertia(
            'Workout/Edit',
            [
                'workout' => $workout
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workout $workout)
    {
        $workout->update(
            $request->validate([
                'exercise' => 'required',
                'muscle' => 'required',
                'datum' => 'required',
                'set' => 'required|integer|min:1|max:50',
                'weight_min' => 'required|integer|min:1|max:200',
                'weight_max' => 'required|integer|min:1|max:200',
            ])
        );

        return redirect()
            ->route('workouts.index')
            ->with('success', 'Workout was updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workout $workout)
    {
        $workout->delete();
        return redirect()
            ->route('workouts.index')
            ->with('success', 'Workout was deleted successfully !');
    }
}
