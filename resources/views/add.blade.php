<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Member Form</title>
</head>
<body>
    <h1>Add Member Form</h1>
    <form action="add" method="POST">
        @csrf
        <input type="text" name="membername" placeholder="Enter Your Name"> <br> <br>
        <input type="email" name="memberemail" placeholder="Enter Your Email"><br> <br>
        <input type="text" name="memberaddr" placeholder="Enter Your Address"><br> <br>
        <button type="submit">ADD MEMBER</button>

    </form>

</body>
</html>