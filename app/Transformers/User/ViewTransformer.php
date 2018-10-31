<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/10/31
 * Time: 16:42
 */

namespace App\TransFormers\User;

use App\Models\Admin\Admin;

class ViewTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Admin $admin)
    {
        return [
            'name' => $admin->name,
            'email' => $admin->email,
        ];
    }
}