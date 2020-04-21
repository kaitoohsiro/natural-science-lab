<?php
namespace App\Service\Detail;

use App\Repositories\ReadRepository;

class DetailService
{
    private $readRepository;

    public function __construct(ReadRepository $readRepository)
    {
        $this->readRepository = $readRepository;
    }

    public function execute($postId)
    {
        $detailPost = $this->readRepository->getDetailPost($postId);
        return $detailPost;
    }
}