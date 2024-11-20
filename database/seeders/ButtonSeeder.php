<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Button;

class ButtonSeeder extends Seeder
{
    public function run()
    {
        $buttons = [
            ['color' => '#FF5733', 'hyperlink' => 'https://example1.com'],
            ['color' => '#33FF57', 'hyperlink' => 'https://example2.com'],
            ['color' => '#3357FF', 'hyperlink' => 'https://example3.com'],
            ['color' => '#FFFF33', 'hyperlink' => 'https://example4.com'],
            ['color' => '#FF33FF', 'hyperlink' => 'https://example5.com'],
            ['color' => '#33FFFF', 'hyperlink' => 'https://example6.com'],
            ['color' => '#FF5733', 'hyperlink' => 'https://example7.com'],
            ['color' => '#FFFF00', 'hyperlink' => 'https://example8.com'],
            ['color' => '#FF6347', 'hyperlink' => 'https://example9.com']
        ];

        // Insert the buttons into the database
        foreach ($buttons as $button) {
            Button::create([
                'color' => $button['color'],
                'hyperlink' => $button['hyperlink']
            ]);
        }
    }
}