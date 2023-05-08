<?php
  
namespace App\Http\Controllers;
  
use App\Models\Keuangan;
use Illuminate\Http\Request;

  
class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('keuangans.index');    
    }
  
   
    public function create()
    {
        return view('keuangans.create');
    }

  
    
    public function store(Request $request )
    {
        
        Keuangan::create($request->all());
        
        return redirect()->route('keuangans.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Keuangan $keuangan)
    {
        return view('keuangans.show',compact('keuangan'));
    }
  
   
    public function edit(Keuangan $keuangan)
    {
        
        return view('keuangans.edit',compact('keuangan'));

    }
  
   
    public function update(Request $request, Keuangan $keuangan)
    {
        
      
        $keuangan->update($request->all());
      
        return redirect()->route('keuangans.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Keuangan $keuangan)
    {
        $keuangan->delete();
       
        return redirect()->route('keuangans.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $keuangan = [
            'Laporan Posisi Keuangan' => Keuangan::all()
        ];
        return View('keuangans.index', $keuangan);
    }

}