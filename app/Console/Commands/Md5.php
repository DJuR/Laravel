<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/11/23
 * Time: 17:14
 */

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Md5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:md5';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '设置MD5数据';



    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $i = 1;
        while (true) {

            $a = microtime(true);

            $str = $this->randStr(4);

            $isExist = DB::table('md5')->where('str', $str)->exists();
            if($isExist){
                continue;
            }

            DB::table('md5')->insert([
                'str' => $str,
                'md5_str' => md5($str),
            ]);
            $b = microtime(true);
            var_dump( $i.'=>str:'.$str.'===='.round($b-$a, 3));
            $i++;
        }

    }

    protected function randStr($len = 8)
    {

        $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+?';
        $count = strlen($str) - 1;

        $_str = '';
        for ($i = 0; $i < $len; $i++) {
            $_str .= $str[mt_rand(0, $count)];
        }

        return $_str;
    }

    protected function randStr1($len = 8)
    {

        $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+?';
        $count = strlen($str) - 1;

        $_str = '';
        for ($i = 0; $i < $len; $i++) {
            $_str .= $str[mt_rand(0, $count)];
        }

        return $_str;
    }
}