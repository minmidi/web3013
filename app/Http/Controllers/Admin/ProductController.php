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
            'images' => 'image',
            'price' => 'required',
            'short_desc' => 'required',
            'detail' => 'required',
            'views' => 'required',
        ]);

        $product = new Product();
        $product['name'] = $request->name;
        $product['images'] = $request->images;
        $product['price'] = $request->price;
        $product['short_desc'] = $request->short_desc;
        $product['detail'] = $request->detail;
        $product['star'] = $request->star;
        $product['views'] = $request->views;

        // Xử lý ảnh
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_image_name));
            $new_images = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

            $get_image->move('images', $new_images);
            $product['images'] = $new_images;
            $product->images = $new_images;

            $product->fillable($request->all());
            $product->save();
            return redirect()->route('products');
        }
        $product['images'] = "";
        $product->fillable($request->all());
        $product->save();
        return redirect()->route('products');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',[
            'products' => $product
        ]);
    }

    public function save_edit(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'images' => 'image',
            'price' => 'required',
            'short_desc' => 'required',
            'detail' => 'required',
            'views' => 'required',
        ]);

        $product = Product::find($id);
        $product['name'] = $request->name;
        $product['images'] = $request->images;
        $product['price'] = $request->price;
        $product['short_desc'] = $request->short_desc;
        $product['detail'] = $request->detail;
        $product['star'] = $request->star;
        $product['views'] = $request->views;

        // Xử lý ảnh
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_image_name));
            $new_images = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

            $get_image->move('images', $new_images);
            $product['images'] = $new_images;
            $product->images = $new_images;

            $product->fillable($request->all());
            $product->save();
            return redirect()->route('products');
        }
        $product['images'] = "";
        $product->fillable($request->all());
        $product->save();
        return redirect()->route('products');
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
                            ->search('name')
                            ->paginate(10);
        return view('admin.product.index',[
            'products' => $product
        ]);
    }
}
