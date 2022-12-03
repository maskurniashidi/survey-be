<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResultController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'q1' => 'required|integer',
            'q2' => 'required|integer',
            'q3' => 'required|integer',
            'q4' => 'required|integer',
            'q5' => 'required|integer',
            'q6' => 'required|integer',
            'q7' => 'required|integer',
            'q8' => 'required|integer',
            'q9' => 'required|integer',
            'q10' => 'required|integer',
            'q11' => 'required|integer',
            'q12' => 'required|integer',
            'q13' => 'required|integer',
            'q14' => 'required|integer',
            'q15' => 'required|integer',
            'q16' => 'required|integer',
            'q17' => 'required|integer',
            'q18' => 'required|integer',
            'q19' => 'required|integer',
            'q20' => 'required|integer',
            'q21' => 'required|integer',
            'q22' => 'required|integer',
            'q23' => 'required|integer',
            'q24' => 'required|integer',
            'q25' => 'required|integer',
            'q26' => 'required|integer',
            'user_id' => 'required|integer',
            'survey_id' => 'required|integer',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $result = Result::create(
                    $validator->validated(),
                );
        return response()->json([
            'message' => 'Result successfully',
            'data' => $result
        ], 201);
    }
    public function getResult(){
        $result = Result::all();
        return response()->json([
            'message' => 'Success',
            'data' => $result
        ],201);
    }
    public function getbyId($id){
        $result = Result::find($id);
        if($result != null){
            return response()->json([
                'message' => 'Success',
                'data' => $result
            ]);
        }else if($result == null){
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }
    public function getbyUserId($id){
        $result = User::with('result')->find($id)->get();
        if($result != null){
            return response()->json([
                'message' => 'Success',
                'data' => $result
            ]);
        }else if($result == null){
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }
    public function update($id, Request $request){
        $validator = Validator::make($request->all(), [
            'q1' => 'required|integer',
            'q2' => 'required|integer',
            'q3' => 'required|integer',
            'q4' => 'required|integer',
            'q5' => 'required|integer',
            'q6' => 'required|integer',
            'q7' => 'required|integer',
            'q8' => 'required|integer',
            'q9' => 'required|integer',
            'q10' => 'required|integer',
            'q11' => 'required|integer',
            'q12' => 'required|integer',
            'q13' => 'required|integer',
            'q14' => 'required|integer',
            'q15' => 'required|integer',
            'q16' => 'required|integer',
            'q17' => 'required|integer',
            'q18' => 'required|integer',
            'q19' => 'required|integer',
            'q20' => 'required|integer',
            'q21' => 'required|integer',
            'q22' => 'required|integer',
            'q23' => 'required|integer',
            'q24' => 'required|integer',
            'q25' => 'required|integer',
            'q26' => 'required|integer',
            'user_id' => 'required|integer',
            'survey_id' => 'required|integer',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $result = Result::find($id)->update(
            $validator->validated(),
        );
        $result = Result::find($id);
        return response()->json([
            'message' => 'Survey successfully registered',
            'result' => $result
        ], 201);
    }
    public function destroy($id){
        Result::where('id', $id)->delete();
        return response()->json([
            'message' => 'Result deleted',
        ], 202);
    }
}
