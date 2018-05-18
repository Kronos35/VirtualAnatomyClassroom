<?php

use App\Zone;
use App\Tissue;
use App\TissueType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Seeding skeletal muscles
        $this->SeedSkeletalMucles();
    }
    public function SeedSkeletalMucles()
    {
        $tissue_type = (TissueType::where('name','Skeletal Muscles')->first())->id;
        
        $muscle_names = [
            [
                'name' => 'Anconeo',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Anconeo'
            ],
            
            [
                'name' => 'Aponeurosis bicipital',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Aponeurosis_bicipital'
            ],
            
            [
                'name' => 'Braquiorradial',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Braquiorradial'
            ],

            [
                'name' => 'Abductor corto del pulgar',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Abductor_corto_del_pulgar'
            ],

            [
                'name' => 'Abductor del meñique',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Abductor_del_me_ique'
            ],

            [
                'name' => 'Abductor del pulgar',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Adductor_del_pulgar'
            ],

            [
                'name' => 'Extensor cumún de los dedos',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Extensor_com_n_de_los_dedos'
            ],

            [
                'name' => 'Extensor del índice',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Extensor_del__ndice'
            ],

            [
                'name' => 'Extensor del meñique',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Extensor_del_me_ique'
            ],

            [
                'name' => 'Extensor radial corto del carpo',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Extensor_radial_corto_del_carpo'
            ],

            [
                'name' => 'Extensor radial largo del carpo',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Extensor_radial_largo_del_carpo'
            ],

            [
                'name' => 'Flexor digitorum superficialis',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Flexor_digitorum_superficialis'
            ],

            [
                'name' => 'Flexor pollicis_brevis',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Flexor_pollicis_brevis'
            ],

            [
                'name' => 'Flexor pollicis longus',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Flexor_pollicis_longus'
            ],

            [
                'name' => 'Flexor radial del carpo',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Flexor_radial_del_carpo'
            ],

            [
                'name' => 'Interoseos dorsales',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Inter_seos_dorsales'
            ],

            [
                'name' => 'Lumbricales',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Lumbricales'
            ],

            [
                'name' => 'Opponens digiti minimi',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Opponens_digiti_minimi'
            ],

            [
                'name' => 'Opponens pollicis',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Opponens_pollicis'
            ],

            [
                'name' => 'Palmar interossei',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Palmar_interossei'
            ],

            [
                'name' => 'Palmaris longus',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Palmaris_longus'
            ],

            [
                'name' => 'Superficial flexor retinaculum',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Superficial_flexor_retinaculum'
            ],
            
            [
                'name' => 'Pronator quadratus',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Pronator_quadratus'
            ],

            [
                'name' => 'Pronator teres',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Pronator_teres'
            ],

            [
                'name' => 'Supinator',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Supinator'
            ],

            [
                'name' => 'Biceps braquial',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Biceps_braquial'
            ],

            [
                'name' => 'Braquial',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Braquial'
            ],

            [
                'name' => 'Coracobraquial',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Coracobraquial'
            ],
            
            [
                'name' => 'Triceps braquial',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Triceps_braquial'
            ],

            [
                'name' => 'Deltoides',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Deltoides'
            ],

            [
                'name' => 'Infraespinoso',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Infraespinoso'
            ],

            [
                'name' => 'Redondo mayor',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Redondo_mayor'
            ],
            
            [
                'name' => 'Redondo menor',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Redondo_menor'
            ],

            [
                'name' => 'Subescapular',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Subescapular'
            ],

            [
                'name' => 'Supraespinoso',
                'zone_id' => (Zone::where('name', 'Hombro')->first())->id,
                'slug' => 'Supraespinoso'
            ]
        ];

        $sampleText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        foreach ($muscle_names as $name) {
            $tissue = new Tissue;
            $tissue->name = $name['name'];
            $tissue->slug = $name['slug'];
            $tissue->zone_id = $name['zone_id'];
            $tissue->tissue_type_id = $tissue_type;
            $tissue->content = $sampleText;
            $tissue->description = $sampleText;
            $tissue->save();
        }
             
    }
}
