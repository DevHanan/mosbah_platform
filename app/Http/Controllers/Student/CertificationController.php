<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function __construct()
    {
        $this->title = 'list certifications';
        $this->route = 'student.certifications';
        $this->view = 'student.certifications';
        $this->path = 'certifications';
        $this->access = 'certifications';
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Certificate::where('student_id',auth()->guard('students-login')->user()->id)->where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->get();
        return view($this->view.'.index', $data);
    }

    
    public function studentCertificate(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = 'Student Certifications';
        $data['rows'] = Certificate::whereNull('course_id')->where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->get();
        return view($this->view.'.index', $data);
    }

    public function create(Certificate $certificate)
    {
        $data['title'] = 'Add certifications ';
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(Request $request)
    {
        $certificate = Certificate::create($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'certifications';
            $attach = 'image';
            $certificate->image = 'uploads/certifications/'.$this->uploadMedia($request, $attach, $directory);
            $certificate->save();
        }
        Toastr::success(__('msg_updated_successfully'), __('msg_success'));
        return redirect()->route('admin.certifications.index');
    }


    public function show($id){
        $certificate = Certification::find($id);
        if($certificate)
        return $this->okApiResponse(new CountryResource($certificate), __('Country loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Certification::find($id);
        $data['route'] = $this->route;
        $data['title'] = 'edit Country';
        return view($this->view.'.edit',$data);
    }

    public function update(CountryRequest $request)
    {
        $certificate = Certification::find($request->id);
        $certificate->update($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'certifications';
            $attach = 'image';
            $certificate->image = 'uploads/certifications/'.$this->uploadMedia($request, $attach, $directory);
            $certificate->save();
        }
        Toastr::success(__('msg_updated_successfully'), __('msg_success'));
        return redirect()->route('admin.certifications.index');    }

    public function destroy (Request $request)
    {
        $certificate = Certification::find($request->id);
        if ($certificate)
            $certificate->delete();

            Toastr::success(__('msg_delete_successfully'), __('msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
