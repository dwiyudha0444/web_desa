<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use DB;

class BeritaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::orderBy('id','DESC')->get();
        return view('admin.berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:45',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---aoakah user ingin upload foto
            if(!empty($request->foto)){
                $fileName=$request->judul.'.'.$request->foto->extension();
                //$fileName=$request->foto->getClientOriginalName();
                $request->foto->move(public_path('berita/img'),$fileName);
            }
            else{
                $fileName = '';
            }
            //insert data dari request form
            DB::table('berita')->insert(
                [
                    'judul' => $request->judul,
                    'tanggal' => $request->tanggal,
                    'keterangan' => $request->keterangan,
                    'foto' => $fileName,
                    'created_at' => now(),
              ]);
                

            
            return redirect()->route('beritaa.index')
            ->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ta = Berita::find($id);
        return view('admin.berita.edit',compact('ta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ta = Berita::find($id);
        Berita::where('id',$id)->delete();
        return redirect()->route('beritaa.index')
            ->with('success','Data Berhasil Dihapus');
    }
}
