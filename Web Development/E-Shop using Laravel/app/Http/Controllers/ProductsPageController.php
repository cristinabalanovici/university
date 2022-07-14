<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shop')->with('products', $products);
    }

    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product')->with('product', $product);
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    //CRUD

    public function crud() {
        $products = Product::latest()->paginate(10);
        return view('crud/crud', compact('products'));
    }

    public function crudcreate() {
        return view('crud/create');
    }

    public function store(Product $product, StoreProductRequest $request)
    {
        $product->create($request->validated());
        return redirect()->route('crud.crud')->withSuccess(__('Product created successfully.'));
    }

    public function crudshow(Product $product) {
        return view('crud/show', [
            'product'=>$product
        ]);
    }

    public function edit(Product $product) {
        return view('crud/edit', [
            'product' => $product
            ]);
           
    }

    public function crudupdate(Product $product, UpdateProductRequest $request)
    {
        $product->update($request->validated());
        return redirect()->route('crud.crud')->withSuccess(__('Product updated successfully.'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('crud')->withSuccess(__('Product deleted successfully.'));
    }

}
