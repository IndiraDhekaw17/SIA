<?php
  
namespace App\Http\Controllers;
  

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

  
class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluarans = Pengeluaran::oldest()->paginate(10);
      
        return view('pengeluarans.index',compact('pengeluarans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
   
    public function create()
    {
        return view('pengeluarans.create');
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
      
        Pengeluaran::create($request->all());
       
        return redirect()->route('pengeluarans.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Pengeluaran $pengeluaran)
    {
        return view('pengeluarans.show',compact('pengeluaran'));
    }
  
   
    public function edit(Pengeluaran $pengeluaran)
    {
        return view('pengeluarans.edit',compact('pengeluaran'));
    }
  
   
    public function update(Request $request, Pengeluaran $pengeluaran)
    {
        $request->validate([
            'kode_akun' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
            'nama_akun' => 'required',
        ]);
      
        $pengeluaran->update($request->all());
      
        return redirect()->route('pengeluarans.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Pengeluaran $pengeluaran)
    {
        $pengeluaran->delete();
       
        return redirect()->route('pengeluarans.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $pengeluaran = [
            'Pengeluaran Kas atau bank' => Pengeluaran::all()
        ];
        return View('Pengeluarans.index', $pengeluaran);
    }

}