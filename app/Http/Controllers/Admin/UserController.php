<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // VIEW ADD FORM USER
    public function add()
    {
        return view('admin.user.add');
    }

    // SAVE ADD FORM USER
    public function save_add(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:user|max:15',
            'images' => 'image',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new User();
        $user['name'] = $request->name;
        $user['images'] = $request->images;
        $user['email'] = $request->email;
        $user['password'] = bcrypt($request->password);


        // Xử lý ảnh
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_image_name));
            $new_images = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

            $get_image->move('images', $new_images);
            $user['images'] = $new_images;
            $user->images = $new_images;
            
            $user->fillable($request->all());
            $user->save();
            return redirect()->route('users');
        }
        $user['images'] = "";
        $user->fillable($request->all());
        $user->save();
        return redirect()->route('users');
    }

    // VIEW FORM EDIT 
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',[
            'users' => $user,
        ]);
    }

    // SAVE EDIT FORM USER
    public function save_edit(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:15',
            'images' => 'image',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $user = User::find($id);
        $user['name'] = $request->name;
        $user['images'] = $request->images;
        $user['email'] = $request->email;
        $user['password'] = bcrypt($request->password);


        // Xử lý ảnh
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_image_name));
            $new_images = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

            $get_image->move('images', $new_images);
            $user['images'] = $new_images;
            $user->images = $new_images;
            
            $user->fillable($request->all());
            $user->save();
            return redirect()->route('users');
        }
        $user['images'] = "";
        $user->fillable($request->all());
        $user->save();
        return redirect()->route('users');
    }

    // DELETE USER
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    // VIEW USER
    public function index()
    {
        $user = User::orderby('created_at','desc')
                                ->search('name')
                                ->paginate(10);
         return view('admin.user.index',[
             'users' => $user
         ]);
    }
}
