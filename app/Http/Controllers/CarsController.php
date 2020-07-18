<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function show($id)
    {
        $id = \DB::table("carscollection")->where("id", $id)->first();

        return view("signup", [
            "id" => $id
        ]);
    }
}
