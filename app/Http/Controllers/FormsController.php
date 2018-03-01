<?php

namespace App\Http\Controllers;

class FormsController extends Controller
{
    public function index($name = null)
    {
        if (empty($name)) {
            return view('forms');
        }

        $file = public_path('forms/' . $name . '.doc');

        if (!\File::exists($file)) {
            abort(404);
        }

        return response()->download($file);
    }
}
