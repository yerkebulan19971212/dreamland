<html>
<head>
    <title> AdminController</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<br>
<br>
@if (\Session::has('error'))
    <div class="alert alert-error" style="background: #dc3545bd">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
<style>
    .btn{
        text-align: left!important;
    }
</style>
<div class="row">
    <div class="col-md-3">
        <div class="container">
            <div class="btn-group-vertical" style="width: 100%; ">
                <a href="/add-courses/" class="btn btn-secondary" >Курсы</a>
                <a href="/add-programms/" class="btn btn-secondary">Программы</a>
                <a href="/add-country/" class="btn btn-secondary" >Страны</a>
                <a href="/add-courses-programm/" class="btn btn-secondary">Программы по странам</a>
                <a href="/add-courses-cp/" class="btn btn-secondary" >Курсы по странам и программам</a>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="container">
            <h2>Курсы по странам и программам</h2>
    <form method="POST" action="{{action('AdminController@addCP') }}" enctype="multipart/form-data">
        {{csrf_field()}}


        <div  class="form-group">
            <select class="form-control" name="course">
                @foreach($courses as $p)
                    <option value="{{$p->id}}"> {{$p->name}}</option>
                @endforeach
            </select>
        </div>
        <div  class="form-group">
            <select class="form-control" name="course_program">
                @foreach($courses_programs as $p)
                    <option value="{{$p->id}}"> {{$p->country->name}} -> {{ $p->program->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table>
        <tr>
            <th>Курсы</th>
            <th>Программа</th>
            <th>Страна</th>
            <th>Удалить</th>
        </tr>
    {{--    {{$cpc}}--}}
        @foreach($cpc as $i)
            <tr>
                <td>{{$i->course->name}}</td>
                <td>{{$i->course_program->program->name}}</td>
                <td>{{$i->course_program->country->name}}</td>
                <td>
                    <form method="POST" action="{{action('AdminController@deleteCP')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$i->id}}">
                        <input type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        </div>
    </div>
</body>
</html>
