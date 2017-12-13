<?php

namespace Nav33d\Message\makecontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
    	return ['hellow','megento'];
    }
}
