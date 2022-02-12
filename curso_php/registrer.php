<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');
* {padding: 0;margin: 0;box-sizing: border-box;font-family: 'Maven Pro', sans-serif;font-family: sans-serif;}
body {margin: 50px auto;text-align: center;width: 800px;}
h1 {font-size: 2rem;text-transform: uppercase;}
label {width: 250px;display: inline-block;text-align: left;font-size: 1.5rem;font-family: sans-serif;text-align: center;}
input {border: 2px solid #ccc;font-size: 1.5rem;font-weight: 100;padding: 10px;text-align: center;}
form {margin: 55px auto;margin-bottom: 10px;padding: 20px;border: 5px solid #ccc;width: 500px;background: #eee;}
#xd{font-size: 10px;text-align: center;}
div.form-element {margin: 20px 0;}
button {padding: 10px;font-size: 1.5rem;font-weight: 100;background: blueviolet;color: white;border: none;}</style>
</head>
<body>


<form method="get" action="insertar_registro.php" name="signup-form">
     <div class="form-element">
        <label>Nombres y Apellidos</label>
        <input type="string" name="name" for="name"  />
    </div>
    <div class="form-element">
        <label>Nombre de Usuario</label>
        <input type="text" name="username" for="username"pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" for="email" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" for="password" required />
    </div>
    <button type="submit" name="register" value="register" method="post" action="$sql">Registrar</button>
</form>
</body>
</html>