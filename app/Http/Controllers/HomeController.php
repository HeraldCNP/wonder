<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Count;
use App\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $works = Work::where('status', 'yes')->orderBy('created_at', 'desc')->take(6)->get();
        $companies = Company::where('status', 'yes')->orderBy('created_at', 'desc')->take(6)->get();
        $counts = Count::where('id', 1)->get();
        return view('welcome', compact('works', 'companies', 'counts'));
    }

    public function works()
    {
        $categories = Category::all();
        $works = Work::where('status', 'yes')->orderBy('created_at', 'desc')->take(9)->get();
        return view('pages.works', compact('categories', 'works'));
    }
    public function web()
    {
        return view('pages.web');
    }
    public function desing()
    {
        return view('pages.desing');
    }
    public function marketing()
    {
        return view('pages.marketing');
    }
    public function photo()
    {
        return view('pages.photo');
    }
    public function video()
    {
        return view('pages.video');
    }
    public function audio()
    {
        return view('pages.audio');
    }
}
