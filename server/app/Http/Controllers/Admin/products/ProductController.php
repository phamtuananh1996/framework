<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\ApiController;
use App\Http\Requests\ProductRequests\CreateProductRequest;
use App\Http\Requests\ProductRequests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends ApiController
{
    public function __construct() {
        $this->middleware('jwt.auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category', 'user'])->orderBy('id', 'DESC')->paginate(config('paginate.PAGE_PRODUCT'));
        return $this->response($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = Product::create([
            'category_id' => $request->category_id,
            'user_id' => $this->getUser()->id,
            'name' => $request->name,
            'price' => $request->price,
            'info' => $request->info,
            'image' => $this->doUpload($request->file('image')),
            'image_more' => json_encode($request->image_more),
        ]);
        return $this->response($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->image_more = json_decode($product->image_more);
        return $this->response($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //return $this->response($request->hasFile('image'));
        if ($request->hasFile('image')) {
            if (file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $product->image = $this->doUpload($request->file('image'));
            $product->save();
        }
        $product->update([
            'category_id' => $request->category_id,
            'user_id' => $this->getUser()->id,
            'name' => $request->name,
            'price' => $request->price,
            'info' => $request->info,
            'image_more' => json_encode($request->image_more),
        ]);
        return $this->response($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        $product->delete();
        return $this->response($product);
    }
}
