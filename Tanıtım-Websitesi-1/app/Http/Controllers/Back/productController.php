<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use File;

use Illuminate\Support\Str;
use App\Http\Requests\productCreateRequest;
use App\Http\Requests\productUpdateRequest;

use App\Models\Product;

class productController extends Controller
{
    public function product()
    {
        $product = Product::all();
        return view('layouts.back.contents.create',compact('product'));
    }
    public function productPost(productCreateRequest $request)
    {
        $product =  new Product;
        $product->productName = $request->product;
        $product->stock = $request->stock;

        if ($request->hasFile('image')) {
            
            $imageName = Str::slug($request->product).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('products'),$imageName);

            $product->image = 'products/'.$imageName;
        }
        $product->save();

        toastr()->success('Ürün başarılı bir şekilde eklendi');
        return redirect()->route('admin.product');
    }
    public function update($id)
    {
        $products = Product::whereId($id)->get();
        return view('layouts.back.contents.update',compact('products'));
    }
    public function updatePost(productUpdateRequest $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->productName = $request->product;
        $product->stock = $request->stock;

        if($request->hasFile('image')){
            $imageName = Str::slug($request->product).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('products'),$imageName);

            $product->image='products/'.$imageName;
        }

        $product->update();

        toastr()->success('Ürün başarılı bir şekilde güncellendi.');
        return redirect()->route('admin.product');
    }
    public function productDelete($id)
    {
        Product::whereId($id)->delete();

        toastr()->warning('Ürün silindi.');
        return redirect()->route('admin.product');
    }


}
