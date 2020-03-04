<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Campaign</title>
</head>
<body>
<div class="container p-5">
    <form method="post" action="">
        @csrf
        @foreach($cam as $c)

        <div class="form-group">
            <label for="">Campaign Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{$c['campaign_title']}}" placeholder="Campaign Title">
        </div>
        <div class="form-group">
            <select class="form-control" id="" name="sender">
                <option value="GP">GP</option>
                <option value="BL">BL</option>
                <option value="TT">TT</option>
                <option value="RB">RB</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <input type="text" name="message" class="form-control" id="" value="{{$c->message_body}}" placeholder="Message">
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn" href="/showcampaign">Show List</a>
    </form>
</div>

</body>
</html>
