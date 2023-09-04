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

    public function create() {
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support) {
        $data = $request -> all();
        $data['status'] = 'Ativo';

        $support->create($data);
        return redirect()->route('supports.index');
    }
}
