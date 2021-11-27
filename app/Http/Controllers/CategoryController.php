<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\User;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */

    public function index()
    {
        $categories = Category::all();
        return $this->responseHasil(200, true, $categories);
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->nama = $request->nama;
        $category->description = $request->description;
        $category->save();

        return $this->responseHasil(200, true, "Data Berhasil Disimpan");

    }

    public function delete($id)
    {
        $category = Category::find($id);
        if($category != null){
            $category->delete();
            return $this->responseHasil(200, true, "Data Berhasil dihapus");
        }
        
        return $this->responseHasil(404, true, "Data tidak ada");
    }
}