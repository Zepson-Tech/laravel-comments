<?php

namespace quickcamx\Comments\Tests\Models;

use quickcamx\Comments\Traits\HasComments;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasComments;

    protected $guarded = [];
}
