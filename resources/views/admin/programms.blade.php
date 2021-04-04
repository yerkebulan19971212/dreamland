<html>
<head>
    <title> AdminController</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
</head>
<body>
<br>
<br>

<div class="row">

    @include('admin.sidebar')
    <div class="col-md-9">
        <div class="container">
            <h2>Программы</h2>
    <form method="POST" action="{{action('AdminController@addProgramms') }}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Order</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="order">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="exampleFormControlTextarea1">Example textarea</label>--}}
{{--            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            <script>
                new FroalaEditor('textarea#exampleFormControlTextarea1')
            </script>
<table>
    <tr>
        <th style="max-width: 30px">Order</th>
        <th style="max-width: 50px">Program</th>
        <th style="max-width: 30px">Image</th>
        <th>delete</th>
    </tr>
@foreach($programs as $prorgam)
    <tr>
        <td style="max-width: 30px">{!! $prorgam->order !!}</td>
        <td style="max-width: 50px">{{$prorgam->name}}</td>
        <td style="max-width: 30px"><img style="max-width: 30px" src="{{asset($prorgam->image)}}" alt=""></td>
{{--        <td>{{$prorgam->description}}</td>--}}
        <td>

            <form method="POST" action="{{action('AdminController@delete')}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$prorgam->id}}">
                <input type="submit">
            </form>
        </td>
    </tr>
@endforeach
</table>
        </div></div>
</body>
</html>
