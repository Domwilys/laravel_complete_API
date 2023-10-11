<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\Services\SupportService;
use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Http\Resources\SupportResource;
use App\Adapters\ApiAdapter;

class SupportApiController extends Controller
{

    public function __construct(
        protected SupportService $service,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $supports = $this -> service -> paginate(

            page: $request -> get('page', 1),
            totalPerPage: $request -> get('perPage', 30),
            filter: $request -> filter,

        );

        return ApiAdapter::toJson($supports);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupportRequest $request)
    {

        $support = $this -> service -> new(

            CreateSupportDTO::makeFromRequest(

                $request

            )

        );

        return new SupportResource($support);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $support = $this -> service -> findOne($id);

        if(!$support) {

            return response()->json([
                'error' => 'Not found'
            ], 404);

        }

        return new SupportResource($support);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSupportRequest $request, string $id)
    {

        $support = $this -> service -> update(UpdateSupportDTO::makeFromRequest($request, $id));

        if(!$support) {

            return response()->json([
                'error' => 'Not found'
            ], 404);

        }

        return new SupportResource($support);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $support = $this -> service -> findOne($id);

        if(!$support) {

            return response()->json([
                'error' => 'Not found'
            ], 404);

        }

        $this -> service -> delete($id);

        return response()->json([], 204);

    }
}
