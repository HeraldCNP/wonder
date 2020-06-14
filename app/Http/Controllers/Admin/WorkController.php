<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidWorkForm;
use App\User;
use App\Work;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Collection;
class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('title')->get();
        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.works.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidWorkForm $request)
    {

        $file = $request->file('image');

        $fName = $file->getClientOriginalName();
        $fileExtension = $file->getClientOriginalExtension();
        if($fileExtension == "png" || $fileExtension == "jpg"){
            $fiName = Str::slug(Str::of($fName)->substr(0, -3), '-');
        }elseif ($fileExtension == "jpeg"){
            $fiName = Str::slug(Str::of($fName)->substr(0, -4), '-');
        }
        $fileName = $fiName.'.'.$fileExtension;

        Storage::disk('public')->put($fileName, File::get($file));

        $ruta = 'uploads/works/'.$fileName;
        $work = new Work();
        $work->title = $request->title;
        $work->description = $request->description;
        $work->image = $ruta;
        $work->status = $request->status;
        $work->category_id = $request->category;
        $work->user_id = auth()->user()->id;
        $work->save();
        $work->syncUsers($request->get('users'));
        Alert::success('Hecho', 'Trabajo Creado Correctamente');
        return redirect('works');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        $categories = Category::all();
        $users = User::orderBy('id')->get();
        $var = $work->users->pluck('id')->toArray();
        sort($var);
        $i = 0;
//        dd($var);
        return view('admin.works.edit', compact('work', 'categories', 'users', 'var', 'i'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidWorkForm $request, $id)
    {
        $work = Work::findorfail($id);
        $file = $request->file('image');

        $fName = $file->getClientOriginalName();
        $fileExtension = $file->getClientOriginalExtension();
        if($fileExtension == "png" || $fileExtension == "jpg"){
            $fiName = Str::slug(Str::of($fName)->substr(0, -3), '-');
        }elseif ($fileExtension == "jpeg"){
            $fiName = Str::slug(Str::of($fName)->substr(0, -4), '-');
        }
        $fileName = $fiName.'.'.$fileExtension;

        Storage::disk('public')->put($fileName, File::get($file));

        $ruta = 'uploads/works/'.$fileName;
        $work->title = $request->title;
        $work->description = $request->description;
        $work->image = $ruta;
        $work->status = $request->status;
        $work->category_id = $request->category;
        $work->update();
        $work->syncUsers($request->get('users'));
        Alert::success('Hecho', 'Trabajo Actualizado Correctamente');
        return redirect('works');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        unlink(public_path().'/'.$work->image);
        $work->delete();
        Alert::success('Hecho', 'Trabajo Eliminado Correctamente');
        return redirect('works');
    }
}
