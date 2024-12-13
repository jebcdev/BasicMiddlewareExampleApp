<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        try {
            return view('admin.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
