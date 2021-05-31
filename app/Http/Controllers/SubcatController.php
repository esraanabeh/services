<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Subcat;
use App\Models\Category;
use App\Models\Cart;

use LaravelLocalization;

use Illuminate\Http\Request;


class SubcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $Subcats = Subcat::latest()->get();
        foreach($Subcats as $Subcat){
            $categoryid =$Subcat->category_id;
            $categories = Category::all();

            $category = $categories->find($categoryid);
            $categoryname = $category->nameen;
            $Subcat->categoryname = $categoryname;
        }
        
        // if ($request->ajax()) {
        //     $data = Subcat::latest()->get();
         
        // }
      
        return view('subcat.index',['subcat'=>Subcat::select('id','name'.LaravelLocalization::getCurrentLocale().' as name',
        'category_id'
        ,'image')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('Subcat.create');
        }
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
      

    $Subcat= new Subcat();
    
        $namear = $request->namear;
        $Subcat->namear = $namear;

        $nameen = $request->nameen;
        $Subcat->nameen = $nameen;

        // $categorynamear = $request->categorynamear;
        // $Subcat->categorynamear = $categorynamear;

        // $categorynameen = $request->categorynameen;
        // $Subcat->categorynameen = $categorynameen;
      
        $category_id=$request->category_id;
        $Subcat->category_id = $category_id;

        $Subcat->image = $imageName;

         $Subcat->save();    
     
            
                
     
       return view('Subcat.index');
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
        return view('subcat.edit',[
            
            
            'subcat' => Subcat::find($id)
             
             
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

        $categorynamear = $request->categorynamear;
        $categorynameen = $request->categorynameen;

        $category_id = $request->category_id;
        
        if($request->hasFile('image')){
            
            $imageName = time().'.'.$request->image->extension();  
         
            $request->image->move(public_path('image'), $imageName);
      
                $image=$request->file('image');
                
            }



        $Subcat = Subcat::findOrFail($id);
        $Subcat->namear = $namear;
        $Subcat->nameen = $nameen;
        $Subcat->category_id = $category_id;
        $Subcat->image = $imageName;
        // $Subcat->categorynamear = $categorynamear;
        // $Subcat->categorynameen = $categorynameen;
        
        $Subcat->save();
       
        return redirect(route('subcat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Subcat = Subcat::find($id);
        // dd($category,$id);
        Unlink(public_path('image') .'/'. $Subcat->image);
        $Subcat->delete();
        return redirect(route('subcat.index'));
    }

    function addToCart(Request $req)
    {
       $cart= new Cart;
       $cart->subcat_id=$req->subcat_id;
    

       $Subcats=DB::table('cart')
       ->join('subcats','cart.subcat_id','=','subcats.id')
       ->select('subcats.*')
       ->get();
       $cart->save();
    //    dd($Subcats);
       return view('user.complete',['subcats'=>$Subcats]);
            
       
       
    }

   
}
