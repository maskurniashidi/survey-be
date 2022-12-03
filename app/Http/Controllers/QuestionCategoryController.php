<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\QuestionCategorie;
use App\Models\QuestionCategory;
use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Validator;

class QuestionCategoryController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'category' => 'required|string',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $questionCategory = QuestionCategory::create(
                    $validator->validated(),
                );
        return response()->json([
            'message' => 'Question Category successfully added',
            'data' => $questionCategory
        ], 201);
    }
    public function getQuestionCategory(){
        $questionCategory = QuestionCategory::all();
        return response()->json([
            'message' => 'Success',
            'data' => $questionCategory
        ],201);
    }
    public function getbyId($id){
        $questionCategory = QuestionCategory::with(['result'])->find($id);
        if($questionCategory != null){
            return response()->json([
                'message' => 'Success',
                'data' => $questionCategory
            ]);
        }else if($questionCategory == null){
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }
    public function destroy($id){
        QuestionCategory::where('id', $id)->delete();
        return response()->json([
            'message' => 'QuestionCategory deleted',
        ], 202);
    }
}
