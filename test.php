<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./plugins/jquery/jquery.js"></script>
    <script src="./plugins/jquery-validation/jquery.validate.js"></script>
</head>

<body>
    <form action="" id="demoForm">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="email" name="email">
        <input type="submit" value="Submit" id="register">
    </form>


    <script>
        $().ready(function() {
            $("#demoForm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "username": {
                        required: true,
                        maxlength: 15,
                        minlength: 6

                    },
                    "password": {
                        required: true,
                        minlength: 8
                    },
                    "email": {
                        required: true,
                        email: true
                    }
                }
            });
        });
    </script>
</body>

</html>