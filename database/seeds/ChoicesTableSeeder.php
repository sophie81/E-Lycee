<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert(
            [
                [
                    'question_id' => '1',
                    'content' => '9',
                    'status' => 'false',
                ],
                [
                    'question_id' => '1',
                    'content' => '8',
                    'status' => 'true',
                ],
                [
                    'question_id' => '1',
                    'content' => '6',
                    'status' => 'false',
                ],
                [
                    'question_id' => '2',
                    'content' => 'f(x) = 4x²–25',
                    'status' => 'false',
                ],
                [
                    'question_id' => '2',
                    'content' => 'f(x) = 2x²–12x–7',
                    'status' => 'false',
                ],
                [
                    'question_id' => '2',
                    'content' => 'f(x) = 4x²–12x–7',
                    'status' => 'true',
                ],
                [
                    'question_id' => '3',
                    'content' => '16',
                    'status' => 'false',
                ],
                [
                    'question_id' => '3',
                    'content' => '–7',
                    'status' => 'true',
                ],
                [
                    'question_id' => '3',
                    'content' => '-15',
                    'status' => 'false',
                ],
                [
                    'question_id' => '3',
                    'content' => '-16',
                    'status' => 'false',
                ],
                [
                    'question_id' => '4',
                    'content' => '2x = –5',
                    'status' => 'true',
                ],
                [
                    'question_id' => '4',
                    'content' => '2x = 5',
                    'status' => 'false',
                ],
                [
                    'question_id' => '4',
                    'content' => 'x+5 = –2',
                    'status' => 'false',
                ],
                [
                    'question_id' => '5',
                    'content' => 'est une fonction affine de coefficient directeur 2 et d\'ordonnée à l\'origine 1',
                    'status' => 'true',
                ],
                [
                    'question_id' => '5',
                    'content' => 'est une fonction affine de coefficient directeur 1 et d\'ordonnée à l\'origine 2',
                    'status' => 'false',
                ],
                [
                    'question_id' => '5',
                    'content' => 'n\'est pas une fonction affine',
                    'status' => 'false',
                ],
                [
                    'question_id' => '6',
                    'content' => '54',
                    'status' => 'false',
                ],
                [
                    'question_id' => '6',
                    'content' => '64',
                    'status' => 'true',
                ],
                [
                    'question_id' => '6',
                    'content' => '72',
                    'status' => 'false',
                ],
                [
                    'question_id' => '7',
                    'content' => 'E(-50, -101)',
                    'status' => 'true',
                ],
                [
                    'question_id' => '7',
                    'content' => 'B(28, 74)',
                    'status' => 'false',
                ],
                [
                    'question_id' => '7',
                    'content' => 'H(25, 51)',
                    'status' => 'false',
                ],
                [
                    'question_id' => '7',
                    'content' => 'J(98, 45)',
                    'status' => 'false',
                ],
                [
                    'question_id' => '8',
                    'content' => '1',
                    'status' => 'false',
                ],
                [
                    'question_id' => '8',
                    'content' => '1/3',
                    'status' => 'true',
                ],
                [
                    'question_id' => '8',
                    'content' => '3',
                    'status' => 'false',
                ],
                [
                    'question_id' => '9',
                    'content' => '19',
                    'status' => 'false',
                ],
                [
                    'question_id' => '9',
                    'content' => '23',
                    'status' => 'true',
                ],
                [
                    'question_id' => '9',
                    'content' => '27',
                    'status' => 'false',
                ],
                [
                    'question_id' => '9',
                    'content' => '32',
                    'status' => 'false',
                ],
                [
                    'question_id' => '10',
                    'content' => 'EF² = ED² + DF²',
                    'status' => 'true',
                ],
                [
                    'question_id' => '10',
                    'content' => 'ED² = EF² + FD²',
                    'status' => 'false',
                ],
                [
                    'question_id' => '10',
                    'content' => 'FD² = FE² + ED²',
                    'status' => 'false',
                ],



            ]
        );
    }
}
