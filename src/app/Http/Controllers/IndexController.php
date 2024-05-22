<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class IndexController extends Controller
{
    public function index()
  {
    $datas = Test::all();
    return view('index',compact('datas'));
  }

  public function test(Request $request)
  {
    $tests= $request->only(['name', 'tel']);
    Test::create($tests);
    return redirect('/');
  }
}
