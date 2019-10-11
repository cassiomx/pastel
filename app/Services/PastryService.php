<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\Interfaces\PastryInterfaceRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class PastryService extends BaseService
{
    protected $repository;

    public function __construct( PastryInterfaceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($request){

        $qtd = $request['per_page'];
        $page = $request['page'];
        $registro = $this->repository->relationships(['orders'])->paginate($qtd);

        // dd($registro);
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        $registro = $registro->appends(Request::capture()->except('page'));
        return response()->json($registro);
    }

    public function show($id)
    {
        if(!$this->repository->findById($id))
        {
            return response()->json(['error'=>'data_not_found'],400);
        }
        return $this->repository->relationships(['orders.client'])->findById($id);
    }
}