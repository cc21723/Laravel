<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd('rrrrrrrrr');
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('create');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 簡單測試: 印出表單資料
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('student.edit',['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function excel()
    {
        dd('students excel ok');
        // return view('student.excel');
    }

    public function test()
    {
        // dd('students excel ok');

        $data = 'test ok';

        $data = [
            [
                'id'=>1,
                'name'=>'amy'
            ],
            [
                'id'=>2,
                'name'=>'bob'
            ],
            [
                'id'=>3,
                'name'=>'cat'
            ],
        ];
        
        return view('student.test', ['data' => $data]);
    }
}
