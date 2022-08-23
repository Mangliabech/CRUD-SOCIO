
<?
header("Content-Type: application/json; charset=UTF-8");

$host="localhost";
    $user="root";
    $pass="";

    $bd="prueba";
$conn = new mysqli($host, $user, "", $bd);
$stmt = $conn->prepare("SELECT cedula FROM socio ");

$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);

?>