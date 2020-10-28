<?php

namespace App\Http\Controllers\admin\department;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use App\Models\admin\Department;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $departments = Department::latest()->get();
        return view('admin.pages.department.tables',compact('departments'));
    }

    public function adddepartment()
    {
        return view('admin.pages.department.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departments,name',

        ],
        [
            'name.required' => 'Please fillup this filed',
        ]
        );
        Department::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('message','Department Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deptedit($id)
    {
        $department = Department::find($id);
        return view('admin.pages.department.edit' ,compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departments,name',

        ],
        [
            'name.required' => 'Please fillup this filed',
        ]
        );
        $dept_id = $request->id;
        Department::find($dept_id)->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->Route('department.list')->with('message','Department Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
