<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankGroupRequest;
use App\Models\BankGroup;
use App\Models\Course;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Toastr;

class QuestionBankGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function __construct()
    {
        $this->title = trans('admin.bankgroups.title');
        $this->route = 'admin.bank-groups';
        $this->view = 'admin.questions_bank.groups';
        $this->path = 'bank-groups';
        $this->access = 'bank-groups';
        // $this->middleware('permission:bank-groups-create', ['only' => ['create','store']]);
        // $this->middleware('permission:bank-groups-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:bank-groups-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:bank-groups-delete',   ['only' => ['delete']]);
    }
    public function index()
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = BankGroup::with('course')->withCount('questions')->paginate(10);
        
        return view($this->view.'.index', $data);
    }

    public function create(BankGroup $track)
    {
        $data['title'] = trans('admin.bankgroups.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BankGroupRequest $request
     * @return RedirectResponse
     */
    public function store(BankGroupRequest $request)
    {
        $active = $request->active ? '1' : '0';
        $request->merge(['active' => $active]);
        BankGroup::create($request->all());
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.bank-groups.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BankGroup $group
     * @return Application|Factory|View|void
     */
    public function edit($id)
    {
        $data['row'] = BankGroup::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.bankgroups.edit');
        return view($this->view.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BankGroupRequest $request
     * @param BankGroup $group
     * @return RedirectResponse
     */
    public function update(BankGroupRequest $request, BankGroup $group)
    {
        $active = $request->active ? '1' : '0';
        $request->merge(['active' => $active]);
        $group->update($request->all());
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.bank-groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $group_id
     * @return RedirectResponse
     */
    public function destroy($group_id)
    {
        BankGroup::destroy($group_id);
        Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
        return redirect()->route($this->route.'.index');
    }
}
