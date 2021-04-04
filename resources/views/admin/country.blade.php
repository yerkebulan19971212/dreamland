<html>
<head>
    <title> AdminController</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<br>
<br>

<div class="row">
 @include('admin.sidebar')
<div class="col-md-9">
    <div class="container">
        <h2>Страны</h2>
    <form method="POST" action="{{action('AdminController@addCountries') }}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
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
{{--            <label for="exampleFormControlTextarea1">Description</label>--}}
{{--            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>--}}
{{--        </div>--}}
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
{{--        <th>Message</th>--}}
        <th>delete</th>
    </tr>
    @foreach($countries as $countries)
        <tr>
            <td style="max-width: 30px">{!! $countries->order !!}</td>
            <td style="max-width: 50px">{{$countries->name}}</td>
            <td style="max-width: 30px"><img style="max-width: 30px" src="{{asset($countries->image)}}" alt=""></td>
{{--            <td>{!! $countries->description !!}</td>--}}
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
