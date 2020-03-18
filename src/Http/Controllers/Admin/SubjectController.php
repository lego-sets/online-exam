<?php

namespace OnlineExam\Http\Controllers\Admin;

/**
 * Class SubjectController
 *
 * @category Controllers
 * @package  OnlineExam\Http\Controllers\Admin
 * @author   Basant Besra <besrabasant@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/lego-bricks/online-exam/blob/master/src/Http/Controllers/Admin/SubjectController.php
 */
class SubjectController extends BaseController
{
    protected function listingsDefaults()
    {
        return [
            'columns' => [
                'code' => 'Code'
            ]
        ];
    }
}
