<?php
	include_once("conexao.php");
	$telefone_usuario = $_POST['txt_telefone'];
	$empresa_usuario = $_POST['txt_empresa'];
	$problema_usuario = $_POST['txt_descreva_problema'];
	
	
	
	
	//echo "$nome_usuario - $email_usuario - $senha_usuario";
	
	$result_usuario = "INSERT INTO formularios(telefone, empresa, problema) VALUES ('$telefone_usuario','$empresa_usuario','$problema_usuario')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ReclameAqui/cliente.php'>
					<script type=\"text/javascript\">
						alert(\"Formulário cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ReclameAqui/cliente.php'>
					<script type=\"text/javascript\">
						alert(\"O Formulário não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>

