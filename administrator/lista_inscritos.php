<?php
	
	header('Content-type: application/msexcel;');

	//Neste header definimos como será gravado e o nome do arquivo
	header('Content-Disposition: attachment; filename="inscritos.xls"');
    include('inc/config.php');

?>
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th><?php echo utf8_decode(Pólo); ?></th>
                                            <th>Cursos</th>
                                            <th><?php echo utf8_decode(Endereço); ?></th>
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
                                                    <td><?php echo utf8_decode($dados['nome']); ?></td>
                                                    <td><?php echo $dados['cpf']; ?></td>
                                                    <td><?php echo utf8_decode($dados['polo']); ?></td>
                                                    <td class="tdCursos"><?php echo utf8_decode($dados['cursos']); ?></td>
                                                    <td><?php echo utf8_decode($dados['endereço']); ?></td>
                                                    <td><?php echo utf8_decode($dados['bairro']); ?></td>
                                                    <td><?php echo utf8_decode($dados['complemento']); ?></td>
                                                    <td><?php echo $dados['cep']; ?></td>
                                                    <td><?php echo utf8_decode($dados['cidade']); ?></td>
                                                    <td><?php echo $dados['celular']; ?></td>
                                                    <td><?php echo $dados['telefone']; ?></td>
                                                    <td><?php echo $dados['email']; ?></td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>