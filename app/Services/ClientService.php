<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\Interfaces\ClientInterfaceRepository;
class ClientService extends BaseService
{
    protected $repository;

    public function __construct( ClientInterfaceRepository $repository)
    {
        $this->repository = $repository;
    }


}
