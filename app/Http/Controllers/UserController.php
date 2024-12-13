<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index(){
        try {
            return view('user.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

        public function onlyAdmin(){
            try {
                
                return response()->json([
                    'message' => 'You are an admin in a user controller'
                ]);
            } catch (\Throwable $th) {
                throw $th;
            }
        }
}
