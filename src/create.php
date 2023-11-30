<?php
include('config.php');

$id ='';
$name ='';
$country ='';

if ($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['id'])) {

    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT id, name, country FROM cities WHERE id =:id ");
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $name = $row['name'];
        $country = $row['country'];
        $id = $row['id'];


    } else {

        $error_menssage = "Record not found";
    }
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $country = $_POST['country'];
    $id = $_POST['id'];
    try {
        
        if ($id !== '' ) {

            $stmt = $conn->prepare("UPDATE cities set name=:name, country = :country WHERE id =:id");
            $stmt->bindParam(':id',$id);
        } else {
    
            $stmt = $conn->prepare("INSERT INTO cities (name,country) VALUES (:name,:country) ");
         
        }
       
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':country', $country);
        $stmt->execute();
          
        header("Location: index.php");
        exit();

    } catch (PDOException $e) {
         $error_menssage = "Error: ". $e->getMessage();
    }

     
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $id !== '' ? 'Editar Registro' : 'Crear Nuevo Registro'; ?></title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <head>
            <nav>
                <ul>
                <li><a href="index.php"> Index </a></li>
                <li><a href="create.php"> create </a></li>
                    
                </ul>
            </nav>
        </head>
        <main>
        <h1><?php echo $id !== '' ? 'Editar Registro' : 'Crear Nuevo Registro'; ?></h1>

        <h1> New Record </h1>

        <?php if(isset($error_menssage)) :?>

            <p style="color: red"><?php echo $error_menssage ?></p>

        <?php endif; ?>


        <form action="create.php<?php echo $id !== '' ? '?id=' . $id : ''; ?>" method="POST">
            <label>Nombre</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required> 
            <label>Country </label>
            <input type="text" id="country" name="country" value="<?php echo $country; ?>"  >
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <button type="submit"><?php echo $id !== '' ? 'Guardar Cambios' : 'Crear Registro'; ?></button>
        </form>
        </main>

    
        <script src="" async defer></script>
    </body>
</html>