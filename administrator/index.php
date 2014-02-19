<?php
    include('inc/config.php');
    if(!isset($_SESSION['logado'])){
        header('Location: login.php');
    } else if($_SESSION['logado'] != '1'){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>

<?php
    include("inc/head.php");
?>

<body>
    <div id="wrapper">

        <?php include("inc/topo.php"); ?>

        <div id="page-wrapper">
            <?php include("inc/page_name.php"); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span>Incrições Realizadas</span>
                            <a class="dropdown-toggle pull-right" href="lista_inscritos.php">
                                <i class="fa fa-tasks fa-fw"></i>
                                <span>Baixar</span>
                            </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Pólo</th>
                                            <th>Cursos</th>
                                            <th>Endereço</th>
                                            <th>Bairro</th>
                                            <th>Complemento</th>
                                            <th>CEP</th>
                                            <th>Cidade</th>
                                            <th>Celular</th>
                                            <th>Telefone Fixo</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = mysql_query("SELECT * FROM inscricoes") or die(mysql_error());
                                            while($dados = mysql_fetch_array($sql)){
                                        ?>
                                                <tr>
                                                    <td><?php echo $dados['nome']; ?></td>
                                                    <td><?php echo $dados['cpf']; ?></td>
                                                    <td><?php echo $dados['polo']; ?></td>
                                                    <td class="tdCursos"><?php echo $dados['cursos']; ?></td>
                                                    <td><?php echo $dados['endereco']; ?></td>
                                                    <td><?php echo $dados['bairro']; ?></td>
                                                    <td><?php echo $dados['complemento']; ?></td>
                                                    <td><?php echo $dados['cep']; ?></td>
                                                    <td><?php echo $dados['cidade']; ?></td>
                                                    <td><?php echo $dados['celular']; ?></td>
                                                    <td><?php echo $dados['telefone']; ?></td>
                                                    <td><?php echo $dados['email']; ?></td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>