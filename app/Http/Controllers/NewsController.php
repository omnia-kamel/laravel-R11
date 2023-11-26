<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    private $columns = ['newsTitle' , 'newsContent' , 'newsPublished' ,'newsAuthor'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::get();
        return view('news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createNews'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News();

        $news->newsTitle = $request->newsTitle;
        $news->newsContent = $request->newsContent;
        $news->newsPublished = (isset($request->newsPublished))? true : false;
        $news->newsAuthor = $request->newsAuthor; 

        $news->save(); 

        return 'News is added successfully'; 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findORFail($id);
        return view('showNews', compact('news'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::findOrFail($id);
        return view('editNews', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['newsPublished'] = isset($data['newsPublished'])? true:false;

        News::where('id', $id)->update($data);
     // Car::where('id', $id)->update($request->only($this->columns));
        return ('updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::where('id' , $id)->delete();

        return 'News Deleted';
    }
}
