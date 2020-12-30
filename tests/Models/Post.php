<?php

namespace zepson\Comments\Tests\Models;

use zepson\Comments\Traits\HasComments;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasComments;

    protected $guarded = [];
}
