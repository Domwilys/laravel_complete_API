<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    public function index(Support $support) {
        $supports = $support->all();
        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id) {
        $support = Support::find($id);
        if(!$support) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }

    public function create() {
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support) {
        $data = $request -> all();
        $data['status'] = 'Ativo';

        $support->create($data);
        return redirect()->route('supports.index');
    }

    public function edit(string|int $id) {
        $support = Support::find($id);
        if(!$support) {
            return back();
        }

        return view('admin/supports/edit', compact('support'));
    }

    public function update(Request $request, string|id $id) {
        $support = Support::find($id);
        if(!$support) {
            return back();
        }

        // $support -> subject = $request -> subject;
        // $support -> body = $request -> body;
        // $support -> save();

        $support -> update($request -> only([
            'subject',
            'body'
        ]));

        return redirect() -> route('supports.index');
    }
}
