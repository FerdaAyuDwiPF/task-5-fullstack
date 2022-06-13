<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
 
class ArticlesController extends Controller
{
    public function show()
    {
        $articles = DB::table('articles')->orderby('id', 'desc')->get();
        return view('show', ['articles'=>$articles]);
    }

    public function add_process(Request $article)
    {
        DB::table('articles')->insert([
            'title'=>$article->title,
            'content'=>$article->content,
            'image'=>$article->image,
            'user_id'=>$article->user_id,
            'category_id'=>$article->category_id,
        ]);
        return redirect('/show');
    }

    public function create_process(Request $article)
    {
        DB::table('categories')->insert([
            'name'=>$article->name,
            'user_id'=>$article->user_id,
        ]);
        return redirect('/show');
    }

    public function detail($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return view('detail', ['article'=>$article]);
    }

    public function edit($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return view('edit', ['article'=>$article]);
    }
    public function edit_process(Request $article)
    {
        $id = $article->id;
        $title = $article->title;
        $content = $article->content;
        $image = $article->image;
        $user_id = $article->user_id;
        $category_id = $article->category_id;
        DB::table('articles')->where('id', $id)
                            ->update(['title' => $title, 'content' => $content, 'image' => $image, 'user_id' => $user_id, 'category_id' => $category_id]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect('/show');
    }

    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        DB::table('articles')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        Session::flash('success', 'Artikel berhasil dihapus');
        return redirect('/show');
    }
}