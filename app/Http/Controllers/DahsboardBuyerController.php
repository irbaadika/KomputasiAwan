<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class DahsboardBuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('role','buyer')->paginate(5);
        return view('dashboard.buyer.index', compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.buyer.show', ['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.buyer.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->file('photo')){
            $var = 'Photo Profile';
            $request->validate([
                'photo' => 'image|file|max:2048'
            ]);
    
            $user = User::where('id', $id)->first();
    
            if($request->file('photo')){
                if($request->oldPhoto){
                    Storage::delete($request->oldPhoto);
                }
                $user->photo = $request->file('photo')->store('user-img');
            }
            
            $user->save();
        }elseif($request->get('name')){
            $var = 'Nama';
            $user = User::where('id', $id)->first();
            $user->name = $request->get('name');
            $user->save();
        }elseif($request->get('username')){
            $var = 'Username';
            $user = User::where('id', $id)->first();
            $user->username = $request->get('username');
            $user->save();
        }elseif($request->get('email')){
            $var = 'Email';
            $user = User::where('id', $id)->first();
            $user->email = $request->get('email');
            $user->save();
        }elseif($request->get('alamat_id')){
            $var = 'Alamat';
            $user = User::where('id', $id)->first();
            $user->alamat_id = $request->get('alamat_id');
            $user->save();
        }elseif($request->get('phone')){
            $var = 'No HP';
            $request->validate([
                'phone' => 'nullable|numeric',
            ]);
            $user = User::where('id', $id)->first();
            $user->phone = $request->get('phone');
            $user->save();
        }


        return redirect('/profile' . '/' . $id )->with('success', $var . ' berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        if($user->photo){
            Storage::delete($user->photo);
        }
        $user->delete();
        return redirect('/admin/buyer')->with('success', 'Akun telah dihapus');

    }
}
