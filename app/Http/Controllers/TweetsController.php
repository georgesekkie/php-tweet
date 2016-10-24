<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tweet;

class TweetsController extends Controller
{
  public function __construct()
    {
     $this->middleware('auth', array('except' => 'index'));
    }
  public function index()
  {
    $tweets = Tweet::orderBy('created_at', 'DESC')->paginate(2);
    return view('tweets.index')->with('tweets', $tweets);
  }
  public function create()
  {
    return view('tweets.create');
  }
  public function store(Request $request)
  {
    Tweet::create(
      array(
        'name' => $request->name,
        'image' => $request->image,
        'text' => $request->text
      )
    );

    return view('tweets.store');
  }
}