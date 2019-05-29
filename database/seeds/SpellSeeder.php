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
    }
}
