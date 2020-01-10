<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class FaceController extends Controller
{
    //
    public function index()
    {
        return view('pages.face.index');
    }
    public  function register_candidate(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'dob'  => 'required',
            'email'  => 'required',
            'phone'  => 'required',
            'candidate_id'  => 'required',
        ]);


//        $input = $request->all();
//        $candidate = Candidate::create($input);
//        $candidate->save();
        Candidate::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'dob'        => $request->dob,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'candidate_id' => $request->candidate_id,
            'type_id'      => '1'
        ]);

        return redirect()->route('face');
    }
}
