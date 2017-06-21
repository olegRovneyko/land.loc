<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Portfolio;
use App\People;
use App\Service;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
    	$pages = Page::all();
    	$portfolios = Portfolio::all();
    	$peoples = People::all();
    	$services = Service::all();

    	return view('site.index');
    }
}
