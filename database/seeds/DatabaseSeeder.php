<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

           factory(App\Models\Company::class, 3)->create()->each(function($u) {
            $u->company()->save(factory(App\Models\CompanyDetails::class)->create());
        });
    }
}
