<?php

namespace App\Http\Controllers;

use App\Models\Penutup;
use Illuminate\Http\Request;

class PenutupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penutups = Penutup::latest()->paginate(10);
      
        return view('penutups.index',compact('penutups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
   
    public function create()
    {
        return view('penutups.create');
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
    
        Penutup::create($request->all());
        
        return redirect()->route('penutups.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Penutup $penutup)
    {
        return view('penutups.show',compact('penutup'));
    }
  
   
    public function edit(Penutup $penutup)
    {
        return view('penutups.edit',compact('penutup'));
    }
  
   
    public function update(Request $request, Penutup $penutup)
    {
        $request->validate([
            'kode_akun' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
            'nama_akun' => 'required',
        ]);
      
        $penutup->update($request->all());
      
        return redirect()->route('penutups.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Penutup $penutup)
    {
        $penutup->delete();
       
        return redirect()->route('penutups.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $penutup = [
            'Jurnal Penutup' => Penutup::all()
        ];
        return view('penutups.index', $penutup);
    }

}