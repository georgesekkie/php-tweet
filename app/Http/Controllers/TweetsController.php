<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TweetsController extends Controller
{
  public function index()
  {
    return view('tweets.index');
  }
}