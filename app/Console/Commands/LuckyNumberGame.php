<?php
namespace App\Console\Commands;

use App\Events\LuckyNumberEvent;
use App\Models\LuckyNumber;
use Illuminate\Console\Command;
use Carbon\Carbon;

class LuckyNumberGame extends Command
{
    protected $signature = 'game:run';

    protected $description = 'Command description';

    public function handle()
    {
        while (true) {
            $lastRecord = LuckyNumber::latest()->first();
            if (!$lastRecord) {
                $this->info('No records found in LuckyNumber model.');
                return;
            }

            $endTime = Carbon::now()->addMinutes(1);
            $duration = $endTime->diffInSeconds();
            $nextId = $lastRecord->id + 1;

            while ($duration > 0) {
                $minutes = floor($duration / 60);
                $seconds = $duration % 60;
                $formattedTime = sprintf('%02d:%02d', $minutes, $seconds); // Format as mm:ss

                event(new LuckyNumberEvent(json_encode([
                    'time' => $formattedTime,
                    'next' => $nextId,
                    'number' => $lastRecord->gia_tri
                ])));
                sleep(1); // Wait for 1 second before sending the next event

                $duration--;
            }

            // Fetch the latest record again for the next iteration
            $lastRecord = LuckyNumber::latest()->first();

            LuckyNumber::insert([
                'game_id' => Carbon::now()->format('YmdHi'),
                'gia_tri' => rand(0, 9) . '-' . rand(0, 9) . '-' . rand(0, 9),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $lastRecord = LuckyNumber::latest()->first();
        }
    }
}
