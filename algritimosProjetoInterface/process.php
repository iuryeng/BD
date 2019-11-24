<?php
session_start();
include_once "conection.php";
$update = false;
$Codigo_Disciplina ='';
$Nome = '';
$Ementa ='';
$id= 0;

if (isset($_POST['add'])){

	 $Codigo_Disciplina = $_POST ['Codigo_Disciplina'];
	 $Nome = $_POST ['Nome'];
	 $Ementa = $_POST ['Ementa'];

     $query = mysqli_query($connect, 
     "INSERT INTO disciplina (Codigo_Disciplina, Nome, Ementa)
      VALUES('$Codigo_Disciplina', '$Nome', '$Ementa')");


	 $_SESSION['mensage'] = "Salvo com Sucesso!";
	 $_SESSION['msg_type'] = "success";


	 header("location: buscar.php");

}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$query = mysqli_query($connect, "DELETE FROM disciplina WHERE id=$id");

	 $_SESSION['mensage'] = "Deletado com scesso!";
	 $_SESSION['msg_type'] = "danger";


	 header("location: buscar.php");

}


if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update= true;
	$result = mysqli_query($connect,"SELECT * FROM disciplina WHERE id=$id") or die($mysqli->error());

	 	$row =$result->fetch_array();
	 	$Codigo_Disciplina = $row ['Codigo_Disciplina'];
	 	$Nome = $row['Nome'];
	 	$Ementa = $row ['Ementa']; 


}




if (isset($_POST['update'])){
	$id = $_POST['id'];
	$Codigo_Disciplina = $_POST['Codigo_Disciplina'];
    $Nome = $_POST['Nome'];
    $Ementa = $_POST['Ementa'];

    mysqli_query($connect, "UPDATE disciplina SET Codigo_Disciplina='$Codigo_Disciplina', Nome='$Nome', Ementa='$Ementa' WHERE id=$id");

    $_SESSION['mensage'] = "Atualização feita com sucesso!";
    $_SESSION['msg_type'] = "warning";
	
    header("location: buscar.php");

}

?>