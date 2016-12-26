<?php

namespace App\Http\Controllers\Family;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilyHomeController extends Controller
{
    /**
     * 家谱首页
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('family/book');
    }
}
