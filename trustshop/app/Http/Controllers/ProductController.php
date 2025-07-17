<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Product;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $shop = Shop::with('user')->find($id);
        $products = Product::where('shop_id', $id)->get();
        return view('products.create', compact('shop', 'products'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|integer',
            'stock' => 'required|integer',
        ]);
        $product = new Product();
        $product->shop_id = $request->shop_id;
        $product->user_id = auth()->id();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock =  $request->stock;
        $product->save();

        return redirect()->route('shops.show', $product->shop_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::with('shop')->find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        $shop = $product->shop;
        return view('products.edit', compact('product', 'shop'));
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
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|integer',
            'stock' => 'required|integer',
        ]);
        $product = Product::find($id);
        $product->shop_id = $request->shop_id;
        $product->user_id = auth()->id();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock =  $request->stock;
        $product->update($request->all());
        return redirect()->route('shops.show', $product->shop_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('shops.show', $product->shop_id);
    }

    public function purchase($id)
    {
        $product = Product::find($id);
        $product->stock = $product->stock - 1;
        $product->save();
        return redirect()->back();
    }

    public function csv($id)
    {
        $products = Product::where('shop_id', $id)->get();
        
        $filename = '商品一覧.csv';
        $csvHeader = ['商品名', '説明', '価格', '在庫'];
        $temps = [];
        array_push($temps, $csvHeader);
        foreach($products as $product){
            $temp = [
                $product->name,
                $product->description,
                $product->price,
                $product->stock,
            ];
            array_push($temps, $temp);
        };
        $stream = fopen('php://temp', 'r+b');
        foreach ($temps as $temp) {
            fputcsv($stream, $temp);
        }
        rewind($stream);
        $csv = str_replace(PHP_EOL, "\r\n", stream_get_contents($stream));
        $csv = mb_convert_encoding($csv, 'SJIS-win', 'UTF-8');
        $headers = array(
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename='.$filename,
        );
        return Response::make($csv, 200, $headers);

    }
}
