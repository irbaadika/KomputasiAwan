<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'toko' => 'required',
            'alamat' => 'required',
            'npwp' => 'required|digits:16',
            'doc' => 'required|mimes:pdf'
            
        ]);

        $seller = new Seller();
        $seller->user_id = $request->user()->id;
        $seller->toko = $request->get('toko');
        $seller->alamat = $request->get('alamat');
        $seller->npwp = $request->get('npwp');

        if($request->file('doc')){
            $seller->doc = $request->file('doc')->store('seller-doc');
        }

        $user = User::find($request->user()->id);
        if($user){
            $user->role = 'seller';

            $user->save();
        }


        $seller->save();
     
        
        return redirect('/')->with('successAdd', 'Registrasi berhasil, silhakan menunggu verifikasi dari admin');

    }

    public function verify($id)
    {

        // $id = 7;
        $seller = Seller::where('user_id', $id)->first();
        $seller->verify = '1';

        $seller->save();
        

        return redirect('/admin/seller');
    }

    public function block($id)
    {

        $seller = Seller::where('user_id', $id)->first();
        $seller->verify = '0';

        $seller->save();
        

        return redirect('/admin/seller');
    }

    
}
