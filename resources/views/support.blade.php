<!DOCTYPE html>
<html>
<head>
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

<h2>Support messages</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

    @foreach($supports as $support)
        <tr>
            <td>{{$support->name}}</td>
            <td>{{$support->email}}</td>
            <td>{{$support->number}}</td>
            <td>{{$support->description}}</td>
            <td>{{$support->created_at}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
