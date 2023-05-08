<?php
  
namespace App\Http\Controllers;
  
use App\Models\Labarugi;
use Illuminate\Http\Request;

  
class LabarugiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
      
        return view('labarugis.index');
            
    }
  
   
    public function create()
    {
        return view('labarugis.create');
    }

  
    
    public function store(Request $request )
    {
        

       
        Labarugi::create($request->all());
        
        return redirect()->route('labarugis.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Labarugi $labarugi)
    {
        return view('labarugis.show',compact('labarugi'));
    }
  
   
    public function edit(Labarugi $labarugi)
    {
        
        return view('labarugis.edit',compact('labarugi'));

    }
  
   
    public function update(Request $request, Labarugi $labarugi)
    {
        
      
        $labarugi->update($request->all());
      
        return redirect()->route('labarugis.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Labarugi $labarugi)
    {
        $labarugi->delete();
       
        return redirect()->route('labarugis.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $labarugi = [
            'Laporan Laba Rugi' => Labarugi::all()
        ];
        return View('labarugis.index', $labarugi);
    }

}