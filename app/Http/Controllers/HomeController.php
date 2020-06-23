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
        $works = Work::where('status', 'yes')->inRandomOrder()->take(4)->get();
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
        $categories = Category::inRandomOrder()->get();
        return view('pages.web', compact('categories'));
    }
    public function desing()
    {
        $categories = Category::inRandomOrder()->get();
        return view('pages.desing', compact('categories'));
    }
    public function marketing()
    {
        $categories = Category::inRandomOrder()->get();
        return view('pages.marketing', compact('categories'));
    }
    public function photo()
    {
        $categories = Category::inRandomOrder()->get();
        return view('pages.photo', compact('categories'));
    }
    public function video()
    {
        $categories = Category::inRandomOrder()->get();
        return view('pages.video', compact('categories'));
    }
    public function audio()
    {
        $categories = Category::inRandomOrder()->get();
        return view('pages.audio', compact('categories'));
    }
}
