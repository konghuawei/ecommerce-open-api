<?php

/*
 * This file is part of ibrand/EC-Open-Server.
 *
 * (c) 小程序 <https://guojiang.club>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuoJiangClub\EC\Open\Server\Http\Controllers;

use GuoJiangClub\Component\Shipping\Models\ShippingMethod;

class ShippingController extends Controller
{
    public function getMethods()
    {
        return $this->success(ShippingMethod::all());
    }
}
