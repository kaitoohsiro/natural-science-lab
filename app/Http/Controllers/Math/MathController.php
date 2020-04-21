<?php

namespace App\Http\Controllers\Math;

use App\Http\Controllers\Controller;
use App\Service\Math\MathService;
use Illuminate\Http\Request;

class MathController extends Controller
{
    private $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    public function handle()
    {
        $mathList = $this->mathService->execute();
        return view('Math.math', compact('mathList'));
    }
}
