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
                'content' => "Resulta de la unión de los bordes lateral y superior. Presenta dos formaciones de importancia: la cavidad glenoidea y la apófisis coracoides.",
                'description' => "La Escápula (en latín, escarbar) u omóplato / omoplato (del griego omo, hombro, y plato, ancho) es un hueso plano y triangular. Se ubica en la parte posterior o dorso-lateral del tórax según la especie de la que se trate, específicamente en el esqueleto humano se encuentra en la región comprendida entre la segunda y séptima costilla. Conecta con el húmero (hueso del brazo) y con la clavícula (en aquellas especies que poseen tal hueso) y forma la parte posterior de la cintura escapular. El cuerpo es delgado, incluso traslúcido a contraluz por encima y por debajo de la espina, aunque es más grueso en sus bordes.

Consta en términos generales, y específicamente en el ser humano, de un cuerpo, una espina que termina por fuera en el acromion y una apófisis coracoides.

El resto de este artículo hace referencia puntual a sus características particulares en la especie humana, pero puede ser de utilidad como base comparativa para el estudio de otras especies de animales superiores.",
            ],

            [
                'name' => 'Primer Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '1er_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => "El metacarpo es una de las tres partes de las que se componen los huesos de la mano y está formado por los cinco huesos metacarpianos (Ossa metacarpalia), que son delgados y ligeramente alargados y ocupan toda la palma de la mano.",
                'description' => "Son huesos que poseen características de huesos largos a pesar de su pequeño tamaño. Son cinco, numerados de 1 a 5 de fuera a dentro (respecto a la posición anatómica) empezando por el pulgar, que en posición anatómica, (radio y cúbito en paralelo) es el externo. Poseen 2 epífisis o extremos, una proximal ó superior y otra distal o inferior y una diáfisis o cuerpo. Sus cuerpos o diáfisis son prismáticotriangulares y los dos extremos ó epífisis poseen: La superior tiene cinco caras, de las cuales tres son articulares (excepto el 1 que sólo tiene una, y el 2 y 5 que tienen dos), y la inferior o distal tiene una cara articular.",
            ],

            [
                'name' => 'Primera Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '1ra_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges distales o falanges ungueales son los huesos localizados en los extremos de los dedos de manos y pies, se articulan con las falanges medias - excepto en el dedo pulgar y dedo gordo que al carecer de ellas se articulan en las proximales.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana y terminan en una expansión ancha y plana, en forma de media luna llamada epífisis que sirve de soporte a la almohadilla pulposa de la yema de los dedos en la superficie palmar y las uñas en la dorsal.",
                'description' => "...",
            ],

            [
                'name' => 'Primera Falange Próximal',
                'zone_id' => $z_mano_id,
                'slug' => '1ra_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges proximales son los huesos localizados en la base de los dedos de manos y pies, comienzan en las articulaciones más prominentes llamadas nudillos cuya cabeza son los metacarpos (en la mano) y metatarsos (en el pie). La base de estas falanges se articulan con las falanges medias.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana.",
                'description' => "...",
            ],

            [
                'name' => 'Segunda Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges distales o falanges ungueales son los huesos localizados en los extremos de los dedos de manos y pies, se articulan con las falanges medias - excepto en el dedo pulgar y dedo gordo que al carecer de ellas se articulan en las proximales.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana y terminan en una expansión ancha y plana, en forma de media luna llamada epífisis que sirve de soporte a la almohadilla pulposa de la yema de los dedos en la superficie palmar y las uñas en la dorsal.",
                'description' => "...",
            ],

            [
                'name' => 'Segunda Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges medias son las estructuras óseas ubicadas entre las dos articulaciones de los dedos de la mano y del pie; el pulgar o dedo gordo carece de esta falange. Estos huesos se caracterizan por tener una superficie dorsal convexa y otra palmar plana. También tienen un tamaño intermedio entre las otras falanges de la mano.",
                'description' => "...",
            ],

            [
                'name' => 'Segunda Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '2da_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges proximales son los huesos localizados en la base de los dedos de manos y pies, comienzan en las articulaciones más prominentes llamadas nudillos cuya cabeza son los metacarpos (en la mano) y metatarsos (en el pie). La base de estas falanges se articulan con las falanges medias.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana.",
                'description' => "...",
            ],

            [
                'name' => 'Segundo Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '2do_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => "El metacarpo es una de las tres partes de las que se componen los huesos de la mano y está formado por los cinco huesos metacarpianos (Ossa metacarpalia), que son delgados y ligeramente alargados y ocupan toda la palma de la mano.",
                'description' => "Son huesos que poseen características de huesos largos a pesar de su pequeño tamaño. Son cinco, numerados de 1 a 5 de fuera a dentro (respecto a la posición anatómica) empezando por el pulgar, que en posición anatómica, (radio y cúbito en paralelo) es el externo. Poseen 2 epífisis o extremos, una proximal ó superior y otra distal o inferior y una diáfisis o cuerpo. Sus cuerpos o diáfisis son prismáticotriangulares y los dos extremos ó epífisis poseen: La superior tiene cinco caras, de las cuales tres son articulares (excepto el 1 que sólo tiene una, y el 2 y 5 que tienen dos), y la inferior o distal tiene una cara articular.",
            ],

            [
                'name' => 'Tercer Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '3er_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => "El metacarpo es una de las tres partes de las que se componen los huesos de la mano y está formado por los cinco huesos metacarpianos (Ossa metacarpalia), que son delgados y ligeramente alargados y ocupan toda la palma de la mano.",
                'description' => "Son huesos que poseen características de huesos largos a pesar de su pequeño tamaño. Son cinco, numerados de 1 a 5 de fuera a dentro (respecto a la posición anatómica) empezando por el pulgar, que en posición anatómica, (radio y cúbito en paralelo) es el externo. Poseen 2 epífisis o extremos, una proximal ó superior y otra distal o inferior y una diáfisis o cuerpo. Sus cuerpos o diáfisis son prismáticotriangulares y los dos extremos ó epífisis poseen: La superior tiene cinco caras, de las cuales tres son articulares (excepto el 1 que sólo tiene una, y el 2 y 5 que tienen dos), y la inferior o distal tiene una cara articular.",
            ],

            [
                'name' => 'Tercera Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges distales o falanges ungueales son los huesos localizados en los extremos de los dedos de manos y pies, se articulan con las falanges medias - excepto en el dedo pulgar y dedo gordo que al carecer de ellas se articulan en las proximales.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana y terminan en una expansión ancha y plana, en forma de media luna llamada epífisis que sirve de soporte a la almohadilla pulposa de la yema de los dedos en la superficie palmar y las uñas en la dorsal.",
                'description' => "...",
            ],

            [
                'name' => 'Tercera Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges medias son las estructuras óseas ubicadas entre las dos articulaciones de los dedos de la mano y del pie; el pulgar o dedo gordo carece de esta falange. Estos huesos se caracterizan por tener una superficie dorsal convexa y otra palmar plana. También tienen un tamaño intermedio entre las otras falanges de la mano.",
                'description' => "...",
            ],

            [
                'name' => 'Tercera Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '3ra_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges proximales son los huesos localizados en la base de los dedos de manos y pies, comienzan en las articulaciones más prominentes llamadas nudillos cuya cabeza son los metacarpos (en la mano) y metatarsos (en el pie). La base de estas falanges se articulan con las falanges medias.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana.",
                'description' => "...",
            ],

            [
                'name' => 'Cuarta Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges distales o falanges ungueales son los huesos localizados en los extremos de los dedos de manos y pies, se articulan con las falanges medias - excepto en el dedo pulgar y dedo gordo que al carecer de ellas se articulan en las proximales.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana y terminan en una expansión ancha y plana, en forma de media luna llamada epífisis que sirve de soporte a la almohadilla pulposa de la yema de los dedos en la superficie palmar y las uñas en la dorsal.",
                'description' => "...",
            ],

            [
                'name' => 'Cuarta Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges medias son las estructuras óseas ubicadas entre las dos articulaciones de los dedos de la mano y del pie; el pulgar o dedo gordo carece de esta falange. Estos huesos se caracterizan por tener una superficie dorsal convexa y otra palmar plana. También tienen un tamaño intermedio entre las otras falanges de la mano.",
                'description' => "...",
            ],

            [
                'name' => 'Cuarta Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '4ta_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges proximales son los huesos localizados en la base de los dedos de manos y pies, comienzan en las articulaciones más prominentes llamadas nudillos cuya cabeza son los metacarpos (en la mano) y metatarsos (en el pie). La base de estas falanges se articulan con las falanges medias.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana.",
                'description' => "...",
            ],

            [
                'name' => 'Cuarto Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '4to_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => "El metacarpo es una de las tres partes de las que se componen los huesos de la mano y está formado por los cinco huesos metacarpianos (Ossa metacarpalia), que son delgados y ligeramente alargados y ocupan toda la palma de la mano.",
                'description' => "Son huesos que poseen características de huesos largos a pesar de su pequeño tamaño. Son cinco, numerados de 1 a 5 de fuera a dentro (respecto a la posición anatómica) empezando por el pulgar, que en posición anatómica, (radio y cúbito en paralelo) es el externo. Poseen 2 epífisis o extremos, una proximal ó superior y otra distal o inferior y una diáfisis o cuerpo. Sus cuerpos o diáfisis son prismáticotriangulares y los dos extremos ó epífisis poseen: La superior tiene cinco caras, de las cuales tres son articulares (excepto el 1 que sólo tiene una, y el 2 y 5 que tienen dos), y la inferior o distal tiene una cara articular.",
            ],

            [
                'name' => 'Quinta Falange Distal',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Distal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges distales o falanges ungueales son los huesos localizados en los extremos de los dedos de manos y pies, se articulan con las falanges medias - excepto en el dedo pulgar y dedo gordo que al carecer de ellas se articulan en las proximales.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana y terminan en una expansión ancha y plana, en forma de media luna llamada epífisis que sirve de soporte a la almohadilla pulposa de la yema de los dedos en la superficie palmar y las uñas en la dorsal.",
                'description' => "...",
            ],

            [
                'name' => 'Quinta Falange Medial',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Medial',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges medias son las estructuras óseas ubicadas entre las dos articulaciones de los dedos de la mano y del pie; el pulgar o dedo gordo carece de esta falange. Estos huesos se caracterizan por tener una superficie dorsal convexa y otra palmar plana. También tienen un tamaño intermedio entre las otras falanges de la mano.",
                'description' => "...",
            ],

            [
                'name' => 'Quinta Falange Proximal',
                'zone_id' => $z_mano_id,
                'slug' => '5ta_Falange_Proximal',
                'tissue_type_id' => $tissue_type,
                'content' => "Las falanges proximales son los huesos localizados en la base de los dedos de manos y pies, comienzan en las articulaciones más prominentes llamadas nudillos cuya cabeza son los metacarpos (en la mano) y metatarsos (en el pie). La base de estas falanges se articulan con las falanges medias.
Se caracterizan por tener una superficie dorsal convexa y otra palmar plana.",
                'description' => "...",
            ],

            [
                'name' => 'Quinto Metacarpiano',
                'zone_id' => $z_mano_id,
                'slug' => '5to_Metacarpiano',
                'tissue_type_id' => $tissue_type,
                'content' => "El metacarpo es una de las tres partes de las que se componen los huesos de la mano y está formado por los cinco huesos metacarpianos (Ossa metacarpalia), que son delgados y ligeramente alargados y ocupan toda la palma de la mano.",
                'description' => "Son huesos que poseen características de huesos largos a pesar de su pequeño tamaño. Son cinco, numerados de 1 a 5 de fuera a dentro (respecto a la posición anatómica) empezando por el pulgar, que en posición anatómica, (radio y cúbito en paralelo) es el externo. Poseen 2 epífisis o extremos, una proximal ó superior y otra distal o inferior y una diáfisis o cuerpo. Sus cuerpos o diáfisis son prismáticotriangulares y los dos extremos ó epífisis poseen: La superior tiene cinco caras, de las cuales tres son articulares (excepto el 1 que sólo tiene una, y el 2 y 5 que tienen dos), y la inferior o distal tiene una cara articular.",
            ],

            [
                'name' => 'Escafoides',
                'zone_id' => $z_mano_id,
                'slug' => 'Escafoides',
                'tissue_type_id' => $tissue_type,
                'content' => "El hueso escafoides es un hueso de la muñeca, par, corto, esponjoso, de forma cuboidea, con seis caras de las cuales tres son articulares.",
                'description' => "Es el primer hueso externo de la primera fila del carpo. Se articula con el radio, hueso semilunar, hueso grande, hueso trapezoide y hueso trapecio.",
            ],

            [
                'name' => 'Ganchoso',
                'zone_id' => $z_mano_id,
                'slug' => 'Ganchoso',
                'tissue_type_id' => $tissue_type,
                'content' => "Es el cuarto hueso, de radial hacia ulnar, de la segunda fila del carpo. Se articula con el piramidal, grande del carpo, semilunar y cuarto y quinto metacarpianos. Es el último de la segunda fila. En su cara anterior se levanta una larga apófisis unciforme, en forma de gancho, en cuyo vértice se fija el ligamento anterior del carpo. Su cara posterior es rugosa. Su cara superior, articular parece más bien un borde obtuso, para el semilunar. Su cara inferior posee dos carillas para los dos últimos metacarpianos. Su cara externa es articular para el hueso grande. Su cara interna, articular también en casi toda su extensión para el piramidal.",
                'description' => "El hueso ganchoso o Hamato es un hueso de la muñeca, par, corto y esponjoso, de forma piramidal, con cinco caras, de las cuales tres son articulares.",
            ],

            [
                'name' => 'Grande',
                'zone_id' => $z_mano_id,
                'slug' => 'Grande',
                'tissue_type_id' => $tissue_type,
                'content' => "El hueso grande es un hueso de la muñeca, par, corto y esponjoso, cuboideo, formado por tres porciones: cabeza, cuello y cuerpo, con seis caras, de las cuales cuatro son articulares.",
                'description' => "Es el tercer hueso de la segunda fila del carpo. Se articula con el escafoides, semilunar, trapezoide, ganchoso y segundo, tercer y cuarto metacarpianos.",
            ],

            [
                'name' => 'Piramidal',
                'zone_id' => $z_mano_id,
                'slug' => 'Piramidal',
                'tissue_type_id' => $tissue_type,
                'content' => "El hueso piramidal es un hueso de la muñeca, par, corto, esponjoso, en forma de pirámide, con seis caras, de las cuales tres son articulares. Articula superiormente con el pisiforme, lateralmente (en relación con el plano sagital) con el semilunar y distalmente con el ganchoso. Es un hueso de la primera fila del carpo; se articula con el pisiforme, semilunar y ganchoso. Para tener una mayor idea de su ubicación se podría decir que es el tercero en el carpo asi el orden seria: escafoides, semilunar y piramidal.",
                'description' => "",
            ],

            [
                'name' => 'Pisiforme',
                'zone_id' => $z_mano_id,
                'slug' => 'Pisiforme',
                'tissue_type_id' => $tissue_type,
                'content' => "El hueso pisiforme (en forma de guisante) es un hueso de la muñeca, par, corto, esponjoso, cuboideo, con cuatro caras de las cuales una es articular, y dos extremos, superior e inferior. Es el cuarto hueso de la primera fila del carpo. Sus cuatro caras son: Externa, interna, anterior y posterior. En la cara Externa va a presentar un canal longitudinal para dar paso a la arteria cubital y un ramo profundo del nervio cubital. En la cara interna va a dar inserción al ligamento lateral interno de la articulación de la muñeca. En la cara anterior va a prestar inserción al músculo aductor del meñique y al músculo cubital anterior. y por último en la cara posterior se va articular con el hueso piramidal.",
                'description' => "",
            ],

            [
                'name' => 'Semilunar',
                'zone_id' => $z_mano_id,
                'slug' => 'Semilunar',
                'tissue_type_id' => $tissue_type,
                'content' => "El hueso semilunar es un hueso de la muñeca llamado así porque tiene la forma de media luna con la concavidad mirando hacia abajo. Es un hueso, par, corto, esponjoso, compacto, de forma cuboidea, semilunar, que parece una luna, con seis caras, de las cuales cuatro son articulares.",
                'description' => "",
            ],

            [
                'name' => 'Trapecio',
                'zone_id' => $z_mano_id,
                'slug' => 'Trapecio',
                'tissue_type_id' => $tissue_type,
                'content' => "El hueso trapecio (del griego τράπεζα 'mesa') es un hueso de la mano humana. Es un hueso del carpo, en la sección designada comúnmente la muñeca. Articula distalmente con el primer metacarpiano (del pulgar), formando la articulación trapezometacarpiana de tipo (morfológico) silla de montar o de encaje recíproco (2 ejes y 2 grados de libertad), y proximalmente con el hueso escafoides. Articula también con el hueso trapezoide y el segundo metacarpiano.",
                'description' => "",
            ],

            [
                'name' => 'Trapezoide',
                'zone_id' => $z_mano_id,
                'slug' => 'Trapezoide',
                'tissue_type_id' => $tissue_type,
                'content' => "El hueso trapezoide es un hueso de la muñeca, par, corto, esponjoso, con seis caras de las cuales cuatro son articulares.",
                'description' => "",
            ],

            [
                'name' => 'Cúbito',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'C_bito',
                'tissue_type_id' => $tissue_type,
                'content' => "La ulna​ o cúbito es un hueso largo, paralelo al radio, situado entre la tróclea humeral y el carpo. Se encuentra en la parte interna del antebrazo; se articula superiormente con el húmero y el radio, y por la parte inferior con el radio y con los huesos del carpo. Tiene un cuerpo y dos extremidades.",
                'description' => "",
            ],

            [
                'name' => 'Radio',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Radio',
                'tissue_type_id' => $tissue_type,
                'content' => "El radio (radius) es un hueso situado en la parte lateral o externa del antebrazo, paralelo al cúbito. Por su morfología, se trata de un hueso largo, con forma de prisma y ligeramente curvo. Su extremo superior o proximal, más redondeado, conecta con la articulación del codo y el inferior o distal, más aplanado, con la articulación de la muñeca, en el lado más próximo al pulgar.",
                'description' => "",
            ],

            [
                'name' => 'Húmero',
                'zone_id' => $z_brazo_id,
                'slug' => 'H_mero',
                'tissue_type_id' => $tissue_type,
                'content' => "Se articula en su porción superior con la escápula, por medio de la articulación del hombro (o articulación glenohumeral) y en la inferior con el cúbito y el radio, por medio de la articulación del codo (o articulación humeroradioulnar). El extremo proximal del húmero tiene la cabeza, cuellos quirúrgico y anatómico y tubérculos mayor y menor.",
                'description' => "El Húmero (en latín, humerus) es el hueso más largo de las extremidades superiores en el ser humano.1​ Forma parte del esqueleto apendicular superior y está ubicado en la región del brazo.",
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
