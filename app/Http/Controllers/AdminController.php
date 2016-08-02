<?php

namespace App\Http\Controllers;

use App\Choice;
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

            $count = 0;

            for($i = 0; $i < $questions->count(); $i++){
                $scores = Score::where('user_id', '=', $user->id)->where('question_id', '=', $questions[$i]->id)->get();
                if($scores->count() <= 0) {
                    Score::create(['user_id' => $user->id,
                        'question_id' => $questions[$i]->id,
                    ]);
                }
                $count += $questions[$i]->choices->first()->count();
            }



            return view('admin.student', compact('title', 'questions', 'user', 'count'));
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

            $scores_user = Score::where('user_id', '=', $user->id)->get();

            return view('admin.qcm', compact('questions', 'user', 'title', 'scores_user'));
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
        $choices = Choice::where('question_id', '=', $id)->get();
        $score = 0;
        foreach($choices as $item){
            //calcul du score
            $rep = !empty($request->input("reponse_{$item->id}")) ? 'true':'false';
            if($item->status == $rep){
                $score += 1;
            }else{
                $score -= 1;
            }
        }
        if($score < 0){
            $score = 0;
        }
        $score_old = Score::where('user_id', '=', Auth::user()->id)->where('question_id', '=', $id)->get();
        foreach($score_old as $item) {
            var_dump('la');
            $item->status_question = 'yes';
            $item->note = $score;
            $item->save();
        }

        return redirect('qcm')->with(['message'=>sprintf('Vous avez obtenu %s point(s)', $score)]);
    }
}
