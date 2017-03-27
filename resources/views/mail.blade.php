<!DOCTYPE html>
<html>
    <head>
        <title>Mailer Test</title>
    </head>
    <body>
        <form action="send_email" method="post">
            {{ csrf_field() }}
            Email
            <input type="email" name="email">
            <br>
            Content :
            <br>
            <textarea name="content" rows="5"></textarea><br>
            <button type="submit">Kirim</button>
        </form>
    </body>
</html>