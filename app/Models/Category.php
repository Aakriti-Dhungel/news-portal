<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    public function posts():BelongsToMany{
        return $this->BelongsToMany(Post::class);
    }
}
