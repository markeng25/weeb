<?php
include 'conexion.php'; // Incluye la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nome = trim($_POST['nome']);
    $sobrenome = trim($_POST['sobrenome']);
    $data_nascimiento = $_POST['data_nascimiento'];
    $pais = $_POST['pais'];

    // Si el país es "Outro", toma el valor del campo adicional
    if ($pais == "Outro" && isset($_POST['otro_pais'])) {
        $pais = $_POST['otro_pais'];
    }

    $estado = trim($_POST['estado']);
    $cidade = trim($_POST['cidade']);
    $telefone = trim($_POST['telefone']);
    $email = trim($_POST['email']);
    $mensagem = trim($_POST['mensagem']);

    // Validación de campos obligatorios
    if (empty($nome) || empty($sobrenome) || empty($email) || empty($telefone)) {
        echo "Todos los campos son obligatorios.";
        exit; // Detiene la ejecución del script si algún campo está vacío
    }

    // Validar el formato del teléfono (asegúrate de que tenga 10 dígitos)
    if (!preg_match("/^[0-9]{10}$/", $telefone)) {
        echo "El número de teléfono debe tener 10 dígitos.";
        exit; // Detiene la ejecución del script si el teléfono no es válido
    }

    // Validar formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit; // Detiene la ejecución del script si el correo no es válido
    }

    // Evitar inyección SQL con consultas preparadas
    $stmt = $conn->prepare("INSERT INTO contactos (nome, sobrenome, data_nascimiento, pais, estado, cidade, telefone, email, mensagem) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Asignar los parámetros a la consulta
    $stmt->bind_param("sssssssss", $nome, $sobrenome, $data_nascimiento, $pais, $estado, $cidade, $telefone, $email, $mensagem);

    // Ejecutar la consulta y verificar si se insertaron los datos correctamente
    if ($stmt->execute()) {
        echo "<script>alert('Dados enviados com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao salvar os dados: " . $stmt->error;
    }


    // Cerrar la consulta y la conexión
    $stmt->close();
    $conn->close();
}
?>