<?php 
    require 'includes/config/database.php';
    $db = conectarBD();

    //Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //var_dump($_POST);

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)); 
        $password = mysqli_real_escape_string($db, $_POST['password']); 

        if(!$email){
            $errores[] = "El email es obligatorio";
        }
        if(!$password){
            $errores[] = "El Password es obligatorio";
        }

        if(empty($errores)){
            //Revisar si el usuario existe
            $query = "SELECT * FROM usuarios where email = '${email}' ";
            $resultado = mysqli_query($db, $query);
            //num_rows es un objeto y comprovar k haya resultado en una bd
            if($resultado ->num_rows){
                //Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                //Verificar si el password es correcto o no
                $auth = password_verify($password, $usuario['password']);

                //var_dump($auth);
                if($auth){
                    //El usuario es autenticado
                    session_start();

                    //Llenar el arreglo de la seccion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /admin');

                    //echo "<pre>";
                    //var_dump($_SESSION);
                    //echo "</pre>"; 

                }else{
                    $errores[] = 'El password es incorrecto';
                }

            }else{
                $errores[] = "El usuario no existe";
            }
        }
        /*
        echo "<pre>";
        var_dump($errores);
        echo "</pre>"; */
    }

    //Incluye el header
    require 'includes/funciones.php';    
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesion</h1>

        <?php foreach($errores as $error):  ?>
            <div class="alerta error">
            <?php echo $error ?>
            </div>

        <?php endforeach; ?> 

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu email" id="email" >

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu password" id="password" >

            </fieldset>

            <input type="submit" value="Iniciar Sesíon" class="boton boton-verde">
            </form>
        
    </main>
    
    <?php 
        incluirTemplate('footer');
    ?>