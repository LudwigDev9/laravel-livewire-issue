<?php

namespace Database\Seeders;

use App\Models\TestSubItems;
use Illuminate\Database\Seeder;

class Test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Test::insert(['testId' => '1235string', 'itemNo' => 'product111', 'code' => 'code123']);
        \App\Models\Test::insert(['testId' => '1236string','itemNo' => 'product112', 'code' => 'code124']);
        \App\Models\Test::insert(['testId' => '1237string','itemNo' => 'product113', 'code' => 'code125']);

        TestSubItems::insert(['itemNo' => 'product111', 'type' => 'type123']);
        TestSubItems::insert(['itemNo' => 'product112', 'type' => 'type124']);
        TestSubItems::insert(['itemNo' => 'product113', 'type' => 'type125']);
    }
}
