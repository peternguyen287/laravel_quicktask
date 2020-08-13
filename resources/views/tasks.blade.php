@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

    <!-- New Task Form -->
        <form action="{{ route('task.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">{{ trans('messages.task') }}</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> {{ trans('messages.add') }}
                    </button>
                </div>
            </div>
        </form>

        @if (count($tasks) > 0)
            <div class="container">
                <div class="panel-heading">
                    {{ trans('messages.current_tasks') }}
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                        <th>{{ trans('messages.task') }}</th>
                        <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button id="deleteTask" class="btn btn-danger">{{ trans('messages.delete_task') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
