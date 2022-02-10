<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Admin::class;
    
    public function definition()
    {
        return [
            'name' => 'Furkan',
            'surname'=>'ERPAY',
            'email'=>'deneme@deneme.com',
            'password' => Hash::make(102030),
        ];
    }
}
