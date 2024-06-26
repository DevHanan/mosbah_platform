<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankQuestionRequest;
use App\Models\BankGroup;
use App\Models\BankQuestion;
use App\Services\ImageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Toastr;
use Illuminate\View\View;

class QuestionsController extends Controller
{

    public function __construct()
    {
        $this->title = trans('admin.bankQuestions.title');
        $this->route = 'admin.bank-groups.bank-questions';
        $this->view = 'admin.bankQuestions';
        $this->path = 'bankQuestions';
        $this->access = 'bankQuestions';
        // $this->middleware('permission:bankQuestions-create', ['only' => ['create','store']]);
        // $this->middleware('permission:bankQuestions-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:bankQuestions-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:bankQuestions-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request, $bank_group_id)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['bankgroup'] = BankGroup::find($bank_group_id);
        $data['rows'] = BankQuestion::where(function ($q) use ($request) {
            if ($request->title)
                $q->Where('title', 'like', '%' . $request->title  . '%');
        })->where('bank_group_id', $bank_group_id)->paginate(10);
        return $data['rows'];
        return view($this->view . '.index', $data);
    }

    public function create(BankQuestion $question, $ban_Group_id)
    {
        $data['title'] = trans('admin.bankQuestions.add');
        $data['route'] = $this->route;
        $data['bankgroup'] = BankGroup::find($ban_Group_id);
        return view($this->view . '.create', $data);
    }
    public function store(Request $request)
    {
        $request->merge(['correct_answer'=>$request->correct_answer]);
        $question = BankQuestion::create($request->except(['picture', 'question_declare_img', 'answer_declare_img']));
        if ($request->hasFile('picture')) {
            $thumbnail = $request->picture;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/bankquestions/'), $filename);
            $question->picture = 'uploads/bankquestions/' . $filename;
            $question->save();
        }

        if ($request->hasFile('question_declare_img')) {
            $thumbnail = $request->question_declare_img;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/bankquestions/'), $filename);
            $question->question_declare_img = 'uploads/bankquestions/' . $filename;
            $question->save();
        }

        if ($request->hasFile('answer_declare_img')) {
            $thumbnail = $request->answer_declare_img;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/bankquestions/'), $filename);
            $question->answer_declare_img = 'uploads/bankquestions/' . $filename;
            $question->save();
        }
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect("admin/bank-groups/" . $request->bank_group_id . "/bank-questions");
    }


    public function show($id)
    {
       $question = BankQuestion::find($id);
        if ($track)
            return $this->okApiResponse(new TrackResource($track), __('Track loades successfully'));
        else
            return $this->notFoundApiResponse([], __('Data Not Found'));
    }

    public function edit($ban_Group_id, $id)
    {
     
        $data['title'] = trans('admin.bankQuestions.edit');
        $data['route'] = $this->route;
        $data['bankgroup'] = BankGroup::find($ban_Group_id);
        $data['row'] = BankQuestion::find($id);
        return view($this->view . '.edit', $data);
    }

    public function update(Request $request, $ban_Group_id)
    {
       $question = BankQuestion::find($request->id);
       $request->merge(['correct_answer'=>$request->correct_answer]);
       $question->update($request->except(['picture', 'question_declare_img', 'answer_declare_img']));
        if ($request->hasFile('picture')) {
            $thumbnail = $request->picture;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/bankquestions/'), $filename);
            $question->picture = 'uploads/bankquestions/' . $filename;
            $question->save();
        }

        if ($request->hasFile('question_declare_img')) {
            $thumbnail = $request->question_declare_img;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/bankquestions/'), $filename);
            $question->question_declare_img = 'uploads/bankquestions/' . $filename;
            $question->save();
        }

        if ($request->hasFile('answer_declare_img')) {
            $thumbnail = $request->answer_declare_img;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/bankquestions/'), $filename);
            $question->answer_declare_img = 'uploads/bankquestions/' . $filename;
            $question->save();
        }

        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect("admin/bank-groups/" . $request->bank_group_id . "/bank-questions");

    }

    public function destroy(Request $request, $ban_Group_id)
    {
       $question = BankQuestion::find($request->id);
        if ($question)
           $question->delete();
        Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
        return redirect()->back();
    }
}
