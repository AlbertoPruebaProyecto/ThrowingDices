<?php

use Illuminate\Database\Seeder;

class SpellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bard Spells
    	DB::table('spells')->insert([
    		'name'			=>  'Abrir/cerrar',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Abre o cierra cosas pequeñas o ligeras.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Atontar',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Humanoide de 4 DG o menos pierde su siguiente acción.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Conocer la dirección',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Te indica dónde está el norte.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar instrumento',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Convoca un instrumento musical.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Cuchichear mensaje',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Conversación en susurros a distancia.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Detectar magia',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Detecta conj. y obj. mág.a 60 pies (18 m) o menos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Leer magia',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Lee libros de conjuros y pergaminos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Llamarada',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Deslumbra a una criatura (-1 a las tiradas de ataque).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Luces danzantes',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Crea antorchas u otras luces.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Luz',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Un objeto brilla como una antorcha.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Mano del mago',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Telecinesis de 5 libras (2,25 kg).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Nana',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Vuelve al sujeto soñoliento; -5 a las pruebas de Percepción, y -2 a las salvaciones de Voluntad contra dormir.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Prestidigitación',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Lleva a cabo trucos menores.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Remendar',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Lleva a cabo reparaciones menores en un objeto.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Resistencia',
    		'school'		=>	'bard-level0',
    		'description'	=>  'El receptor obtiene un +1 a sus tiradas de salvación.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Sonido fantasma',
    		'school'		=>	'bard-level0',
    		'description'	=>  'Sonidos quiméricos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Alarma',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Custodia un lugar durante 2 horas/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Alineamiento indetectable',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Oculta alineamiento durante 24 horas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Animar una cuerda',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Hace que una cuerda se mueva a tus órdenes.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Aura mágica',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Altera el aura mágica de un objeto.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Boca mágica',
    		'school'		=>	'bard-level1',
    		'description'	=>  ' Objeto habla una vez al desencadenarse el efecto.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Borrar',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Hace desaparecer escritura mágica o mundana.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Caída de pluma',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Objetos o criaturas caen lentamente.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Causar miedo',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Criatura de 5 DG o menos huye durante 1d4 asaltos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Comprensión idiomática',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Comprendes todos los idiomas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Confusión menor',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Una criatura queda confusa durante 1 asalto.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar monstruo I',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Criatura extraplanaria lucha por ti.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas leves',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Cura 1d8 pg de daño (+1/nivel; máximo +5).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Detectar puertas secretas',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Revela puertas ocultas en 60 pies (18 m).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Disfrazarse',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Cambia tu apariencia.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Dormir',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Sume a criaturas por un valor de 4 DG en un sueño mágico.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Grasa',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Engrasa un objeto o cuadrado de 10 pies (3 m) de lado.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Hechizar persona',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Convierte en amiga tuya a una persona.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Hipnotismo',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Fascina a criaturas de 2d4 DG.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Identificar',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Concede bonificador +10 a identificar obj. mágicos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Imagen silenciosa.',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Crea una ilusión menor diseñada por ti.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Obscurecer objeto',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Oculta un objeto del escudriñamiento.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Quitar el miedo',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Elimina el miedo o proporciona un +4 a las salvaciones contra miedo de un objetivo, + 1 por cada 4 niveles.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Retirada expeditiva',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Velocidad terrestre aumenta en 30 pies (9 m).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Sirviente invisible',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Fuerza invisible que obedece tus órdenes',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Terribles carcajadas',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Receptor pierde acciones 1 asalto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Ventriloquía',
    		'school'		=>	'bard-level1',
    		'description'	=>  'Proyecta una voz durante 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Alterar el propio aspecto',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Adopta forma de un humanoide Pequeño o Mediano.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Animal mensajero',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Envía animal Menudo hasta un lugar concreto.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Astucia de zorro',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Objetivo obtiene +4 a Int durante 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Atontar monstruo',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Criatura viva de 6 DG o menos pierde su siguiente acción.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Calmar emociones',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Calma criaturas, niega efectos emocionales.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Cautivar',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Cautiva en un radio de 100 pies [30 m] + 10 pies (3 m) /nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Ceguera/sordera',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Deja ciego o sordo al receptor',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Contorno borroso',
    		'school'		=>	'bard-level2',
    		'description'	=>  'El 20% de los ataques resultan fallidos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar monstruo II',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Criatura extraplanaria lucha por ti.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar plaga',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Convoca una plaga de murciélagos, ratas o arañas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas moderadas',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Cura 2d8 pg de daño (+1/nivel; máximo +10).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Desorientar',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Confunde adivinaciones sobre una criatura u objeto.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Detectar pensamientos',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Permite ‘oír’ pensamientos superficiales.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Don de lenguas',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Puedes hablar y entender cualquier idioma.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Espantar',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Asustas a criaturas de menos de 6 DG.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Esplendor de águila',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Objetivo obtiene +4 a Car 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Estallar',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Vibración sónica que daña a objetos o criaturas cristalinos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Explosión de sonido',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Inf lige 1d8 pg de daño sónico a los receptores, que pueden quedar aturdidos',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Furia',
    		'school'		=>	'bard-level2',
    		'description'	=>  '+2 a Fue y Con, y +1 a las salvaciones de Vol, contra -2 a la CA.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Gracia felina',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Receptor obtiene +4 a la Des durante 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Heroísmo',
    		'school'		=>	'bard-level2',
    		'description'	=>  '+2 a tiradas de ataque, salv. y pruebas de habilidad.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Imagen menor',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Como imagen silenciosa, pero con algún sonido.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Imagen múltiple',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Crea dobles falsos de ti mismo (1d4 +1 por cada 3 niveles; máximo 8).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Inmovilizar persona',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Paraliza 1 humanoide durante 1 asalto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Invisibilidad',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Receptor invisible 1 minuto/nivel o hasta que ataca.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Lentificar veneno',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Impide el daño por veneno 1 hora/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Localizar objeto',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Nota la dirección de un objeto (específico o tipo).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Oscuridad',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Sombra sobrenatural de 20 pies (6 m) de radio.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Partículas rutilantes',
    		'school'		=>	'bard-level2',
    		'description'	=>  ' Ciega criaturas, y revela las invisibles.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Pauta hipnótica',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Fascina a criaturas de (2d4+ nivel) DG.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Pirotecnia',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Convierte el fuego en luz cegadora o humo asfixiante.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Silencio',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Niega el sonido en un radio de 20 pies (6 m).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Sugestión',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Obliga al receptor a seguir un curso de acción.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Trance animal',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Fascina a 2d6 DG de animales.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Viento susurrante',
    		'school'		=>	'bard-level2',
    		'description'	=>  'Mensaje a 1 milla (1,6 km) de distancia por nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Acelerar',
    		'school'		=>	'bard-level3',
    		'description'	=>  ' Una criatura/nivel se mueve más rápido y obtiene un +1 a las tiradas de ataque, CA y salvaciones de Ref lejos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Clariaudiencia/clarividencia',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Ver u oír a distancia 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Confusión',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Los receptores hacen cosas raras durante 1 asalto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar monstruo III',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Criatura extraplanaria lucha por ti.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Corcel fantasmal',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Caballo mágico aparece durante 1 hora/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Cubículo',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Crea un cobijo para 10 criaturas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas graves',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Cura 3d8 pg de daño (+1 /nivel; máximo +15).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Desesperación aplastante',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Los receptores sufren un penalizador -2 a las tiradas de ataque, tiradas de daño, salvaciones y pruebas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Desplazamiento',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Ataques no alcanzan al receptor 50% de las veces.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Disipar magia',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Anula un conjuro o efecto mágico.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Escritura ilusoria',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Sólo para las criaturas seleccionadas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Escudriñamiento',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Espía desde lejos al receptor.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Esculpir sonido',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Crea nuevos sonidos, o cambia a otros nuevos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Esfera de invisibilidad',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Todos invisibles a 10 pies (3 m) o menos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Esperanza alentadora',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Los receptores obtienen un bonificador +2 a las tiradas de ataque, de daño, salvaciones y pruebas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Forma gaseosa',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Receptor insustancial, y puede volar lentamente.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Geas menor',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Da una orden a un receptor de 7 DG como máximo.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Hablar con los animales',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Puedes comunicarte con los animales.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Hechizar monstruo',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Un monstruo cree que eres aliado suyo.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Imagen mayor',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Como imagen silenciosa, con sonido, olor y calor.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Impronta de la serpiente sepia',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Crea un símbolo de texto en forma de serpiente, que inmoviliza al lector',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Intermitencia',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Desapareces y reapareces durante 1 asalto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Labia',
    		'school'		=>	'bard-level3',
    		'description'	=>  ' Obtienes un bonificador +20 a las pruebas de Engañar, y tus mentiras escapan a la detección mágica.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Luz del día',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Luz brillante de 60 pies (18 m) de radio.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Miedo',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Receptores situados en el cono huyen durante 1 asalto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Página secreta',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Cambia una página para ocultar su contenido real.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Quitar maldición',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Libera 1 objeto o persona de una maldición.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Lentificar',
    		'school'		=>	'bard-level3',
    		'description'	=>  '1 receptor/nivel puede llevar a cabo sólo una acción por asalto, -1 a la CA, a las salv. de Ref lejos, y a las tiradas de ataque.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Sueño profundo',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Duerme criaturas de 10 DG.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Ver lo invisible',
    		'school'		=>	'bard-level3',
    		'description'	=>  'Revela objetos y criaturas invisibles.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Alarido',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Ensordece a todos en el cono, e inf lige 5d6 pg de daño.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Cobijo seguro',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Crea una choza sólida.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Conjuración sombría',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Conjuraciones hasta 3er nivel sólo 20% reales.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Conocimiento de leyendas',
    		'school'		=>	'bard-level4',
    		'description'	=>  ' Sabes de una persona, cosa o lugar.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar monstruo IV',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Criatura extraplanaria lucha por ti.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas críticas',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Cura 4d8 pg de daño (+1 /nivel; máx. +20).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Detectar escudriñamiento',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Te alerta del espionaje mágico.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Dominar persona',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Controla telepáticamente a un humanoide.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Hablar con las plantas',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Hablas con plantas y criaturas vegetales.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Inmovilizar monstruo',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Como inmovilizar persona, con criaturas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Invisibilidad mayor',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Invisibilidad, atacas y permaneces invisible.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Libertad de movimiento',
    		'school'		=>	'bard-level4',
    		'description'	=>  'El receptor se mueve con normalidad a pesar de los impedimentos que restringen el movimiento.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Localizar criatura',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Indica la dirección de una criatura conocida.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Modificar recuerdo',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Cambia 5 minutos de recuerdos del receptor.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Neutralizar veneno',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Inmuniza al receptor frente al veneno, o desintoxica el veneno que le cubre o invade receptor',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Pauta iridiscente',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Luces fascinan a 24 DG de criaturas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Puerta dimensional.',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Te teletransporta a distancia corta.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Repeler sabandijas',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Insectos, arañas y otras sabandijas se mantienen a 10 pies (3 m) de distancia.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Romper encantamiento',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Elimina encantamientos, transmutaciones, y maldiciones.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Terreno alucinatorio.',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Hace que un terreno parezca ser de un tipo diferente (campo con aspecto de bosque, etc.).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Zona de silencio',
    		'school'		=>	'bard-level4',
    		'description'	=>  'Evita que los curiosos escuchen una conversación.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Bruma mental',
    		'school'		=>	'bard-level5',
    		'description'	=>  'El receptor sufre un -10 a las pruebas de Sabiduría y de Voluntad.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Caminar por la sombra',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Viajas rápidamente entrando en las sombras.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Canción de discordia',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Obliga a los objetivos a atacarse unos a otros.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar monstruo V',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Convoca a una criatura extraplanaria para que luche por ti.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas leves en grupo',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Cura 1d8 pg de daño +1/nivel, afecta a 1 receptor/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Disipar magia mayor',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Como disipar magia, pero puede afectar a múltiples objetivos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Doble engañoso',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Te hace invisible y crea un doble ilusorio.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Espejismo arcano',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Como terreno alucinatorio, pero con estructuras.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Evocación sombría',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Imita evocaciones de 4º nivel o inferior, pero sólo son reales en un 20%.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Heroísmo mayor',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Proporciona un bonificador +4 a las tiradas de ataque, salvaciones y pruebas de habilidad; inmunidad al miedo y pg temporales.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Imagen persistente',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Como imagen mayor, pero no hace falta concentración.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Mensaje onírico',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Envía un mensaje a cualquiera que esté durmiendo',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Ofuscar videncia',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Engaña al escudriñamiento con una ilusión.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Pesadilla',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Envía una visión que inf lige 1d10 pg de daño; fatiga.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Similitud',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Cambia la apariencia de 1 persona/2 niveles.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Sugestión en grupo',
    		'school'		=>	'bard-level5',
    		'description'	=>  'Como sugestión, afecta 1 receptor/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Alarido mayor',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Grito 10d6 pg de daño sónico; aturde a las criaturas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Analizar esencia mágica',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Revela los aspectos mágicos del receptor.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Animar los objetos',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Los objetos atacan a tus enemigos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Astucia de zorro en grupo',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Astucia de zorro, afecta a 1 receptor/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Baile irresistible',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Obliga a bailar al receptor.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Convocar monstruo VI',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Criatura extraplanaria lucha por ti.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas moderadas en grupo',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Cura 2d8 pg de daño +1/nivel, 1 receptor/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Encontrar la senda',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Muestra el camino más directo hasta un lugar.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Escudriñamiento mayor',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Escudriñamiento, más rápido y duradero.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Esplendor de águila en grupo.',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Esplendor de águila, 1 receptor/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Festín de los héroes',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Comida, para 1 criatura/nivel, cura y proporciona bonificadores de combate.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Geas/empeño',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Como geas menor, pero afecta a cualquier criatura.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Imagen permanente',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Ilusión con visión, sonido, olor y calor.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Imagen programada',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Como imagen mayor, pero se desencadena al suceder algo.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Gracia felina en grupo',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Como gracia felina, afecta a 1 receptor/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Hechizar monstruo en grupo',
    		'school'		=>	'bard-level6',
    		'description'	=>  ' Como hechizar monstruo, pero afecta a todos en un radio de 30 pies (9 m)',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Mordedura visual.',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Deja despavorido, indispuesto, y/o comatoso.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Proyectar imagen',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Doble ilusorio, habla y lanza conjuros.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Velo',
    		'school'		=>	'bard-level6',
    		'description'	=>  'Cambia la apariencia de un grupo de criaturas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Vibración sintonizada',
    		'school'		=>	'bard-level6',
    		'description'	=>  '2d10 pg de daño/asalto a una estructura.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Arma mágica',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Un arma obtiene un bonificador +1.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Bendecir agua',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Crea agua bendita.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Bendecir arma',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Arma asesta golpes terribles a enemigos malignos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Bendecir',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Los aliados obtienen un +1 a las tiradas de ataque y a las salvaciones contra miedo.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Crear agua',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Crea 2 galones (7,6 l)/nivel de agua pura.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas leves',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Cura 1d8 pg de daño +1/nivel (máximo +5)',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Detectar muertos vivientes',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Revela m. v. a 60 pies (18 m) o menos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Detectar veneno',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Detecta veneno en una criatura u objeto pequeño.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Favor divino',
    		'school'		=>	'paladin-level1',
    		'description'	=>  '+1 por cada 3 niveles a las tiradas de ataque y daño.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Leer magia',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Lectura de libros de conjuros y pergaminos.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Protección contra el caos/el mal',
    		'school'		=>	'paladin-level1',
    		'description'	=>  '+2 a la CA y a las salvaciones, y protección adicional contra el alineamiento seleccionado.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Resistencia',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'El receptor obtiene un +1 a las tiradas de salvación.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Restablecimiento menor',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Disipa un penalizador mágico de característica, o recupera 1d4 puntos de característica.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Soportar los elementos',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'Estás cómodo en regiones frías o cálidas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Virtud',
    		'school'		=>	'paladin-level1',
    		'description'	=>  'El receptor obtiene 1 pg temporal.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Alineamiento indetectable',
    		'school'		=>	'paladin-level2',
    		'description'	=>  'Oculta el alineamiento de la detección mágica durante 24 horas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Escudar a otro',
    		'school'		=>	'paladin-level2',
    		'description'	=>  'Absorbes mitad de daño inf ligido al receptor',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Esplendor de águila',
    		'school'		=>	'paladin-level2',
    		'description'	=>  '+4 al Car del receptor durante 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Fuerza de toro',
    		'school'		=>	'paladin-level2',
    		'description'	=>  '+4 a la Fue del receptor durante 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Lentificar veneno',
    		'school'		=>	'paladin-level2',
    		'description'	=>  'Protege del veneno al receptor 1 hora/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Quitar parálisis',
    		'school'		=>	'paladin-level2',
    		'description'	=>  'Quita parálisis o lentificar a 1 o más criaturas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Resistir energía',
    		'school'		=>	'paladin-level2',
    		'description'	=>  'Ignora hasta 10 pg de daño/ataque de energía.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Sabiduría de búho',
    		'school'		=>	'paladin-level2',
    		'description'	=>  '+4 a la Sab del receptor durante 1 minuto/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Zona de verdad',
    		'school'		=>	'paladin-level2',
    		'description'	=>  'Receptores dentro del alcance no pueden mentir.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Arma mágica mayor.',
    		'school'		=>	'paladin-level3',
    		'description'	=>  '+1 por cada 4 niveles (máximo +5).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Círculo mágico contra el caos/el mal.',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Como protección contra el caos, pero con un radio de 10 pies (3 m) y 10 minutos/nivel.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas moderadas',
    		'school'		=>	'paladin-level3',
    		'description'	=>  '2d8 pg daño +1 pg de daño/nivel (máx. +10).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Discernir mentiras',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Revela las falsedades deliberadas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Disipar magia',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Cancela un conjuro o efecto mágico.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Luz del día',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Luz brillante de 60 pies (18 m) de radio.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Plegaria',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Los aliados obtienen un bonificador +1 a la mayoría de las tiradas; los enemigos, un penalizador -1.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Quitar ceguera/sordera',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Cura tanto las normales como las mágicas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Quitar maldición',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Libera a un objeto o persona de una maldición.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Sanar a una montura',
    		'school'		=>	'paladin-level3',
    		'description'	=>  'Sanar, pero a un caballo u otra montura.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Curar heridas graves',
    		'school'		=>	'paladin-level4',
    		'description'	=>  'Cura 3d8 pg de daño +1 /nivel (máximo +15).',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Custodia contra la muerte',
    		'school'		=>	'paladin-level4',
    		'description'	=>  'Concede bonificadores contra los conjuros de muerte, y la energía negativa.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Disipar el caos',
    		'school'		=>	'paladin-level4',
    		'description'	=>  '+4 contra los ataques de las criaturas caóticas',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Disipar el mal',
    		'school'		=>	'paladin-level4',
    		'description'	=>  '+4 contra los ataques de las criaturas malignas.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Espada sagrada',
    		'school'		=>	'paladin-level4',
    		'description'	=>  'Arma pasa a +5, +2d6 pg de daño contra el mal.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Marca de la justicia',
    		'school'		=>	'paladin-level4',
    		'description'	=>  'Designa la acción que desencadena una maldición sobre el receptor.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  ' Neutralizar veneno',
    		'school'		=>	'paladin-level4',
    		'description'	=>  'Protege al receptor del veneno o lo cura.',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Restablecimiento',
    		'school'		=>	'paladin-level4',
    		'description'	=>  ' Recobra las puntuaciones de característica y los niveles consumidos',
    	]);
    	DB::table('spells')->insert([
    		'name'			=>  'Romper encantamiento',
    		'school'		=>	'paladin-level4',
    		'description'	=>  'Libera a los receptores de encantamientos, transmutaciones, y maldiciones.',
    	]);
    }
}
