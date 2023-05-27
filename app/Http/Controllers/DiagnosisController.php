<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosis;
use Illuminate\Http\RedirectResponse;

class DiagnosisController extends Controller
{
    public function index(){
        $diagnoses = Diagnosis::all();
        return view('diagnosis.index', ['diagnoses' => $diagnoses]);
        
    }

    public function create(){
        return view('diagnosis.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'diagnosis_name' => 'required',
            'intervention' => 'required',
            'goal' => 'required',
        ]);

        $newDiagnosis = Diagnosis::create($data);

        return to_route('diagnosis.index');
    }
}
