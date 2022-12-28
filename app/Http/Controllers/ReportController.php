<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Report;

class ReportController extends Controller
{
    public function index(Request $request,$id)
    {
        $seller = Seller::where('id', $id)->first();
        return view('report', compact('seller'));
    }

    public function store(Request $request)
    {
        $seller_id = $request->get('seller_id');
        $ValidatedData = $request->validate([
            'user_id' => 'required',
            'seller_id' => 'required',
            'subject' => 'required',
            'content' => 'required',
            'bukti' => 'required|image'
        ]);

        if($request->file('bukti')){
            $ValidatedData['bukti'] = $request->file('bukti')->store('report-img');
        }

        Report::create($ValidatedData);

        return redirect('/toko' . '/' . $seller_id)->with('success', 'Registrasi berhasil');
    }

    public function indexAdmin()
    {
        $report = Report::paginate(8);
        return view('dashboard.report.index', compact('report'));
    }
}
