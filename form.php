<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <h2>form</h2>
        <form class="form" action="action.php" method="post">
            <div class="input username">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Input username"/>
            </div>
            <div class="input email">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Input email" />
            </div>
            <div class="input password">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Input password" />
            </div>


            <div class="btn">
                <button type="submit">button</button>
            </div>
        </form>
    </div>

</body>

</html>