<html>
<head>
	<title>Bio-F�cil</title>
<div class="all">
<link rel="stylesheet" href="css/teste.css">


</head>
<body background="imagens/fundo.png">
<br>
<center><div id="h1">Transfus�o de sangue</div> 
<hr id="hr"><br><br>
<div id="h2">
Bem vindos,nesse "jogo" simularemos uma trasnfus�o de sangue ,e saberemos se o sangue<br> do "doador" � compat�vel com o do "receptor."
A transfus�o de sangue consiste em trasferir o sague<br> de uma pessoa doadora pra outra receptora.Geralmente � realizada quando algu�m perde muito sangue.<br>
Ao digitar o tipo sangu�neo do doador e do receptor,digite em letras mai�sculas 
Ex.: A+/AB-</div></center>
<section class="artigos">
<fieldset>
   		
  		
  		<div id="form">
  		<form method = "POST">
Doador:<input type = "text" name = "sp">
Receptor:<input type = "text" name = "sm">
<input type = "submit" value = "Saber se h� compatibilidade">
<pre>
</form>
		</div>

</fieldset>
</section>
<img src="imagens/guia.png" id="guia">


<?php
@$sp = $_POST ['sp'];
@$sm = $_POST ['sm'];

if (($sp == "A+") && ($sm == "A+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita."; 
}else if (($sp == "B+") && ($sm == "B+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "AB+") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O+") && ($sm == "O+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	
	}else if (($sp == "A-") && ($sm == "A-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "B-") && ($sm == "B-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "AB-") && ($sm == "AB-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}
else if (($sp == "O+") && ($sm == "O+")){
echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";}


	
	else if (($sp == "A-") && ($sm == "A+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "B+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "O+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}

		else if (($sp == "A+") && ($sm == "A-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "B+") && ($sm == "B-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB+") && ($sm == "AB-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "O+") && ($sm == "O-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if  (($sp == "A+") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "AB-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "AB-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	
	
	}else if  (($sp == "O+") && ($sm == "A+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "A+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "A-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "A-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}
else if  (($sp == "B+") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "AB-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	
	
	}else if  (($sp == "O+") && ($sm == "B+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "B-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}
else if  (($sp == "AB+") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "AB-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "AB-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
		
		
	}else if  (($sp == "O+") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "AB+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "AB-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "AB-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	

	
	
	
	
	}else if  (($sp == "O+") && ($sm == "B+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B+")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
}else if (($sp == "O-") && ($sm == "B-")){
	echo "H� compatibilidade,nesse caso a tranfus�o pode vir a ser feita.";
	}else if (($sp == "O+") && ($sm == "B-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	
	}else if  (($sp == "A+") && ($sm == "O+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "O-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
		}else if  (($sp == "B+") && ($sm == "O+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "O+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "O-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "O-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
		}else if  (($sp == "AB+") && ($sm == "O+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "O-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
			
		}else if  (($sp == "B+") && ($sm == "A+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "A+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "A-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "A-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
				}else if  (($sp == "AB+") && ($sm == "A+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "A+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "A-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "A-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
		
		
		
		
		
		
		}else if  (($sp == "A+") && ($sm == "B+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "B+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "B-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "B-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
				}else if  (($sp == "A+") && ($sm == "O+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "A-") && ($sm == "O-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "A+") && ($sm == "O-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
		}else if  (($sp == "B+") && ($sm == "AB+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "B-") && ($sm == "AB-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "B+") && ($sm == "AB-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
			
		}else if  (($sp == "AB+") && ($sm == "B+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "B+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "B-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "B-")){
		echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
		
		
		
		}else if  (($sp == "AB+") && ($sm == "O+")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O+")){
echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
}else if (($sp == "AB-") && ($sm == "O-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";
	}else if (($sp == "AB+") && ($sm == "O-")){
	echo "N�o h� compatibilidade,nesse caso a tranfus�o n�o pode vir a ser feita.";}
else if ($sp == ""){
	echo "Digite um tipo sangu�neo do doador ";}
	else if ($sm == ""){
	echo "Digite um tipo sangu�neo do receptor";}
	else {
	echo "Digite um tipo sangu�neo v�lido";}
?>
<div><a href="index.php"><button id="bt0">Home</button></a></div>


</body>
</html>