<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Question;
use App\Score;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Auth;

class AdminController extends Controller
{
    private $paginate = 10;

    public function teacher(){
        if (Auth::user()->role == 'teacher') {
            $title = 'Post';
            $posts = Post::with('comments', 'user')
                ->orderBy('date', 'desc')
                ->take(3)
                ->get();
            $questions = Question::with('choices')
                ->orderBy('id', 'desc')
                ->get();

            $comments = Comment::with('post')
                ->get();

            return view('admin.teacher', compact('posts', 'questions', 'comments', 'title'));

        }else{
            return redirect('login');
        }
    }

    public function student(){
        if (Auth::user()->role == 'first_class' || Auth::user()->role == 'final_class') {
            $title = 'Admin Student';

            $questions = Question::with('choices', 'score')
                ->where('class_level', '=', Auth::user()->role)
                ->orderBy('id', 'desc')
                ->get();

            $user = User::findOrFail(Auth::user()->id);

            for($i = 0; $i < $questions->count(); $i++){
                Score::create(['user_id' => $user->id,
                    'question_id' => $questions[$i]->id,
                ]);
            }

            return view('admin.student', compact('title', 'questions', 'user'));
        }else{
            return redirect('login');
        }
    }

    public function qcm(){
        if (Auth::user()->role == 'first_class' || Auth::user()->role == 'final_class') {

            $title = 'Questionnaire';

            $questions = Question::with('choices', 'score')
                ->where('class_level', '=', Auth::user()->role)
                ->orderBy('id', 'desc')
                ->get();

            $user = User::findOrFail(Auth::user()->id);

            return view('admin.qcm', compact('questions', 'user', 'title'));
        }else{
            return redirect('login');
        }
    }

    public function qcmEdit($id){

        $question = Question::findOrFail($id);

        return view('admin.qcmEdit', compact('question'));
    }

    public function qcmUpdate(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        for($i = 0; $i < $question->choices->count(); $i++){
            //calcul du score
           $score = 0;
        }


        return redirect('qcm')->with(['message'=>sprintf('Vous avez obtenu %s point(s)', $score)]);
    }
}
