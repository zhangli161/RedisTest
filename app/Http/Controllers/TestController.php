<?php
/**
 * Created by PhpStorm.
 * User: ieso
 * Date: 2019/1/11
 * Time: 9:11
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;

class TestController
{
    public function test(){

        Redis::command('append', ['name', "hahaha"]);
        $ret=Redis::get("name");
        dd("retis".$ret);
    }
}