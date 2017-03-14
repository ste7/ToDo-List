@extends('templates.default')

@section('content')

    @if(Auth::check())

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create new task</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">New task</h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" class="frm">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Create new task">
                                </div>
                                <input class="btn btn-success" type="submit" value="Save">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>




        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 list-wrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Complete</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($tasks as $task)
                        <tr id="{{ $task->id }}">
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->created_at->format('Y-m-d') }}</td>
                            <td><a class="btn btn-success done" id="{{ $task->id }}" href="#">Complete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection