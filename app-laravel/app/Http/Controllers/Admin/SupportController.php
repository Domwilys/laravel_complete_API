<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Providers\Services\SupportService;
use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSuppportDTO;

class SupportController extends Controller
{

    public function __construct(protected SupportService $service) {
        
    }

    public function index(Request $request) {
        $supports = $this -> service -> getAll($request -> filter);
        return view('admin/supports/index', compact('supports'));
    }

    public function show(string $id) {
        $support = $this -> service -> findOne($id);
        if(!$support) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }

    public function create() {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupportRequest $request, Support $support) {
        // $data = $request -> validated();
        // $data['status'] = 'Ativo';

        // $support->create($data);

        $this -> service -> new(CreateSupportDTO::makeFromRequest($request));
        return redirect()->route('supports.index');
    }

    public function edit(string $id) {
        $support = $this -> service -> findOne($id);
        if(!$support) {
            return back();
        }

        return view('admin/supports/edit', compact('support'));
    }

    public function update(StoreUpdateSupportRequest $request, string|id $id) {

        $support = $this -> service -> update(UpdateSupportDTO::makeFromRequest($request));

        if(!$support) {
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

        return redirect() -> route('supports.index');
    }

    public function delete(string $id) {

        $this -> service -> delete($id);

        // $support = Support::find($id);
        // if(!$support) {
        //     return back();
        // }

        // $support -> delete();

        return redirect() -> route('supports.index');
    }
}
