<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class PageController extends Controller
{
  public function welcome(Request $request) {
      if($request->user())
          return view('bucketlist.index');
      return view('bucketlist.welcome');
  }
}
