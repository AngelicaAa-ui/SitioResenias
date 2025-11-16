<?php
    require_once 'configuracion.php'; //Inclusion de los parametros globales, permite que la llamada a configuracion 
    //se realice solo una vez.

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $secret= "6LewNA4sAAAAAIDeVkg1ik5ZSN1YvxcSiy9Koxsa";
        $captcha= $_POST['g-recaptcha-response'];

        if(!$captcha){ //Captcha v2, verifica que el ingreso sea seguro por medio de un rompecabezas.
            echo "<p style='color:red;'>Por favor verifica el Captcha...</p>";
            exit;
        }

        $url='https://www.google.com/recaptcha/api/siteverify';
        $data=[
            'secret'=>$secret,
            'response'=>$captcha
        ];

        $options=[
            'http'=>[
                'method'=>'POST',
                'header'=>"Content-type:application/x-www-form-urlencoded\r\n",
                'content'=>http_build_query($data)
            ]
        ];

        $context=stream_context_create($options);
        $response=file_get_contents($url, false, $context);
        $responseKeys=json_decode($response, true);

        if(!$responseKeys["success"]){
            echo "<p style='color:red;'>Error: Captcha Inválido...</p>";
            exit;
        }

        if(!isset($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['contrasena'])){
            echo "<p style='color:red;'>Faltan datos...</p>";
            exit;
        } //Verificar que todos los campos han sido llenados antes de procesarlos para evitar incompletos.

        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $correo= $_POST['correo'];
        $contrasena= $_POST['contrasena'];
        

        $regex= '#^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{10,}$#';
        if(!preg_match($regex, $contrasena)){
            echo "<p style='color:red;'>La contraseña debe tener mínimo 10 caracteres, una mayúscula, un número y un símbolo...</p>";
            exit;
        }

        $hash= password_hash($contrasena, PASSWORD_DEFAULT); //Almacenar contraseña encriptada.

        $verificar= $conexion->prepare("SELECT id FROM usuarios WHERE correo =?");
        $verificar->bind_param("s",$correo);
        $verificar->execute();
        $verificar->store_result();

        if($verificar->num_rows>0){
            echo "<p style='color:red;'>El correo ya está registrado...</p>";
        } else {
            $registro= $conexion->prepare("INSERT INTO usuarios (nombre, apellido, correo, contrasena) VALUES (?, ?, ?, ?)");
            $registro-> bind_param("ssss", $nombre, $apellido, $correo, $hash);
            if($registro->execute()){
                echo "<p style='color:green;'>Captcha Válido - Registro Exitoso. <a href='login.php'>Iniciar Sesión</a></p>";
            } else {
                echo "<p style='color:red;'>Error al registrar...</p>";
            }
            $verificar->close();
            $conexion->close();
        }
    }
?>