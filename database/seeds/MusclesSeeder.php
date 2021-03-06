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
        $z_hombro_id = (Zone::where('slug','Hombro')->first())->id;
        $z_brazo_id = (Zone::where('slug','Brazo')->first())->id;
        $z_ant_brazo_id = (Zone::where('slug','Ante-brazo')->first())->id;
        $z_mano_id = (Zone::where('slug','Mano')->first())->id;

        $sampleText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $sampleDesc = 'Exercitation ullamcoLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        $muscle_names = [
            [
                'name' => 'Anconeo',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Anconeo',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],
            
            [
                'name' => 'Aponeurosis bicipital',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Aponeurosis_bicipital',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],
            
            [
                'name' => 'Braquiorradial',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Braquiorradial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Abductor corto del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_corto_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Abductor del meñique',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_del_me_ique',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Abductor largo del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_largo_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Abductor del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Extensor cumún de los dedos',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_com_n_de_los_dedos',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Extensor corto del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_corto_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Extensor del índice',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_del__ndice',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Extensor del meñique',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_del_me_ique',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Extensor largo del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_largo_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Extensor radial corto del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_radial_corto_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Extensor radial largo del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_radial_largo_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Flexor corto del meñique',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_corto_del_me_ique',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Flexor cubital del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_cubital_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Flexor digitorum profundus',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_digitorum_profundus',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Flexor digitorum superficialis',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_digitorum_superficialis',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Flexor pollicis_brevis',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_pollicis_brevis',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Flexor pollicis longus',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_pollicis_longus',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Flexor radial del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_radial_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Interoseos dorsales',
                'zone_id' => $z_mano_id,
                'slug' => 'Inter_seos_dorsales',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Lumbricales',
                'zone_id' => $z_mano_id,
                'slug' => 'Lumbricales',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Opponens digiti minimi',
                'zone_id' => $z_mano_id,
                'slug' => 'Opponens_digiti_minimi',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Opponens pollicis',
                'zone_id' => $z_mano_id,
                'slug' => 'Opponens_pollicis',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Palmar interossei',
                'zone_id' => $z_mano_id,
                'slug' => 'Palmar_interossei',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Palmaris longus',
                'zone_id' => $z_mano_id,
                'slug' => 'Palmaris_longus',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Superficial flexor retinaculum',
                'zone_id' => $z_mano_id,
                'slug' => 'Superficial_flexor_retinaculum',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],
            
            [
                'name' => 'Pronator quadratus',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Pronator_quadratus',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Pronator teres',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Pronator_teres',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Supinator',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Supinator',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Biceps braquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Biceps_braquial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Braquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Braquial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Coracobraquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Coracobraquial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],
            
            [
                'name' => 'Triceps braquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Triceps_braquial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Deltoides',
                'zone_id' => $z_hombro_id,
                'slug' => 'Deltoides',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Infraespinoso',
                'zone_id' => $z_hombro_id,
                'slug' => 'Infraespinoso',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Redondo mayor',
                'zone_id' => $z_hombro_id,
                'slug' => 'Redondo_mayor',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],
            
            [
                'name' => 'Redondo menor',
                'zone_id' => $z_hombro_id,
                'slug' => 'Redondo_menor',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Subescapular',
                'zone_id' => $z_hombro_id,
                'slug' => 'Subescapular',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Supraespinoso',
                'zone_id' => $z_hombro_id,
                'slug' => 'Supraespinoso',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ]
        ];

        foreach ($muscle_names as $name) {
            $tissue = new Tissue;
            $tissue->name = $name['name'];
            $tissue->slug = $name['slug'];
            $tissue->zone_id = $name['zone_id'];
            $tissue->tissue_type_id = $name['tissue_type_id'];
            $tissue->content = $name['content'];
            $tissue->description = $name['description'];
            $tissue->save();
        }
             
    }
}

