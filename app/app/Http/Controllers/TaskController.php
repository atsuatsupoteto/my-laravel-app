<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

// Javaと一緒。TaskControllerはControllerクラスを継承
class TaskController extends Controller
{
    public function index(int $id)
    {
        //Folderモデルのallメソッドで全てのデータを取得
        $folders = Folder::all();

        //view関数でテンプレートに取得データを渡す
        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
        ]);
    }
}