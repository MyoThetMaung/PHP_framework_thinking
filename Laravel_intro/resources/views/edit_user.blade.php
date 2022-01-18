<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit user</title>
</head>
<body>
     <form action="/update/{{$edit_users->id}}" method="post">
        @csrf
         <label for="">Name</label>
         <input type="text" name="name" value="{{$edit_users->name}}">
         <button type='submit'>Submit</button>
     </form>
</body>
</html>
