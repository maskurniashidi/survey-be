<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'question' => 'required|string',
            'category_id' => 'required|string',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $question = Question::create(
                    $validator->validated(),
                );
        return response()->json([
            'message' => 'Question successfully added',
            'questiont' => $question
        ], 201);
    }
    public function getQuestion(){
        $question = Question::with('question')->get();
        return response()->json([
            'message' => 'Success',
            'data' => $question
        ],201);
    }
    public function getbyId($id){
        $question = Question::with(['result'])->find($id);
        if($question != null){
            return response()->json([
                'message' => 'Success',
                'data' => $question
            ]);
        }else if($question == null){
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }
    public function destroy($id){
        Result::where('id', $id)->delete();
        return response()->json([
            'message' => 'Result deleted',
        ], 202);
    }
}
