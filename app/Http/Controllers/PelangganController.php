<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggans = User::where('usertype', 'user')->get();
        return view ('admin.pelanggan.home', compact('pelanggans'));
    }

    public function edit($id){
        $users = User::findOrFail($id);
        return view ('admin.pelanggan.update', compact('users'));
    }

    public function update(Request $request, $id){
        $users = User::findOrFail($id);
        $name = $request->name;
        $email = $request->email;
        // $price = $request->price;

        $users->name = $name;
        $users->email = $email;
        // $users->price = $price;
        $data = $users->save();

        if ($data) {
            return redirect()->route('admin/pelanggans')->with('success', 'Accounts Update Successfully');
        } else {
            return redirect()->route('admin/pelanggans/update')->with('error', 'Some Problem occure');
        }

    }

    public function delete($id){
        $users = User::findOrFail($id)->delete();

        if ($users) {
            return redirect()->route('admin/pelanggans')->with('success', 'Accounts Delete Successfully');
        } else {
            return redirect()->route('admin/pelanggans')->with('error', 'Accounts Not Delete Successfully');
        }
    }
}
