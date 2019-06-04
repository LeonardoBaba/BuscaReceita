<?php
global $link;
$link = mysqli_connect("localhost","root","","projetobusca") or die ("A conexão com o BD não deu certo");
session_start();
$pk = $_SESSION['altcp'];
$rendimento = $_POST['rendimento'];
$nomereceita =$_POST['nomereceita'];
$modopreparo =$_POST['modopreparo'];
$tempopreparo =$_POST['tempopreparo'];

$_SESSION['altrendimento']=$_POST['rendimento'];
$_SESSION['alttempopreparo']=$_POST['tempopreparo'];
$_SESSION['altnomereceita']=$_POST['nomereceita'];
$_SESSION['altmodopreparo']=$_POST['modopreparo'];

$imagem = $_FILES['imagem']["name"]; 
$temp = $_FILES['imagem']["tmp_name"];
$location = './imagem/';
$user=$_SESSION['cpuser'];
$teste=$_POST['sub'];

if ($teste=='cat'){
	$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(idcategoriareceita)+1 as CMAX FROM categoriareceita"));
	$cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	$cmd="INSERT INTO categoriareceita VALUES ('$pk',
											   '$_POST[categoria]',
											   '$cp')";
	$query=mysqli_query($link,$cmd);
	printf("<meta http-equiv=\"Refresh\" content='0; url=./ReceitaAlt.php' />");
	
	
}else if($teste=='+'){
	$proxpk=mysqli_fetch_array(mysqli_query($link,"SELECT max(idreceitaingrediente)+1 as CMAX FROM receitaingrediente"));
	$cp=( isset($proxpk['CMAX']) ) ? $proxpk['CMAX'] : 1;
	$cmd="INSERT INTO receitaingrediente VALUES ('$cp',
												  '$_POST[quantidade]',
												  '$pk',
												  '$_POST[ingrediente]',
												  '$_POST[medida]')";
	$query=mysqli_query($link,$cmd);
	printf("<meta http-equiv=\"Refresh\" content='0; url=./ReceitaAlt.php' />");
	
}else if($teste=="ALTERAR"){
  if($_FILES['imagem']['size']==0){
    $cmd="UPDATE receita SET  txrendimento =    '$rendimento',
      txnomereceita=  '$nomereceita',
      txmodopreparo=  '$modopreparo',
      txtempopreparo=  '$tempopreparo'
    WHERE idreceita='$pk'";
    //printf("$cmd");
    $query=mysqli_query($link,$cmd);
    move_uploaded_file($temp, $location.$imagem);
  }else{
    $cmd="UPDATE receita SET  txrendimento =    '$rendimento',
								txnomereceita=  '$nomereceita',
								txmodopreparo=  '$modopreparo',
								txtempopreparo=  '$tempopreparo',
								tximagem  = '$imagem'
              WHERE idreceita='$pk'";
    //printf("$cmd");
	  $query=mysqli_query($link,$cmd);
	  move_uploaded_file($temp, $location.$imagem);
  }
}else if($_POST['deling']!=''){
	$cmd="DELETE FROM receitaingrediente WHERE idreceitaingrediente='$_POST[deling]'";
	$query=mysqli_query($link,$cmd);
	printf("<meta http-equiv=\"Refresh\" content='0; url=./ReceitaAlt.php' />");
}else if($_POST['delcat']!=''){
	$cmd="DELETE FROM categoriareceita WHERE idcategoriareceita='$_POST[delcat]'";
	$query=mysqli_query($link,$cmd);
	printf("<meta http-equiv=\"Refresh\" content='0; url=./ReceitaAlt.php' />");
}


header('Location: Perfil.php');
?>