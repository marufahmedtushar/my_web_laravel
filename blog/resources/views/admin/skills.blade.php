@extends('admin.master')
@section('title','Admin | Skills')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif


    <div class="row">
        <div class="col-md-2">
            <a href="/uploadskill" class=" btn btn-primary mb-3">Upload  A New Skill</a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Skill Name</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($skills as $skill)
                            <tr>
                                <th scope="row">{{$skill->id}}</th>
                                <td>{{$skill->name}}</td>
                                <td><a href="" class=" btn btn-secondary">Edit</a></td>
                                <td><a href="" class=" btn btn-danger">Delete</a></td>

                            </tr>

                        @endforeach


                        </tbody>



                    </table>

                </div>


            </div>



        </div>

    </div>


@endsection
