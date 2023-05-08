<?php

namespace App\Http\Controllers;

use App\Models\Aruskas;
use Illuminate\Http\Request;

class Aruskascontroller extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aruskass.index');    
    }
  
   
    public function create()
    {
        return view('aruskass.create');
    }

  
    
    public function store(Request $request )
    {
        
        Aruskas::create($request->all());
        
        return redirect()->route('aruskass.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Aruskas $aruskas)
    {
        return view('aruskass.show',compact('aruskas'));
    }
  
   
    public function edit(Aruskas $aruskas)
    {
        
        return view('aruskass.edit',compact('aruskas'));

    }
  
   
    public function update(Request $request, Aruskas $aruskas)
    {
        
      
        $aruskas->update($request->all());
      
        return redirect()->route('aruskass.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Aruskas $aruskas)
    {
        $aruskas->delete();
       
        return redirect()->route('aruskass.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $aruskas = [
            'Laporan Arus Kas' => Aruskas::all()
        ];
        return View('aruskass.index', $aruskas);
    }

}
