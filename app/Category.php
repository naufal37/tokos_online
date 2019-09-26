<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use SoftDeletes;
}
