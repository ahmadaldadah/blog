@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Categories

                            <a href="categories/create" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Post Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($category as $sadi)
                                <tr>
                                    <td>{{ $sadi->name }}</td>
                                    <td>{{ $sadi->posts_count }}</td>
                                    <td>
                                        <a href="categories/{{$sadi->id}}/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/{{$sadi->id}}" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>

                                @endforeach



                            </tbody>
                        </table>



                    </div>
                </div>
            </div>

    </div>
@endsection
