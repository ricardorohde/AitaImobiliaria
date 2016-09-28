<<<<<<< HEAD
<?php   
/* 
 *  Função de busca de Endereço pelo CEP 
 *  -   Desenvolvido Felipe Olivaes para ajaxbox.com.br 
 *  -   Utilizando WebService de CEP da republicavirtual.com.br 
 */  
function busca_cep($cep){  
    $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($cep).'&formato=query_string');  
    if(!$resultado){  
        $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";  
    }  
    parse_str($resultado, $retorno);   
    return $retorno;  
}  
  
  
/* 
 * Exemplo de utilização  
 */  
  
//Vamos buscar o CEP 90020022  
$resultado_busca = busca_cep('90020022');  
  
echo "<pre> Array Retornada: 
 ".print_r($resultado_busca, true)."</pre>";  
  
switch($resultado_busca['resultado']){  
    case '2':  
        $texto = " 
    Cidade com logradouro único 
    <b>Cidade: </b> ".$resultado_busca['cidade']." 
    <b>UF: </b> ".$resultado_busca['uf']." 
        ";    
    break;  
      
    case '1':  
        $texto = " 
    Cidade com logradouro completo 
    <b>Tipo de Logradouro: </b> ".$resultado_busca['tipo_logradouro']." 
    <b>Logradouro: </b> ".$resultado_busca['logradouro']." 
    <b>Bairro: </b> ".$resultado_busca['bairro']." 
    <b>Cidade: </b> ".$resultado_busca['cidade']." 
    <b>UF: </b> ".$resultado_busca['uf']." 
        ";  
    break;  
      
    default:  
        $texto = "Fala ao buscar cep: ".$resultado_busca['resultado'];  
    break;  
}  
  
echo $texto;  
?>  
=======
<form action="" enctype="multipart/form-data" method="post">
    <input name="file" type="file" />
    <input name="submit" type="submit" value="Upload File" />
</form>

<?php
    $ftp_server = "aitaimoveis.com.br";
    $ftp_user_name = "aitaimoveis";
    $ftp_user_pass = "nala2702";
    $destination_file = $_SERVER['DOCUMENT_ROOT'].'/'.$dir.'/';
    $source_file = $_FILES['file']['tmp_name']; 

    // set up basic connection
    $conn_id = ftp_connect($ftp_server);
    ftp_pasv($conn_id, true); 

    // login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

    // check connection
    if ((!$conn_id) || (!$login_result)) { 
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user $ftp_user_name"; 
        exit; 
    } else {
        echo "Connected to $ftp_server, for user $ftp_user_name";
    }

    // upload the file
    $upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY); 

    // check upload status
    if (!$upload) { 
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $source_file to $ftp_server as $destination_file";
    }

    // close the FTP stream 
    ftp_close($conn_id);
?>
>>>>>>> dd9213841f285480552262eed3564324e47f377b
