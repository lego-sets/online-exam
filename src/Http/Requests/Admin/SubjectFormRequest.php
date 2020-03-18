<?php

namespace OnlineExam\Http\Requests\Admin;

use LegoCMS\Http\Requests\Admin\FormRequest;

/**
 * Class SubjectFormRequest
 *
 * @package OnlineExam\Http\Requests\Admin
 */
class SubjectFormRequest extends FormRequest
{
    public function applyRules()
    {
        return [
            'name' => 'required',
            'code' => 'required'
        ];
    }
}
