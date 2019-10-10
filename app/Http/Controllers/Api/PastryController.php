<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PastryRequest;
use App\Repositories\Interfaces\PastryInterfaceRepository;

class PastryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repository;
    public function __construct(PastryInterfaceRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        //
        $registro = $this->repository->getAll();
        return response()->json($registro);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PastryRequest $request)
    {
        //
        $registro = $this->repository->store($request->all());
        return response()->json($registro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(!$this->repository->findById($id))
        {
            return response()->json(['error'=>'pastry_not_found'],400);
        }
        return $this->repository->findById($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PastryRequest $request, $id)
    {
        //
        if(!$this->repository->findById($id))
        {
            return response()->json(['error'=>'pastry_not_found'],400);
        }

        if(!$update = $this->repository->update($id,$request->all())){
            return response()->json(['error'=>'Erro ao Atualizar Cliente'],500);
        }
        return response()->json(['result'=>$update]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!$this->repository->findById($id))
        {
            return response()->json(['error'=>'client_not_found'],400);
        }
        if(!$delete = $this->repository->delete($id)){
            return response()->json(['error'=>'error_delete_client'],500);
        }
        return response()->json(['result'=>$delete]);
    }
}
