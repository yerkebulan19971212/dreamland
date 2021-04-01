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
<div class="container">
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
</div>
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
</body>
</html>
