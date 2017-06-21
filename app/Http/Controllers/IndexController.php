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

    	$menu = [];
    	foreach ($pages as $page) {
    		$item = ['title'=>$page->name, 'alias'=>$page->alias];
    		$menu[] = $item;
    	}

    	$item = ['title'=>'Services', 'alias'=>'service'];
    	$menu[] = $item;

    	$item = ['title'=>'Portfolio', 'alias'=>'Portfolio'];
    	$menu[] = $item;

    	/*$item = ['title'=>'Clients', 'alias'=>'clients'];
    	$menu[] = $item;*/

    	$item = ['title'=>'Team', 'alias'=>'team'];
    	$menu[] = $item;

    	$item = ['title'=>'Contact', 'alias'=>'contact'];
    	$menu[] = $item;

    	//dd($pages);

    	return view('site.index', [
												    		'menu'=>$menu,
												    		'pages'=>$pages,
												    		'services'=>$services,
												    		'portfolios'=>$portfolios,
												    		'peoples'=>$peoples,
												    	]);
		}
}
