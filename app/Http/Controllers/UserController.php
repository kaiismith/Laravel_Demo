<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// Thêm thư viện để mã hóa password
use Illuminate\Support\Facades\Hash;
use App\Models\Post;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function getPost() {
        $id = User::find(5)->id;
        $name = User::find(5)->name;
        $post = User::find(5)->posts;
        return view('users.post', compact('post', 'id', 'name'));
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        User::create($data);
        echo"success create user";
    }

    public function edit($id){
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        // Update user using the instance's update() method
        $user->update($data);
        echo"success update user";
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        echo "success delete user";
    }

    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}

