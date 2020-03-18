<?php

namespace OnlineExam\Models;

use LegoCMS\Models\BaseModel;

/**
 * Class Subject
 *
 * @category Models
 * @package  OnlineExam\Models
 * @author   Basant Besra <besrabasant@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/lego-bricks/online-exam/blob/master/src/Models/Subject.php
 */
class Subject extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'code'];
}
