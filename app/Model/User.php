<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey="id";

    /**
     * 关联到模型的数据表 @var string
     */
    public $table = 'user';
    /**
     * 可以被批量赋值的属性. @var array
     */
    protected $guarded = [];

    /**
     * 表明模型是否应该被打上时间戳, @var bool
     */
    public $timestamps = false;
}
