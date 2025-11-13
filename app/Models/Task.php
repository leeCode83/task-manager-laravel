<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    public function mahasiswas(): BelongsTo{
        return $this->belongsTo(Mahasiswa::class);
    }

    public function categories():BelongsToMany{
        return $this->belongsToMany(Category::class);
    }
}
