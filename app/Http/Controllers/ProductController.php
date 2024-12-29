<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "Barcha mahsulotlar";
    }

    public function create(){
        return "Yangi mahsulot qo'shish";
    }
    public function show( $id){
        return "Mahsulot ID: {$id}";
    }
    public function edit($id){
        return "Mahsulotni tahrirlash, ID: {$id}";
    }
    public function destroy($id){
        return "Mahsulot o'chirildi, ID: {$id}";
    }
    public function search(){
    return "Qidiruv natijalari";
    }



}
