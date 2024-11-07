<html>
    <head>
        <title>Pruebas</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>Pruebas Contenedores</h1>";
                $host = 'db';  
                $dbname = 'postgres';  
                $user = 'root'; 
                $password = 'root'; 
                
                $dsn = "pgsql:host=$host;dbname=$dbname";
                try {
                    $pdo = new PDO($dsn, $user, $password);
                    echo "Conexión exitosa a la base de datos.";
                } catch (PDOException $e) {
                    echo "Error de conexión: $e" . $e->getMessage();
                }

            ?>
        </div>
    </body>
</html>
