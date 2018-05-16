<?php

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
        $bone_names = [

            [
                'name' => 'Escápula',
                'slug' => 'Esc_pula'
            ],

            [
                'name' => 'Primer Metacarpiano',
                'slug' => '1er_Metacarpiano'
            ],

            [
                'name' => 'Primera Falange Distal',
                'slug' => '1ra_Falange_Distal'
            ],

            [
                'name' => 'Primera Falange Próximal',
                'slug' => '1ra_Falange_Proximal'
            ],

            [
                'name' => 'Segunda Falange Distal',
                'slug' => '2da_Falange_Distal'
            ],

            [
                'name' => 'Segunda Falange Medial',
                'slug' => '2da_Falange_Medial'
            ],

            [
                'name' => 'Segunda Falange Proximal',
                'slug' => '2da_Falange_Proximal'
            ],

            [
                'name' => 'Segundo Metacarpiano',
                'slug' => '2do_Metacarpiano'
            ],

            [
                'name' => 'Tercer Metacarpiano',
                'slug' => '3er_Metacarpiano'
            ],

            [
                'name' => 'Tercera Falange Distal',
                'slug' => '3ra_Falange_Distal'
            ],

            [
                'name' => 'Tercera Falange Medial',
                'slug' => '3ra_Falange_Medial'
            ],

            [
                'name' => 'Tercera Falange Proximal',
                'slug' => '3ra_Falange_Proximal'
            ],

            [
                'name' => 'Cuarta Falange Distal',
                'slug' => '4ta_Falange_Distal'
            ],

            [
                'name' => 'Cuarta Falange Medial',
                'slug' => '4ta_Falange_Medial'
            ],

            [
                'name' => 'Cuarta Falange Proximal',
                'slug' => '4ta_Falange_Proximal'
            ],

            [
                'name' => 'Cuarto Metacarpiano',
                'slug' => '4to_Metacarpiano'
            ],

            [
                'name' => 'Quinta Falange Distal',
                'slug' => '5ta_Falange_Distal'
            ],

            [
                'name' => 'Quinta Falange Medial',
                'slug' => '5ta_Falange_Medial'
            ],

            [
                'name' => 'Quinta Falange Proximal',
                'slug' => '5ta_Falange_Proximal'
            ],

            [
                'name' => 'Quinto Metacarpiano',
                'slug' => '5to_Metacarpiano'
            ],

            [
                'name' => 'Escafoides',
                'slug' => 'Escafoides'
            ],

            [
                'name' => 'Ganchoso',
                'slug' => 'Ganchoso'
            ],

            [
                'name' => 'Grande',
                'slug' => 'Grande'
            ],

            [
                'name' => 'Piramidal',
                'slug' => 'Piramidal'
            ],

            [
                'name' => 'Pisiforme',
                'slug' => 'Pisiforme'
            ],

            [
                'name' => 'Semilunar',
                'slug' => 'Semilunar'
            ],

            [
                'name' => 'Trapecio',
                'slug' => 'Trapecio'
            ],

            [
                'name' => 'Trapezoide',
                'slug' => 'Trapezoide'
            ],

            [
                'name' => 'Cúbito',
                'slug' => 'C_bito'
            ],

            [
                'name' => 'Húmero',
                'slug' => 'H_mero'
            ]
        ];
        $sampleText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        
        foreach ($bone_names as $name) {
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
