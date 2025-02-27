<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
class TinController extends Controller
{
    function lienhe() {
        return view('lienhe');
    
    }
    function getTin($id) {
        return view('tin', ['id'=>$id]);}
        function hot(){
           $query = DB:: table('tin')->orderBy('ngayDang','DESC')->limit(10)->get();
           return view ('hot', compact('query'));
    
    }
    function chitiet($id) {
        $query = DB::table('tin')->where('id', $id)->first();
        if (!$query) {
            abort(404, 'Bài viết không tồn tại.');
        }
        return view('chitiet', compact('query'));
    }

    function index(){
        $query = DB:: table('tin')->orderBy('ngayDang','DESC')->limit(10)->get();
        return view ('index', compact('query'));
    }
        
    public function showTinTrongLoai($idLT) {
        $category = DB::table('loai_tin')->where('id', $idLT)->first();
        $listtin = DB::table('tin')->where('idLT', $idLT)->get();
        return view('loaitin', [
            'categoryName' => $category->tenLoaiTin,
            'listtin' => $listtin
        ]);
    }
    function noidung($id) {
        $query = DB::table('tin')->where('id', $id)->first();
        if (!$query) {
            abort(404, 'Bài viết không tồn tại.');
        }
        return view('noidung', compact('query'));
    }


 }
    
