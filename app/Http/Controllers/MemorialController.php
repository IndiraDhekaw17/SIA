<?php

namespace App\Http\Controllers;

use App\Models\Memorial;
use Illuminate\Http\Request;

class MemorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memorials = Memorial::oldest()->paginate(10);
      
        return view('memorials.index',compact('memorials'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
   
    public function create()
    {
        return view('memorials.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'kode_akun' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
            'nama_akun' => 'required',
        ]);
    
        Memorial::create($request->all());
        
        return redirect()->route('memorials.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Memorial $memorial)
    {
        return view('memorials.show',compact('memorial'));
    }
  
   
    public function edit(Memorial $memorial)
    {
        return view('memorials.edit',compact('memorial'));
    }
  
   
    public function update(Request $request, Memorial $memorial)
    {
        $request->validate([
            'kode_akun' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
            'nama_akun' => 'required',
        ]);
      
        $memorial->update($request->all());
      
        return redirect()->route('memorials.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Memorial $memorial)
    {
        $memorial->delete();
       
        return redirect()->route('memorials.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $memorial = [
            'Jurnal Memorial' => Memorial::all()
        ];
        return view('memorials.index', $memorial);
    }

}