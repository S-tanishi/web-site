<?php
// ファイルの場所を示す
namespace App\Http\Controllers;

// 中で使うクラスを宣言
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
    public function show()
    {
        return view('about');
    }
}
