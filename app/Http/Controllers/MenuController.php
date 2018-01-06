<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Slider;
use App\Service;

class MenuController extends Controller
{
    public function showMenu() {

		$menu = Menu::all();
        $slider = Slider::all();
        $service = Service::all();

		return view('welcome', ['menu'=>$menu, 'slider'=>$slider, 'service'=>$service]);

    }

    public function postMenu() {
    	
    }
}
