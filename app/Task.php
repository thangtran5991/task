<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'task';

    protected $primaryKey = 'id';

    protected $timestamp = false;

    protected $fillable = [
        'id',
        'name',
        'status'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
