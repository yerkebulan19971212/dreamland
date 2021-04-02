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
                <a href="/logout/" class="btn btn-secondary" >Logout</a>

            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="container">
            <h2>Курсы</h2>
    <form method="POST" action="{{action('AdminController@addCourses') }}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="exampleInputPassword1">color</label>--}}
{{--            <input type="text" class="form-control" id="exampleInputPassword1" name="color">--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
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
    @foreach($courses as $i)
        <tr>
            <td>{{$i->name}}</td>
            <td>{{$i->image}}</td>
            <td>{{$i->description}}</td>
            <td>
                <form method="POST" action="{{action('AdminController@delete')}}">
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
</body>
</html>
