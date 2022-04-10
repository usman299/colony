<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function search(Request $request)
    {
        $properties = Property::where('description', 'like', '%' . $request->block . '%')->Where('property_status', $request->type)->where('description', 'like', '%' . $request->keyword . '%')
            ->Where('bed_room', $request->bedrooms)->Where('gerages', $request->garages)->Where('washroom', $request->bathroom)->orWhere('land_prize','<=',$request->price)->get();
        return view("property_grid_rent",compact('properties'));
    }
}
