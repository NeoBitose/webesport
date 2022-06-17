<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\EventModel;
use App\Models\SliderModel;
use App\Models\SponsorModel;
use App\Models\CountModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->SliderModel = new SliderModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'blog' => count(BlogModel::all()),
            'event' => count(EventModel::all()),
            'sponsor' => count(SponsorModel::all()),
            'nomer' =>  1 ,
            'slider' => $this->SliderModel->allData()
        ];        
        return view('home',$data);
    }
}
