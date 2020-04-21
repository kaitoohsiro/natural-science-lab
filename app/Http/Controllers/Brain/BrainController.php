<?php

namespace App\Http\Controllers\Brain;

use App\Http\Controllers\Controller;
use App\Service\Brain\BrainService;
use Illuminate\Http\Request;

class BrainController extends Controller
{
    private $brainService;

    public function __construct(BrainService $brainService)
    {
        $this->BrainService = $brainService;
    }

    public function handle()
    {
        $brainList = $this->BrainService->execute();
        return view('Brain.brain', compact('brainList'));
    }
}
