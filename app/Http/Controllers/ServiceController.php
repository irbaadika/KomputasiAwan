<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alamat;
use App\Models\Seller;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(Request $request,$id)
    {
        $seller = Seller::where('id', $id)->first();
        $alamat = Alamat::where('user_id', $request->user()->id)->paginate(9);
        return view('service', compact('seller', 'alamat'));
    }

    public function store(Request $request)
    {
        $seller_id = $request->get('seller_id');
        $ValidatedData = $request->validate([
            'user_id' => 'required',
            'seller_id' => 'required',
            'type' => 'required',
            'merk' => 'required',
            'phone' => 'required|numeric|min:10',
            'keterangan' => 'required',
            'alamat_id' => 'required',
            'photo' => 'required|image'
        ]);

        if($request->file('photo')){
            $ValidatedData['photo'] = $request->file('photo')->store('service-img');
        }

        Service::create($ValidatedData);

        return redirect('/toko' . '/' . $seller_id)->with('success', 'Registrasi berhasil');
    }

    public function indexSeller(Request $request)
    {
        // $seller = Seller::where('id', $id)->first();
        $seller = Auth::user()->seller;
        $service = Service::where('seller_id', $seller->id)->paginate(7);
        return view('dashboardSeller.service.index', compact('service'));
    }

    public function show($id)
    {
        $service = Service::where('id', $id)->first();
        return view('dashboardSeller.service.show', ['service' => $service]);

    }
}
