<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    public function run()
    {
        DB::table('bookings')->insert([
            'customer_id' => 3, // Budi
            'vendor_id' => 2,   // Vendor
            'service_id' => 1,
            'booking_date' => now()->toDateString(),
            'booking_time' => '10:00:00',
            'location' => 'Rumah Budi, Jakarta Selatan',
            'note' => 'Tolong fokus di dapur dan kamar mandi.',
            'rating' => 5,
            'comment' => 'Sangat bersih dan cepat!',
            'status' => 'completed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
