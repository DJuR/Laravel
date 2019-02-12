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

class NumberMd5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:num_md5';

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

        while (true) {

            $number = DB::table('number_md5')
                ->orderBy('id', 'desc')->limit(1)
                ->value('number')??0;

            $number = $number+1;
            DB::table('number_md5')->insert([
                'number' => $number,
                'md5' => md5($number),
            ]);

            sleep(0.01);

        }

    }

}