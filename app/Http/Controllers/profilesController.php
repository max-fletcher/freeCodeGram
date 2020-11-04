<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class profilesController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {

  }

  public function show($id)
  {
      $userdata = User::findOrFail($id);
      return view('profiles.index')->with('user', $userdata);
  }
}
