<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(
            [
                [
                    'title' => 'question1',
                    'content' => 'Quelle est la valeur de 2 au cube ?',
                    'class_level' => 'first_class',
                ],
                [
                    'title' => 'question2',
                    'content' => 'On considére la fonction f(x) = (2x–3)²–16.
                    Après développement on obtient :',
                    'class_level' => 'first_class',
                ],
                [
                    'title' => 'question3',
                    'content' => 'On considére la fonction f(x) = (2x–3)²–16.
                    Quel est l\'image de 0 par f ?',
                    'class_level' => 'first_class',
                ],
                [
                    'title' => 'question4',
                    'content' => '2x+5 = 0 équivalent à :',
                    'class_level' => 'first_class',
                ],
                [
                    'title' => 'question5',
                    'content' => 'f(x) = 2x + 1',
                    'class_level' => 'first_class',
                ],
                [
                    'title' => 'question6',
                    'content' => 'Les deux tiers des 96 élèves sont demi-pensionnaires.
                    Donc le nombre de demi-pensionnaires est de :',
                    'class_level' => 'final_class',
                ],
                [
                    'title' => 'question7',
                    'content' => 'Parmi les points suivants, quel est celui qui se trouve sur la droite d\'équation y = 2x - 1 ?',
                    'class_level' => 'final_class',
                ],
                [
                    'title' => 'question8',
                    'content' => 'Quel est le coefficient directeur de la droite D passant par les points A(1,2) et B(4,3) ?',
                    'class_level' => 'final_class',
                ],
                [
                    'title' => 'question9',
                    'content' => '7 élèves sur 30 font du latin. Le pourcentage d\'élèves à faire du latin est approximativement de',
                    'class_level' => 'final_class',
                ],
                [
                    'title' => 'question10',
                    'content' => 'EDF est un triangle rectangle en D. Quelle est l\'égalité exacte ?',
                    'class_level' => 'final_class',
                ],
            ]
        );
    }
}
