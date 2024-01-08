<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\Services\DepoimentService;
use App\DTO\CreateDepoimentDTO;
use App\DTO\UpdateDepoimentDTO;
use App\Http\Requests\StoreUpdateDepoimentRequest;
use App\Http\Resources\DepoimentResource;
use App\Adapters\ApiAdapter;

class DepoimentApiController extends Controller
{

    public function __construct(
        protected DepoimentService $service,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $depoiments = $this -> service -> paginate(

            page: $request -> get('page', 1),
            totalPerPage: $request -> get('perPage', 30),
            filter: $request -> filter,

        );

        return ApiAdapter::toJson($depoiments);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateDepoimentRequest $request)
    {

        $depoiment = $this -> service -> new(

            CreateDepoimentDTO::makeFromRequest(

                $request

            )

        );

        return new DepoimentResource($depoiment);

    }

    public function show(string $id)
    {
        $depoiment = $this -> service -> findOne($id);

        if(!$depoiment) {

            return response()->json([
                'error' => 'Not found'
            ], 404);

        }

        return new DepoimentResource($depoiment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateDepoimentRequest $request, string $id)
    {

        $depoiment = $this -> service -> update(UpdateDepoimentDTO::makeFromRequest($request, $id));

        if(!$depoiment) {

            return response()->json([
                'error' => 'Not found'
            ], 404);

        }

        return new DepoimentResource($depoiment);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $depoiment = $this -> service -> findOne($id);

        if(!$depoiment) {

            return response()->json([
                'error' => 'Not found'
            ], 404);

        }

        $this -> service -> delete($id);

        return response()->json([], 204);

    }
}
