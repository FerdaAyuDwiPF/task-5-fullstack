<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return articles::all();
    }

    public function create(request $request)
    {
        $articles = new articles;
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->image = $request->image;
        $articles->user_id = $request->user_id;
        $articles->category_id = $request->category_id;
        $articles->save();

        return "Data Berhasil Masuk";
    }

    public function update(Request $request, $id)
    {
        $articles = articles::findOrFail($id);
        $articles->update($request->all());

        return "Data Berhasil di Update";
    }

    public function delete($id)
    {
        $articles = articles::find($id);
        $articles->delete();

        return "Data Berhasil di Hapus";
    }
}
