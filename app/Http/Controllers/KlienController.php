<?php
  
namespace App\Http\Controllers;
  
use App\Models\Klien;
use Illuminate\Http\Request;

  
class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kliens = Klien::orderBy('id', 'asc')->paginate(10);
      
        return view('kliens.index',compact('kliens'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
   
    public function create()
    {
        return view('kliens.create');
    }
  
    
    public function store(Request $request)
    {
        $request->validate([
            'kode_klien' => 'required',
            'date' => 'required',
            'nama_klien' => 'required',
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'ammount' => 'required',
        ]);
      
        Klien::create($request->all());
       
        return redirect()->route('kliens.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Klien $klien)
    {
        return view('kliens.show',compact('klien'));
    }
  
   
    public function edit(Klien $klien)
    {
        return view('kliens.edit',compact('klien'));
    }
  
   
    public function update(Request $request, Klien $klien)
    {
        $request->validate([
            'kode_klien' => 'required',
            'date' => 'required',
            'nama_klien' => 'required',
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'ammount' => 'required',
        ]);
      
        $klien->update($request->all());
      
        return redirect()->route('kliens.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Klien $klien)
    {
        $klien->delete();
       
        return redirect()->route('kliens.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $klien = [
            'dataKlien' => Klien::all()
        ];
        return View('kliens.index', $klien);
    }

}