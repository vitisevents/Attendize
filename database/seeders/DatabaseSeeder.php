<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Eloquent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('CountriesSeeder');
        $this->call('CurrencySeeder');
        $this->call('OrderStatusSeeder');
        $this->call('PaymentGatewaySeeder');
        $this->call('QuestionTypesSeeder');
        $this->call('TicketStatusSeeder');
        $this->call('TimezoneSeeder');
    }
}
