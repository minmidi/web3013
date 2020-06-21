<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
     // VIEW ADD FORM CATEGORY
     public function add()
     {
         return view('admin/categories/add');
     }
 

     // SAVE FORM CATEGORY
     public function save_add(Request $request)
     {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $categories = new Categories();
        $categories['name'] = $request->name; 
        $categories['slug'] = $request->slug;
        $categories['status'] = $request->status;

        $categories->fillable($request->all());
        $categories->save();
        return redirect()->route('categories');
     }
 
     // VIEW EDIT FORM CATEGORY
     public function edit($id)
     {
        $categories = Categories::find($id);
        return view('admin/categories/edit',[
            'category' => $categories
        ]);
     }
 
     // SAVE EDIT FORM CATEGORY
     public function save_edit(Request $request, $id)
     {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $categories = Categories::find($id);
        $categories['name'] = $request->name; 
        $categories['slug'] = $request->slug;
        $categories['status'] = $request->status;

        $categories->fillable($request->all());
        $categories->save();
        return redirect()->route('categories');
     }
 
     // DELETE CATEGORY
     public function delete($id)
     {
        Categories::find($id)->delete();
        return redirect()->back();
     }
 
     // VIEW CATEGORY
     public function index()
     {
         $category = Categories::orderby('created_at','desc')
                                ->search('name')
                                ->paginate(10);
         return view('admin.categories.index',[
             'categories' => $category
         ]);
     }
}
