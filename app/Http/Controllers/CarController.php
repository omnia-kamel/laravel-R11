<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelS\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeData(Request $request)
    {
        $car = new Car;
        $car->title=$request->title;
        $car->price=$request->price;
        $car->content=$request->content;
        $pub=$request->pub;
        if($pub){
            $car->published=1;
        }
        else{
            $car->published=0;
        }
        
        $car->save();


        /*
         $cars = new car;
         $cars->carTitle = "BMW";
         $cars->description = " My description is here";
         $cars->published = true;
         $cars->save();
         return "Car data added successfuly";
         */
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
