<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\depoiments;
use App\Http\Requests\StoreUpdateDepoimentRequest;
use App\Providers\Services\DepoimentService;
use App\DTO\CreateDepoimentDTO;
use App\DTO\UpdateDepoimentDTO;

class DepoimentsController extends Controller
{

    public function __construct(protected DepoimentService $service) {

    }

    public function index(Request $request) {
        $depoiments = $this -> service -> paginate(
            page: $request -> get('page', 1),
            totalPerPage: $request -> get('perPage', 30),
            filter: $request -> filter,
        );
        $filters = ['filter' => $request -> get('filter', '')];
        return view('admin/depoiments/index', compact('depoiments', 'filters'));
    }

    public function show(string $id) {
        $depoiment = $this -> service -> findOne($id);
        if(!$depoiment) {
            return back();
        }
        return view('admin/depoiments/show', compact('depoiment'));
    }

    public function create() {
        return view('admin/depoiments/create');
    }

    public function store(StoreUpdateDepoimentRequest $request, depoiments $depoiment) {
        // $data = $request -> validated();
        // $data['status'] = 'Ativo';

        // $support->create($data);

        $this -> service -> new(CreateDepoimentDTO::makeFromRequest($request));
        return redirect()->route('depoiments.index') -> with('message', 'Data registered successfully!');
    }

    public function edit(string $id) {
        $depoiment = $this -> service -> findOne($id);
        if(!$depoiment) {
            return back();
        }

        return view('admin/depoiments/edit', compact('depoiment'));
    }

    public function update(StoreUpdateDepoimentRequest $request, string|id $id) {

        $depoiment = $this -> service -> update(UpdateDepoimentDTO::makeFromRequest($request));

        if(!$depoiment) {
            return back();
        }

        // $support = Support::find($id);
        // if(!$support) {
        //     return back();
        // }

        // // $support -> subject = $request -> subject;
        // // $support -> body = $request -> body;
        // // $support -> save();

        // // $support -> update($request -> only([
        // //     'subject',
        // //     'body'
        // // ]));

        // $support -> update($request -> validated());

        return redirect() -> route('depoiments.index') -> with('message', 'Data updated successfully!');
    }

    public function delete(string $id) {

        $this -> service -> delete($id);

        // $support = Support::find($id);
        // if(!$support) {
        //     return back();
        // }

        // $support -> delete();

        return redirect() -> route('depoiments.index');
    }
}
