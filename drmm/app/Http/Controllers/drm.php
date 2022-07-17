<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class drmController extends Controller
{
    /**
     * Show all of the drm for the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drm.index', [
            'drm' => DB::table('drm')->paginate(5)
        ]);
    }
}