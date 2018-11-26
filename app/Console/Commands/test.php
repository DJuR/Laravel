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

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '添加测试数据';



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

        for ($i = 0; $i < 1000000; $i++) {

            $a = microtime(true);
            for ($j = 0; $j < 1000; $j++) {
                $data[] = [
                    'title' => $this->randStr(),
                    'content' => '',
                    'audit_time' => time(),
                    'last_edit_time' => date('Y-m-d H:i:s'),
                    'status' => mt_rand(0, 4),
                ];
            }

            DB::table('th_content')->insert($data);
            $b = microtime(true);


            var_dump('count:'.count($data).'===='.round($b-$a, 3));
            $data = [];
            if($i %1000 == 0){

                //sleep(mt_rand(0, 1));
            }

        }
    }

    protected function randStr($len = 8)
    {
        $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = strlen($str) - 1;

        $_str = '';
        for ($i = 0; $i < $len; $i++) {
            $_str .= $str[mt_rand(0, $count)];
        }

        return $_str;
    }
}