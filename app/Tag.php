<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function hobbies()
    {
        return $this->belongsToMany('App\Hobby'); // 中間テーブル
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'style',
    ];
}
