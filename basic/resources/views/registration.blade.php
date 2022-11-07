<html>
    <head>

    </head>
    <body>
        <form action="/register" method="post">
        {{csrf_field()}}
        Name: <input type="text" name="name"><br>
        Profession: <input type="text" name="profession"><br>
        Address: <input type="text" name="address"><br>
        <input type="submit" name="submit">
    </form>

    </body>
</html>