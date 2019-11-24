

<?php include_once ('head.php') ?>
<?php include_once ('header.php') ?>
<?php include_once ('conection.php') ?>





 <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">




 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
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



        <section class="content-header">
  <h1>
  Sistema de Controle Academico 
    <small>Metodologia de Gestão e Inovação: Engenharia de Computação IFPB </small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="start.php"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="cadastramento.php">Cadastramento</a></li> 
  </ol>
</section>
    
        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="dist/img/logo1.png" alt="User profile picture">
                  <h3 class="profile-username text-center">Instituto de Ciências e Tecnologia</h3>
                  <p class="text-muted text-center">Gestão Acadêmica</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Quant.Disciplinas </b> <a class="pull-right">3</a>
                    </li>
                    <li class="list-group-item">
                      <b>Quant.Alunos</b> <a class="pull-right">5</a>
                    </li>
                    <li class="list-group-item">
                      <b>Quant.Professores</b> <a class="pull-right">80</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Ver relatório</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Cadastrar Disciplinas</a></li>
                  <li><a href="#timeline" data-toggle="tab">Cadastrar Alunos</a></li>
                  <li><a href="#settings" data-toggle="tab">Cadastrar Professores</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
             <!-- /. inicio do formulario de cadastro-->  
              <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Cod. Disciplina</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="cod_disciplina" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nome_disciplina" placeholder="">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Ementa</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ementa" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                     
                      </div>
                      <div class="form-group">
                    
                      </div>
                  
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                       
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                      </div>
                    </form>
              
              <!-- /. fim do formulario de cadastro-->  
                 </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">

                     <!-- /. inicio do formulario de cadastro-->  
              <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Matricula</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="mat_aluno" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Cod. Turma</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="cod_turma" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nome_aluno" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Filiação</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="filiacao" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Aniversário</label>
                        <div class="col-sm-10">
                          <input type="DataTables" class="form-control" id="data_nascimento" placeholder="">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Endereco(Rua)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="rua" placeholder="">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Bairro</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="bairro" placeholder="">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Numero</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="numero" placeholder="">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                      </div>
                    </form>
              
              <!-- /. fim do formulario de cadastro-->  
                  
             
           
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">


                  </div><!-- /.tab-pane -->

         <!-- Inicio da tabela de busca -->






         <!-- Fim da tabela de busca-->



                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->




        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

         
    </div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

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