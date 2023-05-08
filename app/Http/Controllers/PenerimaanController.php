<?php
  
namespace App\Http\Controllers;
  
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

  
class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $penerimaans = Penerimaan::oldest()->paginate(10);
      
        return view('penerimaans.index',compact('penerimaans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
   
    public function create()
    {
        return view('penerimaans.create');
    }

  
    
    public function store(Request $request )
    {
        $request->validate([
            'kode_akun' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
            'nama_akun' => 'required',
        ]);

       
        Penerimaan::create($request->all());
        
        return redirect()->route('penerimaans.index')
                        ->with('success','Data created successfully.');
    }
  
   
    public function show(Penerimaan $penerimaan)
    {
        return view('penerimaans.show',compact('penerimaan'));
    }
  
   
    public function edit(Penerimaan $penerimaan)
    {
        
        return view('penerimaans.edit',compact('penerimaan'));

    }
  
   
    public function update(Request $request, Penerimaan $penerimaan)
    {
        $request->validate([
            'kode_akun' => 'required',
            'keterangan' => 'required',
            'debit' => 'required',
            'kredit' => 'required',
            'nama_akun' => 'required',
        ]);
      
        $penerimaan->update($request->all());
      
        return redirect()->route('penerimaans.index')
                        ->with('success','Data updated successfully');
    }
    
    public function destroy(Penerimaan $penerimaan)
    {
        $penerimaan->delete();
       
        return redirect()->route('penerimaans.index')
                        ->with('success','Data deleted successfully');
    }

    
    public function data()
    {
        $penerimaan = [
            'Penerimaan Kas atau bank' => Penerimaan::all()
        ];
        return View('penerimaans.index', $penerimaan);
    }

}