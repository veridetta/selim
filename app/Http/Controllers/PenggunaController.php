<?php

namespace App\Http\Controllers;

use App\Models\Absensis;
use App\Models\Cutis;
use App\Models\Lamarans;
use App\Models\Mundurs;
use App\Models\Pelanggarans;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function dashboard()
  {
    $pageConfigs = ['showMenu' => true,'mainLayoutType'=>'vertical'];
    $breadcrumbs = [ ['link' => "javascript:void(0)", 'name' => auth()->user()->role], ['name' => "Beranda"]];

    $data=Lamarans::where('id_users','=',auth()->user()->id)->first();
    $val = array('primary','secondary','warning','danger','info');
    return view('layouts/users/dashboard', ['val'=>$val,'data'=>$data,'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
  }

  public function data()
  {
    $pageConfigs = ['showMenu' => true,'mainLayoutType'=>'vertical'];
    $breadcrumbs = [ ['link' => "javascript:void(0)", 'name' => auth()->user()->role], ['name' => "Data"]];

    $data=Lamarans::where('id_users','=',auth()->user()->id)->first();
    $val = array('primary','secondary','warning','danger','info');
    return view('layouts/users/karyawan/data', ['val'=>$val,'data'=>$data,'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
  }

  public function data_add(Request $request){
    $validator = Validator::make($request->all(), [
      'nip' => 'required',
      'id_users' => 'required',
      'name' => 'required',
      'tpl' => 'required',
      'tgl' => 'required',
      'jk' => 'required',
      'alamat' => 'required',
      'telp' => 'required',
      'email' => 'required',
      'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    if ($validator->fails()) {
      session()->flash('error', 'Periksa ulang kembali.');
      return redirect()->route('profil-karyawan')->withErrors($validator)
      ->withInput();;
    }
    if($request->foto){
      $path_foto = 'foto/'.time().'.foto.'.$request->foto->extension();
      // Public Folder
      $request->foto->storeAs('images', $path_foto,'public');
    }else{
      $path_foto='';
      session()->flash('danger', 'Cek upload foto.');
      return redirect()->route('profil-karyawan');
    }
    $user = Lamarans::updateOrCreate([
        'id' => $request->id
    ], [
        'id_users' => $request->id_users,
        'nip' => $request->nip,
        'nama' => $request->name,
        'tpl' => $request->tpl,
        'tgl' => $request->tgl,
        'jk' => $request->jk,
        'alamat' => $request->alamat,
        'telp' => $request->telp,
        'email' => $request->email,
        'foto' => $path_foto,
        'cv' => 'karyawan',
        'posisi' => 'karyawan'
    ]);
    if($user){
        session()->flash('success', 'Data Berhasil Ditambah.');
        //redirect
    }
    return redirect()->route('profil-karyawan');
  }

  public function absensi()
  {
    $pageConfigs = ['showMenu' => true,'mainLayoutType'=>'vertical'];
    $breadcrumbs = [ ['link' => "javascript:void(0)", 'name' => auth()->user()->role], ['name' => "Absensi"]];

    $data=Lamarans::where('id_users','=',auth()->user()->id)->first();
    $val = array('primary','secondary','warning','danger','info');
    return view('layouts/users/karyawan/absensi', ['val'=>$val,'data'=>$data,'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
  }
  public function absensi_add(Request $request){
    $validator = Validator::make($request->all(), [
      'nip' => 'required',
      'id_users' => 'required',
      'name' => 'required',
      'tanggal' => 'required',
      'in' => 'required',
      'out' => 'required',
      'ket' => 'required',
    ]);
    if ($validator->fails()) {
      session()->flash('error', 'Periksa ulang kembali.');
      return redirect()->route('absensi-karyawan')->withErrors($validator)
      ->withInput();;
    }
    $user = Absensis::updateOrCreate([
        'id' => $request->id
    ], [
        'id_users' => $request->id_users,
        'nip' => $request->nip,
        'nama' => $request->name,
        'tanggal' => $request->tanggal,
        'in' => $request->in,
        'out' => $request->out,
        'ket' => $request->ket,
    ]);
    if($user){
        session()->flash('success', 'Data Berhasil Ditambah.');
        //redirect
    }
    return redirect()->route('absensi-karyawan');
  }
  public function absensi_data()
  {
    $user=Absensis::where('id_users','=',auth()->user()->id)->get();
    return ['data' => $user];
  }

  public function cuti()
  {
    $pageConfigs = ['showMenu' => true,'mainLayoutType'=>'vertical'];
    $breadcrumbs = [ ['link' => "javascript:void(0)", 'name' => auth()->user()->role], ['name' => "Cuti"]];

    $data=Lamarans::where('id_users','=',auth()->user()->id)->first();
    $val = array('primary','secondary','warning','danger','info');
    return view('layouts/users/karyawan/cuti', ['val'=>$val,'data'=>$data,'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
  }
  public function cuti_add(Request $request){
    $validator = Validator::make($request->all(), [
      'nip' => 'required',
      'id_users' => 'required',
      'name' => 'required',
      'tanggal' => 'required',
      'status' => 'required',
      'jabatan' => 'required',
      'alasan' => 'required',
      'lama' => 'required',
    ]);
    if ($validator->fails()) {
      session()->flash('error', 'Periksa ulang kembali.');
      return redirect()->route('cuti-karyawan')->withErrors($validator)
      ->withInput();;
    }
    $user = Cutis::updateOrCreate([
        'id' => $request->id
    ], [
        'id_users' => $request->id_users,
        'nip' => $request->nip,
        'nama' => $request->name,
        'tanggal' => $request->tanggal,
        'status' => $request->status,
        'jabatan' => $request->jabatan,
        'alasan' => $request->alasan,
        'lama' => $request->lama,
    ]);
    if($user){
        session()->flash('success', 'Data Berhasil Ditambah.');
        //redirect
    }
    return redirect()->route('cuti-karyawan');
  }
  public function cuti_data()
  {
    $user=Cutis::where('id_users','=',auth()->user()->id)->get();
    return ['data' => $user];
  }

  public function gaji(Request $request)
  {
    $pageConfigs = ['showMenu' => true,'mainLayoutType'=>'vertical'];
    $breadcrumbs = [ ['link' => "javascript:void(0)", 'name' => auth()->user()->role], ['name' => "Slip Gaji"]];
    $months = Absensis::get()->groupBy(function($d) {return Carbon::parse($d->created_at)->format('m');});
    if($request->bulan){
      
    }else{
      //$dates=NULL;
    }
    $data=Lamarans::where('id_users','=',auth()->user()->id)->first();
    $val = array('primary','secondary','warning','danger','info');
    return view('layouts/users/karyawan/gaji', ['val'=>$val,'data'=>$data,'months'=>$months,'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
  }
  public function slip(Request $request)
  {
    $bulan=$request->bulan;
    $tahun = $request->tahun;
    $slip = Absensis::whereMonth('tanggal','=',$bulan)->whereYear('tanggal','=',$tahun)->get();
    $user = Lamarans::where('id_users','=',auth()->user()->id)->first();
    $fee=50000;
    $bpjs=50000;
    $jamsos=30000;
    $gaji_kotor=$fee*$slip->count();
    $gaji_bulan = ($fee*$slip->count())-$jamsos-$bpjs;
    $total_pot = $jamsos+$bpjs;
    $sekarang=Carbon::now()->format('d-m-Y');
    $arr= array(
      "nama"=>$user->nama,
      "nip"=>$user->nip,
      "bulan"=>$bulan,
      "tahun"=>$tahun,
      "gaji_kotor"=>$gaji_kotor,
      "gaji"=>$gaji_bulan,
      "bpjs" => $bpjs,
      "jamsos"=>$jamsos,
      "total_pot"=>$total_pot,
      "sekarang"=>$sekarang
    );
    if($request->download=="download"){
      $pdf = Pdf::loadView('layouts/users/karyawan/slip', ['data'=>$arr])->setPaper('a4', 'landscape');;
      return $pdf->download('Gaji-Karyawan.pdf');
    }else{
      return view('layouts/users/karyawan/slip',['data'=>$arr]);
    }
    
  }
  public function mundur(Request $request)
  {
    $pageConfigs = ['showMenu' => true,'mainLayoutType'=>'vertical'];
    $breadcrumbs = [ ['link' => "javascript:void(0)", 'name' => auth()->user()->role], ['name' => "Pengunduran Diri"]];
    $mundur = Mundurs::where('id_users','=',auth()->user()->id)->first();
    $data=Lamarans::where('id_users','=',auth()->user()->id)->first();
    $val = array('primary','secondary','warning','danger','info');
    return view('layouts/users/karyawan/pengunduran', ['val'=>$val,'data'=>$data,'mundur'=>$mundur,'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
  }
  public function mundur_add(Request $request){
    $validator = Validator::make($request->all(), [
      'nip' => 'required',
      'id_users' => 'required',
      'name' => 'required',
      'cv' => "required|mimes:pdf|max:10000"
    ]);
    if ($validator->fails()) {
      session()->flash('error', 'Periksa ulang kembali.');
      return redirect()->route('mundur-karyawan')->withErrors($validator)
      ->withInput();;
    }
    if($request->cv){
      $path_cv = 'cv/'.time().'.cv.'.$request->cv->extension();
      // Public Folder
      $request->cv->storeAs('files', $path_cv,'public');
    }else{
      $path_cv='';
      session()->flash('danger', 'Cek upload cv.');
    return redirect()->route('mundur-pelamar');
    }
    $user = Mundurs::updateOrCreate([
        'id' => $request->id
    ], [
        'id_users' => $request->id_users,
        'nip' => $request->nip,
        'nama' => $request->name,
        'file' => $path_cv,
        'status' => 'Pengajuan'
    ]);
    if($user){
        session()->flash('success', 'Data Berhasil Ditambah.');
        //redirect
    }
    return redirect()->route('mundur-karyawan');
  }

  public function mundur_download(Request $request)
    {
      $mundur = Mundurs::where('id_users','=',auth()->user()->id)->first();
        $path = public_path("storage/files/$mundur->file");
        $fileName = 'Pengunduran-diri.pdf';

        return Response::download($path, $fileName, ['Content-Type: application/pdf']);
    }
  
    public function pelanggaran_data()
    {
      $user=Pelanggarans::where('id_users','=',auth()->user()->id)->get();
      return ['data' => $user];
    }
    public function pelanggaran()
    {
      $pageConfigs = ['showMenu' => true,'mainLayoutType'=>'vertical'];
      $breadcrumbs = [ ['link' => "javascript:void(0)", 'name' => auth()->user()->role], ['name' => "Cuti"]];
      $langgar=Pelanggarans::where('id_users','=',auth()->user()->id)->first();
      $data=Lamarans::where('id_users','=',auth()->user()->id)->first();
      $val = array('primary','secondary','warning','danger','info');
      return view('layouts/users/karyawan/pelanggaran', ['val'=>$val,'data'=>$data,'langgar'=>$langgar,'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    }
}
