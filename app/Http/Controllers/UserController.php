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
        return view('user.index');
    }

    public function store()
    {
        return view('user.index');
    }

    public function show()
    {
        return view('user.index');
    }

    public function edit()
    {
        return view('user.index');
    }

    public function update()
    {
        return view('user.index');
    }

    public function destroy()
    {
        return view('user.index');
    }
}
