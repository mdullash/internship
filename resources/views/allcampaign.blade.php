<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>All campaign</title>
</head>
<body>
<div class="container p-5">
    <table class="table table-striped">
        <thead>
        <th>Campaign Title</th>
        <th>Sender</th>
        <th>Message</th>
        <th>Status</th>
        <th>Action</th>

        </thead>
        @foreach($cam as $c)
        <tbody>
            <td>{{$c->campaign_title}}</td>
            <td>{{$c->sender}}</td>
            <td>{{$c->message_body}}</td>
            <td>{{$c->status}}</td>
            <td><a href="{{ route('edit', ['id' => $c->id]) }}">Edit</a></td>
            <td><a href="{{ route('delete', ['id' => $c->id]) }}">Delete</a></td>



        </tbody>
            @endforeach
    </table>
</div>
</body>
</html>
