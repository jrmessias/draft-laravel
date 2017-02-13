<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
	/**
	 * @Get("/", as="index")
	 */
	public function index(){
		return view('welcome');
	}

	/**
	 * @Get("/doh", as="doh")
	 */
	public function doh(){
		return view('doh');
	}
}
