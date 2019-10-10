<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\Interfaces\PastryInterfaceRepository;
class PastryService extends BaseService
{
    protected $repository;

    public function __construct( PastryInterfaceRepository $repository)
    {
        $this->repository = $repository;
    }
}