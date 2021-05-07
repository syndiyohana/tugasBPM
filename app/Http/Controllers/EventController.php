<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
 
class EventController extends Controller
{
    public function show()
    {
        $event = DB::table('event')->orderby('id', 'desc')->get();
        return view('show', ['event'=>$event]);
    }
    public function add_process(Request $event)
    {
        DB::table('event')->insert([  //memasukkan data event yang telah disimpan ke database
            'nama'=>$event->nama,
            'tanggal'=>$event->tanggal,
            'speaker'=>$event->speaker,
            'deskripsi'=>$event->deskripsi
        ]);
 
        return redirect()->action('App\Http\Controllers\EventController@show');
    }
    public function add()
    {
        return view('add');
    }
    public function detail($id)
    {
        $event = DB::table('event')->where('id', $id)->first(); //menampilkan detail dari event
        return view('detail', ['event'=>$event]);
    }
    public function show_by_admin()
    {
        $event = DB::table('event')->orderby('id', 'desc')->get();
        return view('adminshow', ['event'=>$event]);
    }
    public function edit($id)
    {
        $event = DB::table('event')->where('id', $id)->first();
        return view('edit', ['event'=>$event]);
    }
    public function edit_process(Request $event)
    {
        $id = $event->id;
        $nama = $event->nama;
        $tanggal = $event->tanggal;
        $speaker = $event->speaker;
        $deskripsi = $event->deskripsi;
        DB::table('event')->where('id', $id) //update data event sesuai dengan yang diubah
                            ->update(['nama' => $nama,'tanggal' => $tanggal,'speaker' => $speaker, 'deskripsi' => $deskripsi]);
        Session::flash('success', 'Event berhasil diedit');
        return redirect()->action('App\Http\Controllers\EventController@show_by_admin');
    }
    public function delete($id)
    {
        //menghapus event dengan ID sesuai pada URL
        DB::table('event')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika event berhasil dihapus
        Session::flash('success', 'Event berhasil dihapus');
        return redirect()->action('App\Http\Controllers\EventController@show_by_admin');
    }
}