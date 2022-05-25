<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill = new Bill();
        $bill->user_id = 1;
        $bill->status = "Pendiente";
        $bill->startDate = "2021-12-21";
        $bill->finishDate = "2021-12-26";
        $bill->total = 234333;
        $bill->save();

        $bill = new Bill();
        $bill->user_id = 2;
        $bill->status = "Pendiente";
        $bill->startDate = "2021-12-21";
        $bill->finishDate = "2021-12-26";
        $bill->total = 384903;
        $bill->save();

        $bill = new Bill();
        $bill->user_id = 2;
        $bill->status = "Pendiente";
        $bill->startDate = "2021-12-21";
        $bill->finishDate = "2021-12-26";
        $bill->total = 509384;
        $bill->save();

        $bill = new Bill();
        $bill->user_id = 3;
        $bill->status = "Pendiente";
        $bill->startDate = "2021-12-21";
        $bill->finishDate = "2021-12-26";
        $bill->total = 130435;
        $bill->save();
    }
}