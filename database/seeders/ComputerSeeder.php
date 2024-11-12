<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $computer = new Computer;
        $computer->model='Jose Ricardo Couoh Ruiz';
        $computer->mark='HP';
        $computer->size=15;
        $computer->published_at='2024-11-08 13:11:00';//dato agregado
        $computer->is_active=true; //dato agregado
        $computer->save();
        
        $computer = new Computer;
        $computer->model='Legion';
        $computer->mark='Lenovo';
        $computer->size=16;
        $computer->published_at='2024-11-08 13:11:00';//dato agregado
        $computer->is_active=true; //dato agregado
        $computer->save(); 

        $computer = new Computer;
        $computer->model='Aspire v3';
        $computer->mark='Acer';
        $computer->size=14;
        $computer->published_at='2024-11-08 13:11:00';//dato agregado
        $computer->is_active=true; //dato agregado
        $computer->save();   
    }
}
