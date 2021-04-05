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
    <form method="POST"
          @if(!is_null($p))
          action="{{action('AdminController@EditProgramPost', ['id'=> $p->id]) }}"
          @else
          action="{{action('AdminController@addProgramms') }}"
          @endif
          enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            @if(!is_null($p))
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$p->name}}">
            @else
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">sub-name</label>
            @if(!is_null($p))
            <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{$p->description}}">
            @else
            <input type="text" class="form-control" id="exampleInputEmail1" name="description">
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Order</label>
            @if(!is_null($p))
            <input type="number" class="form-control" id="exampleInputPassword1" name="order" value="{{$p->order}}">
            @else
            <input type="number" class="form-control" id="exampleInputPassword1" name="order">
            @endif
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            @if(!is_null($p))
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            @else
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            @endif
        </div>
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
        <th style="max-width: 30px">Edit</th>
        <th>delete</th>
    </tr>
@foreach($programs as $prorgam)
    <tr>
        <td style="max-width: 30px">{!! $prorgam->order !!}</td>
        <td style="max-width: 50px">{{$prorgam->name}}</td>
        <td style="max-width: 30px"><img style="max-width: 30px" src="{{asset($prorgam->image)}}" alt=""></td>
        <td><a href="{{route('EditProgram', ['id' => $prorgam->id])}}" >Edit</a></td>
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
