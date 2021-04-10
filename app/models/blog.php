<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    // テーブル名
    protected $table = 'blogs';
    //　可変項目
    protected $fillable =
    [
        'title',
        'content'
    ];
}
