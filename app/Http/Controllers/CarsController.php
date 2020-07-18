<?php

namespace App\Http\Controllers;

use DB;
use App\Cars;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function show($id)
    {
        return view("signup", [
            "id" => Cars::where("id", $id)->firstOrFail()
        ]);
    }
}
