<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todos';

    protected $fillable = ['Description',
    'Priority'];

    protected $guarded = ['created_at', 'updated_at'];
}
