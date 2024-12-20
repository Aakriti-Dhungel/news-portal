<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Post extends Model
{
    public function categories():BelongsToMany{
        return $this->BelongsToMany(Category::class);
    }
}
