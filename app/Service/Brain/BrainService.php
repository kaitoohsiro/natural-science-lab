<?php
namespace App\Service\Brain;

use App\Repositories\ReadRepository;

class BrainService
{
    private $readRepository;

    public function __construct(ReadRepository $readRepository)
    {
        $this->readRepository = $readRepository;
    }

    public function execute()
    {
        $brainList = $this->readRepository->getBrainList();
        return $brainList;
    }
}
