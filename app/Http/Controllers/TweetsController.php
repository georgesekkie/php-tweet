<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tweet;

class TweetsController extends Controller
{
  public function index()
  {
    $tweets = Tweet::all();
    return view('tweets.index')->with('tweets', $tweets);
  }
  public function create()
  {
    return view('tweets.create');
  }
}