<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;

class FrontendController extends Controller
{
    public function home(){
    	$allsilder=Slider::get();
        $allCategory=Category::where('is_deleted',0)->where('is_active',1)->get();
        return view('frontend.home.home',compact('allsilder','allCategory'));
    }
}
