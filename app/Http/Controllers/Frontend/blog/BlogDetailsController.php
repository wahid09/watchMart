<?php

namespace App\Http\Controllers\Frontend\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogDetailsController extends Controller
{
    function index(){
    	return view('frontend.blog.blog_details');
    }
}
