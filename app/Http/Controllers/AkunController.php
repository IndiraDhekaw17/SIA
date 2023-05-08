<?php
  
namespace App\Http\Controllers;
  

use App\Models\Akun;
use Illuminate\Http\Request;
  
class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akuns = Akun::orderBy('created_at', 'ASC')->paginate(10);

        return view('akuns.index',compact('akuns'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
          
    }
  
   
    public function create()
    {
        return view('akuns.create');
    }
  
    
    public function store(Request $request)
    {
        $request->validate([
            'kode_akun' => 'required',
            'nama_akun' => 'required',
            'saldo_awal' => 'required',
            'saldo_akhir' => 'required',
            'kategori' => 'required',
        ]);
        Akun::create($request->all());

        return redirect()->route('akuns.index')
                        ->with(['success'=>'Data created successfully!']);
    }
  
   
    public function show(Akun $akun)
    {
        return view('akuns.show',compact('akun'));
    }
  
   
    public function edit(Akun $akun)
    {
        return view('akuns.edit',compact('akun'));
    }
  
   
    public function update(Request $request, Akun $akun)
    {
        $request->validate([
            'kode_akun' => 'required',
            'nama_akun' => 'required',
            'saldo_awal' => 'required',
            'saldo_akhir' => 'required',
            'kategori' => 'required',
        ]);
      
        $akun->update($request->all());
      
        return redirect()->route('akuns.index')
                        ->with('success','Data updated successfully!');
    }
    
    public function destroy($id)
    {
        $akun = Akun::find($id);
        $akun-> delete();
       
        return redirect()->route('akuns.index')
                        ->with('success','Data deleted successfully!');
    }

    
    public function data()
    {
        $akun = [
            'dataAkun' => Akun::all()
        ];
        return View('akuns.index', $akun);
    }
    

   
}