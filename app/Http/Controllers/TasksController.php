<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use __;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        print_r(__::get(['foo' => ['bar' => 'ter']], 'foo.bar'));die;
//        print_r(__::append([1, 2, 3], 4));die;
//        echo 'here';die;
//        $tasks = app\Models\Order::paginate(2);
        $tasks = app\Task::paginate(2);
        $tasks->setPath('tasks');
        return view('tasks.index')->withTasks($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        app\Task::create($input);  // input data from form to db table

        \Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = app\Task::findOrFail($id);
//        $task = app\Models\Order::findOrFail($id);
//        print_r($task);
        return view('tasks.show')->withTask($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        print_r($id);die;
        $task = app\Task::findOrFail($id);
//        print_r($task);die;
        return view('tasks.edit')->withTask($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = app\Task::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input)->save();

        \Session::flash('flash_message', 'Task successfully Updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = app\Task::findOrFail($id);

        $task->delete();

        \Session::flash('flash_message', 'Task successfully deleted!');

        return redirect()->route('tasks.index');
    }
}
