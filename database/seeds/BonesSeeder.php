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

        $bone_names = [

            [
                'name' => 'Escápula',
                'zone_id' => $z_hombro_id,
                'slug' => 'Esc_pula'
            ],

            [
                'name' => 'Primer Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '1er_Metacarpiano'
            ],

            [
                'name' => 'Primera Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '1ra_Falange_Distal'
            ],

            [
                'name' => 'Primera Falange Próximal',
                'zone_id' => $z_mano_id,
                'slug' => '1ra_Falange_Proximal'
            ],

            [
                'name' => 'Segunda Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Distal'
            ],

            [
                'name' => 'Segunda Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Medial'
            ],

            [
                'name' => 'Segunda Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Proximal'
            ],

            [
                'name' => 'Segundo Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '2do_Metacarpiano'
            ],

            [
                'name' => 'Tercer Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '3er_Metacarpiano'
            ],

            [
                'name' => 'Tercera Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Distal'
            ],

            [
                'name' => 'Tercera Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Medial'
            ],

            [
                'name' => 'Tercera Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Proximal'
            ],

            [
                'name' => 'Cuarta Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Distal'
            ],

            [
                'name' => 'Cuarta Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Medial'
            ],

            [
                'name' => 'Cuarta Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Proximal'
            ],

            [
                'name' => 'Cuarto Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '4to_Metacarpiano'
            ],

            [
                'name' => 'Quinta Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Distal'
            ],

            [
                'name' => 'Quinta Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Medial'
            ],

            [
                'name' => 'Quinta Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Proximal'
            ],

            [
                'name' => 'Quinto Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '5to_Metacarpiano'
            ],

            [
                'name' => 'Escafoides',
                'zone_id' => $z_mano_id,
                'slug' => 'Escafoides'
            ],

            [
                'name' => 'Ganchoso',
                'zone_id' => $z_mano_id,
                'slug' => 'Ganchoso'
            ],

            [
                'name' => 'Grande',
                'zone_id' => $z_mano_id,
                'slug' => 'Grande'
            ],

            [
                'name' => 'Piramidal',
                'zone_id' => $z_mano_id,
                'slug' => 'Piramidal'
            ],

            [
                'name' => 'Pisiforme',
                'zone_id' => $z_mano_id,
                'slug' => 'Pisiforme'
            ],

            [
                'name' => 'Semilunar',
                'zone_id' => $z_mano_id,
                'slug' => 'Semilunar'
            ],

            [
                'name' => 'Trapecio',
                'zone_id' => $z_mano_id,
                'slug' => 'Trapecio'
            ],

            [
                'name' => 'Trapezoide',
                'zone_id' => $z_mano_id,
                'slug' => 'Trapezoide'
            ],

            [
                'name' => 'Cúbito',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'C_bito'
            ],

            [
                'name' => 'Radio',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Radio'
            ],

            [
                'name' => 'Húmero',
                'zone_id' => $z_brazo_id,
                'slug' => 'H_mero'
            ]
        ];
        $sampleText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        
        foreach ($bone_names as $name) {
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
