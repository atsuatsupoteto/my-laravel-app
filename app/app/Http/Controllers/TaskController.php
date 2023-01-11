<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Task;
use Illuminate\Http\Request;

// Javaと一緒。TaskControllerはControllerクラスを継承
class TaskController extends Controller
{
    public function index(int $id)
    {
        //Folderモデルのallメソッドで全てのフォルダを取得
        $folders = Folder::all();
        
        //選ばれたフォルダを取得
        $current_folder = Folder::find($id);

        //選ばれたフォルダに紐づくタスクを取得
        $tasks = Task::where('folder_id', $current_folder->id)->get();

        //view関数でテンプレートに取得データを渡す
        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $current_folder->id,
            'tasks' => $tasks,
        ]);
    }
}