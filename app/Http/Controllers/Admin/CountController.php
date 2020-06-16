<?php

namespace App\Http\Controllers\Admin;

use App\Count;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CountController extends Controller
{
    public function index()
    {
        $counts = Count::all();
        return view('admin.count.index', compact('counts'));
    }

    public function edit(Count $count)
    {
        return view('admin.count.edit', compact('count'));
    }

    public function Update(Request $request, Count $count)
    {
        $request->validate([
            'countClient' => 'required',
        ]);
        $count->clients = $request->countClient;
        $count->coffee = $request->countCoffee;
        $count->building = $request->countBuilding;
        $count->update();
        Alert::success('Hecho', 'Contador Actualizado Correctamente');
        return redirect('counts');
    }
}
