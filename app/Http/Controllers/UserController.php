<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;

class UserController extends Controller
{
    use ValidatesRequests;
    public function data(){
        try{
            $data = User::all();
            return datatables()->of($data)
            ->addColumn('tanggal_dibuat', function ($data) {
                
                $created_at = $data->created_at;
                $createdat = \Carbon\Carbon::parse($created_at)->formatLocalized('%d %B %Y %H:%M');
                
                // Tampilkan tanggal dalam format Indonesia
               
                return $createdat;
            })
            ->addIndexColumn()
            ->make(true);
        } catch (Exception $e) {
            DB::commit();
            return response()->json(
                [
                    'status' => false,
                    'message' => $e->getMessage()
                ]
            );
        }
    }
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi!',
            'unique' => 'Nilai pada kolom :attribute sudah digunakan.',
            'email' => 'Kolom :attribute harus memiliki format email.',
            'regex' => 'Kolom :attribute hanya boleh berisi huruf dan angka.'
        ];

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phone' => 'nullable|regex:/^[a-zA-Z0-9]+$/',
            'address' => 'nullable|regex:/^[a-zA-Z0-9\s]+$/'
        ], $messages);

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();
        if ($user) {
            //redirect dengan pesan sukses
            return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('users.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
        
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => 'Kolom :attribute wajib diisi!',
            'regex' => 'Kolom :attribute hanya boleh berisi huruf dan angka.'
        ];

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'nullable|regex:/^[a-zA-Z0-9]+$/',
            'address' => 'nullable|regex:/^[a-zA-Z0-9\s]+$/'
        ], $messages);

        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();
        if ($user) {
            //redirect dengan pesan sukses
            return redirect()->route('users.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('users.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        
        if ($user) {
            return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('users.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
