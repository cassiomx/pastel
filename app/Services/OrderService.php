<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\Interfaces\OrderInterfaceRepository;
class OrderService extends BaseService
{
    protected $repository;
    public function __construct( OrderInterfaceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show($id)
    {
        // dd('entrei no show');
        if(!$this->repository->findById($id))
        {
            return response()->json(['error'=>'data_not_found'],400);
        }
        return $this->repository->relationships('itens')->findById($id);
    }

}