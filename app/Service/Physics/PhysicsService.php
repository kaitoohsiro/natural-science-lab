<?php
namespace App\Service\Physics;

use App\Repositories\ReadRepository;

class PhysicsService
{
    private $readRepository;

    public function __construct(ReadRepository $readRepository)
    {
        $this->readRepository = $readRepository;
    }

    public function execute()
    {
        $physicsList = $this->readRepository->getPhysicsList();
        return $physicsList;
    }
}
