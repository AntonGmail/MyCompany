@extends('layouts.app')

@section('title')
    Департамент - {{ $dep->dep_name }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Название департамента</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5> Список должностей ...</h5>
                    <table class="table1" border="1">
                        <tr>
                        <th> Pos_Id</th>
                        <th> Pos_Name</th>
                        <th>Pos_Menage</th>
                        </tr>
                        @foreach ($poss as $pos)
                            <tr>
                                <td>{{ $pos->id }}</td>
                                <td>{{ $pos->pos_name }}</td>
                                <td class="1">
                                    | 
                                    <a href="{{ url('departments/'.$dep->id) }}">Details</a>
                                    |
                                    <a href="">Edit</a>
                                    |
                                    <a href="">Delete</a>
                                    |
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <br>

                    <h5>Список сотрудников</h5>
                    <table id="table11">
                    <br>
                    <tr>
                        <th> Emp_Id</th>
                        <th> Emp_Name</th>
                        <th> Birth_Day</th>
                        <th> Gender</th>
                        <th> Pos_Name</th>
                        <th> Salary</th>
                        <th> Emp_Management</th>
                    </tr>
                    @foreach($emps as $emp)
                    <tr>
                        <td class="centet">{{ $emp['person']->id  }}</td>
                        <td>{{ $emp['person']->emp_name }}</td>
                        <td class="centet">{{ $emp['person']->birth_day }}</td>
                        <td class="centet">{{ $emp['person']->gender }}</td>
                        <td class="centet">{{ $emp['pos_name'] }}</td>
                        <td class="centet">{{ $emp['person']->salary  }}</td>
                        <td class="center">
                        | 
                        <a href="{{ url('departments/'.$dep->id) }}">Details</a>
                        |
                        <a href="">Edit</a>
                        |
                        <a href="">Delete</a>
                        |</td>
                    </tr>

                    @endforeach                   
                    </table>


                    <a href="{{ url('departments') }}"> Look back </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
