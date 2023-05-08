<?php
  
namespace App\Http\Controllers;

use App\Models\Modelbukubesar;
use Illuminate\Http\Request;
  
class BukubesarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bukubesar.index');
    }
  
   
    public function create()
    {
        return view('bukubesar.create');
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
      
        Modelbukubesar::create($request->all());
       
        return redirect()->route('bukubesar.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Modelbukubesar $books)
    {
        return view('bukubesar.show',compact('book'));
    }
  
   
    public function edit(Modelbukubesar $books)
    {
        return view('bukubesar.edit',compact('book'));
    }
  
   
    public function update(Request $request, Modelbukubesar $book)
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
    
    public function destroy(Modelbukubesar $book)
    {
        $book->delete();
       
        return redirect()->route('bukubesar.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $book = [
            'dataAkun' => Modelbukubesar::all()
        ];
        return View('akun.index', $book);
    }

}