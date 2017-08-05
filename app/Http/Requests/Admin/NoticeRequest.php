<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use App\Models\Category;

class NoticeRequest extends Request
{
    public function rules()
    {
        return [
            'title'       => 'required|min:1',
            'content'     => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title'       => '标题',
            'content'     => '内容',
        ];
    }

    protected function rulesValidate()
    {
        $validator = $this->getValidatorInstance();
        if ($validator->fails()) {
            $this->failed($validator);
        }
    }

    public function validate()
    {
        $this->rulesValidate();
    }
}