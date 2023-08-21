<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswerConfig;
use Illuminate\Http\Request;

class QuestionAnswerConfigController extends Controller
{
    public function __invoke(Request $request)
    {
        $qaConfig = QuestionAnswerConfig::find(1);
        $qaConfig->paddingTop = $request->input('PaddingTop');
        $qaConfig->paddingBottom = $request->input('PaddingBottom');
        $qaConfig->save();
        return response()->json(['message' => 'updated successfully', 'data' => $qaConfig]);

    }
}
