<?php

use Illuminate\Database\Seeder;
use App\Pago;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pago::class,20)->create();
    }
}
