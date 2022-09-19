<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AccountPaymentGateway;

class AccountPaymentGatewayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_id' => function () {
                return \App\Models\Account::factory()->create()->id;
            },
            'payment_gateway_id' => function () {
                return \App\Models\PaymentGateway::factory()->create()->id;
            },
            'config' => [
                'apiKey' => '',
                'publishableKey' => '',
            ],
        ];
    }
}
