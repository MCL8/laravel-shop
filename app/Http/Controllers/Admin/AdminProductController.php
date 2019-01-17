<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductStoreRequest;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Barryvdh\Debugbar\Facade as Debugbar;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name AS cat_name')
            ->get();

        $categories = Category::all();

        return view('admin.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories_array = Category::getArrayList();

        return view('admin.products.create', compact('categories_array'));
    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->input();
        $product = Product::create($data);

        $this->fileUpload($request, $product->id);

        return redirect()
            ->route('products.index')
            ->with('message', 'Товар создан');

    }

    public function edit($id)
    {
        try {
            $product = Product::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('products.index');
        }

        $categories_array = Category::getArrayList();

        $image = Product::getImage($id);

        return view('admin.products.edit', compact('categories_array', 'product', 'image'));
    }

    public function update(ProductStoreRequest $request, Product $product)
    {
        $product->update($request->input());

        $this->fileUpload($request, $product->id);

        return redirect()
            ->route('products.index')
            ->with('message', 'Информация о товаре обновлена');
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('products.index');
        }

        try {
            $product->delete();
        } catch (\Exception $e) {
            report($e);
            return redirect()->route('products.index');
        }

        return redirect()
            ->route('products.index')
            ->with('message', 'Товар удален');
    }

    private function fileUpload(Request $request, $id) {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $id . '.jpg';
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath, $name);

            return true;
        }

        return false;
    }
}
