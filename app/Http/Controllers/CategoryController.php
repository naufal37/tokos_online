<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $daftar_kategori =  Category::paginate(2);
      return view('kategori.index',["daftar_kategori"=>$daftar_kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
      $keyword = $request->get('name');
      $hasil = Category::where('name',"LIKE","%$keyword%")->get();
      return $hasil;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
      $category = Category::withTrashed()->findOrfail($id);
      if (!$category->trashed()){
        return 'Tidak perlu direstore';
      }
      $category->restore();
      return "kategori $category->name berhasil direstore";


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $category = Category::findOrfail($id);
      if(!$category->trashed(){
        $category->delete()
      });
      return "category $category->name berhasil dihapus";
    }

    public function permanentdelete($id)
    {
      $category = Category::withTrashed()->findOrfail($id)->forceDelete();
      return "category berhasil dihapus permanen!";

    }

    public function child(){
      return view('layouts.child');
    }
}
