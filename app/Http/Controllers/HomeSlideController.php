<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlide;

class HomeSlideController extends Controller
{
 public function HomeSlide(){
$homeslide = HomeSlide::find(1);
return view('admin.home_slide.home_slide_all',compact('homeslide'));
 }//end method
}
