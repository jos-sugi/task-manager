<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'periods';

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'period_id';

    /**
     * 複数代入可能な属性
     *
     * @var array
     */

    protected $fillable = [
        'start_time',
        'end_time',
    ];
}
