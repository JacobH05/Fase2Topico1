<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor de Consumo Eléctrico</title>
</head>
<body>
    <div class="sidebar">
        <p class="welcome">Bienvenido</p>
        <ul>
            <li><a href="#" onclick="showSection('consumo')">Consumo</a></li>
            <li><a href="#" onclick="showSection('historial')">Historial</a></li>
            <li><a href="#" onclick="showSection('contacto')">Contacto</a></li>
        </ul>
        <button class="logout">Cerrar sesión</button>
    </div>
    <div class="main-content">
        <h1>Monitor de Consumo Eléctrico</h1>
        

        <div id="consumo" class="section" style="display: block;">
            <h2>Consumo Actual</h2>
            <div class="cards">
                <div class="card">
                    <h3>Consumo Actual</h3>
                    <p id="current-consumption">0.32 kWh</p>
                </div>
                <div class="card">
                    <h3>Consumo diario</h3>
                    <p id="daily-consumption">36.41 kWh</p>
                </div>
                <div class="card">
                    <h3>Costo diario</h3>
                    <p id="daily-cost">$30.03</p>
                </div>
            </div>
        </div>


        <div id="historial" class="section">
            <h2>Historial de Consumo</h2>
            <div class="history-list">
                <div class="history-item">
                    <span>06/10/2024 / 06/11/2024</span>
                    <span>Consumo: 300.03 kWh</span>
                </div>
                <div class="history-item">
                    <span>06/12/2024 / 06/01/2025</span>
                    <span>Consumo: 400.03 kWh</span>
                </div>
                <div class="history-item">
                    <span>06/02/2025 / 06/03/2025</span>
                    <span>Consumo: 500.03 kWh</span>
                </div>
                <div class="history-item">
                    <span>06/04/2025 / 06/05/2025</span>
                    <span>Consumo: 600.03 kWh</span>
                </div>
                <div class="history-item">
                    <span>06/06/2025 / 06/07/2025</span>
                    <span>Consumo: 800.03 kWh</span>
                </div>
            </div>
        </div>

        <div id="contacto" class="section">
            <h2>Contacto</h2>
            <p>¿Tienes alguna pregunta?</p>
            <p>Contáctanos</p>
            <p>Email: al21631@edec.edu.mx.com</p>
            <p>Teléfono: +52 123 456 7890</p>
        </div>
    </div>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
        }

      
        .sidebar {
            width: 250px;
            background-color: #e0e0e0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        .sidebar .welcome {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
            text-align: center;
        }

        .sidebar ul li {
            width: 100%;
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 1.2rem;
            padding: 10px;
            display: block;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .sidebar ul li a:hover {
            background-color: #c2c2c2;
        }

        .logout {
            background-color: #ff4c4c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            margin-top: auto;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        .logout:hover {
            background-color: #d43f3f;
        }

   
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-content h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
        }

 
        .section {
            display: none;
            text-align: center;
            font-size: 1.2rem;
            color: #555;
            width: 100%;
        }

    
        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
            font-size: 1.2rem;
            color: #333;
        }

        .card h3 {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

 
        .history-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            font-size: 1rem;
            color: #333;
        }
    </style>
    <script>
        function showSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
</body>
</html>

