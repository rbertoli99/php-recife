<?php
echo "<h1>Openshift Workshop v4.0 com Jenkins Pipeline</h1> ";
echo $_SERVER['SERVER_ADDR'];
echo "<br><hr>";
echo "<h2>Cidades cadastradas no Banco de Dados:</h2>";
$conn = new mysqli("mysql", "redhat", "redhat123", "workshop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT nome FROM cidade");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h4>" . $row["nome"] . "</h4>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
