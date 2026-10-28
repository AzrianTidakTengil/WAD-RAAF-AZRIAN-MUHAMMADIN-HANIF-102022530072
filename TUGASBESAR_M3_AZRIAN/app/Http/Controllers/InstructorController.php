<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatih;

class InstructorController extends Controller
{
    public function index() {
        $dataPelatih = Pelatih::all();
        return view('instructor.index', ['dataPelatih'=> $dataPelatih]);
    }

    public function formPage($id = null) {
        if($id){
            $pelatih = Pelatih::findOrFail($id);
        } else {
            $pelatih = new Pelatih();
        }
        return view('instructor.form', ['pelatih'=> $pelatih]);
    }

    public function storeNewInstructor(Request $request) {
        $pelatih = Pelatih::create($request->all());
        return redirect()->route('intructor')->with('success','Success create new an intructor');
    }

    public function updateInstructor(Request $request, $id) {
        $pelatih = Pelatih::findOrFail($id);
        $pelatih->update($request->all());
        return redirect()->route('intructor')->with('success','Success update new an intructor');
    }

    public function destroyInstructor($id) {
        Pelatih::destroy($id);
        return redirect()->route('intructor')->with('success','Success delete new an intructor');
    }
}
