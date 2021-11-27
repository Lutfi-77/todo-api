<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\User;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */

    public function index()
    {
        $todos = Todo::with('category')->get();
        return $this->responseHasil(200, true, $todos);
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->category_id = $request->category_id;
        $todo->save();

        return $this->responseHasil(200, true, "Data Berhasil Disimpan");
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        if($todo != null){
            $todo->delete();
            return $this->responseHasil(200, true, "Data Berhasil dihapus");
        }
        
        return $this->responseHasil(404, true, "Data tidak ada");
    }

}