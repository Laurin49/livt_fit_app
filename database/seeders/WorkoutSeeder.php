<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

    public function run()
    {
        $datum = date('Y-m-d');

        $this->training_first_week($datum);
        $this->training_second_week($datum);
        $this->training_third_week($datum);

        // \App\Models\Workout::factory()->create([
        //     'exercise' => '',
        //     'muscle' => '',
        //     'datum' => '',
        //     'set' => 0,
        //     'weight_min' => 0,
        //     'weight_max' => 0
        // ]);
        
    }

    private function training_first_week($datum) {
        \App\Models\Workout::factory()->create([
            'exercise' => 'Kniebeugen',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 1),
            'set' => 4,
            'weight_min' => 20,
            'weight_max' => 60,
            'by_user_id' => 2
        ]);
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beinstrecken',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 1),
            'set' => 3,
            'weight_min' => 10,
            'weight_max' => 25,
            'by_user_id' => 2
        ]);
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beincurls',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 1),
            'set' => 3,
            'weight_min' => 5,
            'weight_max' => 15,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Wadenheben',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 1),
            'set' => 2,
            'weight_min' => 100,
            'weight_max' => 120,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Bankdrücken L.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 2),
            'set' => 4,
            'weight_min' => 10,
            'weight_max' => 25,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Schrägbankdrücken L.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 2),
            'set' => 4,
            'weight_min' => 25,
            'weight_max' => 35,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Überzüge K.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 2),
            'set' => 2,
            'weight_min' => 7,
            'weight_max' => 10,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Scott-Curls K.H.',
            'muscle' => 'Bizeps',
            'datum' => $this->addDays($datum, 3),
            'set' => 6,
            'weight_min' => 8,
            'weight_max' => 12,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Hammer-Curls K.H.',
            'muscle' => 'Bizeps',
            'datum' => $this->addDays($datum, 2),
            'set' => 3,
            'weight_min' => 10,
            'weight_max' => 12,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Trizepsdrücken Trizep-Hantel',
            'muscle' => 'Trizeps',
            'datum' => $this->addDays($datum, 2),
            'set' => 6,
            'weight_min' => 12,
            'weight_max' => 26,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Trizepsdrücken K.H.',
            'muscle' => 'Trizeps',
            'datum' => $this->addDays($datum, 2),
            'set' => 2,
            'weight_min' => 9,
            'weight_max' => 11,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Seitheben K.H.',
            'muscle' => 'Schultern',
            'datum' => $this->addDays($datum, 3),
            'set' => 6,
            'weight_min' => 2,
            'weight_max' => 4,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Schulterdrücken L.H.',
            'muscle' => 'Schultern',
            'datum' => $this->addDays($datum, 3),
            'set' => 4,
            'weight_min' => 25,
            'weight_max' => 35,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Rudern Maschine eng',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 4),
            'set' => 4,
            'weight_min' => 20,
            'weight_max' => 30,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Rudern Maschine weit',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 3),
            'set' => 4,
            'weight_min' => 20,
            'weight_max' => 35,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Latziehen weiter Griff',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 3),
            'set' => 4,
            'weight_min' => 20,
            'weight_max' => 30,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Butterfly reverse - Maschine',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 3),
            'set' => 4,
            'weight_min' => 1,
            'weight_max' => 10,
            'by_user_id' => 2
        ]);

    }
    private function training_second_week($datum) {
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beinpresse',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 8),
            'set' => 6,
            'weight_min' => 80,
            'weight_max' => 120,
            'by_user_id' => 2
        ]);
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beinstrecken',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 8),
            'set' => 3,
            'weight_min' => 10,
            'weight_max' => 25,
            'by_user_id' => 2
        ]);
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beincurls liegend',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 8),
            'set' => 4,
            'weight_min' => 10,
            'weight_max' => 25,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Wadenheben - Beinpresse',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 8),
            'set' => 2,
            'weight_min' => 90,
            'weight_max' => 110,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Bankdrücken L.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 9),
            'set' => 5,
            'weight_min' => 15,
            'weight_max' => 30,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Schrägbankdrücken L.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 9),
            'set' => 3,
            'weight_min' => 30,
            'weight_max' => 35,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Butterfly K.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 9),
            'set' => 2,
            'weight_min' => 2,
            'weight_max' => 4,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Schrägbank Curl K.H.',
            'muscle' => 'Bizeps',
            'datum' => $this->addDays($datum, 9),
            'set' => 6,
            'weight_min' => 8,
            'weight_max' => 14,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Konzentrations-Curls K.H.',
            'muscle' => 'Bizeps',
            'datum' => $this->addDays($datum, 9),
            'set' => 3,
            'weight_min' => 6,
            'weight_max' => 8,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Trizepsdrücken K.H.',
            'muscle' => 'Trizeps',
            'datum' => $this->addDays($datum, 9),
            'set' => 6,
            'weight_min' => 7,
            'weight_max' => 11,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Dips',
            'muscle' => 'Trizeps',
            'datum' => $this->addDays($datum, 9),
            'set' => 2,
            'weight_min' => 73,
            'weight_max' => 73,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Seitheben K.H.',
            'muscle' => 'Schultern',
            'datum' => $this->addDays($datum, 10),
            'set' => 7,
            'weight_min' => 2,
            'weight_max' => 5,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Schulterdrücken L.H.',
            'muscle' => 'Schultern',
            'datum' => $this->addDays($datum, 10),
            'set' => 3,
            'weight_min' => 30,
            'weight_max' => 35,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Rudern Maschine eng',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 11),
            'set' => 5,
            'weight_min' => 20,
            'weight_max' => 30,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Rudern Maschine weit',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 11),
            'set' => 4,
            'weight_min' => 20,
            'weight_max' => 35,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Latziehen weiter Griff',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 11),
            'set' => 4,
            'weight_min' => 20,
            'weight_max' => 30,
            'by_user_id' => 2
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Butterfly reverse - Maschine',
            'muscle' => 'Rücken',
            'datum' => $this->addDays($datum, 11),
            'set' => 4,
            'weight_min' => 1,
            'weight_max' => 10,
            'by_user_id' => 2
        ]);


    }
    private function training_third_week($datum) {
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beinpresse',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 24),
            'set' => 6,
            'weight_min' => 80,
            'weight_max' => 120,
            'by_user_id' => 3
        ]);
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beinstrecken',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 24),
            'set' => 3,
            'weight_min' => 10,
            'weight_max' => 25,
            'by_user_id' => 3
        ]);
        \App\Models\Workout::factory()->create([
            'exercise' => 'Beincurls liegend',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 24),
            'set' => 4,
            'weight_min' => 10,
            'weight_max' => 25,
            'by_user_id' => 3
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Wadenheben - Beinpresse',
            'muscle' => 'Beine',
            'datum' => $this->addDays($datum, 24),
            'set' => 2,
            'weight_min' => 90,
            'weight_max' => 110,
            'by_user_id' => 3
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Bankdrücken L.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 25),
            'set' => 5,
            'weight_min' => 15,
            'weight_max' => 30,
            'by_user_id' => 3
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Schrägbankdrücken L.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 25),
            'set' => 3,
            'weight_min' => 30,
            'weight_max' => 35,
            'by_user_id' => 3
        ]);

        \App\Models\Workout::factory()->create([
            'exercise' => 'Butterfly K.H.',
            'muscle' => 'Brust',
            'datum' => $this->addDays($datum, 25),
            'set' => 2,
            'weight_min' => 2,
            'weight_max' => 4,
            'by_user_id' => 3
        ]);

    }

    private function addDays($datum, $days) {
        $anzahl_tage = $days . ' day';
        $result = date('Y-m-d', strtotime($anzahl_tage, strtotime($datum)));
        return $result;
    }

}
