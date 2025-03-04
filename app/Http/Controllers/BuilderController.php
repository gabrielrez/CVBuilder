<?php

namespace App\Http\Controllers;

class BuilderController extends Controller
{
    public function index()
    {
        $steps = $this->loadSteps();

        return view('app.builder', ['steps' => $steps]);
    }

    private function loadSteps()
    {
        return range(0, 3);
    }
}
