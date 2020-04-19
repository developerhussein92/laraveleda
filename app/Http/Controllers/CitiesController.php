<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\city;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cities = City::all();
        return view('front.cities.cities_list',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('front.cities.new_city');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $c = new City;
        $c->ar_city_name = $request->ar_city_name;
        $c->en_city_name = $request->en_city_name;
        $c->save();
        return redirect('/cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $city = City::find($id);
        return view('front.cities.update_city',compact('city'));
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
        //
        $c = City::find($id);
        $c->ar_city_name = $request->ar_city_name;
        $c->en_city_name = $request->en_city_name;
        $c->save();
        return redirect('/cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $c =  City::find($id);
        $c->delete();
        return redirect('/cities');
    }

    public function alldeleted()
    {   
        $cities = City::onlyTrashed()->get();
        return view('front.cities.deleted_cities_list',compact('cities'));
    }
    public function restore($id)
    {
        $c = City::onlyTrashed()->find($id);
        $c->restore();
        return redirect('/cities');
    }

    public function restoreall()
    {
        
        City::onlyTrashed()->restore();
        return redirect('/cities');
    }

    public function forcedelete()
    {
        City::onlyTrashed()->forceDelete();
        return redirect('/cities/deleted');
    }

    public function cityforcedelete(Request $request,$id)
    {
        $c = City::onlyTrashed()->find($id)->forceDelete();
        return redirect('/cities/deleted');
    }


}
