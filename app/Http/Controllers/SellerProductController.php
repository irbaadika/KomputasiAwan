<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Merk;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;

class SellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = Auth::user()->seller;
        $product = Product::where('seller_id', $seller->id)->paginate(6);
        return view('dashboardSeller.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $merk = Merk::all();
        $seller = Auth::user()->seller;
        
       return view('dashboardSeller.product.create', [
           'category' => $category,
           'merk' => $merk,
           'seller' => $seller
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $id = $request->get('id');
        $validatedData = $request->validate([
            'merk_id' => 'required',
            'type' => 'required|unique:products',
            'category_id' => 'required',
            'seller_id' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'photo' => 'image|file|max:2048'

        ]);

        if ($request->file('photo')) {
            // $validatedData['photo'] = $request->file('photo')->store('product-img');
            $googleConfigFile = file_get_contents(config_path('key.json'));
            $storage = new StorageClient([
                'keyFile' => json_decode($googleConfigFile, true)
            ]);
            $storageBucketName = config('googlecloud.storage_bucket');
            $bucket = $storage->bucket($storageBucketName);

            //get filename with extension
            $filenamewithextension = pathinfo($request->file('photo')->getClientOriginalName(), PATHINFO_FILENAME);
            // $filenamewithextension = $request->file('photo')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . uniqid() . '.' . $extension;

            Storage::put('public/product-img/' . $filenametostore, fopen($request->file('photo'), 'r+'));

            $filepath = storage_path('app/public/product-img/' . $filenametostore);
            $validatedData['photo'] = $filenametostore;
            $object = $bucket->upload(
                fopen($filepath, 'r'),
                [
                    'predefinedAcl' => 'publicRead',
                    // 'name' => $validatedData['photo']
                ]
            );
        }

        Product::create($validatedData);

        return redirect('/sellerProduct')->with('successAdd', 'Product baru telah ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('category','merk')->where('id', $id)->first();
        return view('dashboardSeller.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('category', 'merk')->where('id', $id)->first();
        $category = Category::all();
        $merk = Merk::all();
        return view('dashboardSeller.product.edit', compact('product', 'category', 'merk'));
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
        $request->validate([
            'merk_id' => 'required',
            'type' => 'required',
            'category_id' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'photo' => 'image|file|max:2048'
            
        ]);

        $product = Product::where('id', $id)->first();
        $product->merk_id = $request->get('merk_id');
        $product->type = $request->get('type');
        $product->category_id = $request->get('category_id');
        $product->deskripsi = $request->get('deskripsi');
        $product->harga = $request->get('harga');

        if($request->file('photo')){
            if($request->oldPhoto){
                Storage::delete($request->oldPhoto);
            }
            $product->photo = $request->file('photo')->store('product-img');
        }
        
        $product->save();

        return redirect('/sellerProduct')->with('success', 'Product berhasil diedit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        if($product->photo){
            Storage::delete($product->photo);
        }
        $product->delete();
        return redirect('/sellerProduct')->with('success', 'Product telah dihapus');
    }
}
