<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

// Javaと一緒。TaskControllerにControllerクラスを継承している。
class TaskController extends Controller
{
    public function index()
    {
        //Folderモデルのallメソッドで全てのデータを取得
        $folders = Folder::all();

        //view関数でテンプレートに取得データを渡す
        return view('tasks/index', [
            'folders' => $folders,
        ]);
    }
}