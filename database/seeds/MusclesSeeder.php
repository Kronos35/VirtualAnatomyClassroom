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
                'content' => "El músculo ancóneo es un músculo perteneciente al segmento del miembro superior conocido como antebrazo. De las 3 regiones musculares del antebrazo, el ancóneo pertenece a la posterior, siendo el más superior de todos los músculos de la región.

Embriológicamente, el ancóneo sería el cuarto fascículo del hipotético músculo cuádriceps braquial, que finalmente no se unió a los otros tres y se desarrolló como músculo independiente, en una región muscular distinta. Mantuvo por tanto la inervación y vascularización que es propia del ulterior músculo tríceps braquial.",
                'description' => "El ancóneo tiene forma triangular, localizándose el vértice en su inserción proximal y la base a lo largo de la inserción caudal (cara posterior del cubito, cara externa del olécranon). La cara anterior está en relación directa, por dentro, con el olécranon, y por fuera, con la cara posterior del epicóndilo del húmero. La cara posterior es subcutánea y está en relación directa con la piel.",
            ],
            
            [
                'name' => 'Aponeurosis bicipital',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Aponeurosis_bicipital',
                'tissue_type_id' => $tissue_type,
                'content' => "La aponeurosis bicipital (también conocida como lacertus fibrosus) es una aponeurosis amplia del bíceps braquial que se encuentra en la fosa cubital del codo y separa las estructuras superficiales de las profundas en gran parte de la fosa.

Es una estructura que debe incidirse durante la fasciotomía en el tratamiento del síndrome compartimental agudo del antebrazo y la región del codo.

Algunas personas (alrededor del 3% de la población) tienen una arteria cubital superficial que corre superficialmente a la aponeurosis bicipital en lugar de debajo de ella. Estas personas corren el riesgo de sufrir lesiones accidentales en la arteria cubital durante la punción venosa.",
                'description' => "La aponeurosis bicipital se origina de la inserción distal del bíceps braquial. Mientras que el tendón del bíceps se inserta en la tuberosidad radial, la aponeurosis refuerza la fosa cubital y ayuda a proteger la arteria braquial y el nervio mediano que se extiende por debajo. Esta protección es importante durante la punción venosa (extracción de sangre) de la vena cubital media.",
            ],
            
            [
                'name' => 'Braquiorradial',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Braquiorradial',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo braquiorradial flexiona el antebrazo a nivel del codo. Cuando el brazo está pronado, el braquiorradial tiende a supinar el antebrazo a medida que lo flexiona. En una posición supinada, tiende a pronación con la flexión del mismo.

El músculo es un mayor flexor del codo cuando el antebrazo está en una posición media entre supinado y pronado a nivel de la articulación radio-cubital. Cuando está en pronación, el braquiorradial es más activo durante la flexión por razón de que el bíceps braquial está en desventaja mecánica.",
                'description' => "El músculo braquiorradial o supinador largo es un músculo largo del brazo en la región externa y superficial del antebrazo. Actúa flexionando el codo y es capaz también de pronación y supinación, dependiendo de su posición en el antebrazo. Está adherido a la base de apófisis estiloides del radio y en el tercio inferior del borde lateral del húmero y en el tabique intermuscular lateral.",
            ],

            [
                'name' => 'Abductor corto del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_corto_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo abductor corto del pulgar (Abductor brevis pollicis) es un músculo de la mano que se encuentra en la región palmar externa (eminencia tenar), es aplanado y corto, cuya función es la abducción del pulgar.",
                'description' => "El abductor corto del pulgar es un músculo plano y delgado localizado justo por debajo de la piel de la palma de la mano. Es parte de la eminencia tenar contribuyendo a la prominencia de la palma de la mano, proximal al pulgar.

Se origina, en el hueso escafoides, el ligamento anular anterior del carpo y recibe una extensión del tendón del abductor largo del pulgar. Ocasionalmente tiene fibras insertadas en el tubérculo del hueso trapezoide.",
            ],

            [
                'name' => 'Abductor del meñique',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_del_me_ique',
                'tissue_type_id' => $tissue_type,
                'content' => "El abductor del dedo meñique (Abductor minimi digiti manus) es un músculo corto y aplanado de la mano, se encuentra en la región interna palmar - la eminencia hipotenar.

En casos de polidactilia, el sexto dedo es regido por este músculo",
                'description' => "Se origina, en el hueso pisiforme y expansión del tendón del cubital mayor; y termina en un tendón plano, el cual se divide en dos hazas, una de las cuales se inserta en el extremo posterior de la primera falange del dedo meñique y la otra en el lado cubital de la aponeurosis del extensor del meñique.",
            ],

            [
                'name' => 'Abductor largo del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_largo_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => "El abductor largo del pulgar (Abductor longus pollicis), también llamado separador largo del pulgar es un músculo que se encuentra en la región profunda del antebrazo en su parte posterior, inmediatamente por debajo del músculo supinador (Supinator brevis).",
                'description' => "El abductor largo del pulgar se origina en la cara dorsal (posterior) del hueso cúbito, más abajo de la inserción del músculo ancóneo, en los ligamentos inter-óseos y en el tercio medio de la superficie dorsal del cuerpo del radio. Desde su origen, pasa oblicuamente hacia abajo y hacia afuera, terminando en un tendón, el cual corre por una ranura en el parte lateral del extremo distal del radio, acompañado por el tendón del extensor corto del pulgar, para terminar insertándose en el lado externo del I hueso metacarpiano.",
            ],

            [
                'name' => 'Abductor del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Abductor_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo aductor del pulgar (Adductor pollicis) es un músculo de la mano, en la parte lateral o externa de la región anterior o palmar (la eminencia tenar), de forma triangular que funciona en la aducción del pulgar. Tiene dos cabezas, una transversa y otra oblicua.",
                'description' => "...",
            ],

            [
                'name' => 'Extensor cumún de los dedos',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_com_n_de_los_dedos',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo extensor común de los dedos, es un músculo del cuerpo humano que está situado en la región dorsal/posterior del antebrazo.",
                'description' => "Se origina en el epicóndilo lateral del húmero, en la región externa del codo. Desde este origen se continúa con un potente vientre muscular hasta llegar al retináculo extensor (en la parte dorsal de la muñeca), tetrafurcándose en 4 tendones y pasando estos a través de la cuarta corredera de este retináculo (se conforman diferentes conductos osteofibrosos en el retináculo extensor para el paso de los tendones de múltiples músculos conocidos como correderas), disponiéndose en esta corredera superior al tendón del extensor del dedo índice. Tras pasar la corredera los cuatro tendones (uno para cada dedo), estos terminan en 4 tendones que se unen a la base de las falanges distales de los dedos 2, 3, 4 y 5 de la mano.",
            ],

            [
                'name' => 'Extensor corto del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_corto_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => "El extensor corto del pulgar (Extensor pollicis brevis) es el músculo que se encuentra situado debajo del extensor común en el dorso del antebrazo y conectado con el músculo abductor largo del pulgar. Su tendón constituye el límite radial de la tabaquera anatómica.",
                'description' => "Se origina en la cara posterior del cuerpo del cúbito y el radio, y en la cara posterior de la membrana interosea que se encuentra entre estas dos inserciones. Su dirección es similar al del músculo abductor largo del pulgar, su tendón pasa por la misma ranura en el lado lateral del radio y termina insertándose en la extremidad superior de la primera falange del pulgar.",
            ],

            [
                'name' => 'Extensor del índice',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_del__ndice',
                'tissue_type_id' => $tissue_type,
                'content' => "El extensor del índice (Extensor indicis) es un músculo delgado y elongado, localizado en la parte posterior del antebrazo. Al hacer su recorrido, corre paralelo al extensor largo del pulgar, medial a éste.",
                'description' => "El extensor del índice se origina de la superficie dorsal (posterior) del cúbito, justo por debajo de la inserción del extensor largo del pulgar y de la membrana interósea.

Su tendón continúa por debajo del ligamento dorsal del carpo en el mismo compartimento que transmite los tendones del extensor común de los dedos de la mano, opuesto a la cabeza del segundo hueso metacarpiano, se une en el lado cubital al tendón del extensor común de los dedos de la mano en dirección a la extremidad de la primera falange del dedo índice.",
            ],

            [
                'name' => 'Extensor del meñique',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_del_me_ique',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo extensor propio del meñique, también llamado musculus extensor digiti minimi, es un músculo del cuerpo humano que está situado en la región posterior del antebrazo. Se origina en el epicóndilo lateral del húmero, en la región externa del codo junto al músculo extensor común de los dedos, y se inserta en la primera falange del dedo meñique y en la porción más cubital del tendón del músculo extensor común de los dedos. Cuando se contrae provoca la extensión de la muñeca y la extensión de la primera falange del dedo meñique. Está inervado por el nervio interoseo posterior, rama del nervio radial.",
                'description' => "",
            ],

            [
                'name' => 'Extensor largo del pulgar',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_largo_del_pulgar',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo extensor largo del pulgar o extensor pollicis longus es un un músculo fusiforme, situado en el plano profundo de la región posterior del antebrazo, inferior y medial al músculo extensor corto del pulgar. Se extiende desde la parte media de la ulna a la falange distal del dedo pulgar. Forma el límite medial de la tabaquera anatómica.",
                'description' => "Se inserta proximalmente en la cara posterior del cúbito, a lo largo del tercio medio del hueso; en la membrana interósea del antebrazo y en los tabiques fibrosos que lo separan de los músculos extensor ulnar del carpo y el músculo extensor del índice.

Distalmente se inserta en la cara dorsal de la falange distal del primer dedo.",
            ],

            [
                'name' => 'Extensor radial corto del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_radial_corto_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo extensor radial corto también llamado segundo radial externo o musculo extensor carpi radialis brevis, es un músculo del antebrazo que extiende y abduce la mano, también imprime un movimiento de supinación de antebrazo. Se ubica bajo el músculo extensor radial largo del carpo.",
                'description' => "Se origina en el epicóndilo lateral del húmero y ligamento lateral externo del codo y se inserta en la base del III metacarpiano. Es inervado por el ramo profundo del nervio radial.",
            ],

            [
                'name' => 'Extensor radial largo del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Extensor_radial_largo_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => "Inicialmente corre a lo largo del músculo braquiorradial, pero rápidamente se convierte en un tendón que viaja entre el braquiorradial y el extensor radial corto del carpo.",
                'description' => "El músculo extensor radial largo se origina desde el tercio distal (más lejano del hombro) del surco supracondilar lateral del húmero, desde el septo intermuscular lateral, y también por unas fibras que parten del tendón común de origen de los músculos extensores del antebrazo.

El músculo termina en el tercio superior del antebrazo en un tendón plano, el cual corre a lo largo del borde lateral del radio, por debajo del abductor largo del pulgar y el extensor corto del pulgar. Pasa luego por debajo del ligamento dorsal del carpo, donde yace en una ranura en la parte de atrás del radio, espacio que comparte con el segundo radial externo, inmediatamente detrás de la apófisis estiloides del radio. Finalmente se inserta en la superficie dorsal de la base del segundo hueso metacarpiano, en su lado radial.",
            ],

            [
                'name' => 'Flexor corto del meñique',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_corto_del_me_ique',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo flexor corto del quinto dedo está situado en la planta del pie y tiene la función de realizar la flexión del quinto dedo (meñique) del pie.",
                'description' => "Se origina en la base del 5to metatarsiano y forma un vientre muscular alargado que termina en un tendón que se inserta en la primera falange del 5to dedo del pie.",
            ],

            [
                'name' => 'Flexor cubital del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_cubital_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo flexor cubital del carpo ([TA]: musculus flexor carpi ulnaris), flexor ulnar del carpo o cubital anterior es un músculo largo y cilíndrico del antebrazo humano, se encuentra en la parte interna y anterior del antebrazo.",
                'description' => "El músculo cubital anterior parte de dos haces, el humeral y el cubital, conectados por un arco tendinoso justo por debajo de donde pasan el nervio cubital y la arteria cubital.",
            ],

            [
                'name' => 'Flexor digitorum profundus',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_digitorum_profundus',
                'tissue_type_id' => $tissue_type,
                'content' => "En anatomía humana, el músculo flexor común profundo de los dedos es un músculo del antebrazo que flexiona los dedos. Se inserta en la cara anterior del cúbito (NAI- Ulna) y termina en cuatro tendones en la tercera falange de los últimos cuatro dedos. Los cuatro tendones se denominan tendones perforantes.",
                'description' => "El músculo flexor común profundo de los dedos de la mano es un músculo profundo que se origina del lado anterior de la ulna y, junto con el flexor común superficial de los dedos de la mano, tiene un tendón largo que corre por el antebrazo y atraviesa el túnel carpiano hasta insertarse en el lado palmar de las falanges de los dedos. Por razón de que se inserta distal al flexor común superficial, sus fibras corren a través del tendón del flexor común superficial en dirección a los extremos de las falanges -llamándose por ello, tendones perforantes.",
            ],

            [
                'name' => 'Flexor digitorum superficialis',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_digitorum_superficialis',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo flexor de los dedos es un músculo que se encuentra en el segundo plano de la cara anterior del antebrazo.",
                'description' => "Se origina en la epitroclea humeral, la apófisis coronoides del cúbito y en la parte media de la superficie anterior del radio.

Posee inserciones proximales por diferentes fascículos, el fascículo humeral en la epitroclea, el fascículo cubital en la apófisis coronoides y el fascículo radial en el borde anterior del mismo. Las inserciones distales finalizan en 4 tendones para los cuatro últimos dedos, cada tendón finaliza en 2 lengüetas que se fijan a las bases de las falanges medias en la cara palmar. Estos tendones descienden del antebrazo a la palma de la mano, pasando por el canal del carpo.",
            ],

            [
                'name' => 'Flexor pollicis_brevis',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_pollicis_brevis',
                'tissue_type_id' => $tissue_type,
                'content' => "El extensor corto del pulgar (Extensor pollicis brevis) es el músculo que se encuentra situado debajo del extensor común en el dorso del antebrazo y conectado con el músculo abductor largo del pulgar. Su tendón constituye el límite radial de la tabaquera anatómica.",
                'description' => "Se origina en la cara posterior del cuerpo del cúbito y el radio, y en la cara posterior de la membrana interosea que se encuentra entre estas dos inserciones. Su dirección es similar al del músculo abductor largo del pulgar, su tendón pasa por la misma ranura en el lado lateral del radio y termina insertándose en la extremidad superior de la primera falange del pulgar.",
            ],

            [
                'name' => 'Flexor pollicis longus',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_pollicis_longus',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo extensor largo del pulgar o extensor pollicis longus es un un músculo fusiforme, situado en el plano profundo de la región posterior del antebrazo, inferior y medial al músculo extensor corto del pulgar. Se extiende desde la parte media de la ulna a la falange distal del dedo pulgar. Forma el límite medial de la tabaquera anatómica.",
                'description' => "Se inserta proximalmente en la cara posterior del cúbito, a lo largo del tercio medio del hueso; en la membrana interósea del antebrazo y en los tabiques fibrosos que lo separan de los músculos extensor ulnar del carpo y el músculo extensor del índice.

Distalmente se inserta en la cara dorsal de la falange distal del primer dedo.",
            ],

            [
                'name' => 'Flexor radial del carpo',
                'zone_id' => $z_mano_id,
                'slug' => 'Flexor_radial_del_carpo',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo flexor radial del carpo o palmar mayor es un músculo del antebrazo situado por dentro del pronador redondo y que junto a él y al palmar menor y el cubital anterior forman el primer plano o plano superficial del grupo de músculos anteriores del antebrazo. Por su origen común, estos cuatro músculos también reciben el nombre de epitrocleares.",
                'description' => "Se origina en la epitróclea. Desde ahí se dirige hacia abajo y hacia afuera para continuarse con un tendón en el tercio inferior del antebrazo hasta insertarse en la cara anterior del extremo superior del segundo metacarpiano.

Su acción es de flexor principal de la muñeca, con tendencia a su abducción y pronación. También es flexor del codo. Inervado por el nervio mediano. Vascularizado por ramas de las arterias cubital y radial.",
            ],

            [
                'name' => 'Interoseos dorsales',
                'zone_id' => $z_mano_id,
                'slug' => 'Inter_seos_dorsales',
                'tissue_type_id' => $tissue_type,
                'content' => "Los músculos interóseos dorsales de la mano son cuatro músculos que se originan en la diáfisis de los metacarpianos y se insertan en la base de la primera falange de los dedos. Actúan como flexores metacarpofalángicos y abductores de los dedos.",
                'description' => "Existen cuatro interóseos dorsales en cada mano, llamados dorsales para diferenciarlos de los interóseos palmares, los cuales están ubicadas en la cara anterior de los metacarpianos.

Cada músculo interóseo dorsal tiene dos alas que se originan en puntos adyacentes de los huesos metacarpianos. El dedo indice y anular reciben la inserdion de un inteoseo dorsal, en el dedo medio se insertan dos, mientras que en el pulgar y el meñique no lo hace ninguno.",
            ],

            [
                'name' => 'Lumbricales',
                'zone_id' => $z_mano_id,
                'slug' => 'Lumbricales',
                'tissue_type_id' => $tissue_type,
                'content' => "Los músculos lumbricales de la mano (lumbricales) son cuatro músculos que se encuentran en la región palmar media, entre los tendones del flexor profundo, enumerados de fuera a dentro 1ro, 2do, 3ro y 4to. Se insertan, por arriba en los tendones del flexor profundo; por abajo en los músculos extensores de los dedos 2do, 3ro, 4to y 5to. Son flexores de la primera falange y extensores de las otras dos.",
                'description' => "...",
            ],

            [
                'name' => 'Opponens digiti minimi',
                'zone_id' => $z_mano_id,
                'slug' => 'Opponens_digiti_minimi',
                'tissue_type_id' => $tissue_type,
                'content' => "El abductor del dedo meñique (Abductor minimi digiti manus) es un músculo corto y aplanado de la mano, se encuentra en la región interna palmar - la eminencia hipotenar.

En casos de polidactilia, el sexto dedo es regido por este músculo.",
                'description' => "Se origina, en el hueso pisiforme y expansión del tendón del cubital mayor; y termina en un tendón plano, el cual se divide en dos hazas, una de las cuales se inserta en el extremo posterior de la primera falange del dedo meñique y la otra en el lado cubital de la aponeurosis del extensor del meñique.",
            ],

            [
                'name' => 'Opponens pollicis',
                'zone_id' => $z_mano_id,
                'slug' => 'Opponens_pollicis',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo aductor del pulgar (Adductor pollicis) es un músculo de la mano, en la parte lateral o externa de la región anterior o palmar (la eminencia tenar), de forma triangular que funciona en la aducción del pulgar. Tiene dos cabezas, una transversa y otra oblicua.",
                'description' => "El músculo aductor del pulgar es el más profundo de los músculos que conforman la eminencia tenar de la mano. Está formado por dos haces, entre los cuales penetra una arteria, el arco profundo de la palma de la mano.",
            ],

            [
                'name' => 'Palmar interossei',
                'zone_id' => $z_mano_id,
                'slug' => 'Palmar_interossei',
                'tissue_type_id' => $tissue_type,
                'content' => "Los interóseos palmares son tres músculos, enumerados II, IV y V; se originan en la base de los metacarpianos de los dedos II, IV y V, y se insertan en la aponeurosis dorsal.

Actúan como aductores de acción conjunta - flexión metacarpofalángica con extensión de las interfalángicas y aproximación de los dedos hacia la línea axial-.",
                'description' => "Cada músculo interóseo palmar surge de toda la longitud del hueso metacarpiano de un dedo, y está insertado en en lado de la base de la falange proximal y expansión extensora del tendón del extensor de los dedos del mismo dedo.",
            ],

            [
                'name' => 'Palmaris longus',
                'zone_id' => $z_mano_id,
                'slug' => 'Palmaris_longus',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo flexor radial del carpo o palmar mayor es un músculo del antebrazo situado por dentro del pronador redondo y que junto a él y al palmar menor y el cubital anterior forman el primer plano o plano superficial del grupo de músculos anteriores del antebrazo. Por su origen común, estos cuatro músculos también reciben el nombre de epitrocleares.",
                'description' => "Se origina en la epitróclea. Desde ahí se dirige hacia abajo y hacia afuera para continuarse con un tendón en el tercio inferior del antebrazo hasta insertarse en la cara anterior del extremo superior del segundo metacarpiano.
Su acción es de flexor principal de la muñeca, con tendencia a su abducción y pronación. También es flexor del codo. Inervado por el nervio mediano. Vascularizado por ramas de las arterias cubital y radial.",
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
                'content' => "El pronador cuadrado es un músculo ubicado en la región de la muñeca. Está bastante alejado del punto de apoyo, lo que hace que con una leve contracción produzca la pronación. Se origina en la cara anterior del cuarto inferior de la Ulna y se inserta en el cuarto distal de la superficie anterior del radio.",
                'description' => "Este músculo es el pronador principal del antebrazo, independientemente del ángulo de la articulación del codo. Su tono supera al del bíceps y por eso es que en reposo los codos se disponen en pronación. Está inervado por el nervio interóseo, rama del mediano. (proveniente del plexo braquial)",
            ],

            [
                'name' => 'Pronator redondo',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Pronator_teres',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo pronador redondo (Pronator teres o radii teres) es un músculo superficial del antebrazo, localizado en la parte externa de la región proximal y anterior del antebrazo; aplanado y oblicuo.",
                'description' => "Se origina por medio de dos fascículos: uno, desde el epicóndilo medial o epitróclea del húmero y, el otro, más delgado, desde la cara interna de la apófisis coronoides de la ulna (cúbito). Entre los dos fascículos de origen pasa el nervio mediano, que es quien lo inerva. Inserción: Se inserta distalmente en el tercio medio de la cara lateral del radio.",
            ],

            [
                'name' => 'Supinador',
                'zone_id' => $z_ant_brazo_id,
                'slug' => 'Supinator',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo supinador, también llamado supinador corto para diferenciarlo del supinador largo (braquirradialis) es un músculo ancho, dispuesto alrededor y sobre la cara lateral del codo y la parte superior del antebrazo. Se extiende desde el epicóndilo lateral y el cúbito hasta el radio.",
                'description' => "Se realiza por dos fascículos: humeroradial y radioulnar (cubitoradial).",
            ],

            [
                'name' => 'Biceps braquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Biceps_braquial',
                'tissue_type_id' => $tissue_type,
                'content' => "El bíceps braquial (musculus biceps cubiti) es un músculo de la región anterior del brazo, donde cubre a los músculos coracobraquial y braquial anterior.",
                'description' => "Ambos cuerpos musculares se reúnen, e insertan inferiormente mediante un tendón común, en la tuberosidad bicipital del radio. El bíceps braquial está vascularizado por una o dos ramas de la arteria humeral, las arterias bicipitales. Lo inerva una rama propia del nervio musculocutáneo: el nervio del bíceps.",
            ],

            [
                'name' => 'Braquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Braquial',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo braquial o braquial anterior (musculus brachialis) es un músculo situado en la región anterior e inferior del brazo, debajo del bíceps. Es ancho y aplanado, y actúa como flexor en la flexión del brazo.",
                'description' => "Se inserta, por arriba en la impresión deltoidea, en los bordes y cara interna y externa del húmero; por abajo, por un tendón ancho, en la base de la apófisis coronoides del cúbito.",
            ],

            [
                'name' => 'Coracobraquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Coracobraquial',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo coracobraquial (Coracobrachialis) es un músculo del brazo, en la región anterior del brazo, por dentro de la porción corta del bíceps braquial; grueso, prismático; el coracobraquial es el músculo largo más capacitado para movimientos rápidos que para movimientos de fuerza. No es un músculo que afecte muy determinantemente a los 3 ejes de la articulación escapulohumeral. Se inserta por arriba en la apófisis coracoides, por un tendón común con la porción corta del bíceps; por abajo, en la cara interna del húmero; lo inerva ramas del nervio musculocutáneo, el cual lo atraviesa Es elevador del brazo y depresor del hombro.",
                'description' => "Es elevador del brazo y depresor del hombro. También se dice es un músculo que hace rotación interna. Equilibrador. Coaptador. Restablecedor de la posición anatómica.",
            ],
            
            [
                'name' => 'Triceps braquial',
                'zone_id' => $z_brazo_id,
                'slug' => 'Triceps_braquial',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo tríceps braquial (Triceps brachii o tríceps extensor cubiti) es un músculo situado en la región posterior del brazo. Está constituido en la parte superior por tres porciones: porción larga, vastos interno y externo. Junto con el músculo anconeo forma el grupo posterior o extensor del brazo.",
                'description' => "La porción larga tiene su origen en la parte inferior de la cavidad glenoidea de la escápula; el vasto externo en la aponeurosis intermuscular y cara posterior del húmero; el vasto interno, en la aponeurosis intermuscular y cara posterior del húmero; las tres porciones se insertan mediante un tendón común, en la cara posterior y bordes del olécranon.",
            ],

            [
                'name' => 'Deltoides',
                'zone_id' => $z_hombro_id,
                'slug' => 'Deltoides',
                'tissue_type_id' => $tissue_type,
                'content' => "El deltoides es un músculo del hombro. Tiene la forma de un semicono hueco, que rodea la articulación del hombro y une la cintura escapular a la diáfisis humeral.",
                'description' => "Se inserta: Por arriba, En el tercio o en la mitad externa del borde anterior de la clavícula. Borde externo del acromión. Labio inferior de la espina del omóplato. Desde aquí sus fascículos medios, anteriores y posteriores se dirigirán verticalmente hacia abajo; oblicuamente hacia abajo, afuera y atrás; hacia abajo, afuera y adelante, respectivamente. Todos convergen hacia la impresión deltoidea del húmero y se insertan en ella.",
            ],

            [
                'name' => 'Infraespinoso',
                'zone_id' => $z_hombro_id,
                'slug' => 'Infraespinoso',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo infraespinoso ([TA]: musculus infraspinatus) es un músculo que se origina en la fosa infraespinosa, que ocupa totalmente, y desde ahí su tendón se dirige a la cara postero-externa del tubérculo mayor del húmero (conocido como troquiter, más específicamente se dirige a la carilla más externa del troquiter). Este músculo es superficial pero está cubierto por una fuerte fascia que lo aplasta contra la escápula.",
                'description' => "Se origina en los dos tercios internos de la fosa infraespinosa de la escápula, y se inserta en la tuberosidad mayor del húmero, por detrás del músculo supraespinoso.",
            ],

            [
                'name' => 'Redondo mayor',
                'zone_id' => $z_hombro_id,
                'slug' => 'Redondo_mayor',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo redondo mayor es un músculo voluminoso, de aspecto redondeado que se localiza en la región posterior del hombro.",
                'description' => "Se origina en una gran región ovalada, situada en la superficie posterior del ángulo inferior de la escápula, caudal al origen del músculo redondo menor, en los tabiques fibrosos intermusculares y en la fascia infraespinosa. Es un músculo ancho con forma de cordón, que se dirige en sentido superior y lateral, sus fibras ascienden oblicuamente en busca de la cara anterior del húmero, para terminar insertándose en la cresta del tubérculo menor del húmero pero caudal a la inserción del músculo dorsal ancho (corredera bicipital). Sus acciones son rotación interna y aducción (aproximación del húmero).",
            ],
            
            [
                'name' => 'Redondo menor',
                'zone_id' => $z_hombro_id,
                'slug' => 'Redondo_menor',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo redondo menor (lat. musculus teres minor) es un músculo pequeño que se encuentra en el hombro, en su parte posterior. Este músculo puede estar fusionado con el músculo infraespinoso.",
                'description' => "Se origina en el borde inferior externo de la fosa infraespinosa. Por debajo del tubérculo infraglenoideo. Su tendón de inserción se adhiere primero a la cápsula articular del hombro y luego se inserta en la carilla inferior del tubérculo mayor del húmero.",
            ],

            [
                'name' => 'Subescapular',
                'zone_id' => $z_hombro_id,
                'slug' => 'Subescapular',
                'tissue_type_id' => $tissue_type,
                'content' => "Su origen se encuentra en la totalidad de la superficie de la fosa subescapular. Sus fibras convergen hacia la base del proceso coracoides bajo la que se deslizan para ir a insertarse en el tubérculo menor del húmero. Situado entre la escápula y el músculo serrato anterior que lo separa del tórax, no participa en el modelado del hombro. Es inervado por los nervios subescapular superior y subescapular inferior.",
                'description' => "La acción de este músculo produce la rotación medial del húmero.",
            ],

            [
                'name' => 'Supraespinoso',
                'zone_id' => $z_hombro_id,
                'slug' => 'Supraespinoso',
                'tissue_type_id' => $tissue_type,
                'content' => "El músculo supraespinoso es un músculo que se encuentra en la región posterosuperior del hombro, en la fosa supraespinosa de la escápula; de forma triangular.",
                'description' => "Se inserta en la fosa supraespinosa; y por fuera, a través de un tendón, en el tubérculo mayor del húmero.",
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

