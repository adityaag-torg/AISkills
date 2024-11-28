<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home_web(Request $request){
        $query = $request->input('query');
        $keywords = explode(' ', $query);
        return view('home.index');
    }
}