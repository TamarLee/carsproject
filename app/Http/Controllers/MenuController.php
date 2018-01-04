<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function showMenu(){
    	/*$menu = new Menu;
    	$menu->title = 'HOME';
    	$menu->link = "#";
    	
    	$menu->title = 'SERVICE';
    	$menu->link = "#";

    	$menu->title = 'CONTACT';
    	$menu->link = "#";
    	$menu->save();*/


    	$menu = Menu::all();
    	
    	return view('welcome', ['menu'=>$menu]);

    }
}
