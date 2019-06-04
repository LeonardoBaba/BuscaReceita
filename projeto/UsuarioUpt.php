<?php
global $link;
    $imagem = $_FILES['imagem']["name"]; 
    $temp = $_FILES['imagem']["tmp_name"];
    $location = './imagem/';
	$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
    if($_FILES['imagem']['size']==0){
        $cmd="UPDATE usuario SET txnome  = '$_POST[nome]',
        txemail = '$_POST[email]',
                      dtnascimento = '$_POST[dtnascimento]',
                      txuser = '$_POST[user]',
                      txsexo = '$_POST[sexo]'
        WHERE idusuario='$_POST[idusuario]'";
        $comando=mysqli_query($link,$cmd);
    }else{
        $cmd="UPDATE usuario SET txnome  = '$_POST[nome]',
                                txemail = '$_POST[email]',
                                dtnascimento = '$_POST[dtnascimento]',
                                txuser = '$_POST[user]',
                                txsexo = '$_POST[sexo]',
                                Foto = '$imagem'
                        WHERE idusuario='$_POST[idusuario]'";
        $comando=mysqli_query($link,$cmd);
        move_uploaded_file($temp, $location.$imagem);
    }
header('Location: Perfil.php');
?>
