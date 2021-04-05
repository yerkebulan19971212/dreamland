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
        <h2>Страны</h2>
    <form method="POST"
          @if($c)
          action="{{action('AdminController@EditCountriesPost', ['id'=> $c->id]) }}"
          @else
          action="{{action('AdminController@addCountries') }}"
          @endif
          enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            @if(!is_null($c))
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$c->name}}">
            @else
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Order</label>
            @if(!is_null($c))
            <input type="number" class="form-control" id="exampleInputPassword1" name="order" value="{{$c->order}}">
            @else
            <input type="number" class="form-control" id="exampleInputPassword1" name="order">
            @endif
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            @if(!is_null($c))
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required>{!! $c->description !!}</textarea>
            @else
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
        <script>
            new FroalaEditor('textarea#exampleFormControlTextarea1')
        </script>

<table>
    <tr>
        <th style="max-width: 30px">Order</th>
        <th style="max-width: 50px">Country</th>
        <th style="max-width: 30px">Image</th>
        <th>Description</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    @foreach($countries as $countries)
        <tr>
            <td style="max-width: 30px">{!! $countries->order !!}</td>
            <td style="max-width: 50px">{{$countries->name}}</td>
            <td style="max-width: 30px"><img style="max-width: 30px" src="{{asset($countries->image)}}" alt=""></td>
            <td>{!! $countries->description !!}</td>
            <td><a href="{{route('EditCountriesPost', ['id' => $countries->id])}}" >Edit</a></td>
            <td>
                <form method="POST" action="{{action('AdminController@deleteCountries')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$countries->id}}">
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
