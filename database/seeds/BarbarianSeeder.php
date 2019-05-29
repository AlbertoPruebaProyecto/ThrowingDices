<?php

use Illuminate\Database\Seeder;

class BarbarianSeeder extends Seeder
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
    		'name'          =>  'barbarian',
    		'class_skills'  =>  'acrobatics;craftwork;intimidate;ride;swim;perception;wisdom_nature;survival;animal_contact;climb',
    		'hit_dice'      =>  'd12',
    	]);

    	// LEVEL UP
    	DB::table('level_ups')->insert([
    		'level'			=>  '1º',
    		'base_atack'    =>  '+1',
    		'strenght'      =>  '+2',
    		'reflection'    =>  '+0',
    		'will'   		=>  '+0',
    		'special'       =>  'Movimiento rápido, furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '2º',
    		'base_atack'    =>  '+2',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+0',
    		'will'   		=>  '+0',
    		'special'       =>  'Poder de furia, esquiva asombrosa',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '3º',
    		'base_atack'    =>  '+3',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+1',
    		'special'       =>  'Sentido de las trampas +1',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '4º',
    		'base_atack'    =>  '+4',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+1',
    		'special'       =>  'Poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '5º',
    		'base_atack'    =>  '+5',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+1',
    		'special'       =>  'Esquiva asombrosa mejorada',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '6º',
    		'base_atack'    =>  '+6/+1',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+2',
    		'special'       =>  'Poder de furia, sentido de las trampas +2',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '7º',
    		'base_atack'    =>  '+7/+2',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+2',
    		'special'       =>  'Reducción del daño 1/—',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '8º',
    		'base_atack'    =>  '+8/+3',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+2',
    		'special'       =>  'Poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '9º',
    		'base_atack'    =>  '+9/+4',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Sentido de las trampas +3',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '10º',
    		'base_atack'    =>  '+10/+5',
    		'strenght'      =>  '+7',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Reducción del daño 2/—, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '11º',
    		'base_atack'    =>  '+11/+6/+1',
    		'strenght'      =>  '+7',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+3',
    		'special'       =>  'Furia mayor',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '12º',
    		'base_atack'    =>  '+12/+7/+2',
    		'strenght'      =>  '+8',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  'Poder de furia, sentido de las trampas +4',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '13º',
    		'base_atack'    =>  '+13/+8/+3',
    		'strenght'      =>  '+8',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  'Reducción del daño 3/—',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '14º',
    		'base_atack'    =>  '+14/+9/+4',
    		'strenght'      =>  '+9',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+4',
    		'special'       =>  'Voluntad indomable, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '15º',
    		'base_atack'    =>  '+15/+10/+5',
    		'strenght'      =>  '+9',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Sentido de las trampas +5',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '16º',
    		'base_atack'    =>  '+16/+11/+6/+1',
    		'strenght'      =>  '+10',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Reducción del daño 4/—, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '17º',
    		'base_atack'    =>  '+17/+12/+7/+2',
    		'strenght'      =>  '+10',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+5',
    		'special'       =>  'Furia incansable',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '18º',
    		'base_atack'    =>  '+18/+13/+8/+3',
    		'strenght'      =>  '+11',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Poder de furia, sentido de las trampas +6',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '19º',
    		'base_atack'    =>  '+19/+14/+9/+4',
    		'strenght'      =>  '+11',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Reducción del daño 5/—',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '20º',
    		'base_atack'    =>  '+20/+15/+10/+5',
    		'strenght'      =>  '+12',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+6',
    		'special'       =>  'Furia poderosa, poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	// SPECIAL APTITUDE
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Movimiento rápido',
    		'description'  	=>  'La velocidad terrestre de un bárbaro es mayor que la normal de su raza en +10 pies (3 m), beneficio que sólo se aplica cuando no lleva armadura, o lleva armadura ligera o intermedia, y no lleva una carga pesada.
    		Aplica este bonificador antes de modificar la velocidad del bárbaro a causa de cualquier carga transportada o armadura puesta, bonificador que se apila con cualquier otro a su velocidad terrestre.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Furia',
    		'description'  	=>  'El bárbaro puede llamar a sus reservas internas de fuerza y de ferocidad, lo que le concede una pericia en combate adicional. Empezando a 1er nivel, el bárbaro puede desencadenarla durante tantos asaltos al día como 4 + su modificador de Constitución. Por cada nivel por encima del 1º puede entrar en furia 2 asaltos adicionales. Los incrementos temporales a la Constitución, como los obtenidos gracias a la furia y a conjuros como resistencia de oso, no aumentan el número total de asaltos que un bárbaro puede entrar en furia al día. El bárbaro puede entrar en furia como acción gratuita. El número total de asaltos de furia al día se renueva tras descansar 8 horas, aunque no hace falta que esas horas sean consecutivas.
    		Mientras está en furia, un bárbaro obtiene un bonificador +4 por moral a su Fuerza y su Constitución, así como un bonificador +2 por moral a las salvaciones de Voluntad. Además sufre un penalizador -2 a la Clase de armadura. El incremento de la Constitución le concede 2 puntos de golpe por Dado de golpe, pero desaparecen al acabar la furia y no se pierden primero como los puntos de golpe temporales. Cuando está en furia, un bárbaro no puede utilizar ninguna habilidad basada en la Destreza, en el Carisma, o en la Inteligencia (excepto Acrobacias, Intimidar, Montar, y Volar), ni cualquier aptitud que requiera paciencia o concentración.
    		Un bárbaro puede acabar su furia como acción gratuita y queda fatigado después de la misma durante tantos asaltos como 2 veces el número de asaltos pasados en ella. Un bárbaro no puede entrar de nuevo en furia mientras está fatigado o exhausto pero salvando esto puede hacerlo en múltiples ocasiones durante un mismo encuentro o combate. Si un bárbaro queda inconsciente, su furia acaba de inmediato, poniéndole en peligro de muerte.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Arredrar',
    		'description'  	=>  'Una vez por asalto, el bárbaro puede llevar a cabo un intento de embestida contra un objetivo en lugar de un ataque cuerpo a cuerpo. Si tiene éxito, el objetivo sufre tantos puntos de daño como el modificador de Fuerza del bárbaro y además es desplazado hacia atrás de forma normal. El bárbaro no tiene por qué moverse con el objetivo si tiene éxito, y esta acción no provoca ataques de oportunidad. ',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Aullido terrorífico',
    		'description'  	=>  'El bárbaro puede desencadenar un terrible aullido como acción estándar. Todos los enemigos estremecidos que se encuentren a 30 pies (9 m) o menos deben llevar a cabo una salvación de Voluntad (CD igual a 10 + la mitad del nivel del bárbaro + su modificador de Fuerza) o entrar en pánico durante 1d4+1 asaltos. Una vez un enemigo ha salvado contra el aullido (con éxito o no), queda inmune a este poder durante 24 horas. El bárbaro debe disponer del poder Mirada intimidadora para seleccionar este poder de furia, y ser por lo menos de 8º nivel.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Barrido poderoso',
    		'description'  	=>  'El bárbaro confirma automáticamente un golpe crítico. Este poder se utiliza como una acción inmediata una vez determinada una amenaza de crítico. Un bárbaro tiene que ser por lo menos de 12º nivel para seleccionar este poder, que sólo puede utilizarse una vez por furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Cólera soliviantada',
    		'description'  	=>  'El bárbaro puede entrar en furia incluso si está fatigado, y cuando entra en furia tras utilizar esta aptitud es inmune al estado fatigado. Una vez acaba la furia, queda exhausto durante 10 minutos por asalto que haya pasado en furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Esquivar rodando',
    		'description'  	=>  'El bárbaro obtiene un bonificador +1 por esquiva a su Clase de armadura contra ataques a distancia durante tantos asaltos como su modificador actual de Constitución (mínimo 1). Este bonificador se incrementa en +1 por cada 6 niveles de bárbaro alcanzados. Activar esta aptitud es una acción de movimiento que no provoca ataques de oportunidad.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Fortaleza interna',
    		'description'  	=>  'Mientras está en furia, el bárbaro es inmune a los estados indispuesto y mareado. Un bárbaro tiene que ser por lo menos de 8º nivel para seleccionar este poder.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Furia animal',
    		'description'  	=>  'Mientras está en furia, el bárbaro obtiene un ataque de mordisco. Si lo utiliza como parte de una acción de ataque completo, se lleva a cabo al ataque básico del bárbaro -5. Si el mordisco acierta, inflige 1d4 puntos de daño (suponiendo que el bárbaro sea de tamaño Mediano; 1d3 puntos de daño si es Pequeño) más la mitad de su modificador de Fuerza. Un bárbaro puede llevar a cabo un ataque de mordisco como parte de la acción para mantener o librarse de una presa, en cuyo caso se resuelve antes que la prueba de presa. Si el ataque de mordisco acierta, toda prueba de presa llevada a cabo por el bárbaro contra el objetivo tiene un bonificador +2.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Furia intrépida',
    		'description'  	=>  'Mientras se encuentra en furia, el bárbaro es inmune a los estados estremecido y asustado. Un bárbaro tiene que ser por lo menos de 12º nivel para seleccionar este poder.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Golpe inesperado',
    		'description'  	=>  'El bárbaro puede llevar a cabo un ataque de oportunidad contra un enemigo que se mueva a cualquier casilla amenazada por él, sin tener en cuenta si dicho movimiento provocaría ataques de oportunidad de forma normal. Este poder sólo puede utilizarse una vez por furia, y el bárbaro debe ser por lo menos de 8º nivel para seleccionarlo.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Golpe poderoso',
    		'description'  	=>  'El bárbaro obtiene un bonificador +1 a una sola tirada de daño, bonificador que se incrementa en +1 por cada 4 cuatro niveles que haya alcanzado el bárbaro. Este poder se usa como acción rápida antes de que se lleve a cabo la tirada de impacto, y sólo puede utilizarse una vez por furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Mente despejada',
    		'description'  	=>  'Un bárbaro puede repetir una salvación de Voluntad fallida. Este poder se usa como una acción inmediata después de intentar la primera salvación, pero antes de que el DJ revele el resultado. El bárbaro debe aceptar el segundo resultado aunque sea peor que el primero. Un bárbaro tiene que ser por lo menos de 8º nivel para seleccionar este poder, que sólo puede utilizarse una vez por furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Mirada intimidante',
    		'description'  	=>  'El bárbaro puede llevar a cabo una prueba de Intimidar contra un enemigo adyacente gastando una acción de movimiento. Si la consigue, desmoraliza a su enemigo, que queda estremecido durante 1d4 asaltos +1 por cada 5 puntos por los que la prueba del bárbaro haya superado la CD.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Momento de claridad',
    		'description'  	=>  'El bárbaro no obtiene ningún beneficio ni sufre ningún penalizador a causa de la furia durante 1 asalto, lo que incluye el penalizador a la Clase de armadura y la restricción a qué acciones puede llevar a cabo. El asalto sigue contando contra la suma total de asaltos de furia al día, y sólo puede utilizarse una vez por furia. Activar este poder es una acción rápida.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Nadador furioso',
    		'description'  	=>  ' Cuando está en furia, el bárbaro suma su nivel como bonificador por mejora a todas las pruebas de Nadar',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Oleada de fuerza',
    		'description'  	=>  'El bárbaro suma su nivel de bárbaro a una prueba de Fuerza, a una prueba de maniobra de combate, o a su defensa contra las maniobras de combate cuando un oponente intenta una maniobra contra él. Este poder se utiliza como una acción inmediata, y sólo se puede emplear una vez por furia. ',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Olfato',
    		'description'  	=>  'El bárbaro obtiene la aptitud de olfatear mientras está en furia, y puede utilizarla para localizar a enemigos invisibles (consulta el apéndice 1 para las reglas sobre la aptitud de olfatear).',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Pies ligeros',
    		'description'  	=>  'El bárbaro obtiene una mejora de 5 pies (1,5 m) a su velocidad, incremento que siempre está activo mientras el bárbaro está en furia. El bárbaro puede seleccionar este poder de furia hasta 3 veces, y sus efectos se apilan.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Posición protegida',
    		'description'  	=>  'El bárbaro obtiene un bonificador +1 por esquiva a su Clase de armadura contra ataques cuerpo a cuerpo durante tantos asaltos como su modificador actual de Constitución (mínimo 1), bonificador que se incrementa en +1 por cada 6 niveles alcanzados por el bárbaro. Activar esta aptitud exige una acción de movimiento que no provoca ataques de oportunidad.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Precisión sorprendente',
    		'description'  	=>  'El bárbaro obtiene un bonificador +1 por moral a una tirada de ataque, bonificador que se incrementa en +1 por cada 4 niveles que el bárbaro haya alcanzado. Este poder se utiliza como acción rápida antes de que se lleve a cabo la tirada de impacto, y sólo puede utilizarse una vez por furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Reducción del daño incrementada',
    		'description'  	=>  'La reducción del daño del bárbaro se incrementa en 1/—, incremento que se encuentra siempre activo mientras el bárbaro está en furia. Un bárbaro puede seleccionar este poder de furia hasta 3 veces, y sus efectos se apilan. El bárbaro tiene que ser por lo menos de 8º nivel para seleccionar este poder',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Reflejos rápidos',
    		'description'  	=>  'cuando está en furia, el bárbaro puede llevar a cabo un ataque de oportunidad adicional por asalto.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Saltador furioso',
    		'description'  	=>  'Cuando está en furia, el bárbaro suma su nivel como bonificador por mejora a todas las pruebas de Acrobacias que lleva a cabo para saltar. Cuando salta de esta manera, siempre se considera que toma carrerilla.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Sin escapatoria',
    		'description'  	=>  'El bárbaro puede moverse hasta el doble de su velocidad normal como acción inmediata, pero sólo puede utilizar esta aptitud cuando un enemigo adyacente utiliza una acción de retirada para alejarse de él, y debe acabar su movimiento adyacente al enemigo que utilizó la acción de retirada. El bárbaro provoca ataques de oportunidad de forma normal durante este movimiento, y este poder sólo puede utilizarse una vez por furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Superstición',
    		'description'  	=>  'El bárbaro obtiene un bonificador +2 por moral a las tiradas de salvación para resistir conjuros, aptitudes sobrenaturales y aptitudes sortílegas. Este bonificador se incrementa en +1 por cada 4 niveles que el bárbaro haya alcanzado. En furia, el bárbaro no puede ser objetivo voluntario de un conjuro, y debe llevar a cabo tiradas de salvación para resistir a todos los conjuros, incluso los lanzados por sus aliados.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Trepador furioso',
    		'description'  	=>  'Cuando está en furia, el bárbaro suma su nivel como bonificador por mejora a todas las pruebas de Trepar.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Visión en la penumbra',
    		'description'  	=>  'Los sentidos del bárbaro se agudizan, y obtiene visión en la penumbra mientras está en furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Vigor renovado',
    		'description'  	=>  'Como acción estándar, el bárbaro se cura 1d8 puntos de daño + su modificador de Constitución. Cada 4 niveles que el bárbaro ha alcanzado por encima del 4º, la cantidad de daño curado aumenta en 1d8, hasta un máximo de 5d8 a nivel 20. Un bárbaro tiene que ser por lo menos de 4º nivel para seleccionar este poder, que sólo puede utilizarse 1 vez/día y sólo estando en furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Poder de furia: Visión nocturna',
    		'description'  	=>  'Los sentidos del bárbaro se vuelven increíblemente agudos mientras está en furia, y obtiene visión en la oscuridad 60 pies (18 m). Un bárbaro ha de tener visión en la penumbra como poder de furia o como rasgo racial para seleccionar este poder de furia',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Esquiva asombrosa',
    		'description'  	=>  'A 2º nivel, un bárbaro obtiene la capacidad de reaccionar al peligro antes de que los sentidos se lo permitieran de forma natural. No puede ser sorprendido, ni pierde su bonificador por Destreza a la CA si el atacante es invisible, pero sí pierde su bonificador por Destreza a la CA si se le inmoviliza. Un bárbaro con esta aptitud sigue pudiendo perder su bonificador por Destreza a la CA si su oponente consigue llevar a cabo con éxito la acción de finta contra él.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Sentido de las trampas',
    		'description'  	=>  'A 3er nivel, el bárbaro obtiene un bonificador +1 a las salvaciones de Reflejos para evitar trampas, y un bonificador +1 por esquiva a la CA contra ataques de trampa. Estos bonificadores se incrementan en +1 cada 3 niveles de bárbaro subsiguientes (6º, 9º, 12º, 15º, 18º). Los bonificadores por Sentido de las trampas obtenidos de clases múltiples se apilan.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Esquiva asombrosa mejorada',
    		'description'  	=>  'En 5º nivel y superiores, un bárbaro ya no puede ser flanqueado. Esta defensa niega a un  pícaro la capacidad de atacar por sorpresa a un bárbaro flanqueándole, a menos que tenga por lo menos 4 niveles de pícaro más que niveles de bárbaro tenga el objetivo.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Reducción del daño',
    		'description'  	=>  'A 7º nivel, el bárbaro obtiene reducción del daño. Resta 1 del daño que sufre el bárbaro cada vez que le impacta con éxito un arma o un ataque natural. A 10º nivel, y cada 3 niveles de bárbaro posteriores (13º, 16º, 19º) la reducción de daño se incrementa en 1. La reducción del daño puede reducir el daño a 0, pero no por debajo de 0.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Furia mayor',
    		'description'  	=>  'a 11º nivel, cuando un bárbaro entra en furia, el bonificador por moral a su Fuerza y a su Constitución se incrementa a +6, y el bonificador por moral a sus salvaciones de Voluntad se incrementa a +3.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Voluntad indomable',
    		'description'  	=>  'Cuando entra en furia, un bárbaro de 14º nivel o superior obtiene un bonificador +4 a las salvaciones de Voluntad para resistir a los conjuros de encantamiento, que se apila con todos los demás, incluyendo el de moral a las salvaciones de Voluntad que también obtiene durante la furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Furia incansable',
    		'description'  	=>  'Empezando a nivel 17, un bárbaro ya no queda fatigado cuando acaba la furia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);

    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Furia poderosa',
    		'description'  	=>  'A 20º nivel, cuando un bárbaro entra en furia, el bonificador por moral a su Fuerza y su Constitución se incrementa a +8, y el bonificador por moral a sus salvaciones de Voluntad se incrementa a +4.',
    		'class_id'      =>  DB::table('classes')->where('name', 'barbarian')->value('id'),
    	]);
    }
}
