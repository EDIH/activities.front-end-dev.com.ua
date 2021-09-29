<?php

namespace App\Http\Controllers;

use App\Models\Instructors;
use Illuminate\Http\Request;

class InstructorsController extends Controller
{
    public function some(Request $request, $name){
//        $data = $request->all();

        $model = Instructors::where('name', '=', $name)->get();

        return view('admin.inst', ['instructors' => $model]);
    }

}
