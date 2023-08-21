<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Question' => 'required|string|max:100',
            'Answer' => 'required|string|max:255',
        ]);
        $qa = new QuestionAnswer;

        $qa->Question = $request->input('Question');
        $qa->Answer = $request->input('Answer');
        $qa->save();
        return response()->json(['message' => 'created successfully', 'data' => $qa]);

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
        $request->validate([
            'Question' => 'required|string|max:100',
            'Answer' => 'required|string|max:255',
        ]);
        $qa = QuestionAnswer::find($id);
        $qa->Question = $request->input('Question');
        $qa->Answer = $request->input('Answer');
        $qa->save();
        return response()->json(['message' => 'updated successfully', 'data' => $qa]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
