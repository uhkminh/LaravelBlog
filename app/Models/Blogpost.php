<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';

    protected $fillable = ['Title', 'Subtitle', 'BriefContent', 'FullContent', 'IsPublished'];

    public $timestamps = false;
}
