<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memo')->delete(); //最初に全件削除

        Memo::create([
            'title' => '12/13 laravel勉強会', 'content' => 'データの読み取りと追加をやりました。'
        ]);

        Memo::create([
            'title' => '12/6 laravel勉強会', 'content' => 'Viewの表示をしました。'
        ]);
    }
}
