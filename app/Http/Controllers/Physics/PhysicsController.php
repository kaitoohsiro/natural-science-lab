<?php

namespace App\Http\Controllers\Physics;

use App\Http\Controllers\Controller;
use App\Service\Physics\PhysicsService;
use Illuminate\Http\Request;

class PhysicsController extends Controller
{
    private $physicsService;

    public function __construct(PhysicsService $physicsService)
    {
        $this->PhysicsService = $physicsService;
    }

    public function handle()
    {
        $physicsList = $this->PhysicsService->execute();
        return view('Physics.physics', compact('physicsList'));
    }
}
