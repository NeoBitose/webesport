<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountModel;
use App\Models\EventModel;
use App\Models\BlogModel;
use App\Models\SponsorModel;
use App\Models\SettingModel;

class IndexController extends Controller
{
    public function __construct(){
        $this->CountModel = new CountModel;
        $this->EventModel = new EventModel;
        $this->BlogModel = new BlogModel;
        $this->SponsorModel = new SponsorModel;
    }

    public function index(){           
        $data = [
            'all' => $this->CountModel->allData(),
            'event' => $this->EventModel->allData(),
            'blog' => $this->BlogModel->allData(),
            'sponsor' => $this->SponsorModel->allData(),
            'sp' => count($this->SponsorModel->allData()),
            'setting' => SettingModel::all(),
        ];
        return view('index',$data);
    }

}

