<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // Specifico le colonne che voglio assegnare automaticamente con fill nel costruttore.

    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
    ];
}
