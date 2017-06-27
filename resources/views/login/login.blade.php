<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>PMS-AACR</title>

    <link href="/Login__/css/style.css" rel="stylesheet">


</head>

<body>
<div class="body"></div>
<div class="grad"></div>
<div class="header">
    <div>PMS-<span>AACRPMS</span></div>
</div>
<br>

<div class="login">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

        {{ csrf_field() }}
        <input type="email" placeholder="email" name="email" value="{{ old('email') }}" required autofocus> <br>
        <input type="password" placeholder="password" name="password" required><br>
        <input type="submit" value="Login">

     </form>
</div>



</body>
</html>
