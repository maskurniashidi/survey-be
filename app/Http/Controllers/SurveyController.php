<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'appsName' => 'required|string|between:2,255',
            'appsDescription' => 'required|string|between:2,255',
            'appsLink' => 'required|string|between:2,255',
            'maxTotalRespondent' => 'required|integer|between:2,255',
            'maxDate' => 'required|date',
            'totalRespondent' => 'required|integer|between:2,255',
            'user_id' => 'required|integer',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $survey = Survey::create(
                    $validator->validated(),
        );
        return response()->json([
            'message' => 'Survey successfully registered',
            'data' => $survey
        ], 201);
    }
    public function getSurvey(){
        $survey = Survey::with('result')->get();
        return response()->json([
            'message' => 'Success',
            'data' => $survey
        ],201);
    }
    public function getbyId($id){
        $survey = Survey::with(['result'])->find($id);
        if($survey != null){
            return response()->json([
                'message' => 'Success',
                'data' => $survey
            ]);
        }else if($survey == null){
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
    }
    public function update($id, Request $request){
        // $validator = Validator::make($request->all(), [
        //     'appsName' => 'required|string|between:2,255',
        //     'appsDescription' => 'required|string|between:2,255',
        //     'appsLink' => 'required|string|between:2,255',
        //     'maxTotalRespondent' => 'required|integer|between:2,255',
        //     'maxDate' => 'required|date',
        //     'totalRespondent' => 'required|integer|between:2,255',
        //     'user_id' => 'required|integer',
        // ]);
        // if($validator->fails()){
        //     return response()->json($validator->errors()->toJson(), 400);
        // }
        // $survey = Survey::find($id)->update(
        //     $validator->validated(),
        // );
        // $survey = Survey::with(['result'])->find($id);
        // return response()->json([
        //     'message' => 'Survey successfully registered',
        //     'survey' => $survey
        // ], 201);

        $survey = Survey::find($id);
        $survey->update($request->all());
        return response()->json([
            'message' => 'Survey successfully updated',
            'survey' => $survey
        ], 200);


    }
    public function destroy($id){
        Survey::where('id', $id)->delete();
        return response()->json([
            'message' => 'Survey deleted',
        ], 202);
    }
}
