<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidCompanyForm;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('created_at')->take(6)->get();
//        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidCompanyForm $request)
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

        Storage::disk('company')->put($fileName, File::get($file));

        $ruta = 'storage/companies/'.$fileName;
        $company = new Company();
        $company->name = $request->name;
        $company->description = $request->description;
        $company->image = $ruta;
        $company->contact = $request->contact;
        $company->web = $request->web;
        $company->status = $request->status;
        $company->save();
        Alert::success('Hecho', 'Empresa Creada Correctamente');
        return redirect('companies');
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
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidCompanyForm $request, $id)
    {
        $company = Company::findorfail($id);
        $file = $request->file('image');

        $fName = $file->getClientOriginalName();
        $fileExtension = $file->getClientOriginalExtension();
        if($fileExtension == "png" || $fileExtension == "jpg"){
            $fiName = Str::slug(Str::of($fName)->substr(0, -3), '-');
        }elseif ($fileExtension == "jpeg"){
            $fiName = Str::slug(Str::of($fName)->substr(0, -4), '-');
        }
        $fileName = $fiName.'.'.$fileExtension;

        Storage::disk('company')->put($fileName, File::get($file));

        $ruta = 'storage/companies/'.$fileName;
        $company->name = $request->name;
        $company->description = $request->description;
        $company->image = $ruta;
        $company->contact = $request->contact;
        $company->web = $request->web;
        $company->status = $request->status;
        $company->update();
        Alert::success('Hecho', 'Empresa Actualizada Correctamente');
        return redirect('companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        unlink(public_path().'/'.$company->image);
        $company->delete();
        Alert::success('Hecho', 'Empresa Eliminada Correctamente');
        return redirect('companies');
    }
}
