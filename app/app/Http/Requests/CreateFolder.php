<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFolder extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //この機能は使用しないため、trueにしておく
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    //rulesメソッドでチェックするルールを定義する
    public function rules()
    {
        return [
            //requiredはLaravelがデフォルトで提供している必須チェック
            'title' => 'required|max:20',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'フォルダ名',
        ];
    }
}
