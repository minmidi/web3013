<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Galleries;

use function Ramsey\Uuid\v1;

class galleriesController extends Controller
{

    // VIEW ADD FORM PRODUCT
    public function add()
    {
        $product = Product::all();
        return view('admin.galleries.add',[
            'products' =>  $product
        ]);
    }

    // SAVE CREATED PRODUCT
    public function save_add(Request $request)
    {
        $this->validate($request,[
            'img_url' => 'required',
        ]);

        $galleries = new Galleries();
        $galleries['product_id'] = $request->product_id;
        $galleries['img_url'] = $request->img_url;

        $galleries->fillable($request->all());
        $galleries->save();
        return redirect()->route('galleries');
    }

    //VIEW EDIT PRODUCT  
    public function edit($id)
    {
        $product = Product::all();
        $gallery =  Galleries::find($id);
        return view('admin.galleries.edit',[
            'products' =>  $product,
            'galleries' => $gallery
        ]);
    }

    // SAVE EIDT PRODUCTS
    public function save_edit(Request $request, $id)
    {
        $this->validate($request,[
            'img_url' => 'required',
        ]);

        $galleries = Galleries::find($id);
        $galleries['product_id'] = $request->product_id;
        $galleries['img_url'] = $request->img_url;

        $galleries->fillable($request->all());
        $galleries->save();
        return redirect()->route('galleries');
    }

    // DELETE PRODUCT
    public function delete($id)
    {
        Galleries::find($id)->delete();
        return redirect()->back();
    }

    // VIEW PRODUCT
    public function index()
    {
        $galleries = Galleries::orderby('created_at','desc')
                            ->search('img_url')
                            ->paginate(10);
        return view('admin.galleries.index',[
            'gallery' => $galleries
        ]);
    }
}
