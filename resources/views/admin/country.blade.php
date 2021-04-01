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
    <form method="POST" action="{{action('AdminController@addCountries') }}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">color</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="color">
        </div>
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
</div>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>delete</th>
    </tr>
    @foreach($countries as $countries)
        <tr>
            <td>{{$countries->name}}</td>
            <td>{{$countries->color}}</td>
            <td>{{$countries->image}}</td>
            <td>{{$countries->description}}</td>
            <td>
                <form method="POST" action="{{action('AdminController@deleteCountries')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$countries->id}}">
                    <input type="submit">
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
