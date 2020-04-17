<?php

/*
 * This file is part of ibrand/EC-Open-Server.
 *
 * (c) 小程序 <https://guojiang.club>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuoJiangClub\EC\Open\Server\Transformers;

class FavoriteTransformer extends BaseTransformer
{
    public function transformData($model)
    {
        return $model->toArray();
    }
}
