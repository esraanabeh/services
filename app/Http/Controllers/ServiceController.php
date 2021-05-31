<?php

namespace App\Http\Controllers;
use App\Models\Subcat;
use App\Models\Service;
use App\Models\order;
use Illuminate\Support\Facades\DB;

use LaravelLocalization;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $services = Service::latest()->get();
        foreach($services as $service){
            $subcatid =$service->subcat_id;
            $Subcats = Subcat::all();

            $Subcat = $Subcats->find($subcatid);
            // $Subcatname = $Subcat->namear;
            $Subcatname = $Subcat->nameen;
            $service->subcatname = $Subcatname;


            
        } 
        // return view('service.index',compact('service'));

        return view('service.index',['service'=>Service::select('id','name'.LaravelLocalization::getCurrentLocale().' as name',
        'subcat_id',
        'count')->get()]);
    
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('service.create');
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
        
    $service= new Service();
    
    $namear = $request->namear;
    $service->namear = $namear;

    $nameen = $request->nameen;
    $service->nameen = $nameen;

    // $subcatnamear = $request->subcatnamear;
    // $service->subcatnamear = $subcatnamear;

    // $subcatnameen = $request->subcatnameen;
    // $service->subcatnameen = $subcatnameen;
  
    $subcat_id=$request->subcat_id;
    $service->subcat_id = $subcat_id;
    $service->save();    
 
        
            
 
   return view('service.index');
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
        return view('service.edit',[
            
            
            'service' => Service::find($id)
             
             
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
        // $subcatnamear = $request->subcatnamear;
        $nameen = $request->nameen;
        // $subcatnameen = $request->subcatnameen;
        $subcat_id = $request->subcat_id;

        $service = Service::findOrFail($id);
        $service->namear = $namear;
        $service->nameen = $nameen;
        // $service->subcatnamear = $subcatnamear;
        // $service->subcatnameen = $subcatnameen;
        $service->subcat_id = $subcat_id;
        
        
        $service->save();
       
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        
        
        $service->delete();
        return redirect(route('service.index'));
    }

    


    function addToOrder(Request $req)
    {
       $order= new order;
       $order->service_id=$req->service_id;
    

       $services=DB::table('order')
       ->join('services','order.service_id','=','services.id')
       ->select('services.*')
       ->get();
       $order->save();
       dd($services);
    //    return view('user.complete',['services'=>$services]);
            
       
       
    }
}
