<?php

namespace App\Http\Requests;

class ReplyRequest extends Request  //表单验证类
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }
}
