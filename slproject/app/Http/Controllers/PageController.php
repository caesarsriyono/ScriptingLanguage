<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
    $data = DB::select('select * from videocatalog');
         return view('index', ['data' => $data]);
    }
    public function aboutus() {
        return view('aboutus');
        }
        public function contactus() {
            return view('contactus');
            }
}
