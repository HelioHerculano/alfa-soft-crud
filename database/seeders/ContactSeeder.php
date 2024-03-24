<?php

namespace Database\Seeders;

use App\Models\Contact;
use Database\Factories\ContactFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;
use Illuminate\Support\Facades\DB;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            ContactFactory::new()->definition()
        ]);
    }
}
