<?php
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
                'slug' => 'Anconeo',
            ],
            
            [
                'name' => 'Aponeurosis bicipital',
                'slug' => 'Aponeurosis_bicipital',
            ],
            
            [
                'name' => 'Braquiorradial',
                'slug' => 'Braquiorradial',
            ],

            [
                'name' => 'Abductor corto del pulgar',
                'slug' => 'Abductor_corto_del_pulgar',
            ],

            [
                'name' => 'Abductor del meñique',
                'slug' => 'Abductor_del_me_ique',
            ],

            [
                'name' => 'Abductor del pulgar',
                'slug' => 'Adductor_del_pulgar',
            ],

            [
                'name' => 'Extensor cumún de los dedos',
                'slug' => 'Extensor_com_n_de_los_dedos',
            ],

            [
                'name' => 'Extensor del índice',
                'slug' => 'Extensor_del__ndice',
            ],

            [
                'name' => 'Extensor del meñique',
                'slug' => 'Extensor_del_me_ique',
            ],

            [
                'name' => 'Extensor radial corto del carpo',
                'slug' => 'Extensor_radial_corto_del_carpo',
            ],

            [
                'name' => 'Extensor radial largo del carpo',
                'slug' => 'Extensor_radial_largo_del_carpo',
            ],

            [
                'name' => 'Flexor digitorum superficialis',
                'slug' => 'Flexor_digitorum_superficialis',
            ],

            [
                'name' => 'Flexor pollicis_brevis',
                'slug' => 'Flexor_pollicis_brevis',
            ],

            [
                'name' => 'Flexor pollicis longus',
                'slug' => 'Flexor_pollicis_longus',
            ],

            [
                'name' => 'Flexor radial del carpo',
                'slug' => 'Flexor_radial_del_carpo',
            ],

            [
                'name' => 'Interoseos dorsales',
                'slug' => 'Inter_seos_dorsales',
            ],

            [
                'name' => 'Lumbricales',
                'slug' => 'Lumbricales',
            ],

            [
                'name' => 'Opponens digiti minimi',
                'slug' => 'Opponens_digiti_minimi',
            ],

            [
                'name' => 'Opponens pollicis',
                'slug' => 'Opponens_pollicis',
            ],

            [
                'name' => 'Palmar interossei',
                'slug' => 'Palmar_interossei',
            ],

            [
                'name' => 'Palmaris longus',
                'slug' => 'Palmaris_longus',
            ],

            [
                'name' => 'Superficial flexor retinaculum',
                'slug' => 'Superficial_flexor_retinaculum',
            ],
            
            [
                'name' => 'Pronator quadratus',
                'slug' => 'Pronator_quadratus',
            ],

            [
                'name' => 'Pronator teres',
                'slug' => 'Pronator_teres',
            ],

            [
                'name' => 'Supinator',
                'slug' => 'Supinator',
            ],

            [
                'name' => 'Biceps braquial',
                'slug' => 'Biceps_braquial',
            ],

            [
                'name' => 'Braquial',
                'slug' => 'Braquial',
            ],

            [
                'name' => 'Coracobraquial',
                'slug' => 'Coracobraquial',
            ],
            
            [
                'name' => 'Triceps braquial',
                'slug' => 'Triceps_braquial',
            ],

            [
                'name' => 'Deltoides',
                'slug' => 'Deltoides',
            ],

            [
                'name' => 'Infraespinoso',
                'slug' => 'Infraespinoso',
            ],

            [
                'name' => 'Redondo mayor',
                'slug' => 'Redondo_mayor',
            ],
            
            [
                'name' => 'Redondo menor',
                'slug' => 'Redondo_menor',
            ],

            [
                'name' => 'Subescapular',
                'slug' => 'Subescapular',
            ],

            [
                'name' => 'Supraespinoso',
                'slug' => 'Supraespinoso',
            ]
        ];
        $sampleText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        foreach ($muscle_names as $name) {
            $tissue = new Tissue;
            $tissue->name = $name['name'];
            $tissue->slug = $name['slug'];
            $tissue->tissue_type_id = $tissue_type;
            $tissue->content = $sampleText;
            $tissue->description = $sampleText;
            $tissue->save();
        }
             
    }
}
