<<<<<<< HEAD
<?php
/*************************************************************************************************************/
//maiuscula_na_str($p),digitos_senha($p),tamanho_str($p ,$i),carac_na_str($p),letra_na_str($p),num_na_str($p) |
//InvalidEmail($p),InvalidName($p),InvalidCpf($p),InvalidData($p),InvalidPassword($p)   			  |
//TestInvalid($admdata , $nome , $data , $email , $senha , $cpf , $cro , $tel , $ag , $cc)								  |
/*************************************************************************************************************/
	function maiuscula_na_str($p){
		$TemMaiuscula = false;
		$senha = $p;
		$tamanho = strlen($senha);
		
		for ($i=0; $i < $tamanho; $i++) { 
			if(ctype_upper($senha[$i])){
				$TemMaiuscula = true;
			}
		}
		
		return $TemMaiuscula;//retorna verdadeiro se possui pelomenos 1 maiusculo
	}
	function digitos_senha($p){
		$TemOsDigitos = false;
		$tamanho = strlen($p);
		
		if($tamanho >= 8){
			$TemOsDigitos = true;
		}
		
		return $TemOsDigitos;//retorna verdadeiro se possui pelomenos 8 digitos
	}
	function tamanho_str($p ,$i){
		$EstaNoTamanho = false;
		$q = strlen($p);
		
		if($i == $q ) {
			$EstaNoTamanho = true;
		}
		
		return $EstaNoTamanho;//retorna verdadeiro se possui $i digitos
	}
	function carac_na_str($p){
		$TemCarac = false;
		$str = $p;
		$tamanho = strlen($str);
		
		for ($i=0; $i < $tamanho; $i++) { 
			$val = ord($str[$i]);
			if($val >=65 && $val <= 90){//letras maiusculas
			} 
			elseif ($val >=96 && $val <= 122){//letras minusculas
			}
			elseif ($val >=128 && $val <= 187){//acentuados
			}
			elseif ($val ==195||$val == 32){//acento , spaco
			}
			elseif($val >=48 && $val <= 57){//numeros
			} 
			else {
				$TemCarac = true;
			}
		}
		
		return $TemCarac; //retorna verdadeiro se possui pelomenos 1 caracter
	}
	function letra_na_str($p){
		$TemLetra = false;
		$str = $p;
		$tamanho = strlen($str);
		
		for ($i=0; $i < $tamanho; $i++) { 
			if(!is_numeric($str[$i])) {
				$TemLetra = true;
			}
		}
		
		return $TemLetra;
	}
	function num_na_str($p){
		$TemNum = false;
		$str = $p;
		$tamanho = strlen($str);
		
		for ($i=0; $i < $tamanho; $i++) { 
			if(is_numeric($str[$i])) {
				$TemNum = true;
			}
		}
		
		return $TemNum;//retorna verdadeiro se possui pelomenos 1 numero
	}
/*************************************************************************************************************/
	function InvalidEmail($p){
		$email = $p;
		$error = false;
		$tamanho = strlen($email);
		$arroba = strrpos($email, "@");
		$pontocom = strrpos($email, ".com");
		$arrobavazio = empty($arroba);
		$pontocomvazio = empty($pontocom);
		
		if($arroba > $pontocom || $arrobavazio == 1 || $pontocomvazio == 1) {
			$error = true;
		}
		for ($i=0; $i < strlen($email) ; $i++) { 
			if (ord($email[$i]) == 32){//32 - spaco
				$error = true;
			}
			if($i < $arroba){
				if (ord($email[$i]) == 64){//64 - Arroba
				$error = true;
				}
			}
		}
		for ($i=0; $i < $arroba; $i++) { 
			$val = ord($email[$i]);
			if($val >=48 && $val <= 57){//numeros
			} 
			elseif ($val >=65 && $val <= 90){//letras maiusculas
			}
			elseif ($val >=96 && $val <= 122){//letras minusculas
			}
			elseif ($val == 95||$val == 46){// underline , ponto
			}
			else {
				$error = true;
			}
		}
		for ($i=$arroba + 1;$i < $pontocom; $i++) { 
				$val = ord($email[$i]);
				if ($val >=96 && $val <= 122){//letras minusculas
				}
				else {
					$error == true;
				}		
		}
		$pontos = 0;
		for ($i=$arroba + 1;$i < strlen($email); $i++) { 
				$val = ord($email[$i]);
				if ($val >=96 && $val <= 122){//letras minusculas
				}
				elseif ($val ==46) {//pontofinal
					$pontos++;
					if ($pontos > 2) {
						$error = true;
					}
				}
				else {
					$error = true;
				}		
		}						
	return $error;
	}
	function InvalidName($p){
		
		if(!num_na_str($p) && !carac_na_str($p) ){//nao pode conter numero ou caracteres especias
				return false;
		}
		
		return true;
	}
	function InvalidCpf($p){
		
		if(tamanho_str($p,11) && !letra_na_str($p) && !carac_na_str($p)){//tem de ter 11 digitos de tamanho , nao pode conter letras ou caracteres especias
			return false;
		}
		
		return true;
	}
	function InvalidData($p){
		
		if(tamanho_str($p,8) && !letra_na_str($p) && !carac_na_str($p)){//tem de ter 8 digitos de tamanho , nao pode conter letras ou caracteres especias
			return false;
		}
		
		return true;
	}
	function InvalidPassword($p) {
		
		if (maiuscula_na_str($p) && digitos_senha($p) && carac_na_str($p) && num_na_str($p) ) {//Tem que ter pelomenos 1 maiuscula, 1 numero ,1 caracter especial e pelomenos 8 digitos 
				return false;
		}
		
		return true;
	}
	function InBlank($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel){
			$n =  func_get_args();
			$tot = func_num_args();
			for($i = 0 ; $i < $tot ; $i++){
				$tamanho = strlen($n[$i]);		
				if($tamanho< 1){
					return true;//retorna true caso tenha alguma variavel q n foi escrita
				}
			}
			return false;
	}
	function Overflow($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel){
			$n =  func_get_args();
			$tot = func_num_args();
			$r[0] = 8;//admdata
			$r[1] = 11;//ag
			$r[2] = 7;//cc
			$r[3] = 50;//cpf
			$r[4] = 10;//cro
			$r[5] = 8;//data
			$r[6] = 255;//email
			$r[7] = 255;//nome
			$r[8] = 255;//senha
			$r[9] = 11;//tel
			for($i = 0 ; $i < $tot ; $i++){
				$tamanho = strlen($n[$i]);		
				if($tamanho > $r[$i]){
					return true;//retorna true caso alguma variavel tenha tamanho maior que o maximo estipulado
				}
			}
			return false;
	}
	function InvalidAdmData($p) {
			$dias = substr($p, 0,2);
			$mes = substr($p, 2,2);
			$ano = substr($p, 4,4);
			if(tamanho_str($p,8) && $dias <= 31 && $mes <= 12 && !letra_na_str($p) && !carac_na_str($p) && $dias > 0 && $mes > 0 && $ano > 1500){
					return false;
			}
			return true;//retorna true caso tenha numero de digitos diferente de 8 ou mais q 31 dias(ou menos que 1) por mes ou mais de 12 meses(ou menos que 1)  no ano ou tenha letra/caracter na str
	}
/*************************************************************************************************************/
	function TestInvalid($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel){
		if (Overflow($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel)) {
			return "Um campo possui muitos caracteres";
		}
		if(InBlank($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel)){
			return "Preencha todos os campos";
		}
		if(InvalidName($nome)){
			return "Nome Invalido";
		}
		if(InvalidData($data)){
			return "Data Invalida";
		}
		if(InvalidEmail($email)){
			return "Email Invalido";
		}
		if(InvalidPassword($senha)){
			return "Senha Invalida";
		}
		if(InvalidCpf($cpf)){
			return "CPF Invalido";
		}
		if(letra_na_str($cro) || carac_na_str($cro)){
			return "CRO Invalido";
		}
		if(letra_na_str($tel) || carac_na_str($tel)){
			return "Telefone Invalido";
		}
		if(letra_na_str($ag) || carac_na_str($ag)){
			return "Agencia Invalida";
		}
		if(letra_na_str($cc) || carac_na_str($cc)){
			return "Conta corrente Invalida";
		}
		if(InvalidAdmData($admdata)){
			return "Data de adimissao Invalida";
		}
		
		return "Tudo OK!!!";//retorna tudo Ok caso todos os teste de validacao passem 
	}
?>
=======
<?php
/*************************************************************************************************************/
//maiuscula_na_str($p),digitos_senha($p),tamanho_str($p ,$i),carac_na_str($p),letra_na_str($p),num_na_str($p) |
//InvalidEmail($p),InvalidName($p),InvalidCpf($p),InvalidData($p),InvalidPassword($p)						  |
//TestInvalid($nome , $data , $email , $senha , $cpf , $cro , $tel , $ag , $cc)								  |
/*************************************************************************************************************/
	function maiuscula_na_str($p){
		$TemMaiuscula = false;
		$senha = $p;
		$tamanho = strlen($senha);
		
		for ($i=0; $i < $tamanho; $i++) { 
			if(ctype_upper($senha[$i])){
				$TemMaiuscula = true;
			}
		}
		
		return $TemMaiuscula;//retorna verdadeiro se possui pelomenos 1 maiusculo
	}
	function digitos_senha($p){
		$TemOsDigitos = false;
		$tamanho = strlen($p);
		
		if($tamanho >= 8){
			$TemOsDigitos = true;
		}
		
		return $TemOsDigitos;//retorna verdadeiro se possui pelomenos 8 digitos
	}

	function tamanho_str($p ,$i){
		$EstaNoTamanho = false;
		$q = strlen($p);
		
		if($i == $q ) {
			$EstaNoTamanho = true;
		}
		
		return $EstaNoTamanho;//retorna verdadeiro se possui $i digitos
	}
	function carac_na_str($p){
		$TemCarac = false;
		$str = $p;
		$tamanho = strlen($str);
		
		for ($i=0; $i < $tamanho; $i++) { 
			$val = ord($str[$i]);
			if($val >=65 && $val <= 90){//letras maiusculas
			} 
			elseif ($val >=96 && $val <= 122){//letras minusculas
			}
			elseif ($val >=128 && $val <= 187){//acentuados
			}
			elseif ($val ==195||$val == 32){//acento , spaco
			}
			elseif($val >=48 && $val <= 57){//numeros
			} 
			else {
				$TemCarac = true;
			}
		}
		
		return $TemCarac; //retorna verdadeiro se possui pelomenos 1 caracter
	}
	function letra_na_str($p){
		$TemLetra = false;
		$str = $p;
		$tamanho = strlen($str);
		
		for ($i=0; $i < $tamanho; $i++) { 
			if(!is_numeric($str[$i])) {
				$TemLetra = true;
			}
		}
		
		return $TemLetra;
	}
	function num_na_str($p){
		$TemNum = false;
		$str = $p;
		$tamanho = strlen($str);
		
		for ($i=0; $i < $tamanho; $i++) { 
			if(is_numeric($str[$i])) {
				$TemNum = true;
			}
		}
		
		return $TemNum;//retorna verdadeiro se possui pelomenos 1 numero
	}
/*************************************************************************************************************/
	function InvalidEmail($p){
		$email = $p;
		$error = false;
		$tamanho = strlen($email);
		$arroba = strrpos($email, "@");
		$pontocom = strrpos($email, ".com");
		$arrobavazio = empty($arroba);
		$pontocomvazio = empty($pontocom);
		
		if($arroba > $pontocom || $arrobavazio == 1 || $pontocomvazio == 1) {
			$error = true;
		}
		for ($i=0; $i < strlen($email) ; $i++) { 
			if (ord($email[$i]) == 32){//32 - spaco
				$error = true;
			}
			if($i < $arroba){
				if (ord($email[$i]) == 64){//64 - Arroba
				$error = true;
				}
			}
		}
		for ($i=0; $i < $arroba; $i++) { 
			$val = ord($email[$i]);
			if($val >=48 && $val <= 57){//numeros
			} 
			elseif ($val >=65 && $val <= 90){//letras maiusculas
			}
			elseif ($val >=96 && $val <= 122){//letras minusculas
			}
			elseif ($val == 95||$val == 46){// underline , ponto
			}
			else {
				$error = true;
			}
		}
		for ($i=$arroba + 1;$i < $pontocom; $i++) { 
				$val = ord($email[$i]);
				if ($val >=96 && $val <= 122){//letras minusculas
				}
				else {
					$error == true;
				}		
		}
		$pontos = 0;
		for ($i=$arroba + 1;$i < strlen($email); $i++) { 
				$val = ord($email[$i]);
				if ($val >=96 && $val <= 122){//letras minusculas
				}
				elseif ($val ==46) {//pontofinal
					$pontos++;
					if ($pontos > 2) {
						$error = true;
					}
				}
				else {
					$error = true;
				}		
		}						

	return $error;
	}
	function InvalidName($p){
		
		if(!num_na_str($p) && !carac_na_str($p) ){//nao pode conter numero ou caracteres especias
				return false;
		}
		
		return true;
	}
	function InvalidCpf($p){
		
		if(tamanho_str($p,11) && !letra_na_str($p) && !carac_na_str($p)){//tem de ter 11 digitos de tamanho , nao pode conter letras ou caracteres especias
			return false;
		}
		
		return true;
	}
	function InvalidData($p){
		
		if(tamanho_str($p,8) && !letra_na_str($p) && !carac_na_str($p)){//tem de ter 8 digitos de tamanho , nao pode conter letras ou caracteres especias
			return false;
		}
		
		return true;
	}
	function InvalidPassword($p) {
		
		if (maiuscula_na_str($p) && digitos_senha($p) && carac_na_str($p) && num_na_str($p) ) {//Tem que ter pelomenos 1 maiuscula, 1 numero ,1 caracter especial e pelomenos 8 digitos 
				return false;
		}
		
		return true;
	}
	function InBlank($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel){
			$n =  func_get_args();
			$tot = func_num_args();

			for($i = 0 ; $i < $tot ; $i++){
				$tamanho = strlen($n[$i]);		
				if($tamanho< 1){
					return true;//retorna true caso tenha alguma variavel q n foi escrita
				}
			}

			return false;
	}
	function Overflow($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel){
			$n =  func_get_args();
			$tot = func_num_args();
			$r[0] = 8;//admdata
			$r[1] = 11;//ag
			$r[2] = 7;//cc
			$r[3] = 50;//cpf
			$r[4] = 10;//cro
			$r[5] = 8;//data
			$r[6] = 255;//email
			$r[7] = 255;//nome
			$r[8] = 255;//senha
			$r[9] = 11;//tel

			for($i = 0 ; $i < $tot ; $i++){
				$tamanho = strlen($n[$i]);		
				if($tamanho > $r[$i]){
					return true;//retorna true caso alguma variavel tenha tamanho maior que o maximo estipulado
				}
			}

			return false;
	}
	function InvalidAdmData($p) {
			$dias = substr($p, 0,2);
			$mes = substr($p, 2,2);
			$ano = substr($p, 4,4);

			if(tamanho_str($p,8) && $dias <= 31 && $mes <= 12 && !letra_na_str($p) && !carac_na_str($p) && $dias > 0 && $mes > 0 && $ano > 1500){
					return false;
			}
			return true;//retorna true caso tenha numero de digitos diferente de 8 ou mais q 31 dias(ou menos que 1) por mes ou mais de 12 meses(ou menos que 1)  no ano ou tenha letra/caracter na str
	}
/*************************************************************************************************************/
	function TestInvalid($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel){
		if (Overflow($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel)) {
			return "Um campo possui muitos caracteres";
		}
		if(InBlank($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel)){
			return "Preencha todos os campos";
		}
		if(InvalidName($nome)){
			return "Nome Invalido";
		}
		if(InvalidData($data)){
			return "Data Invalida";
		}
		if(InvalidEmail($email)){
			return "Email Invalido";
		}
		if(InvalidPassword($senha)){
			return "Senha Invalida";
		}
		if(InvalidCpf($cpf)){
			return "CPF Invalido";
		}
		if(letra_na_str($cro) || carac_na_str($cro)){
			return "CRO Invalido";
		}
		if(letra_na_str($tel) || carac_na_str($tel)){
			return "Telefone Invalido";
		}
		if(letra_na_str($ag) || carac_na_str($ag)){
			return "Agencia Invalida";
		}
		if(letra_na_str($cc) || carac_na_str($cc)){
			return "Conta corrente Invalida";
		}
		if(InvalidAdmData($admdata)){
			return "Data de adimissao Invalida";
		}
		
		return "Tudo OK!!!";//retorna tudo Ok caso todos os teste de validacao passem 
	}
?>
>>>>>>> 1bd40eada115161015177114f3315eaf77765b93
