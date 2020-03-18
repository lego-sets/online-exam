<?php

namespace OnlineExam\Http\Requests\Admin;

use LegoCMS\Http\Requests\Admin\FormRequest;

/**
 * Class UnitRequest
 *
 * @package OnlineExam\Http\Requests\Admin
 */
class UnitRequest extends FormRequest
{
    public function applyRules()
    {
        return [
            'name' => 'required'
        ];
    }
}
