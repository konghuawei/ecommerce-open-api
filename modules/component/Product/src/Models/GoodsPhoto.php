<?php

/*
 * This file is part of ibrand/product.
 *
 * (c) 小程序 <https://guojiang.club>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuoJiangClub\Component\Product\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsPhoto extends Model
{
    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('ibrand.app.database.prefix', 'ibrand_').'goods_photo');
    }

    public function goods()
    {
        return $this->belongsTo('App\Entities\Goods', 'goods_id');
    }
}
