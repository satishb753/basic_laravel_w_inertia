<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $products = Product::where('user_id', $request->user()->id)->get();
        $products = $request->user()->withSum('products','price')->get()->toArray();
        // $products = $request->user()->withCount('products')->get()->toArray();
        // dd($products);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        if ($image = $request->file('image')) {
            $new_imageName  = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $new_imageName);
        }

        $product = Product::create(
            [
            'user_id' => $request->user()->id,
            'title' => $validated['title'],
            'price' => $validated['price'],
            'image' => $new_imageName
            ]
        );

        return redirect()->route('products.index')->with('msg', 'Product is inserted Successfully');
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
    }
}
