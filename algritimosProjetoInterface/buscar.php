<?php include_once ('head.php') ?>
<?php include_once ('header.php') ?>
<?php include_once ('conection.php') ?>
<?php require_once 'process.php'?> 



 <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <?php require_once 'process.php'; ?> 

  <?php

if (isset($_SESSION['mensage'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

<?php 
echo $_SESSION['mensage'];
unset($_SESSION['mensage']);
?>
</div>

<?php endif?>
<!-- Main content -->
<section class="content-header">
  <h1>
  Sistema de Controle Academico 
    <small>Metodologia de Gestão e Inovação: Engenharia de Computação IFPB </small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="start.php"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Gestão</a></li> 
  </ol>
</section>


  <!-- Main content -->
        <section class="content">
          <div class="row - 5">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Gerenciar Turmas </h3>
                </div><!-- /.box-header -->
                <div class="box-body">

<div class="container">

  <?php 
    $mysqli = new mysqli('localhost','root','','sis_academico') or die (mysqli_error($mysli));
    $result = $mysqli->query("SELECT * FROM disciplina") or die (mysqli_error);
       // pre_r ($result);
    //pre_r($result ->fetch_assoc()); // for nos vetores da tabela 
  ?>

  <div class= "row justify-content-center">
    <table class="table">
      <thead>
        <th>Codigo_Disciplina</th>
        <th>Nome</th>
        <th>Ementa</th>
      </thead>

    <?php   

        while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row ['Codigo_Disciplina']?></td>
            <td><?php echo $row ['Nome']?></td>
            <td><?php echo $row ['Ementa']?></td>
          
            <td>
              <a href="buscar.php?edit=<?php echo $row['id'];?>" class = "btn btn-primary">editar</a>
              <a href="process.php?delete=<?php echo $row['id'];?>" class = "btn btn-danger">excluir</a>
            </td>         

          </tr>
        <?php endwhile;?>
    </table>    
  </div>

  <?php

  function pre_r ($array){

    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }
  ?>
  
  <div class = "row justify-content-center" >
    <form action ="process.php"  method="POST">
      <input type="hidden" name="id" value="<?php echo $id?>">
          <div class = "form-gourp">
          <label>Codigo_Disciplina</label>
          <input type="text" name=" Codigo_Disciplina" class="form-control" value="<?php echo $Codigo_Disciplina?>">
          </div>

          <div class="form-gourp">
          <label>Nome</label>
          <input type="text" name="Nome" class="form-control" value="<?php echo $Nome?>" > 
              </div>

          <div class = form-goup>
          <label>Ementa</label>
          <input type="text" name="Ementa" class="form-control" value="<?php echo $Ementa?>" >    
          </div>

          <div class = "form-gourp">
          <?php 
          if ($update == true):
          ?>  
          <br>
          <button type="submit" class="btn btn-info" name="update">atualizar</button>
          <?php else : ?>
          <br>
          <button type="submit" class="btn btn-primary" name="add">Cadastrar</button>
            <?php endif;?>
                  </div>
      
    </form>
  </div>




                </div>
              </div>
            </div>
          </div>


              


        
       
</section>

<section>
  
          
     


   

</section>

 </div> 

        <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

<?php include_once('footer.php');?>
