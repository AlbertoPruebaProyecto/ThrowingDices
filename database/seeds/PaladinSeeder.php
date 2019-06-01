<?php

use Illuminate\Database\Seeder;

class PaladinSeeder extends Seeder
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
    		'name'          =>  'paladin',
    		'class_skills'  =>  'craftwork;discover_intentions;knowledge_spells;heal;diplomacy;ride;wisdom_nobility;wisdom_religion;animal_contact',
    		'hit_dice'      =>  'd10',
    	]);

    	// LEVEL UP
    	DB::table('level_ups')->insert([
    		'level'			=>  '1º',
    		'base_atack'    =>  '+1',
    		'strenght'      =>  '+2',
    		'reflection'    =>  '+0',
    		'will'   		=>  '+2',
    		'special'       =>  'Aura buena, detectar el mal, castigar el mal 1/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '2º',
    		'base_atack'    =>  '+2',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+0',
    		'will'   		=>  '+3',
    		'special'       =>  'Gracia divina, imposición de manos',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '3º',
    		'base_atack'    =>  '+3',
    		'strenght'      =>  '+3',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+3',
    		'special'       =>  'Aura de valor, salud divina, merced',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '4º',
    		'base_atack'    =>  '+4',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+4',
    		'special'       =>  'Canalizar energía positiva, castigar el mal 2/día 0',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '5º',
    		'base_atack'    =>  '+5',
    		'strenght'      =>  '+4',
    		'reflection'    =>  '+1',
    		'will'   		=>  '+4',
    		'special'       =>  'Vínculo divino',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '6º',
    		'base_atack'    =>  '+6/+1',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+5',
    		'special'       =>  'Merced',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '7º',
    		'base_atack'    =>  '+7/+2',
    		'strenght'      =>  '+5',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+5',
    		'special'       =>  'Castigar el mal 3/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '8º',
    		'base_atack'    =>  '+8/+3',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+2',
    		'will'   		=>  '+6',
    		'special'       =>  'Aura de decisión',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '9º',
    		'base_atack'    =>  '+9/+4',
    		'strenght'      =>  '+6',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+6',
    		'special'       =>  'Merced',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '10º',
    		'base_atack'    =>  '+10/+5',
    		'strenght'      =>  '+7',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+7',
    		'special'       =>  'Castigar el mal 4/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '11º',
    		'base_atack'    =>  '+11/+6/+1',
    		'strenght'      =>  '+7',
    		'reflection'    =>  '+3',
    		'will'   		=>  '+7',
    		'special'       =>  'Aura de justicia',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '12º',
    		'base_atack'    =>  '+12/+7/+2',
    		'strenght'      =>  '+8',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+8',
    		'special'       =>  'Merced',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '13º',
    		'base_atack'    =>  '+13/+8/+3',
    		'strenght'      =>  '+8',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+8',
    		'special'       =>  'Castigar el mal 5/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '14º',
    		'base_atack'    =>  '+14/+9/+4',
    		'strenght'      =>  '+9',
    		'reflection'    =>  '+4',
    		'will'   		=>  '+9',
    		'special'       =>  'Aura de fe',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '15º',
    		'base_atack'    =>  '+15/+10/+5',
    		'strenght'      =>  '+9',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+9',
    		'special'       =>  'Merced',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '16º',
    		'base_atack'    =>  '+16/+11/+6/+1',
    		'strenght'      =>  '+10',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+10',
    		'special'       =>  'Castigar el mal 6/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '17º',
    		'base_atack'    =>  '+17/+12/+7/+2',
    		'strenght'      =>  '+10',
    		'reflection'    =>  '+5',
    		'will'   		=>  '+10',
    		'special'       =>  'Aura de rectitud',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '18º',
    		'base_atack'    =>  '+18/+13/+8/+3',
    		'strenght'      =>  '+11',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+11',
    		'special'       =>  'Merced',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '19º',
    		'base_atack'    =>  '+19/+14/+9/+4',
    		'strenght'      =>  '+11',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+11',
    		'special'       =>  'Castigar el mal 7/día',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('level_ups')->insert([
    		'level'			=>  '20º',
    		'base_atack'    =>  '+20/+15/+10/+5',
    		'strenght'      =>  '+12',
    		'reflection'    =>  '+6',
    		'will'   		=>  '+12',
    		'special'       =>  'Campeón sagrado',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);

    	// SPECIAL APTITUDE
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Castigar al mal',
    		'description'  	=>  '1 vez/día, el paladín puede llamar a los poderes del bien, para que le ayuden en su lucha contra el mal. Como acción rápida, el paladín escoge un objetivo que tenga a la vista para castigar. Si este objetivo es maligno, el paladín suma su bonificador de Carisma (si lo tiene) a sus tiradas de ataque, y su nivel de paladín a todas las tiradas de daño que se lleven a cabo contra el objetivo de su castigo. Si el objetivo es un ajeno del subtipo maligno, un dragón alineado con el mal, o una criatura muerta viviente, el bonificador al daño del primer ataque con éxito se incrementa en 2 pg de daño/nivel del paladín. Sea cual sea el objetivo, los ataques de castigar el mal sobrepasan automáticamente cualquier RD que pueda poseer la criatura.
    		Además, mientras castigar el mal está en efecto, el paladín obtiene un bonificador por desvío igual a su modificador por Carisma (si lo tiene) a su CA contra los ataques llevados a cabo por el objetivo del castigo. Si el paladín toma como objetivo a una criatura que no es maligna, el castigo se gasta sin efecto alguno.
    		El efecto de castigar el mal dura hasta que el objetivo del mismo muere, o hasta la siguiente vez que el paladín descansa y recupera sus usos de dicha habilidad. A 4º nivel, y cada 3 niveles subsiguientes, el paladín puede castigar el mal 1 vez adicional al día, tal y como se indica en la tabla 3-11, hasta un máximo de 7 veces al día a nivel 19.
    		',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Gracia divina',
    		'description'  	=>  'A 2º nivel, un paladín obtiene un bonificador igual a su bonificador de Carisma (si lo tiene) a todas sus tiradas de salvación.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Imposición de manos',
    		'description'  	=>  'Empezando en 2º nivel, un paladín puede curar heridas (las suyas o las de otros) mediante el toque. Cada día puede utilizar esta aptitud tantas veces como la mitad de su nivel de paladín más su modificador de Carisma. Con un uso de esta aptitud, un paladín puede curar 1d6 puntos por cada 2 niveles de paladín que posee. Utilizar esta aptitud es una acción estándar, a menos que el paladín se tome por objetivo a sí mismo, en cuyo caso es una acción rápida. A pesar del nombre de esta aptitud, el paladín sólo necesita tener una mano libre para utilizarla.
    		Alternativamente, un paladín puede utilizar este poder curativo para infligir daño a las criaturas muertas vivientes, infligiendo 1d6 puntos de daño por cada 2 niveles de paladín. Utilizar la imposición de manos de esta forma requiere un ataque de toque cuerpo a cuerpo con éxito, y no provoca ataques de oportunidad. Los muertos vivientes no tienen derecho a una tirada de salvación contra este daño.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Aura de valor',
    		'description'  	=>  'A 3er nivel, un paladín es inmune al miedo (mágico o no). Todo aliado que se halla a 10 pies (3 m) o menos de él obtiene un bonificador por moral +4 a las tiradas de salvación contra efectos de miedo. Esta aptitud sólo funciona si el paladín está consciente, no si está inconsciente o muerto.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Salud divina',
    		'description'  	=>  'A 3er nivel, un paladín es inmune a todas las enfermedades, incluyendo las sobrenaturales y las mágicas, incluyendo la putridez de momia.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Merced',
    		'description'  	=>  'A 3er nivel, y cada 3 niveles subsiguientes, un paladín puede seleccionar una merced. Cada merced añade un efecto a la aptitud de imposición de manos del paladín. Cada vez que el paladín utiliza imposición de manos para curar daño a un objetivo, éste también obtiene los efectos adicionales de todas las mercedes poseídas por el paladín. Una merced puede eliminar un estado causado por una maldición, enfermedad, o veneno, sin curar la aflicción. Dichos estados vuelven al cabo de 1 hora, a menos que la merced elimine la aflicción que causa el estado.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Canalizar energía positiva',
    		'description'  	=>  'Cuando un paladín llega a 4º nivel, obtiene la aptitud sobrenatural de canalizar energía positiva como un clérigo. Utilizar esta aptitud consume 2 usos de su aptitud de imposición de manos. Un paladín utiliza su nivel como nivel efectivo de clérigo al canalizar energía positiva. Esta es una aptitud basada en el Carisma.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Conjuros',
    		'description'  	=>  'Empezando en 4º nivel, un paladín obtiene la aptitud de lanzar un pequeño número de conjuros divinos, que se extraen de la lista de conjuros del paladín que se presenta en el Capítulo 10. Un paladín debe escoger y preparar sus conjuros de antemano.
    		Para preparar o lanzar un conjuro, un paladín debe tener una puntuación de Carisma igual a por lo menos 10 + el nivel del conjuro. La Clase de dificultad para una tirada de salvación contra un conjuro de paladín es 10 + el nivel del conjuro + el modificador de Carisma del paladín.
    		Como otros lanzadores de conjuros, un paladín sólo puede lanzar cierto número de conjuros de cada nivel al día. Su asignación básica diaria de conjuros se refleja en la tabla 3-11. Además, obtiene conjuros adicionales al día si tiene una puntuación de Carisma elevada (consulta la tabla 1-3). Cuando la tabla 3-11 indica que el paladín obtiene 0 conjuros al día de un nivel de conjuro determinado, sólo obtiene los conjuros adicionales a los que tendría derecho basándose en su puntuación de Carisma para dicho nivel de conjuro.
    		Un paladín debe pasar 1 hora diaria en oración tranquila y meditación, para recuperar su asignación diaria de conjuros. El paladín puede preparar y lanzar cualquier conjuro de la lista de conjuros de paladín, en tanto en cuanto pueda lanzar conjuros de dicho nivel, pero debe escoger qué conjuros preparar durante su meditación diaria.
    		Hasta 3er nivel, un paladín no tiene nivel de lanzador. A 4º nivel y superiores, su nivel de lanzador es igual a su nivel de paladín -3.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Vínculo divino',
    		'description'  	=>  'Al llegar a 5º nivel, un paladín forma un vínculo divino con su dios, que puede adoptar una de dos formas, una vez escogida una de las cuales no se puede cambiar.
    		El primer tipo de vínculo permite al paladín potenciar su arma como acción estándar, pidiendo la ayuda de un espíritu celestial durante 1 minuto/nivel del paladín. Cuando se le llama, el espíritu hace que el arma desprenda luz como una antorcha. A 5º nivel, el espíritu concede al arma un bonificador +1 por mejora , y por cada 3 niveles por encima del 5º, el arma obtiene otro bonificador por mejora +1, hasta un máximo de +6 a nivel 20. Estos bonificadores pueden añadirse al arma, apilándose con modificadores existentes hasta un máximo de +5, o pueden utilizarse para añadir cualquiera de las siguientes propiedades de arma: axiomática, radiante, defensora, disruptora, flamígera, explosiva ígnea, sagrada, afilada, compasiva, y veloz. Añadir estas propiedades consume una cantidad de bonificador igual al coste de la propiedad (consulta tabla 15-9). Estos bonificadores se añaden a cualquier propiedad que el arma ya tenga, pero las aptitudes duplicadas no se apilan. Si el arma no es mágica, hay que añadirle por lo menos un bonificador por mejora +1 antes de cualquier otra propiedad. Los bonificadores y las propiedades concedidas por el espíritu se determinan cuando éste es llamado, y no pueden cambiarse hasta que se le llame de nuevo. El espíritu celestial no imparte bonificador alguno si el arma la empuña cualquiera otro que no sea el paladín, pero vuelve a conceder los bonificadores si el arma se retorna a éste. Estos bonificadores se aplican sólo a un extremo de un arma doble. Un paladín puede utilizar esta aptitud 1 vez/día a 5º nivel, y 1 vez adicional al día por cada 4 niveles por encima del 5º, hasta un total de 4 veces al día a nivel 17.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Aura de decisión',
    		'description'  	=>  'A 8º nivel, un paladín es inmune a los conjuros y aptitudes sortílegas de encantamiento. Todo aliado que se encuentra a 10 pies (3 m) o menos de él, obtiene un bonificador +4 por moral a las tiradas de salvación contra efectos de encantamiento. Esta aptitud sólo funciona mientras el paladín permanece consciente, y no si está inconsciente o muerto.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Aura de justicia',
    		'description'  	=>  'A nivel 11, un paladín puede gastar 2 usos de su aptitud de castigar el mal para conceder la aptitud de castigar el mal a todos sus aliados que se encuentran a 10 pies (3 m) o menos de él, utilizando los bonificadores del paladín. Los aliados deben utilizar esta aptitud al inicio del siguiente turno de éste, y los bonificadores duran 1 minuto. Utilizar esta aptitud es una acción gratuita. Las criaturas malignas no obtienen beneficio alguno de esta aptitud.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Aura de fe',
    		'description'  	=>  'A nivel 14, las armas de un paladín se tratan como alineadas con el bien a efectos de superar la reducción del daño. Cualquier ataque llevado a cabo contra un enemigo que se encuentra a 10 pies (3 m) o menos del paladín se trata como alineado con el bien a efectos de superar la reducción del daño. Esta aptitud sólo funciona mientras el paladín está consciente, y no si está inconsciente o muerto.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Aura de rectitud',
    		'description'  	=>  'A nivel 17, un paladín obtiene RD 5/maligna, e inmunidad a los conjuros de compulsión y a las aptitudes sortílegas de compulsión. Cada aliado a 10 pies (3 m) o menos de él obtiene un bonificador +4 por moral a las tiradas de salvación contra los efectos de compulsión.
    		Esta aptitud sólo funciona mientras el paladín permanece consciente, y no si está inconsciente o muerto.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    	DB::table('special_aptitudes')->insert([
    		'name'          =>  'Campeón sagrado',
    		'description'  	=>  'A nivel 20, un paladín se convierte en un conducto para el poder de su dios. Su RD aumenta a 10/maligna. Cada vez que usa castigar el mal y acierta a un ajeno maligno, éste queda también sujeto a un destierro, utilizando el nivel de paladín como nivel de lanzador (su arma y su símbolo sagrado cuentan automáticamente como objetos que el objetivo odia). Después de resolver el efecto del destierro y el daño del ataque, el castigo acaba de inmediato. Además, cada vez que canaliza energía positiva o utiliza la imposición de manos para curar a una criatura, cura la cantidad máxima posible.',
    		'class_id'      =>  DB::table('classes')->where('name', 'paladin')->value('id'),
    	]);
    }
}
