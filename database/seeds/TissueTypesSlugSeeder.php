<?php

use App\TissueType;
use Illuminate\Database\Seeder;

class TissueTypesSlugSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $tissue_types = TissueType::all();

    foreach ($tissue_types as $tissue_type) {
    	switch ($tissue_type->name) {
    		case 'Músculos':
    			$tissue_type->slug = "musculos";
    			$tissue_type->save();
    			break;
  			case 'Huesos':
  				$tissue_type->slug = "huesos";
  				$tissue_type->save();
  				break;
  			case 'Músculos Estriados':
  				$tissue_type->slug = "musculos-estriados";
  				$tissue_type->save();
  				break;
  			case 'Músculos Lisos':
  				$tissue_type->slug = "musculos-lisos";
  				$tissue_type->save();
  				break;
				case 'Músculos Cardiacos':
					$tissue_type->slug = "musculos-cardiacos";
					$tissue_type->save();
					break;
				case 'Músculos Esqueléticos':
					$tissue_type->slug = "musculos-esqueléticos";
					$tissue_type->save();
					break;
				case 'Muscles':
    			$tissue_type->slug = "muscles";
    			$tissue_type->save();
    			break;
  			case 'Bones':
  				$tissue_type->slug = "bones";
  				$tissue_type->save();
  				break;
  			case 'Striated Muscles':
  				$tissue_type->slug = "striated-muscles";
  				$tissue_type->save();
  				break;
  			case 'Smooth Muscles':
  				$tissue_type->slug = "smooth-muscles";
  				$tissue_type->save();
  				break;
				case 'Cardiac Muscles':
					$tissue_type->slug = "cardiac-muscles";
					$tissue_type->save();
					break;
				case 'Skeletal Muscles':
					$tissue_type->slug = "skeletal-muscles";
					$tissue_type->save();
					break;
    	}
    }
  }
}
