<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Skills_set;
use Illuminate\Support\Facades\Validator;

class candidatesController extends Controller
{
    //
    public function index()
    {
        $candidates = Candidates::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Candidates',
            'data'    => $candidates  
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email|unique:candidates,email',
            'phone'     => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9|numeric|unique:candidates,phone',
            'year'      => 'required',
            'job_id'    => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $candidates = Candidates::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'year'      => $request->year,
            'job_id'    => $request->job_id,
            'created_by' => 1,
            'updated_by' => NULL,
            'deleted_by' => NULL,
            'created_at' => NOW(),
            'updated_at' => NULL,
            'deleted_at' => NULL,
        ]);
        
        //kriteria no 6 masih belum sesuai
        $candidates_skill = Candidates::where('email',$request->email)
        ->where('phone',$request->phone)
        ->first();
        $skills = skills_set::create([
            'candidate_id'  => $candidates_skill->id,
            'skill_id'      => $request->skill_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Input Data Berhasil',
            'data'    => $candidates  
        ], 200);
    }
}
