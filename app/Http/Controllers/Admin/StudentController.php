<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\StudentResource;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Track;
use Illuminate\Http\Request;
use Toastr;


class StudentController extends Controller
{
    use ApiResponse, FileUploader;

    public function __construct()
    {
        $this->title = trans('admin.students.list');
        $this->route = 'admin.students';
        $this->view = 'admin.students';
        $this->path = 'students';
        $this->access = 'students';
        // $this->middleware('permission:students-create', ['only' => ['create','store']]);
        // $this->middleware('permission:students-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:students-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:students-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Student::where(function ($q) use ($request) {
            if ($request->name)
                $q->Where('first_name', 'like', '%' . $request->name  . '%')
                    ->orWhere('last_name', 'like', '%' . $request->name  . '%');
            if ($request->phone)
                $q->Where('phone', $request->phone);
            if ($request->email)
                $q->Where('email', $request->email);
        })->get();
        return view($this->view . '.index', $data);
    }

    public function create(Student $student)
    {
        $data['title'] = trans('admin.students.add');
        $data['route'] = $this->route;
        return view($this->view . '.create', $data);
    }

    public function store(StudentRequest $request)
    {
        $student = Student::create($request->except(['image', 'password']));
        $student->password = Bcrypt($request->password);
        $student->save();
        if($request->hasFile('image')){
              
            $thumbnail = $request->image;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/students/'),$filename);
            $student->image ='public/uploads/students/'.$filename;
            $student->save();
        }

        if($request->track_ids)
        $student->tracks()->attach($request->track_ids);
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.students.index');
    }

    public function show($id)
    {
        $row = Student::find($id);
        $tracks = Track::whereIn('id',$row->tracks()->pluck('track_id')->ToArray())->get();
        $title =  ' تفاصيل الطالب' . ' ' . $row->name;
        return view('admin.students.show',compact('row','title','tracks'));
      
    }



    public function edit($id)
    {
        $data['row'] = Student::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.students.edit');
        return view($this->view . '.edit', $data);
    }
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student = Student::find($request->id);
        if ($request->password) {
            $student->password = Bcrypt($request->password);
            $student->save();
        }
        $student->update($request->except(['image', 'password']));
      
        if($request->hasFile('image')){
              
            $thumbnail = $request->image;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/students/'),$filename);
            $student->image ='public/uploads/students/'.$filename;
            $student->save();
        }
        if($request->track_ids)
        $student->tracks()->attach($request->track_ids);

        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.students.index');
    }


    public function status($id)
    {
        // Set Status
        $user = Student::where('id', $id)->firstOrFail();
        $user->active = $user->active == 0 ? 1 : 0;
        $user->save();
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));

        return redirect()->route('admin.students.index');
    }

    public function destroy(Request $request)
    {

        $student = Student::find($request->id);
        if ($student)
            $student->delete();
        Toastr::success(__('admin.msg_delete_successfully'), __('admin.msg_success'));
        return redirect()->route($this->route . '.index');
    }

    public function ExportToExcel()
    {
        return "success";

        // return Excel::download(new StudentsExport, 'students.xlsx');

    }
}
