<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // VIEW ADD FORM
    public function add()
    {
        return view('admin.product.add');
    }

    public function save_add(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
    }

    // DELETE PRODUCT
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    // VIEW PRODUCT
    public function index()
    {
        $product = Product::orderby('created_at','desc')
                            ->paginate(20);
        return view('admin.product.index',[
            'products' => $product
        ]);
    }
}
