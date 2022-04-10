<?php

namespace App\Http\Controllers;

use App\Booking;
use App\complain;
use App\Post;
use App\Property;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function bookNow(Request $request){
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->phone_no = $request->phone;
        $booking->property_id = $request->property_id;
        $booking->cnic = $request->cnic;
        $booking->descrption = $request->description;
        $booking->date = $request->date;
        $booking->save();
        return redirect()->back();
    }
    public function complainsubmit(Request $request){
        $booking = new complain();
        $booking->user_id = 1;
        $booking->email = $request->email;
        $booking->title = $request->subject;
        $booking->descripion = $request->message;
        $booking->save();
        return redirect('/');
    }
    public function index(){
        $blogs = Post::all();
        $properties = Property::all();
        return view("index", compact('properties', 'blogs'));
    }
    public function about(){
        return view("about");
    }
    public function property(){
        $properties = Property::all();
        return view("property-grid",compact('properties'));
    }

    public function blog(){
        $blogs = Post::all();
        return view("blog-grid", compact('blogs'));
    }
    public function proper($id){
        $single_property = Property::find($id);
        return view("property-single", compact('single_property'));
    }
    public function bg(){
        return view("blog-single");
    }
    public function agent(){
        return view("agents-grid");
    }
    public function single(){
        return view("agent-single");
    }

    public function contact(){
        return view("contact");
    }
    public function emergency(){
        return view("emergency");
    }
    public function complain(){
        return view("complain");
    }
    public function customercare(){
        return view("customercare");
    }
    public function ruleandregulation(){
        return view("ruleandregulation");
    }
    public function sellpage2(){
        return view("sellpage2");
    }
    public function sellpage3(){
        return view("sellpage3");
    }
    public function allproject(){
        return view("projectgrid");
    }
    public function property_grid_rent(){
        $properties = Property::all();
        return view("property_grid_rent",compact('properties'));
    }


}
