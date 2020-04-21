<?php

namespace App\Http\Controllers\Detail;

use App\Http\Controllers\Controller;
use App\Service\Detail\DetailService;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    private $detailService;

    public function __construct(DetailService $detailService)
    {
        $this->detailService = $detailService;
    }

    public function handle($postId)
    {
        $detailPost = $this->detailService->execute($postId);

        return view('Detail.Detail', compact('detailPost'));
    }
}
