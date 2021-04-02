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

@if (\Session::has('error'))
    <div class="alert alert-error" style="background: #dc3545bd">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
<br>
<br>
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
            <h2>
                Программы по странам
            </h2>
            <form method="POST" action="{{action('AdminController@addCoursesP') }}" enctype="multipart/form-data">
                {{csrf_field()}}


                <div  class="form-group">
                    <select class="form-control" name="programm">
                        @foreach($programs as $p)
                            <option value="{{$p->id}}"> {{$p->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div  class="form-group">
                    <select class="form-control" name="country">
                        @foreach($countries as $p)
                            <option value="{{$p->id}}"> {{$p->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>delete</th>
                </tr>
                @foreach($courses_programs as $i)
                    <tr>
                        <td>{{$i->country->name}}</td>
                        <td>{{$i->program->name}}</td>
                        <td>{{$i->description}}</td>
                        <td>
                            <form method="POST" action="{{action('AdminController@deleteCoursesP')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$i->id}}">
                                <input type="submit">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

</body>
</html>
