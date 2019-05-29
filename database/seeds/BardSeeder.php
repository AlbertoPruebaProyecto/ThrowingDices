<?php

use Illuminate\Database\Seeder;

class BardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CLASS
    	DB::table('classes')->insert([
    		'name'          =>  'bard',
    		'class_skills'  =>  'acrobatics;craftwork;discover_intentions;knowledge_spells;diplomacy;dress_up;trickery;escapism;play;intimidate;hand_game;linguistics;perception;wisdom_arcane;wisdom_dungeons;wisdom_geography;wisdom_history;wisdom_ingineering;wisdom_local;wisdom_map;wisdom_nature;wisdom_nobility;wisdom_religion;discretion;valuation;climb;use_magic_object',
    		'hit_dice'      =>  'd8',
    	]);

    	// LEVEL UP
    	DB::table('level_ups')->insert([
    		'level'			=>  '1º',
    		'base_atack'    =>  '+0',
    		'strenght'      =>  '+0',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+2',
    		'special'       =>  'Conocimiento de bardo, interpretación de bardo, trucos, contraoda, distracción, fascinar, inspirar valor +1',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '2º',
    		'base_atack'    =>  '+1',
    		'strenght'      =>  '+0',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Interpretación versátil, bien versado',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '3º',
    		'base_atack'    =>  '+2',
    		'strenght'      =>  '+1',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Inspirar gran aptitud +2',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '4º',
    		'base_atack'    =>  '+3',
    		'strenght'      =>  '+1',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  '',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '5º',
    		'base_atack'    =>  '+3',
    		'strenght'      =>  '+1',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  'Inspirar valor +2, maestro del saber 1/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '6º',
    		'base_atack'    =>  '+4',
    		'strenght'      =>  '+2',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Sugestión, interpretación versátil',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '7º',
    		'base_atack'    =>  '+5',
    		'strenght'      =>  '+2',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Inspirar gran aptitud +3',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '8º',
    		'base_atack'    =>  '+6/+1',
    		'strenght'      =>  '+2',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Endecha de perdición',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '9º',
    		'base_atack'    =>  '+6/+1',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Inspirar grandeza',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '10º',
    		'base_atack'    =>  '+7/+2',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+7',
    		'will'   		=>  '+7',
    		'special'       =>  'Polifacético, interpretación versátil',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '11º',
    		'base_atack'    =>  '+8/+3',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+7',
    		'will'   		=>  '+7',
    		'special'       =>  'Inspirar gran aptitud +4, inspirar valor +3, maestro del saber 2/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '12º',
    		'base_atack'    =>  '+9/+4',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+8',
    		'will'   		=>  '+8',
    		'special'       =>  'Interpretación tranquilizadora',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '13º',
    		'base_atack'    =>  '+9/+4',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+8',
    		'will'   		=>  '+8',
    		'special'       =>  '',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '14º',
    		'base_atack'    =>  '+10/+5',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+9',
    		'will'   		=>  '+9',
    		'special'       =>  'Melodía pavorosa, interpretación versátil',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '15º',
    		'base_atack'    =>  '+11/+6/+1',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+9',
    		'will'   		=>  '+9',
    		'special'       =>  'Inspirar gran aptitud +5, inspirar heroísmo',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '16º',
    		'base_atack'    =>  '+12/+7/+2',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+10',
    		'will'   		=>  '+10',
    		'special'       =>  '',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '17º',
    		'base_atack'    =>  '+12/+7/+2',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+10',
    		'will'   		=>  '+10',
    		'special'       =>  'Inspirar valor +4, maestro del saber 3/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '18º',
    		'base_atack'    =>  '+13/+8/+3',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+11',
    		'will'   		=>  '+11',
    		'special'       =>  'Sugestión de masas, interpretación versátil',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '19º',
    		'base_atack'    =>  '+14/+9/+4',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+11',
    		'will'   		=>  '+11',
    		'special'       =>  'Inspirar gran aptitud +6',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '20º',
    		'base_atack'    =>  '+15/+10/+5',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+12',
    		'will'   		=>  '+12',
    		'special'       =>  'Interpretación mortal',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);

    	// SPECIAL APTITUDE
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Contraoda',
    		'description'  	=>  'A 1er nivel, un bardo aprende a contrarrestar los efectos mágicos que dependen del sonido (pero no los conjuros que tengan componentes verbales). Cada asalto de la contraoda se debe llevar a cabo una prueba de Interpretar (teclado, percusión, viento, cuerda o canto). Cualquier criatura a 30 pies (9 m) o menos del bardo (incluyéndole a él mismo), afectado por un ataque mágico sónico o dependiente del idioma, puede utilizar el resultado de la prueba de Interpretar del bardo en lugar de su tirada de salvación si, después de haber tirado ésta, el resultado de la tirada de Interpretar resulta ser mayor. Si una criatura al alcance de la contraoda ya se encuentra bajo el efecto de un ataque mágico sónico no instantáneo o dependiente del idioma, tiene derecho a otra tirada de salvación contra el efecto durante cada asalto en el que oiga la contraoda, pero en ese caso deberá utilizar el resultado de la prueba de Interpretar del bardo para la salvación. La contraoda no funciona sobre efectos que no permiten tirada de salvación, y depende de componentes auditivos.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Distracción',
    		'description'  	=>  'A 1er nivel, un bardo puede utilizar su interpretación para contrarrestar efectos mágicos que dependen de la vista. Cada asalto de la distracción, lleva a cabo una prueba de Interpretar (actuar, comedia, baile, oratoria). Cualquier criatura a 30 pies (9 m) o menos del bardo (incluyéndole a él mismo), afectado por un ataque mágico de ilusión (pauta) o ilusión (quimera) puede utilizar el resultado de la prueba de Interpretar del bardo en lugar de su tirada de salvación si, después de haber tirado ésta, el resultado de la tirada de Interpretar resulta ser mayor. Si una criatura al alcance de la distracción ya se encuentra bajo el efecto de un ataque mágico no instantáneo de ilusión (pauta) o ilusión (quimera), tiene derecho a otra tirada de salvación contra el efecto durante cada asalto en el que vea la distracción, pero en ese caso deberá utilizar el resultado de la prueba de Interpretar del bardo para la salvación. La distracción no funciona sobre efectos que no permiten tirada de salvación, y depende de componentes visuales.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Fascinar',
    		'description'  	=>  'A 1er nivel, un bardo puede utilizar su interpretación para hacer que una o más criaturas queden fascinadas por ella. Cada criatura a fascinar debe estar a 90 pies (27 m) o menos, ser capaz de ver y oír al bardo, y de prestarle atención. El bardo también debe ser capaz de ver a las criaturas afectadas. La distracción de un combate cercano u otros peligros evita que esta aptitud funcione. Por cada tres niveles que el bardo haya alcanzado por encima del 1º, puede tomar como objetivo a una criatura adicional con esta aptitud.
    		Cada criatura que se encuentre dentro del alcance tiene derecho a una salvación de Voluntad (CD 10 + la mitad del nivel del bardo + el modificador de Car del bardo) para negar el efecto. Si la tirada de salvación de la criatura tiene éxito, no puede intentar fascinarla de nuevo durante 24 horas. Si la tirada de salvación falla, la criatura se sienta tranquilamente y observa el espectáculo durante todo el tiempo que el bardo continúa manteniendo la acción. Mientras está fascinado, un objetivo sufre un penalizador -4 a todas las pruebas de habilidad llevadas a cabo como reacciones, como por ejemplo las de Percepción. Cualquier amenaza potencial al objetivo le permite llevar a cabo una nueva tirada de salvación contra el efecto. Cualquier amenaza obvia, como por ejemplo alguien que desenvaine un arma, lance un conjuro, o apunte un arma al objetivo, rompe automáticamente el efecto.
    		Fascinar es una aptitud enajenadora de encantamiento (compulsión), que se basa en componentes visuales y auditivos.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Infundir valor',
    		'description'  	=>  'Un bardo de 1er nivel puede utilizar su interpretación para infundir valor a sus aliados (incluyéndose a sí mismo), reforzarlos contra el miedo, y mejorar sus aptitudes de combate. Para verse afectado, un aliado debe ser capaz de percibir la interpretación del bardo. Un aliado afectado obtiene un bonificador +1 por moral a las tiradas de salvación contra efectos de hechizar y miedo, y un bonificador +1 por competencia a las tiradas de ataque y de daño con armas. A 5º nivel, y cada seis niveles de bardo posteriores, este bonificador se incrementa en +1, hasta un máximo de +4 a nivel 17. Infundir valor es una aptitud enajenadora, que puede utilizar componentes visuales o auditivos, y el bardo debe escoger cuáles de ellos utilizar al empezar su interpretación.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Infundir gran aptitud',
    		'description'  	=>  'Un bardo de 3er nivel o superior puede utilizar su interpretación para ayudar a un aliado a tener éxito en una tarea. Dicho aliado debe hallarse a 30 pies (9 m) o menos, y ser capaz de oír al bardo. El aliado obtiene un bonificador +2 por competencia a las pruebas de habilidad con una habilidad en particular, en tanto en cuanto continúe oyendo la interpretación del bardo. Este bonificador se incrementa en +1 por cada 4 niveles que el bardo haya alcanzado por encima del 3º (+3 en 7º, +4 en 11º, +5 en 15º y +6 en 19º). Ciertos usos de esta aptitud pueden ser declarados inverosímiles a discreción del DJ (como por ejemplo con el Sigilo). Un bardo no puede infundirse gran aptitud a sí mismo. Infundir gran aptitud se basa en componentes auditivos.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Sugestión',
    		'description'  	=>  'Un bardo de 6º nivel o mayor puede utilizar su interpretación para lanzar una sugestión (igual que el conjuro homónimo) sobre una criatura que ya haya fascinado (ver más arriba). Utilizar esta aptitud no interrumpe el efecto de la fascinación, pero requiere una acción estándar para activarse (además de la acción gratuita necesaria para continuar el efecto de fascinación). Un bardo puede utilizar esta aptitud más de una vez contra una criatura individual durante una interpretación individual.
    		Lanzar una sugestión no cuenta para el número de usos diarios de la interpretación de bardo. Una tirada de salvación (CD 10 + la mitad del nivel del bardo + su modificador de Car) niega el efecto. Esta aptitud afecta a una sola criatura. Sugestión es una aptitud enajenadora de encantamiento (compulsión) dependiente del idioma, y se basa en componentes auditivos.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Endecha de perdición',
    		'description'  	=>  'Un bardo de 8º nivel o superior puede utilizar su interpretación para causar una sensación de terror creciente en sus enemigos, haciendo que queden estremecidos. Para verse afectado, un enemigo debe encontrarse a 30 pies (9 m) o menos, y ser capaz de oír la interpretación del bardo. El efecto persiste en tanto en cuanto el enemigo se halla a 30 pies (9 m) o menos, y el bardo continúe con su interpretación, y no puede hacer que una criatura quede asustada o despavorida, incluso si el objetivo ya estaba estremecido a causa de otro efecto. La endecha de perdición es un efecto enajenador, que se basa en componentes auditivos y visuales.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Infundir grandeza',
    		'description'  	=>  'Un bardo de 9º nivel o superior puede utilizar su interpretación para infundir grandeza en sí mismo o en un solo aliado voluntario a 30 pies (9 m) o menos, concediendo una capacidad superior para la lucha. Por cada 3 niveles que el bardo tenga por encima del 9º, puede tomar como objetivo a un aliado adicional utilizando su interpretación (hasta un máximo de 4 objetivos a nivel 18). Para infundir grandeza, todos los objetivos deben ser capaces de oír y ver al bardo. Una criatura infundida con grandeza obtiene 2 Dados de golpe adicionales (d10), el número de puntos de golpe temporales equivalentes (aplica el bonificador de Constitución del objetivo, si lo tiene, a estos Dados de golpe adicionales), un bonificador +2 por competencia a las tiradas de ataque, y un bonificador +1 por competencia a las salvaciones de Fortaleza. Los Dados de golpe adicionales cuentan como Dados de golpe normales a fin de determinar los efectos de los conjuros dependientes de los Dados de golpe. Infundir grandeza es una aptitud enajenadora, que se basa en componentes auditivos y visuales.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Interpretación tranquilizadora',
    		'description'  	=>  'Un bardo de 12º nivel o superior puede utilizar su interpretación para crear un efecto equivalente a curar heridas graves en grupo, utilizando su nivel del bardo como nivel de lanzador. Además, esta interpretación elimina los estados fatigado, indispuesto, y estremecido de todos los afectados. Utilizar esta aptitud requiere 4 asaltos de interpretación continua, y los objetivos deben ser capaces de ver y oír al bardo a lo largo de toda la interpretación. La interpretación tranquilizadora afecta a todos los objetivos que permanezcan a 30 pies (9 m) o menos durante toda ella, y se basa en componentes auditivos y visuales.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Melodía pavorosa',
    		'description'  	=>  'Un bardo de nivel 14 o superior puede utilizar su interpretación para causar miedo a sus enemigos. Para verse afectado, el enemigo debe ser capaz de oír la interpretación del bardo y encontrarse a 30 pies (9 m) o menos de él. Cada enemigo dentro del alcance obtiene una salvación de Voluntad (CD 10 + la mitad del nivel de bardo + su modificador de Car) para negar el efecto. Si la salvación tiene éxito, la criatura es inmune a esta aptitud durante 24 horas. Si falla, el objetivo queda asustado y huye hasta que ya no puede oír la interpretación, que se basa en componentes auditivos.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Infundir heroicidad',
    		'description'  	=>  'Un bardo de 15º nivel o superior puede infundir un tremendo heroísmo en sí mismo o en un solo aliado que se encuentre a 30 pies (9 m) o menos. Por cada 3 niveles de bardo que el personaje tenga por encima del 15º, puede infundir heroicidad a una criatura adicional. Para hacerlo, todos los objetivos deben ser capaces de ver y oír al bardo. Las criaturas infundidas obtienen un bonificador +4 por moral a las tiradas de salvación y un bonificador +4 por esquiva a la CA. El efecto dura en tanto en cuanto los objetivos sean capaces de presenciar la interpretación. Infundir heroicidad es una habilidad enajenadora, que se basa en componentes auditivos y visuales.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Sugestión en grupo',
    		'description'  	=>  'Esta aptitud funciona igual que sugestión, pero permite a un bardo de nivel 18º o superior llevar a cabo simultáneamente una sugestión sobre cualquier cantidad de criaturas a las que ya haya fascinado. La sugestión en grupo es una aptitud enajenadora de encantamiento (compulsión), dependiente del idioma, que se basa en componentes auditivos.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Interpretación mortal',
    		'description'  	=>  'Un bardo de nivel 20º o superior puede utilizar su interpretación para hacer que un enemigo muera de alegría o de pena. Para quedar afectado, el objetivo debe ser capaz de ver y oír al bardo interpretar durante 1 asalto completo, y encontrarse a 30 pies (9 m) o menos. El objetivo tiene derecho a una salvación de Voluntad (CD 10 + la mitad del nivel del bardo + su modificador de Car) para negar el efecto. Si la tirada de salvación de la criatura tiene éxito, el objetivo queda grogui durante 1d4 asaltos, y el bardo no puede utilizar interpretación mortal sobre ella de nuevo durante 24 horas. Si la criatura falla su tirada de salvación, muere. Música mortal es un efecto mortal enajenador, que se basa en componentes auditivos y visuales.',
    		'class_id'      =>  DB::table('classes')->where('name', 'bard')->value('id'),
    	]);
    }
}
