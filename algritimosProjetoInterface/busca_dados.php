 
 <?php  

 

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //echo "<h1> Recebeu a data : " . $_POST['data'] . "</h1";
    $dataPesquisa = $_POST['data'];
    $dataArray = explode("/", $dataPesquisa);

    $dataPesquisa = $dataArray[1] . "-" . $dataArray[0];

    echo"data da pesquisa: " . $dataPesquisa;





    $sql = "SELECT * FROM tbdados WHERE data_hora LIKE '%" . $dataPesquisa ."%'"; // LIKE '%2017-09-15'

  }else {
      //echo "<h1> Não recebeu nada, vai mostrar mes atual</h1";
      $dataAtual = date('Y-m');
      // echo "Mes Atual:" . $dataAtual ;
      $sql = "SELECT * FROM tbdados WHERE data_hora LIKE '%" . $dataAtual ."%'"; // LIKE '%2017-09-15'
    }

    $stmt = $PDO->prepare($sql);  
    $stmt ->execute();
   




    while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
      $timestamp = strtotime($linha->data_hora);
      $dataTabela = date('d/m/Y H:i:s', $timestamp);
    echo "<tr>";
      echo"<td>" . $linha->sensor2 . "</td>";
      echo"<td>" . $linha->sensor1 . "</td>";
      echo"<td>" . $dataTabela ."</td>";
    echo "</tr>";

    }

    echo "</table";
  
?>

