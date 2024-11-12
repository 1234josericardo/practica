<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20% auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            border: 1px solid #ddd;
        }
        .header {
            background-color: #FF5733;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .sidebar {
            background-color: #FFE5B4;
            vertical-align: top;
        }
        .content {
            background-color: #F5F5F5;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin: 8px 0;
        }
        ul li a {
            text-decoration: none;
            color: #0e8612;
            font-weight: bold;
        }
        ul li a:hover {
            color: #FF5733;
        }
    </style>
</head>
<body>

<table border="1">
    <tr>
        <td colspan="2" class="header">Mi Imagen</td>
    </tr>
    <tr>
        <td class="sidebar">
            <ul>
                <li><a href='/ricardo'>Inicio</a></li>
                <li><a href='/gatitos'>Gatitos</a></li>
                <li><a href='/capibara'>Capibara</a></li>
                <li><a href='/loros'>Loros</a></li>
            </ul>
        </td>
        <td class="content">Mis Mascotas</td>
    </tr>
</table>

</body>
</html>
