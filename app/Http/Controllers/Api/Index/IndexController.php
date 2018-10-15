<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/10/11
 * Time: 10:41
 */

namespace App\Http\Controllers\Api\Index;


use App\Http\Controllers\Controller;
use App\Models\User\User;

class IndexController extends Controller
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     *
     */
    public function index()
    {

        return ($this->user->find(1));
    }
}