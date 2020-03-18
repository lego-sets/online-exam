<?php

namespace OnlineExam\Http\Requests\Admin;

use LegoCMS\Http\Requests\Admin\FormRequest;

/**
 * Class TopicFormRequest
 *
 * @package OnlineExam\Http\Requests\Admin
 */
class TopicFormRequest extends FormRequest
{
    public function applyRules()
    {
        return [
            'name' => 'required'
        ];
    }
}
