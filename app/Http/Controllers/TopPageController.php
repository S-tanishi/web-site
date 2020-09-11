<?php
// 名前空間：ファイルの居場所を示す
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

