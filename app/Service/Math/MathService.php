<?php
namespace App\Service\Math;

use App\Repositories\ReadRepository;

class MathService
{
    private $readRepository;

    public function __construct(ReadRepository $readRepository)
    {
        $this->readRepository = $readRepository;
    }

    public function execute()
    {
        $mathList = $this->readRepository->getMathList();
        return $mathList;
    }
}
