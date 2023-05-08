<?php
  
namespace App\Http\Controllers;

use App\Models\Modelperubahanmodal;
use Illuminate\Http\Request;
  
class PerubahanmodalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perubahanmodal.index');
    }
  
   
    public function create()
    {
        return view('perubahanmodal.create');
    }
  
    
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'voucher' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
        ]);
      
        Modelperubahanmodal::create($request->all());
       
        return redirect()->route('bukubesar.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Modelperubahanmodal $books)
    {
        return view('bukubesar.show',compact('book'));
    }
  
   
    public function edit(Modelperubahanmodal $books)
    {
        return view('bukubesar.edit',compact('book'));
    }
  
   
    public function update(Request $request, Modelperubahanmodal $book)
    {
        $request->validate([
            'tanggal' => 'required',
            'voucher' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
        ]);
      
        $book->update($request->all());
      
        return redirect()->route('akuns.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Modelperubahanmodal $book)
    {
        $book->delete();
       
        return redirect()->route('bukubesar.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $book = [
            'dataAkun' => Modelperubahanmodal::all()
        ];
        return View('akun.index', $book);
    }

}