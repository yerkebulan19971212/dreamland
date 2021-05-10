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
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
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
    @include('admin.sidebar')

    <div class="col-md-9">
        <div class="container">
            @if (\Session::has('error'))
                <div class="alert alert-error" style="background: #dc3545bd">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif
                <br>
            <h2>
                Программы по странам
            </h2>
            <form method="POST"
                  @if($c)
                  action="{{action('AdminController@EditCPPost', ['id'=> $c->id]) }}"
                  @else
                  action="{{action('AdminController@addCoursesP') }}"
                  @endif
                  enctype="multipart/form-data">
                {{csrf_field()}}


                <div  class="form-group">
                    @if($c)
                        <select class="form-control" name="programm">
                            @foreach($programs as $p)
                                <option value="{{$p->id}}"
                                        @if($c->id == $p->id)
                                        selected
                                    @endif
                                > {{$p->name}}</option>
                            @endforeach
                        </select>
                    @else
                        <select class="form-control" name="programm">
                            @foreach($programs as $p)
                                <option value="{{$p->id}}"> {{$p->name}}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
                <div  class="form-group">
                    @if($c)
                        <select class="form-control" name="country">
                            @foreach($countries as $p)
                                <option value="{{$p->id}}"
                                        @if($c->id == $p->id)
                                            selected
                                        @endif
                                > {{$p->name}}</option>
                            @endforeach
                        </select>
                    @else
                        <select class="form-control" name="country">
                            @foreach($countries as $p)
                                <option value="{{$p->id}}"> {{$p->name}}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" >prices from</label>
                    @if($c)
                    <input type="number" class="form-control" id="exampleFormControlTextarea1" rows="3" name="price" value="{{$c->price}}" required>
                    @else
                    <input type="number" class="form-control" id="exampleFormControlTextarea1" rows="3" name="price" required>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" >Description</label>
                    @if($c)
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required>{!! $c->description !!}</textarea>
                    @else
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1" >Description</label>
                    @if($c)
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fdescription" required>{!! $c->full_description !!}</textarea>
                    @else
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fdescription" required></textarea>
                    @endif
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlTextarea1">Full Description</label>--}}
{{--                    @if($c)--}}
{{--                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fulldescription" required>{!! $c->full_description !!}</textarea>--}}
{{--                    @else--}}
{{--                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fulldescription" required></textarea>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
                <script>
                    new FroalaEditor('textarea#exampleFormControlTextarea1')
                </script>
        </div>
            <table>
                <tr>
                    <th>Country</th>
                    <th>Program</th>
                    <th>Description</th>
                    <th>Full description</th>
                    <th>Edit</th>
                    <th>delete</th>
                </tr>
                @foreach($courses_programs as $i)
                    <tr>
                        <td>{{$i->country->name}}</td>
                        <td>{{$i->program->name}}</td>
                        <td>{!! $i->description !!}</td>
                        <td>{!! $i->full_description !!}</td>
                        <td><a href="{{route('EditCPPost', ['id' => $i->id])}}" >Edit</a></td>
                        <td>
                            <form method="POST" action="{{action('AdminController@deleteCoursesP')}}">
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
