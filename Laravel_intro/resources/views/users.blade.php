<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>
<body>
    <?php  foreach ($users as $user) { ?>
        <p>{{$user->name}}</p>
        <a href="edit/{{$user->id}}">Edit</a>
        <a href="delete/{{$user->id}}">Delete</a>
     <?php } ?>

     <form action="store" method="post">
        @csrf
         <label for="">Name</label>
         <input type="text" name="name">
         <button type='submit'>Submit</button>
     </form>
</body>
</html>
