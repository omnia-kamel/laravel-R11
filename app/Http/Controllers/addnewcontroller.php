<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelS\addnew;

class addnewcontroller extends Controller
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
    public function store(Request $request)
    {
        $new = new Addnew();
        $new->title = $request->title;
        $new->author=$request->author;
        $new->content=$request->content;
        if(isset($_request["published"])){
         $new->published=1;
        }else{
            $new->published=0;
        }
        
        $new->save();
        return 'Added Successfully';

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
