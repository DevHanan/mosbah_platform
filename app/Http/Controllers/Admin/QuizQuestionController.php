<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BankQuestion;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use Toastr;


class QuizQuestionController extends Controller
{

    public function __construct()
    {
        $this->title = trans('admin.bankquestions.list');
        $this->route = 'admin.quizzes.questions';
        $this->view = 'admin.quizquestions';
        $this->path = 'quizquestions';
        $this->access = 'quizquestions';
        // $this->middleware('permission:quizquestions-create', ['only' => ['create','store']]);
        // $this->middleware('permission:quizquestions-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:quizquestions-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:quizquestions-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request,$quiz_id)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] =BankQuestion::whereHas('quizzes', function ($query)use($quiz_id) {
            $query->where('quiz_id',$quiz_id);
        })->get();
        $data['quiz'] = Quiz::find($quiz_id);
        return view($this->view.'.index', $data);
    }

    public function create(BankQuestion $question,$quiz_id)
    {
        $data['title'] = trans('admin.questions.add');
        $data['route'] = $this->route;
        $data['quiz'] = Quiz::find($quiz_id);
        return view($this->view .'.create',$data);
    }

    public function store(Request $request)
    {
        $request->merge(['bank_group_id'=>0]);
        $question = BankQuestion::create($request->all());

        QuizQuestion::create([
            'quiz_id'=>$request->quiz_id,
            'question_id' =>$question->id
        ]);
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect("admin/quizzes/".$request->quiz_id."/questions");
     
    }

   

    public function edit($quiz_id,$id)
    {   
        $data['row'] = BankQuestion::find($id);
        $data['route'] = $this->route;
        $data['quiz'] = Quiz::find($quiz_id);
        $data['title'] = trans('admin.questions.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(Request $request)
    {
        $question = BankQuestion::find($request->id);
        $question->update($request->all());
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect("admin/quizzes/".$request->quiz_id."/questions");
    }

    public function destroy (Request $request)
    {
       $question =  QuizQuestion::where('question_id',$request->id)->where('quiz_id',$request->quiz_id)->first();
       if($question)
       $question->delete();
       Toastr::success(__('admin.msg_delete_successfully'), __('admin.msg_success'));
       return redirect()->route($this->route.'.index');    
    }
}
