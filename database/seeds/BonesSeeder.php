<?php

use App\Zone;
use App\Tissue;
use App\TissueType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tissue_type = (TissueType::where('name','Bones')->first())->id;
        $z_hombro_id = (Zone::where('slug','Hombro')->first())->id;
        $z_brazo_id = (Zone::where('slug','Brazo')->first())->id;
        $z_ant_brazo_id = (Zone::where('slug','Ante-brazo')->first())->id;
        $z_mano_id = (Zone::where('slug','Mano')->first())->id;

        $sampleText = 'Sed soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu. Exercitation hHas at quas nonumy facilisis, enim percipitur mei ad. Mazim possim adipisci sea ei, omnium aeterno platonem mei no.';

        $sampleDesc = 'Exercitation ullamcoLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';


        $bone_names = [

            [
                'name' => 'Escápula',
                'zone_id' => $z_hombro_id,
                'slug' => 'Esc_pula',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Primer Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '1er_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Primera Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '1ra_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Primera Falange Próximal',
                'zone_id' => $z_mano_id,
                'slug' => '1ra_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Segunda Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Segunda Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Segunda Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Segundo Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '2do_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Tercer Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '3er_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Tercera Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Tercera Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Tercera Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Cuarta Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Cuarta Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Cuarta Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Cuarto Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '4to_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Quinta Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Quinta Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Quinta Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Quinto Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '5to_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Escafoides',
                'zone_id' => $z_mano_id,
                'slug' => 'Escafoides',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Ganchoso',
                'zone_id' => $z_mano_id,
                'slug' => 'Ganchoso',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Grande',
                'zone_id' => $z_mano_id,
                'slug' => 'Grande',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Piramidal',
                'zone_id' => $z_mano_id,
                'slug' => 'Piramidal',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Pisiforme',
                'zone_id' => $z_mano_id,
                'slug' => 'Pisiforme',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Semilunar',
                'zone_id' => $z_mano_id,
                'slug' => 'Semilunar',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Trapecio',
                'zone_id' => $z_mano_id,
                'slug' => 'Trapecio',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Trapezoide',
                'zone_id' => $z_mano_id,
                'slug' => 'Trapezoide',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Cúbito',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'C_bito',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Radio',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Radio',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ],

            [
                'name' => 'Húmero',
                'zone_id' => $z_brazo_id,
                'slug' => 'H_mero',
                'tissue_type_id' => $tissue_type,
                'content' => $sampleText,
                'description' => $sampleDesc,
            ]
        ];
        
        
        foreach ($bone_names as $name) {
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
