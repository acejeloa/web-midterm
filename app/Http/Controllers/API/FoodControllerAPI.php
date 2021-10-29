<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Food;

class FoodControllerAPI extends Controller
{
    public function index()
    {
        $foods = Food::all();

        return response()->json(['foods'=>$foods],200);
    }
}
