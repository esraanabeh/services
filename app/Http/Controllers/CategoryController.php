<?php

namespace App\Http\Controllers;
use App\Models\Category;
use LaravelLocalization;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
        return view('category.index',['category'=>Category::select('id','name'.LaravelLocalization::getCurrentLocale().' as name','image')->get()]);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageName='';
         
         if($request->hasFile('image')){
             
         $imageName = time().'.'.$request->image->extension();  
      
         $request->image->move(public_path('image'), $imageName);
   
             $image=$request->file('image');
             
         }
 
        $category= new Category();
   
         $namear = $request->namear;
         $category->namear = $namear;

         $nameen = $request->nameen;
         $category->nameen = $nameen;

         $category->image = $imageName;
         $category->save();
     
         return redirect(route('category.index'));
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('category.edit',[
            
            
            'category' => Category::find($id)
             
             
             ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $namear = $request->namear;
        $nameen = $request->nameen;
        
        if($request->hasFile('image')){
            
            $imageName = time().'.'.$request->image->extension();  
         
            $request->image->move(public_path('image'), $imageName);
      
                $image=$request->file('image');
                
            }



        $category = Category::findOrFail($id);
        $category->namear = $namear;
        $category->nameen = $nameen;
        $category->image = $imageName;
        $category->save();
       
        return redirect(route('category.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        // dd($category,$id);
        Unlink(public_path('image') .'/'. $category->image);
        $category->delete();
        return redirect(route('category.index'));
    }
}
