<?php

namespace OnlineExam\Http\Requests\Admin;

use LegoCMS\Http\Requests\Admin\FormRequest;

/**
 * Class QuestionFormRequest
 *
 * @package OnlineExam\Http\Requests\Admin
 */
class QuestionFormRequest extends FormRequest
{
    public function applyRules()
    {
        return [
            'name' => 'required'
        ];
    }
}
