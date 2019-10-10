<?php

namespace App\Services;

class BaseService
{
    protected $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        $registro = $this->repository->getAll();
        dd($registro);
        return response()->json($registro);
    }
}
