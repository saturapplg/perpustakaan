<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'pages',
        'type',
        'category',
        'ddc_code',
        'location',
        'isbn_issn',
        'description',
        'cover',
        'pdf_file',
    ];
}

