<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/modais.php");
include_once 'VEM_BRABO.php';
isLogged($sid);
$uid = getIdBySid($sid); 
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');?>



<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="/static/css/styles.css">
<link rel="stylesheet" href="/static/css/bootstrap.css">
<link rel="stylesheet" href="/static/css/sidebar.css">
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet" />

<script>
function submitForm(formId) {
    document.getElementById(formId).submit();
}
</script>

<!-- proteger contra cópia de layout -->
    <?php
    // Coloque o código JavaScript aqui
    echo '<script type="text/javascript">';
    echo 'if (top != self) {';
    echo '  top.location.href = self.location.href;';
    echo '}';
    echo '</script>';
  ?>

</head>
<style>



.fixed-header {

background: #000000;

position: null;

border-radius: 25px;

color: white;

font-size: 20px;

text-align: center;

}

.content-container {
border: 1px solid black; /* Cor da borda e largura */
padding: 10px; /* Espaçamento interno para o conteúdo */
border-radius: 10px; /* Raio da borda para torná-la arredondada */
}

</style>
<body>
<div class="content pt-1 overflow-auto">
<div class="card shadow border border-0 overflow-auto h-100">
<div class="card-body m-0">


<div class="col mb-3">
<div class="card-body text-center text-nowrap">
<h1 class="fixed-header"> 🌐 MENU DE ATUALIZAÇÃO 🌐</h1>
</div>


<div class="d-md-flex justify-content-between mb-3 align-items-center">
<div class="d-flex flex-column mb-1">
<div class="d-flex">
<div class="mb-1 me-1">

</div>
</div>
</div>
<div class="d-flex flex-column">
<div class="d-flex mb-1" style="min-width: 300px;">


<button type="button" class="btn btn-outline-dark flex-fill w-50" data-bs-toggle="modal" data-bs-target="#modal-configuracoes">
<i class="bi bi-gear"></i>
</i> <span>CONFIGURAR</span>
</button>

</div>
<div class="d-flex mb-1" style="min-width: 300px;">
<button type="button" class="btn btn-outline-dark flex-fill w-50" data-bs-toggle="modal" data-bs-target="#modal-sms">
<i class="bi bi-chat-quote"></i>
</i> <span>ENVIAR SMS</span>
</button>

</div>


<div class="d-flex mb-1" style="min-width: 300px;">
<button type="button" class="btn btn-outline-dark flex-fill w-50" data-bs-toggle="modal" data-bs-target="#modal-add-servidor">
<i class="fa-solid fa-server"></i>
</i> <span>ADICIONAR SERVIDOR</span>
</button>

</div>

<div class="d-flex mb-1" style="min-width: 300px;">
<button type="button" class="btn btn-outline-dark flex-fill mr-1 w-50 mb-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="bi bi-trash3"></i>
</i> <span>EXCLUIR TODOS</span>
</button>

  <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
    <form id="form_apaga_servidores" method="post" action="excluir.php?acao=todos-servidores">
    <input type="hidden" name="form_apaga_servidores">
    <input type="hidden" name="id_owner" value="<?php echo $uid; ?>">
    <a class="dropdown-item d-flex align-items-center" id="btn_apaga_servidores" onclick="submitForm('form_apaga_servidores')">
        <i class="fa-solid fa-server"></i>&nbsp; TODOS OS SERVIDORES
    </a>
    </form>
   
   
    </div>
    
</div>
</div> 

</div>


</div>
      
            <div class="content-container">
            
             <div class="mt-2 mb-3">
               
                <form action="" id="form_servidor" method="post">
                <select class="form-select" id="editar_servidor" name="editar_servidor">
                        <option value="">SERVIDORES A EDITAR</option>
                        <?php
                        $sql = $conn->query("SELECT * FROM servidores WHERE id_owner='$uid' ORDER BY categoria ASC, id ASC");
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) :
                            echo "<option value='" . $row['id'] . "'>" .htmlspecialchars($row['Name']) . "</option>";
                        endwhile;
                        ?>
                    </select>
                </form>
            </div>




             <div class="d-flex mb-1" style="min-width: 300px;">
    <a class="dropdown-item d-flex bi bi-upload align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#modal-import-json">
        <i class=""></i>&nbsp; IMPORTAR JSON
    </a> 
   
    <a class="dropdown-item d-flex bi bi-download align-items-center" href="update/<?= htmlspecialchars(getData('pasta_att', $uid)) ?>/config" download="config.json"
        <i class=""></i>&nbsp; EXPORTAR JSON
    </a>   
    
              </div>      
            
            
            
            
            
           
           
            
            
            

          
                

                
                
                
                
                
                <form action="" method="post">
                    <div class="mt-2 d-grid gap-2">
                        <button style="color: white" name="btn_salvar" class="btn btn-success" type="submit">SALVAR</button>
                    </div>
                    <br>
                    
                    <a href="https://vembrabo.alphi.media/CONECTA6G.apk" class="btn" style="color: white; background-color: red; width: 100%;">BAIXAR APP CONECTA6G</a>
                    <br>
                    <br>
                    
                    <a href="https://vembrabo.alphi.media/ferramentas.php" class="btn" style="color: white; background-color: black; width: 100%;"> 🛠️ FERRAMENTAS ⛏️</a>
                      <br>
                      
                     </form>
                     <br>
                </form>
            </div>
            <div id="alert" class="alert mt-2"></div>
    </center>
</div>



<?php

if (isset($_POST['btn_salvar'])) :

    addVersion($uid);

    $servidores = array();
   
   

    $sql = $conn->prepare("SELECT
    
    Name,
    TYPE,
    FLAG, 
    ServerIP,
    CheckUser,
    ServerPort,
    SSLPort, 
    
    ServerUser,
    ServerPass , 
    Online,
    
    Payload, 
    SNI, 
    TlsIP,
    ProxyIP, 
    ProxyPort,
    Info 
    FROM servidores WHERE id_owner = ? ORDER BY categoria ASC, id ASC");
    $sql->execute([$uid]);

    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

        $servidores[] = $row;
    }

  
  


    $search = array('[','"',',',']');
    $replace = array('','',';','');
    $change = str_replace($search, $replace, $json);
    $dados = array(
        'Version' => getConfigUser('versao', $uid),
        'ReleaseNotes' => getConfigUser('notas', $uid),
        'Sms' => getConfigUser('sms', $uid),
        'UrlUpdate' => getConfigUser('att', $uid),
        'EmailFeedback' => getConfigUser('email', $uid),
        'UrlContato' => getConfigUser('contato', $uid), 
        'videoUrl' => getConfigUser('videoUrl', $uid), 
        'logoonline' => getConfigUser('LogoOnline', $uid),
        'fundoonline' => getConfigUser('FundoOnline', $uid),
       
        'UrlTermos' => getConfigUser('termos', $uid),
        'CheckUser' => getConfigUser('checkuser', $uid),
        
         'Online' => getConfigUser('online', $uid),
         'UdpPort' => getConfigUser('udpport', $uid),
         'Painel' => getConfigUser('painel', $uid),
        
        
        'Servers' => $servidores,
       
       
    );

    $dados = json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    $pronto = str_replace('\\', '', $dados);

    $path = "update/" . getData('pasta_att', $uid) . "";
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $config = "update/" . getData('pasta_att', $uid) . "/config";

    //verifica se já tem
    if (file_exists($config)) {
        unlink($config);
    }

    file_put_contents($config, $pronto);

    echo "<script>swal('OK!', 'Configurações salvas com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/app.php';"."})</script>";
            
    echo "<script>
$('#alert').html('Configurações salvas !')
$('#alert').addClass('alert-success')
";

endif;

?>

<script>
   
    $('#editar_servidor').on('change', function() {
        document.getElementById("form_servidor").submit();
    })
  
</script>


<!-- Botão Flutuante Inicial-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="/" style="position:fixed;width:60px;height:60px;bottom:15px;left:15px;background-color:#ffffff;color:#6922d9;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;">
<i style="margin-top:16px" class="fa fa-home"></i>
</a>
		<!-- Botão Flutuante Inicial-->
		


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/rodape.php"); ?>