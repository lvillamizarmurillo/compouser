<?php

    require "./vendor/autoload.php";

    // use App\Credenciales;
    
    new \App\connect();

    $router = new \Bramus\Router\Router();
    //new \App\cliente();

    // $credenciales = new Credenciales("localhost", "campus", "campus2023", "prueba");

    // $router->post('/datos', function() {
    //     global $credenciales;
    //     $conn = $credenciales->getConnection();
    
    //     $_DATA = json_decode(file_get_contents('php://input'));

    //     $sql = "INSERT INTO tabla (nombre, email, mensaje) VALUES (?, ?, ?)";

    //     $stmt = $conn->prepare($sql);
    
    //     try {
    //         $stmt->execute([
    //             $_DATA->nombre,
    //             $_DATA->email,
    //             $_DATA->mensaje
    //         ]);
    //         echo "Los datos se han enviado correctamente a la tabla.";
    //     } catch (PDOException $e) {
    //         echo "Error al enviar los datos: " . $e->getMessage();
    //     }
    // });

    // $router->delete('/datos/(\d+)', function($id) {
    //     global $credenciales;
    //     $conn = $credenciales->getConnection();

    //     $sql = "DELETE FROM tabla WHERE id = ?";

    //     $stmt = $conn->prepare($sql);
    
    //     try {
    //         $stmt->execute([$id]);
    //         echo "El registro con ID $id ha sido eliminado correctamente.";
    //     } catch (PDOException $e) {
    //         echo "Error al eliminar el registro: " . $e->getMessage();
    //     }
    // });

    // $router->get('/datos/(\d+)', function($id) {
    //     global $credenciales;
    
    //     $conn = $credenciales->getConnection();

    //     $sql = "SELECT * FROM tabla WHERE id = ?";

    //     $stmt = $conn->prepare($sql);
    
    //     try {
    //         $stmt->execute([$id]);
    //         $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //         echo "Datos encontrados: " . json_encode($result);
    //     } catch (PDOException $e) {
    //         echo "Error al buscar el registro: " . $e->getMessage();
    //     }
    // });

    // $router->put('/datos/(\d+)', function($id) use ($credenciales) {
    //     $conn = $credenciales->getConnection();
    
    //     $_DATA = json_decode(file_get_contents('php://input'));

    //     $sql = "UPDATE tabla SET nombre = ?, email = ?, mensaje = ? WHERE id = ?";

    //     $stmt = $conn->prepare($sql);
    
    //     try {
    //         $stmt->execute([
    //             $_DATA->nombre,
    //             $_DATA->email,
    //             $_DATA->mensaje,
    //             $id
    //         ]);
    //         echo "El registro con ID $id ha sido actualizado correctamente.";
    //     } catch (PDOException $e) {
    //         echo "Error al actualizar el registro: " . $e->getMessage();
    //     }
    // });
    
    // $router->run();
?>

