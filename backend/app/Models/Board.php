<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    /** @use HasFactory<\Database\Factories\BoardFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
