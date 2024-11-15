<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div class="login-container">

        <div class="user-icon">👤</div>

 
        <h2 class="login-title">Login</h2>

 
        <input type="text" class="input-field" placeholder="Email">
        <input type="password" class="input-field" placeholder="Contraseña">

        <div class="options">
            <label>
                <input type="checkbox"> Remember me
            </label>
            <a href="#" class="forgot-password">Olvidaste contraseña?</a>
        </div>
    </div>

</body>

<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        .login-container {
            background-color: #e0e0e0;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            width: 300px;
        }

        .user-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #d4d4d4;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            font-size: 40px;
            color: #333;
            margin-bottom: 20px;
        }

        .login-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

    
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            text-align: center;
        }

   
        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #333;
            margin-top: 10px;
        }

        .options input[type="checkbox"] {
            margin-right: 5px;
        }

        .forgot-password {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: #555;
        }
    </style>
</html>
