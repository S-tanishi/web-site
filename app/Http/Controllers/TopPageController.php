<?php
// 名前空間：ファイルの居場所を示す
// 同じ関数名を使うことはできない→名前空間で衝突を回避
namespace App\Http\Controllers;

// use宣言：中で使うクラスを宣言する
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopPageController extends Controller
{
    public function show()
    {
        return view('top');
    }
}

/**
 * <?php
 *namespace App\Http\{クラスのディレクトリ};
 *
 *use {使うクラス};

 *class {クラス名} extends {継承するクラス名} {

 * // ここにコードを書いていく
 * }
 */

/** 
 * use キーワードを使うことで、名前空間の記述を短くした別名または同名を作ることができる。
 * 別名:エイリアス、同名:インポート と呼びます。
