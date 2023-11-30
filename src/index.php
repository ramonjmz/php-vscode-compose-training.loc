<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
      <head>
        <nav>
            <ul>
                <li><a href="index.php"> Index</a></li>
                <li><a href="create.php"> Create </a></li>
            </ul>
        </nav>
        <main>
        <h1> List View</h1>
            <table>
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    include('config.php');

                    $stmt = $conn->query("SELECT id, name, country FROM cities WHERE deleted =0 ");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>";
                        echo "<a href='create.php?id={$row['id']}'> Edit </a>";
                        echo "<a href='index.php?delete={$row['id']}'> Delete </a>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                         
                    }
                    
                    ?>

                    <?php 
                    ob_start();  // Inicia el búfer de salida

                    if(isset($_GET['delete'])) {

                        $delete_id = $_GET['delete'];

                        try {

                            $delete_stmt = $conn->prepare('UPDATE cities SET deleted = 1 WHERE id = :delete_id ');
                            $delete_stmt->bindParam(':delete_id', $delete_id);
                            $delete_stmt->execute();

                            ob_clean();
                            header('Location: index.php');
                            exit();
                             
                        } catch (PDOException $e) {

                            echo "Error: " .$e->getMessage();
                           
                        }    

                    }
                    
                    ?>

                </tbody>
            </table>

        </main>

      </head>
        <script src="" async defer></script>
    </body>
</html>