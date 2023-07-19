<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{

    // List all database (using GET)
    public function list() {
        $posts = User::all();
        return view('post.index ', compact('posts'));
    }

    // Show form to insert into database (using GET)
    public function create() {
        return view('post.create');
    }

    // Insert into database (using POST)
    public function handleCreate() {
        redirect(route('post.create'));
        return "handleCreate";
    }


    // Show info based on ID (using GET)
    public function info($id) {
        return 'Detailed Info: ' . $id; 
    }

    public function update($id) {
        //su dung id de get data record
        $data = User::find($id);
        return view('post.update', compact('data'));
    }

    // Update info based on ID (using PUT)
    public function handleUpdate(Request $request, $id) {
        $dataRequest = $request->all();
        //code update date record
        $posts = User::all();

        return view('post.index', compact('posts'));
    }

    // Delete info based on ID (using DELETE)
    public function delete($id) {

        return "Delete " . $id;
    }
}
