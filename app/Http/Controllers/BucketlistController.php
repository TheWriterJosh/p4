<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use DB;
use Session;

class BucketlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $destinations = Destination::all();
      return view('bucketlist.index')->with(['destinations' => $destinations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      return view('bucketlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

      $this->validate($request, [
        'destination' => 'required|min:3|max:25|regex:/^[\pL\s\-]+$/u',
        'year' => 'required|min:2016|max:2099|numeric',
        'country' => 'required|min:3|max:25|regex:/^[\pL\s\-]+$/u',
        'type' => 'required|min:3|max:25|regex:/^[\pL\s\-]+$/u',
        'continent' => 'required|min:4|max:25|regex:/^[\pL\s\-]+$/u'
      ]);

      $destination = new Destination();
      $destination->destination = $request->destination;
      $destination->country = $request->country;
      $destination->continent = $request->continent;
      $destination->type = $request->type;
      $destination->year = $request->year;
      $destination->save();
      Session::flash('flash_message','You placed '.$destination->destination.' in your bucket!');
      return redirect ('/index');
      }
      /**

     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $destination = Destination::find($id);
       if(is_null($destination)) {
           Session::flash('message','You havent entered this destination yet!');
           return redirect('/');
       }
       return view('bucketlist.show')->with([
                   'destination' => $destination,
               ]);
       //return view('bucketlist.show')->with('destination', $destination);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('bucketlist.edit')->with('destination', $destination);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'destination' => 'required|min:3|max:25|regex:/^[\pL\s\-]+$/u',
        'year' => 'required|min:2016|max:2099|numeric',
        'country' => 'required|min:3|max:25|regex:/^[\pL\s\-]+$/u',
        'type' => 'required|min:3|max:25|regex:/^[\pL\s\-]+$/u',
        'continent' => 'required|min:4|max:25|regex:/^[\pL\s\-]+$/u'
      ]);

      $destination = Destination::find($request->id);
      $destination->destination = $request->destination;
      $destination->type = $request->type;
      $destination->year = $request->year;
      $destination->country = $request->country;
      $destination->continent = $request->continent;
      $destination->save();
      Session::flash('flash_message','You changed '.$destination->destination.'!');
      return redirect ('/index');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
      $destination = Destination::find($id);
      return view('bucketlist.delete')->with('destination', $destination);
    }

    public function destroy($id) {
      $destination = Destination::find($id);
      if(is_null($destination)) {
        Session::flash('message','Thats not in your list yet!');
      }
        $destination->delete();
        Session::flash('flash_message', $destination->Destination.' was deleted.');
        return redirect('/');
    }
}
