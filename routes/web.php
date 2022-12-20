<?php

use App\Models\User;
use App\Models\Grade;
use App\Models\Phase;
use App\Models\Option;
use App\Models\Advance;
use App\Models\Exercise;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/', function () {

})->name('translateResult');

Route::get('/make', function () {

    $question1 = [
        'en' => ['question' => 'Identify the following words'],
        'fr' => ['question' => 'Identifiez les mots suivants'],
        'es' => ['question' => 'Identifica las siguientes palabras'],
      ];
    $question2 = [
        'en' => ['question' => 'Translate the following sentences'],
        'fr' => ['question' => 'Traduisez les phrases suivantes'],
        'es' => ['question' => 'Traduce las siguientes oraciones'],
      ];
    $question3 = [
        'en' => ['question' => 'Complete the following text with the right words'],
        'fr' => ['question' => 'Complétez le texte suivant avec les mots qui conviennent'],
        'es' => ['question' => 'Complete el siguiente texto con las palabras correctas'],
      ];
    $question4 = [
        'en' => ['question' => 'Put the days of the week in good order'],
        'fr' => ['question' => 'Mettez les jours de la semaine en bon ordre'],
        'es' => ['question' => 'Pon los días de la semana en buen estado'],
      ];
      $question_1 = Question::create($question1);
      $question_2 = Question::create($question2);
      $question_3 = Question::create($question3);
      $question_4 = Question::create($question4);

      // select qustions
    $exercise1 = [
        'en' => ['word' => 'Apple'],
        'fr' => ['word' => 'Pomme'],
        'es' => ['word' => 'Manzana'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise2 = [
        'en' => ['word' => 'Table'],
        'fr' => ['word' => 'Table'],
        'es' => ['word' => 'Mesa'],
        'question_id' => $question_1->id,
        'type' => 'select',
      ];
    $exercise3 = [
        'en' => ['word' => 'man'],
        'fr' => ['word' => 'Homme'],
        'es' => ['word' => 'hombre'],
        'question_id' => $question_1->id,
        'type' => 'select',
      ];
    $exercise4 = [
        'en' => ['word' => 'Women'],
        'fr' => ['word' => 'Femmes'],
        'es' => ['word' => 'Mujeres'],
        'question_id' => $question_1->id,
        'type' => 'select',
      ];
    $exercise5 = [
        'en' => ['word' => 'Week'],
        'fr' => ['word' => 'Semaine'],
        'es' => ['word' => 'Semana'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise6 = [
        'en' => ['word' => 'Day'],
        'fr' => ['word' => 'Jour'],
        'es' => ['word' => 'Día'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise7 = [
        'en' => ['word' => 'Monday'],
        'fr' => ['word' => 'Lundi'],
        'es' => ['word' => 'Lunes'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise8 = [
        'en' => ['word' => 'Tuesday'],
        'fr' => ['word' => 'Mardi'],
        'es' => ['word' => 'Martes'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise9 = [
        'en' => ['word' => 'Wednesday'],
        'fr' => ['word' => 'Mercredi'],
        'es' => ['word' => 'Miércoles'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise10 = [
        'en' => ['word' => 'Thursday'],
        'fr' => ['word' => 'Jeudi'],
        'es' => ['word' => 'Jueves'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise11 = [
        'en' => ['word' => 'Friday'],
        'fr' => ['word' => 'Vendredi'],
        'es' => ['word' => 'Viernes'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise12 = [
        'en' => ['word' => 'Saturday'],
        'fr' => ['word' => 'Samedi'],
        'es' => ['word' => 'Sábado'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise13 = [
        'en' => ['word' => 'Sunday'],
        'fr' => ['word' => 'Dimanche'],
        'es' => ['word' => 'Domingo'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];

    // translate Questions
    $exercise14 = [
        'en' => ['word' => 'The weekend in Europe is Saturday and Sunday.'],
        'fr' => ['word' => "Le weekend en Europe c’sont les samedi et dimanche."],
        'es' => ['word' => 'El fin de semana en Europa es el sábado y el domingo.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise15 = [
        'en' => ['word' => 'Martine goes to work Monday and Tuesday.'],
        'fr' => ['word' => 'Martine va au travail lundi et mardi.'],
        'es' => ['word' => 'Martine va a trabajar el lunes y martes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise16 = [
        'en' => ['word' => 'I have an appointment on Tuesday.'],
        'fr' => ['word' => 'J’ai un rendez-vous le mardi.'],
        'es' => ['word' => 'Tengo una cita el martes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise17 = [
        'en' => ['word' => 'Michel works on Wednesdays.'],
        'fr' => ['word' => 'Michel travaille le mercredi.'],
        'es' => ['word' => 'Michel trabaja los miércoles.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise18 = [
        'en' => ['word' => 'Monday comes after Sunday.'],
        'fr' => ['word' => 'Lundi vient après dimanche.'],
        'es' => ['word' => 'El lunes viene después del domingo.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise19 = [
        'en' => ['word' => 'Tuesday comes after Monday.'],
        'fr' => ['word' => 'Mardi vient après lundi.'],
        'es' => ['word' => 'El martes viene después del lunes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise20 = [
        'en' => ['word' => "I'm not free on Thursday."],
        'fr' => ['word' => 'Je ne suis pas libre jeudi.'],
        'es' => ['word' => 'No estoy libre el jueves.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise21 = [
        'en' => ['word' => 'Friday is the weekend in Egypt.'],
        'fr' => ['word' => 'Vendredi est le weekend en Egypte.'],
        'es' => ['word' => 'Vendredi est le weekend en Egypte.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise22 = [
        'en' => ['word' => 'It is sunny on Tuesday.'],
        'fr' => ['word' => 'Il y a du soleil ce mardi.'],
        'es' => ['word' => 'Hace sol el martes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise23 = [
        'en' => ['word' => 'Celine and her mother stay home on Fridays.'],
        'fr' => ['word' => 'Céline et sa mère restent à la maison le vendredi.'],
        'es' => ['word' => 'Celine y su madre se quedan en casa los viernes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise24 = [
        'en' => ['word' => 'Monday is the first day of the week.'],
        'fr' => ['word' => 'Lundi est le premier jour de la semaine.'],
        'es' => ['word' => 'El lunes es el primer día de la semana.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise25 = [
        'en' => ['word' => 'Martin works on Sundays.'],
        'fr' => ['word' => 'Martin travaille le dimanche.'],
        'es' => ['word' => 'Martín trabaja los domingos.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise26 = [
        'en' => ['word' => 'Celine is at school on Thursdays.'],
        'fr' => ['word' => 'Céline est à l’école le jeudi.'],
        'es' => ['word' => 'Celine está en la escuela los jueves.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise27 = [
        'en' => ['word' => 'Fadi stays home on Fridays.'],
        'fr' => ['word' => 'Fadi reste à la maison le vendredi.'],
        'es' => ['word' => 'Fadi se queda en casa los viernes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise28 = [
        'en' => ['word' => 'Rama comes on Saturday.'],
        'fr' => ['word' => 'Rama vient le samedi.'],
        'es' => ['word' => 'Rama viene el sábado.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];

    // select right word Questions
    $exercise29 = [
        'en' => ['word' => 'Monday morning, Michel goes to… for his Arabic class.'],
        'fr' => ['word' => 'Lundi matin, Michel va à l’… pour son cours d’arabe.'],
        'es' => ['word' => 'El lunes por la mañana, Michel va a… para su clase de árabe.'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise30 = [
        'en' => ['word' => 'On Tuesday, he works in an Italian restaurant where he prepares ...'],
        'fr' => ['word' => 'Mardi, il travaille dans un restaurant italien où il prépare des ...'],
        'es' => ['word' => 'El martes trabaja en un restaurante italiano donde prepara...'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise31 = [
        'en' => ['word' => 'Thursday, he walks with his friends at ...'],
        'fr' => ['word' => 'Jeudi, il se promène avec ses amis au ...'],
        'es' => ['word' => 'Jueves, camina con sus amigos en ...'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise32 = [
        'en' => ['word' => 'On Friday, he is taking ...'],
        'fr' => ['word' => 'Vendredi, il prend un cours d’...'],
        'es' => ['word' => 'El viernes tomará un...'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise33 = [
        'en' => ['word' => 'Saturday and..., he does nothing.'],
        'fr' => ['word' => 'Samedi et …, il ne fait rien.'],
        'es' => ['word' => 'Sábado y..., no hace nada.'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];

    // select weeks questions
    $exercise34 = [
        'en' => ['word' => 'Sunday, …, Tuesday'],
        'fr' => ['word' => 'Dimanche, …, Mardi'],
        'es' => ['word' => 'domingo, …, martes'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise35 = [
        'en' => ['word' => 'Monday Tuesday, …'],
        'fr' => ['word' => 'lundi, mardi, …'],
        'es' => ['word' => 'lunes martes, …'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise36 = [
        'en' => ['word' => 'Thursday, …, Saturday'],
        'fr' => ['word' => 'Jeudi, …, Samedi'],
        'es' => ['word' => 'Jueves, ..., Sabado'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise37 = [
        'en' => ['word' => '…, Monday, Tuesday'],
        'fr' => ['word' => '…, Lundi, Mardi'],
        'es' => ['word' => '…, Lunes Martes'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise38 = [
        'en' => ['word' => 'Friday, …, Sunday'],
        'fr' => ['word' => 'Vendredi, …, Dimanche'],
        'es' => ['word' => 'Viernes, ..., Domingo'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];

    // right order question
    $exercise39 = [
        'en' => ['word' => 'Wednesday, Monday, Saturday, Tuesday, Friday, Sunday, Thursday'],
        'fr' => ['word' => 'Mercredi, lundi, samedi, mardi, vendredi, dimanche, jeudi'],
        'es' => ['word' => 'miércoles, lunes, sábado, martes, viernes, domingo, jueves'],
        'question_id' => $question_4->id,
        'type' => 'select',
    ];


      $exercise_1 = Exercise::create($exercise1);
      $exercise_2 = Exercise::create($exercise2);
      $exercise_3 = Exercise::create($exercise3);
      $exercise_4 = Exercise::create($exercise4);
      $exercise_5 = Exercise::create($exercise5);
      $exercise_6 = Exercise::create($exercise6);
      $exercise_7 = Exercise::create($exercise7);
      $exercise_8 = Exercise::create($exercise8);
      $exercise_9 = Exercise::create($exercise9);
      $exercise_10 = Exercise::create($exercise10);
      $exercise_11 = Exercise::create($exercise11);
      $exercise_12 = Exercise::create($exercise12);
      $exercise_13 = Exercise::create($exercise13);
      $exercise_14 = Exercise::create($exercise14);
      $exercise_15 = Exercise::create($exercise15);
      $exercise_16 = Exercise::create($exercise16);
      $exercise_17 = Exercise::create($exercise17);
      $exercise_18 = Exercise::create($exercise18);
      $exercise_19 = Exercise::create($exercise19);
      $exercise_20 = Exercise::create($exercise20);
      $exercise_21 = Exercise::create($exercise21);
      $exercise_22 = Exercise::create($exercise22);
      $exercise_23 = Exercise::create($exercise23);
      $exercise_24 = Exercise::create($exercise24);
      $exercise_25 = Exercise::create($exercise25);
      $exercise_26 = Exercise::create($exercise26);
      $exercise_27 = Exercise::create($exercise27);
      $exercise_28 = Exercise::create($exercise28);
      $exercise_29 = Exercise::create($exercise29);
      $exercise_30 = Exercise::create($exercise30);
      $exercise_31 = Exercise::create($exercise31);
      $exercise_32 = Exercise::create($exercise32);
      $exercise_33 = Exercise::create($exercise33);
      $exercise_34 = Exercise::create($exercise34);
      $exercise_35 = Exercise::create($exercise35);
      $exercise_36 = Exercise::create($exercise36);
      $exercise_37 = Exercise::create($exercise37);
      $exercise_38 = Exercise::create($exercise38);
      $exercise_39 = Exercise::create($exercise39);

      $option1 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_1->id,
        'is_correct' => true,
      ];
    $option2 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_1->id,
        'is_correct' => false,
      ];
    $option3 = [
        'en' => ['option' => 'man'],
        'fr' => ['option' => 'Homme'],
        'es' => ['option' => 'hombre'],
        'exercise_id' => $exercise_1->id,
        'is_correct' => false,
      ];
    $option4 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femmes'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_2->id,
        'is_correct' => false,
      ];
    $option5 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_2->id,
        'is_correct' => true,
      ];
    $option6 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_2->id,
        'is_correct' => false,
      ];
    $option7 = [
        'en' => ['option' => 'man'],
        'fr' => ['option' => 'Homme'],
        'es' => ['option' => 'hombre'],
        'exercise_id' => $exercise_3->id,
        'is_correct' => true,
      ];
    $option8 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femmes'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_3->id,
        'is_correct' => false,
      ];
    $option9 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_3->id,
        'is_correct' => false,
      ];
    $option10 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_4->id,
        'is_correct' => false,
      ];
    $option11 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femmes'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_4->id,
        'is_correct' => true,
      ];
    $option12 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_4->id,
        'is_correct' => false,
      ];
    $option13 = [
        'en' => ['option' => 'Week'],
        'fr' => ['option' => 'Semaine'],
        'es' => ['option' => 'Semana'],
        'exercise_id' => $exercise_5->id,
        'is_correct' => true,
      ];
    $option14 = [
        'en' => ['option' => 'Door'],
        'fr' => ['option' => 'Porte'],
        'es' => ['option' => 'Puerta'],
        'exercise_id' => $exercise_5->id,
        'is_correct' => false,
      ];
    $option15 = [
        'en' => ['option' => 'House'],
        'fr' => ['option' => 'Loger'],
        'es' => ['option' => 'Casa'],
        'exercise_id' => $exercise_5->id,
        'is_correct' => false,
      ];

    $option16 = [
        'en' => ['option' => 'Day'],
        'fr' => ['option' => 'Jour'],
        'es' => ['option' => 'Día'],
        'exercise_id' => $exercise_6->id,
        'is_correct' => true,
      ];
    $option17 = [
        'en' => ['option' => 'Door'],
        'fr' => ['option' => 'Porte'],
        'es' => ['option' => 'Puerta'],
        'exercise_id' => $exercise_6->id,
        'is_correct' => false,
      ];
    $option18 = [
        'en' => ['option' => 'Window'],
        'fr' => ['option' => 'la fenêtre'],
        'es' => ['option' => 'ventana'],
        'exercise_id' => $exercise_6->id,
        'is_correct' => false,
      ];

    $option19 = [
        'en' => ['option' => 'Monday'],
        'fr' => ['option' => 'Lundi'],
        'es' => ['option' => 'Lunes'],
        'exercise_id' => $exercise_7->id,
        'is_correct' => true,
      ];
    $option20 = [
        'en' => ['option' => 'Bread'],
        'fr' => ['option' => 'Pain'],
        'es' => ['option' => 'Pan'],
        'exercise_id' => $exercise_7->id,
        'is_correct' => false,
      ];
    $option21 = [
        'en' => ['option' => 'Bed'],
        'fr' => ['option' => 'Lit'],
        'es' => ['option' => 'Cama'],
        'exercise_id' => $exercise_7->id,
        'is_correct' => false,
      ];

    $option22 = [
        'en' => ['option' => 'Tuesday'],
        'fr' => ['option' => 'Mardi'],
        'es' => ['option' => 'Martes'],
        'exercise_id' => $exercise_8->id,
        'is_correct' => true,
      ];
    $option23 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_8->id,
        'is_correct' => false,
      ];
    $option24 = [
        'en' => ['option' => 'Window'],
        'fr' => ['option' => 'la fenêtre'],
        'es' => ['option' => 'ventana'],
        'exercise_id' => $exercise_8->id,
        'is_correct' => false,
      ];

    $option25 = [
        'en' => ['option' => 'Wednesday'],
        'fr' => ['option' => 'Mercredi'],
        'es' => ['option' => 'Miércoles'],
        'exercise_id' => $exercise_9->id,
        'is_correct' => true,
      ];
    $option26 = [
        'en' => ['option' => 'Car'],
        'fr' => ['option' => 'Auto'],
        'es' => ['option' => 'Coche'],
        'exercise_id' => $exercise_9->id,
        'is_correct' => false,
      ];
    $option27 = [
        'en' => ['option' => 'Big'],
        'fr' => ['option' => 'Gros'],
        'es' => ['option' => 'Grande'],
        'exercise_id' => $exercise_9->id,
        'is_correct' => false,
      ];

    $option28 = [
        'en' => ['option' => 'Thursday'],
        'fr' => ['option' => 'Jeudi'],
        'es' => ['option' => 'Jueves'],
        'exercise_id' => $exercise_10->id,
        'is_correct' => true,
      ];
    $option29 = [
        'en' => ['option' => 'Car'],
        'fr' => ['option' => 'Auto'],
        'es' => ['option' => 'Coche'],
        'exercise_id' => $exercise_10->id,
        'is_correct' => false,
      ];
    $option30 = [
        'en' => ['option' => 'Bread'],
        'fr' => ['option' => 'Pain'],
        'es' => ['option' => 'Pan'],
        'exercise_id' => $exercise_10->id,
        'is_correct' => false,
      ];

    $option31 = [
        'en' => ['option' => 'Friday'],
        'fr' => ['option' => 'Vendredi'],
        'es' => ['option' => 'Viernes'],
        'exercise_id' => $exercise_11->id,
        'is_correct' => true,
      ];
    $option32 = [
        'en' => ['option' => 'Week'],
        'fr' => ['option' => 'Semaine'],
        'es' => ['option' => 'Semana'],
        'exercise_id' => $exercise_11->id,
        'is_correct' => false,
      ];
    $option33 = [
        'en' => ['option' => 'Water'],
        'fr' => ['option' => "l'eau"],
        'es' => ['option' => 'Agua'],
        'exercise_id' => $exercise_11->id,
        'is_correct' => false,
      ];

    $option34 = [
        'en' => ['option' => 'Saturday'],
        'fr' => ['option' => 'Samedi'],
        'es' => ['option' => 'Sábado'],
        'exercise_id' => $exercise_12->id,
        'is_correct' => true,
      ];
    $option35 = [
        'en' => ['option' => 'Boy'],
        'fr' => ['option' => 'Garçon'],
        'es' => ['option' => 'Chico'],
        'exercise_id' => $exercise_12->id,
        'is_correct' => false,
      ];
    $option36 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femmes'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_12->id,
        'is_correct' => false,
      ];

    $option37 = [
        'en' => ['option' => 'Sunday'],
        'fr' => ['option' => 'Dimanche'],
        'es' => ['option' => 'Domingo'],
        'exercise_id' => $exercise_13->id,
        'is_correct' => true,
      ];
    $option38 = [
        'en' => ['option' => 'Computer'],
        'fr' => ['option' => "l'ordinateur"],
        'es' => ['option' => 'Computadora'],
        'exercise_id' => $exercise_13->id,
        'is_correct' => false,
      ];
    $option39 = [
        'en' => ['option' => 'Phone'],
        'fr' => ['option' => 'Téléphoner'],
        'es' => ['option' => 'Teléfono'],
        'exercise_id' => $exercise_13->id,
        'is_correct' => false,
      ];

      // translate options
    $option40 = [
        'en' => ['option' => 'The weekend in Europe is Saturday and Sunday.'],
        'fr' => ['option' => "Le weekend en Europe c’sont les samedi et dimanche."],
        'es' => ['option' => 'El fin de semana en Europa es el sábado y el domingo.'],
        'exercise_id' => $exercise_14->id,
        'is_correct' => true,
      ];
    $option41 = [
        'en' => ['option' => 'Martine goes to work Monday and Tuesday.'],
        'fr' => ['option' => 'Martine va au travail lundi et mardi.'],
        'es' => ['option' => 'Martine va a trabajar el lunes y martes.'],
        'exercise_id' => $exercise_15->id,
        'is_correct' => true,
      ];
    $option42 = [
        'en' => ['option' => 'I have an appointment on Tuesday.'],
        'fr' => ['option' => 'J’ai un rendez-vous le mardi.'],
        'es' => ['option' => 'Tengo una cita el martes.'],
        'exercise_id' => $exercise_16->id,
        'is_correct' => true,
      ];
    $option43 = [
        'en' => ['option' => 'Michel works on Wednesdays.'],
        'fr' => ['option' => 'Michel travaille le mercredi.'],
        'es' => ['option' => 'Michel trabaja los miércoles.'],
        'exercise_id' => $exercise_17->id,
        'is_correct' => true,
      ];
    $option44 = [
        'en' => ['option' => 'Monday comes after Sunday.'],
        'fr' => ['option' => 'Lundi vient après dimanche.'],
        'es' => ['option' => 'El lunes viene después del domingo.'],
        'exercise_id' => $exercise_18->id,
        'is_correct' => true,
      ];
    $option45 = [
        'en' => ['option' => 'Tuesday comes after Monday.'],
        'fr' => ['option' => 'Mardi vient après lundi.'],
        'es' => ['option' => 'El martes viene después del lunes.'],
        'exercise_id' => $exercise_19->id,
        'is_correct' => true,
      ];
    $option46 = [
        'en' => ['option' => "I'm not free on Thursday."],
        'fr' => ['option' => 'Je ne suis pas libre jeudi.'],
        'es' => ['option' => 'No estoy libre el jueves.'],
        'exercise_id' => $exercise_20->id,
        'is_correct' => true,
      ];
    $option47 = [
        'en' => ['option' => 'Friday is the weekend in Egypt.'],
        'fr' => ['option' => 'Vendredi est le weekend en Egypte.'],
        'es' => ['option' => 'Vendredi est le weekend en Egypte.'],
        'exercise_id' => $exercise_21->id,
        'is_correct' => true,
      ];
    $option48 = [
        'en' => ['option' => 'It is sunny on Tuesday.'],
        'fr' => ['option' => 'Il y a du soleil ce mardi.'],
        'es' => ['option' => 'Hace sol el martes.'],
        'exercise_id' => $exercise_22->id,
        'is_correct' => true,
      ];
    $option49 = [
        'en' => ['option' => 'Celine and her mother stay home on Fridays.'],
        'fr' => ['option' => 'Céline et sa mère restent à la maison le vendredi.'],
        'es' => ['option' => 'Celine y su madre se quedan en casa los viernes.'],
        'exercise_id' => $exercise_23->id,
        'is_correct' => true,
      ];
    $option50 = [
        'en' => ['option' => 'Monday is the first day of the week.'],
        'fr' => ['option' => 'Lundi est le premier jour de la semaine.'],
        'es' => ['option' => 'El lunes es el primer día de la semana.'],
        'exercise_id' => $exercise_24->id,
        'is_correct' => true,
      ];
    $option51 = [
        'en' => ['option' => 'Martin works on Sundays.'],
        'fr' => ['option' => 'Martin travaille le dimanche.'],
        'es' => ['option' => 'Martín trabaja los domingos.'],
        'exercise_id' => $exercise_25->id,
        'is_correct' => true,
      ];
    $option52 = [
        'en' => ['option' => 'Celine is at school on Thursdays.'],
        'fr' => ['option' => 'Céline est à l’école le jeudi.'],
        'es' => ['option' => 'Celine está en la escuela los jueves.'],
        'exercise_id' => $exercise_26->id,
        'is_correct' => true,
      ];
    $option53 = [
        'en' => ['option' => 'Fadi stays home on Fridays.'],
        'fr' => ['option' => 'Fadi reste à la maison le vendredi.'],
        'es' => ['option' => 'Fadi se queda en casa los viernes.'],
        'exercise_id' => $exercise_27->id,
        'is_correct' => true,
      ];
    $option54 = [
        'en' => ['option' => 'Rama comes on Saturday.'],
        'fr' => ['option' => 'Rama vient le samedi.'],
        'es' => ['option' => 'Rama viene el sábado.'],
        'exercise_id' => $exercise_28->id,
        'is_correct' => true,
      ];

      // select
      $option55 = [
        'en' => ['option' => 'University'],
        'fr' => ['option' => 'Université'],
        'es' => ['option' => 'Universidad'],
        'exercise_id' => $exercise_29->id,
        'is_correct' => true,
      ];
      $option56 = [
        'en' => ['option' => 'Gate'],
        'fr' => ['option' => 'Porte'],
        'es' => ['option' => 'Puerta'],
        'exercise_id' => $exercise_29->id,
        'is_correct' => false,
      ];
      $option57 = [
        'en' => ['option' => 'Window'],
        'fr' => ['option' => 'Fenêtre'],
        'es' => ['option' => 'Ventana'],
        'exercise_id' => $exercise_29->id,
        'is_correct' => false,
      ];

      $option58 = [
        'en' => ['option' => 'pizza'],
        'fr' => ['option' => 'pizzas'],
        'es' => ['option' => 'pizza'],
        'exercise_id' => $exercise_30->id,
        'is_correct' => true,
      ];
      $option59 = [
        'en' => ['option' => 'School'],
        'fr' => ['option' => 'école'],
        'es' => ['option' => 'Escuela'],
        'exercise_id' => $exercise_30->id,
        'is_correct' => false,
      ];
      $option60 = [
        'en' => ['option' => 'libre'],
        'fr' => ['option' => 'Livre'],
        'es' => ['option' => 'libro'],
        'exercise_id' => $exercise_30->id,
        'is_correct' => false,
      ];

      $option61 = [
        'en' => ['option' => 'Park'],
        'fr' => ['option' => 'Parc'],
        'es' => ['option' => 'Parque'],
        'exercise_id' => $exercise_31->id,
        'is_correct' => true,
      ];
      $option62 = [
        'en' => ['option' => 'Notebook'],
        'fr' => ['option' => 'Cahier'],
        'es' => ['option' => 'Cuaderno'],
        'exercise_id' => $exercise_31->id,
        'is_correct' => false,
      ];
      $option63 = [
        'en' => ['option' => 'Bread'],
        'fr' => ['option' => 'Pain'],
        'es' => ['option' => 'Pan'],
        'exercise_id' => $exercise_31->id,
        'is_correct' => false,
      ];

      $option64 = [
        'en' => ['option' => 'English'],
        'fr' => ['option' => 'Anglais'],
        'es' => ['option' => 'inglés'],
        'exercise_id' => $exercise_32->id,
        'is_correct' => true,
      ];
      $option65 = [
        'en' => ['option' => 'Chair'],
        'fr' => ['option' => 'Chaise'],
        'es' => ['option' => 'Silla'],
        'exercise_id' => $exercise_32->id,
        'is_correct' => false,
      ];
      $option66 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_32->id,
        'is_correct' => false,
      ];

      $option67 = [
        'en' => ['option' => 'Sunday'],
        'fr' => ['option' => 'Dimanche'],
        'es' => ['option' => 'Domingo'],
        'exercise_id' => $exercise_33->id,
        'is_correct' => true,
      ];
      $option68 = [
        'en' => ['option' => 'pen'],
        'fr' => ['option' => 'stylo'],
        'es' => ['option' => 'lápiz'],
        'exercise_id' => $exercise_33->id,
        'is_correct' => false,
      ];
      $option69 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femme'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_33->id,
        'is_correct' => false,
      ];


      $option70 = [
        'en' => ['option' => 'Monday'],
        'fr' => ['option' => 'Lundi'],
        'es' => ['option' => 'Lunes'],
        'exercise_id' => $exercise_34->id,
        'is_correct' => true,
      ];
      $option71 = [
        'en' => ['option' => 'Friday'],
        'fr' => ['option' => 'Vendredi'],
        'es' => ['option' => 'Viernes'],
        'exercise_id' => $exercise_34->id,
        'is_correct' => false,
      ];
      $option72 = [
        'en' => ['option' => 'Saturday'],
        'fr' => ['option' => 'Samedi'],
        'es' => ['option' => 'Sábado'],
        'exercise_id' => $exercise_34->id,
        'is_correct' => false,
      ];

      $option73 = [
        'en' => ['option' => 'Wednesday'],
        'fr' => ['option' => 'Mercredi'],
        'es' => ['option' => 'Miércoles'],
        'exercise_id' => $exercise_35->id,
        'is_correct' => true,
      ];
      $option74 = [
        'en' => ['option' => 'Friday'],
        'fr' => ['option' => 'Vendredi'],
        'es' => ['option' => 'Viernes'],
        'exercise_id' => $exercise_35->id,
        'is_correct' => false,
      ];
      $option75 = [
        'en' => ['option' => 'Sunday'],
        'fr' => ['option' => 'Dimanche'],
        'es' => ['option' => 'Domingo'],
        'exercise_id' => $exercise_35->id,
        'is_correct' => false,
      ];

      $option76 = [
        'en' => ['option' => 'Friday'],
        'fr' => ['option' => 'Vendredi'],
        'es' => ['option' => 'Viernes'],
        'exercise_id' => $exercise_36->id,
        'is_correct' => true,
      ];
      $option77 = [
        'en' => ['option' => 'Wednesday'],
        'fr' => ['option' => 'Mercredi'],
        'es' => ['option' => 'Miércoles'],
        'exercise_id' => $exercise_36->id,
        'is_correct' => false,
      ];
      $option78 = [
        'en' => ['option' => 'Sunday'],
        'fr' => ['option' => 'Dimanche'],
        'es' => ['option' => 'Domingo'],
        'exercise_id' => $exercise_36->id,
        'is_correct' => false,
      ];

      $option79 = [
        'en' => ['option' => 'Sunday'],
        'fr' => ['option' => 'Dimanche'],
        'es' => ['option' => 'Domingo'],
        'exercise_id' => $exercise_37->id,
        'is_correct' => true,
      ];
      $option80 = [
        'en' => ['option' => 'Wednesday'],
        'fr' => ['option' => 'Mercredi'],
        'es' => ['option' => 'Miércoles'],
        'exercise_id' => $exercise_37->id,
        'is_correct' => false,
      ];
      $option81 = [
        'en' => ['option' => 'Saturday'],
        'fr' => ['option' => 'Samedi'],
        'es' => ['option' => 'Sábado'],
        'exercise_id' => $exercise_37->id,
        'is_correct' => false,
      ];

      $option82 = [
        'en' => ['option' => 'Saturday'],
        'fr' => ['option' => 'Samedi'],
        'es' => ['option' => 'Sábado'],
        'exercise_id' => $exercise_38->id,
        'is_correct' => true,
      ];
      $option83 = [
        'en' => ['option' => 'Wednesday'],
        'fr' => ['option' => 'Mercredi'],
        'es' => ['option' => 'Miércoles'],
        'exercise_id' => $exercise_38->id,
        'is_correct' => false,
      ];
      $option84 = [
        'en' => ['option' => 'Thursday'],
        'fr' => ['option' => 'Jeudi'],
        'es' => ['option' => 'Jueves'],
        'exercise_id' => $exercise_38->id,
        'is_correct' => false,
      ];

      $option85 = [
        'en' => ['word' => 'Saturday, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday'],
        'fr' => ['word' => 'Samedi, Dimanche, Lundi, Mardi, Mercredi, Jeudi, Vendredi'],
        'es' => ['word' => 'Sábado, Domingo, Lunes, Martes, Miércoles, Jueves, Viernes'],
        'exercise_id' => $exercise_39->id,
        'is_correct' => true,
      ];
      $option86 = [
        'en' => ['word' => 'Thursday, Wednesday, Sunday, Monday, Saturday, Tuesday, Friday'],
        'fr' => ['word' => 'Jeudi, Mercredi, Dimanche, Lundi, Samedi, Mardi, Vendredi'],
        'es' => ['word' => 'Jueves, Miércoles, Domingo, Lunes, Sábado, Martes, Viernes'],
        'exercise_id' => $exercise_39->id,
        'is_correct' => false,
      ];
      $option87 = [
        'en' => ['word' => 'Friday, Thursday, Wednesday, Tuesday, Sunday, Monday, Saturday'],
        'fr' => ['word' => 'Vendredi, Jeudi, Mercredi, Mardi, Dimanche, Lundi, Samedi'],
        'es' => ['word' => 'Viernes, Jueves, Miércoles, Martes, Domingo, Lunes, Sábado'],
        'exercise_id' => $exercise_39->id,
        'is_correct' => false,
      ];


      $option_1 = Option::create($option1);
      $option_2 = Option::create($option2);
      $option_3 = Option::create($option3);
      $option_4 = Option::create($option4);
      $option_5 = Option::create($option5);
      $option_6 = Option::create($option6);
      $option_7 = Option::create($option7);
      $option_8 = Option::create($option8);
      $option_9 = Option::create($option9);
      $option_10 = Option::create($option10);
      $option_11 = Option::create($option11);
      $option_12 = Option::create($option12);
      $option_13 = Option::create($option13);
      $option_14 = Option::create($option14);
      $option_15 = Option::create($option15);
      $option_16 = Option::create($option16);
      $option_17 = Option::create($option17);
      $option_18 = Option::create($option18);
      $option_19 = Option::create($option19);
      $option_20 = Option::create($option20);
      $option_21 = Option::create($option21);
      $option_22 = Option::create($option22);
      $option_23 = Option::create($option23);
      $option_24 = Option::create($option24);
      $option_25 = Option::create($option25);
      $option_26 = Option::create($option26);
      $option_27 = Option::create($option27);
      $option_28 = Option::create($option28);
      $option_29 = Option::create($option29);
      $option_30 = Option::create($option30);
      $option_31 = Option::create($option31);
      $option_32 = Option::create($option32);
      $option_33 = Option::create($option33);
      $option_34 = Option::create($option34);
      $option_35 = Option::create($option35);
      $option_36 = Option::create($option36);
      $option_37 = Option::create($option37);
      $option_38 = Option::create($option38);
      $option_39 = Option::create($option39);
      $option_40 = Option::create($option40);
      $option_41 = Option::create($option41);
      $option_42 = Option::create($option42);
      $option_43 = Option::create($option43);
      $option_44 = Option::create($option44);
      $option_45 = Option::create($option45);
      $option_46 = Option::create($option46);
      $option_47 = Option::create($option47);
      $option_48 = Option::create($option48);
      $option_49 = Option::create($option49);
      $option_50 = Option::create($option50);
      $option_51 = Option::create($option51);
      $option_52 = Option::create($option52);
      $option_53 = Option::create($option53);
      $option_54 = Option::create($option54);
      $option_55 = Option::create($option55);
      $option_56 = Option::create($option56);
      $option_57 = Option::create($option57);
      $option_58 = Option::create($option58);
      $option_59 = Option::create($option59);
      $option_60 = Option::create($option60);
      $option_61 = Option::create($option61);
      $option_62 = Option::create($option62);
      $option_63 = Option::create($option63);
      $option_64 = Option::create($option64);
      $option_65 = Option::create($option65);
      $option_66 = Option::create($option66);
      $option_67 = Option::create($option67);
      $option_68 = Option::create($option68);
      $option_69 = Option::create($option69);
      $option_70 = Option::create($option70);
      $option_71 = Option::create($option71);
      $option_72 = Option::create($option72);
      $option_73 = Option::create($option73);
      $option_74 = Option::create($option74);
      $option_75 = Option::create($option75);
      $option_76 = Option::create($option76);
      $option_77 = Option::create($option77);
      $option_78 = Option::create($option78);
      $option_78 = Option::create($option79);
      $option_80 = Option::create($option80);
      $option_81 = Option::create($option81);
      $option_82 = Option::create($option82);
      $option_83 = Option::create($option83);
      $option_84 = Option::create($option84);
      $option_85 = Option::create($option85);
      $option_86 = Option::create($option86);
      $option_87 = Option::create($option87);

  $grade1 = [
    'order' => 1,
    'en' => ['name' => 'Newbie'],
    'fr' => ['name' => 'Débutant'],
    'es' => ['name' => 'Novato']
  ];
  $grade2 = [
    'order' => 2,
    'en' => ['name' => 'Junior'],
    'fr' => ['name' => 'Junior'],
    'es' => ['name' => 'Júnior'],
  ];
  $grade3 = [
    'order' => 3,
    'en' => ['name' => 'Experienced'],
    'fr' => ['name' => 'Expérimenté'],
    'es' => ['name' => 'Experimentado'],
  ];
  $grade4 = [
    'order' => 4,
    'en' => ['name' => 'Intermediate'],
    'fr' => ['name' => 'Intermédiaire'],
    'es' => ['name' => 'Intermedio'],
  ];
  $grade5 = [
    'order' => 5,
    'en' => ['name' => 'Expert'],
    'fr' => ['name' => 'Expert'],
    'es' => ['name' => 'Experto'],
  ];
  $grade6 = [
    'order' => 6,
    'en' => ['name' => 'Senior'],
    'fr' => ['name' => 'Sénior'],
    'es' => ['name' => 'Sénior'],
  ];
  $grade7 = [
    'order' => 7,
    'en' => ['name' => 'Specialized'],
    'fr' => ['name' => 'Spécialisé'],
    'es' => ['name' => 'Especializado'],
  ];

  $grade_1 = Grade::create($grade1);
  $grade_2 = Grade::create($grade2);
  $grade_3 = Grade::create($grade3);
  $grade_4 = Grade::create($grade4);
  $grade_5 = Grade::create($grade5);
  $grade_6 = Grade::create($grade6);
  $grade_7 = Grade::create($grade7);

  $phase1 = [
    'order' => 1,
    'grade_id' => $grade_1->id,
    'is_final' => 0,
    'en' => ['name' => '1st'],
    'fr' => ['name' => '1st'],
    'es' => ['name' => '1st']
  ];
  $phase2 = [
    'order' => 2,
    'grade_id' => $grade_1->id,
    'is_final' => 0,
    'en' => ['name' => '2nd'],
    'fr' => ['name' => '2nd'],
    'es' => ['name' => '2nd'],
  ];
  $phase3 = [
    'order' => 3,
    'grade_id' => $grade_1->id,
    'is_final' => 0,
    'en' => ['name' => '3rd'],
    'fr' => ['name' => '3rd'],
    'es' => ['name' => '3rd'],
  ];
  $phase4 = [
    'order' => 4,
    'grade_id' => $grade_1->id,
    'is_final' => 1,
    'en' => ['name' => '4th'],
    'fr' => ['name' => '4th'],
    'es' => ['name' => '4th'],
  ];
  $phase5 = [
    'order' => 1,
    'grade_id' => $grade_2->id,
    'is_final' => 0,
    'en' => ['name' => '1st'],
    'fr' => ['name' => '1st'],
    'es' => ['name' => '1st'],
  ];
  $phase6 = [
    'order' => 2,
    'grade_id' => $grade_2->id,
    'is+final' => 0,
    'en' => ['name' => '2nd'],
    'fr' => ['name' => '2nd'],
    'es' => ['name' => '2nd'],
  ];
  $phase7 = [
    'order' => 3,
    'grade_id' => $grade_2->id,
    'is_final' => 1,
    'en' => ['name' => '3rd'],
    'fr' => ['name' => '3rd'],
    'es' => ['name' => '3rd'],
  ];
  $phase8 = [
    'order' => 1,
    'grade_id' => $grade_3->id,
    'is_final' => 0,
    'en' => ['name' => '1st'],
    'fr' => ['name' => '1st'],
    'es' => ['name' => '1st'],
  ];
  $phase9 = [
    'order' => 2,
    'grade_id' => $grade_3->id,
    'is_final' => 1,
    'en' => ['name' => '2nd'],
    'fr' => ['name' => '2nd'],
    'es' => ['name' => '2nd'],
  ];

  $phase_1 = Phase::create($phase1);
  $phase_2 = Phase::create($phase2);
  $phase_3 = Phase::create($phase3);
  $phase_4 = Phase::create($phase4);
  $phase_5 = Phase::create($phase5);
  $phase_6 = Phase::create($phase6);
  $phase_7 = Phase::create($phase7);
  $phase_8 = Phase::create($phase7);
  $phase_9 = Phase::create($phase7);

  $user = User::create([
    'name' => 'Mustafa',
    'email' => 'mustafa@example.com',
    'password' => Hash::make('123456'),
    'user_lang' => 'en',
    'dest_lang' => 'es',
    'grade_id' => $grade_1->id,
    'phase_id' => $phase_1->id,
  ]);

  $phase_1->exercises()->sync([
        $exercise_1->id => ['expected_time'=> 10],
        $exercise_2->id => ['expected_time'=> 15],
        $exercise_3->id => ['expected_time'=> 17],
        $exercise_4->id => ['expected_time'=> 17],
        $exercise_5->id => ['expected_time'=> 17],
        $exercise_6->id => ['expected_time'=> 17],
    ], false);

  $phase_2->exercises()->sync([
        $exercise_7->id => ['expected_time'=> 10],
        $exercise_8->id => ['expected_time'=> 10],
        $exercise_9->id => ['expected_time'=> 10],
        $exercise_10->id => ['expected_time'=> 10],
        $exercise_11->id => ['expected_time'=> 10],
    ], false);

  $phase_3->exercises()->sync([
        $exercise_12->id => ['expected_time'=> 10],
        $exercise_13->id => ['expected_time'=> 15],
        $exercise_14->id => ['expected_time'=> 17],
        $exercise_15->id => ['expected_time'=> 17],
        $exercise_16->id => ['expected_time'=> 17],
    ], false);

  $phase_4->exercises()->sync([
        $exercise_17->id => ['expected_time'=> 10],
        $exercise_18->id => ['expected_time'=> 10],
        $exercise_19->id => ['expected_time'=> 10],
        $exercise_20->id => ['expected_time'=> 10],
        $exercise_21->id => ['expected_time'=> 10],
    ], false);

  $phase_5->exercises()->sync([
        $exercise_22->id => ['expected_time'=> 10],
        $exercise_23->id => ['expected_time'=> 15],
        $exercise_24->id => ['expected_time'=> 17],
        $exercise_25->id => ['expected_time'=> 17],
        $exercise_26->id => ['expected_time'=> 17],
    ], false);

  $phase_6->exercises()->sync([
        $exercise_27->id => ['expected_time'=> 10],
        $exercise_28->id => ['expected_time'=> 10],
        $exercise_29->id => ['expected_time'=> 10],
        $exercise_30->id => ['expected_time'=> 10],
        $exercise_31->id => ['expected_time'=> 10],
        $exercise_32->id => ['expected_time'=> 10],
    ], false);

  $phase_7->exercises()->sync([
        $exercise_33->id => ['expected_time'=> 10],
        $exercise_34->id => ['expected_time'=> 15],
        $exercise_35->id => ['expected_time'=> 17],
    ], false);

  $phase_8->exercises()->sync([
        $exercise_36->id => ['expected_time'=> 10]
    ], false);

  $phase_9->exercises()->sync([
        $exercise_37->id => ['expected_time'=> 10],
        $exercise_38->id => ['expected_time'=> 15],
        $exercise_39->id => ['expected_time'=> 17]
    ], false);

  $ids = $user->phase->exercises()->newPivotQuery()->get()->pluck('id');
  foreach($ids as $id)
  {
    Advance::create([
      'exercise_phase_id' => $id,
      'user_id' => $user->id,
    ]);
  }

  return "success";
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/phase/check/{phase}', [HomeController::class, 'makeSure'])->middleware('auth')->name('make.sure');
Route::get('/phase/{phase}', [HomeController::class, 'showPhase'])->middleware('auth')->name('show.phase');
Route::post('/answer-question', [HomeController::class, 'answerQuestion'])->middleware('auth')->name('answer.question');
Route::post('/erase/{phase}', [HomeController::class, 'erasePhase'])->middleware('auth')->name('erase.Phase');
Route::get('/complete', [HomeController::class, 'complete'])->middleware('auth')->name('complete');
