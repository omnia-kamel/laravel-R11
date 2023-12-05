<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use App\Traits\Common;

class CarsController extends Controller
{
    use Common;

    private $columns = ['title' , 'description' , 'published' ,'price' , 'image'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();

        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     /*
        $car = new Car();
        $car->title = $request->title;
        $car->description = $request->description;
        $car->published = (isset($request->published))? true: false;
        $car->price = $request->price;

        $car->save();
        */
       // $data = $request->only($this->columns);
        //$data['published'] = isset($data['published'])? true : false;
        $messages=[
            'title.required'=>'لم يتم ادخال العنوان',
            'description.required'=>'يرجي ادخال الوصف',
        ];
        $data = $request->validate([
            'title'=>'required|string|max:50',
            'description'=>'required|string|max:100',
            'price'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data ['image']= $fileName;
        $data['published'] = isset($request['published']);
            Car::create($data);
        return 'Car added successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findORFail($id);
        return view('showCar', compact('car'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    
        $car = Car::findORFail($id);

        return view('editCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    
            //$data = $request->only($this->columns);
            //$data['published'] = isset($data['published'])? true:false;
            // Car::where('id', $id)->update($data);
           // Car::where('id', $id)->update($request->only($this->columns));
         $data = $request->validate([
            'title'      =>'required|string|max:50',
            'description'=>'required|string|max:100',
            'price'      =>'required|string',
        ]);
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data ['image']= $fileName;
        $data['published'] = isset($request['published']);


         return ('updated successfully');
            return redirect('car-index');
    
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        car::where('id' , $id)->delete();

        return  redirect('car-index');
    }

    public function trashed(){

        $cars = Car::onlyTrashed()->get();
        return view('trashedCar', compact('cars'));    
    }

    public function restore(string $id): RedirectResponse
    {
        car::where('id' , $id)->restore();

        return  redirect('car-index');
    }

    public function forcedelete(string $id): RedirectResponse
    {
        car::where('id' , $id)->forcedelete();

        return  redirect('trashed-car');
    }

}
