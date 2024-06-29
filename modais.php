<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid);
$uid = getIdBySid($sid); ?>

<!------------------------------------------------------------------------------------>
<!-- MODAL ADD SERVIDOR -->
<!------------------------------------------------------------------------------------>
<div class="modal fade" id="modal-add-servidor" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Adicionar servidor</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="adicionar.php?acao=servidor" method="post">
                    <input type="hidden" name="id_owner" value="<?= getIdBySid($sid) ?>">

                    <div class="row">
                        <div class="col">
                            <label for=""><span style="color: black;">Nome</span></label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><span style="color: black;">Server IP</span></label>
                            <input type="text" name="serverip" class="form-control">
                        </div>
                    </div>

                    <div class="mt-2 row">
                        <div class="col">
                            <label for=""><span style="color: black;">Flag</span></label>
                            <select name="flag" class="form-select">
                                <option value="br.png">br.png (BRASIL)</option>
                                <option value="ar.png">ar.png (ARGENTINA)</option>
                                <option value="ca.png">ca.png (CANADA)</option>
                                <option value="ch.png">ch.png (CHINA)</option>
                                <option value="fr.png">fr.png (FRANÇA)</option>
                                <option value="hk.png">hk.png (HONG KONG)</option>
                                <option value="in.png">in.png (ÍNDIA)</option>
                                <option value="id.png">id.png (INDONÉSIA)</option>
                                <option value="jp.png">jp.png (JAPÃO)</option>
                                <option value="lr.png">lr.png (LIBÉRIA)</option>
                                <option value="my.png">my.png (MALÁSIA)</option>
                                <option value="mx.png">mx.png (MÉXICO)</option>
                                <option value="pr.png">pr.png (PARAGUAY)</option>
                                <option value="ph.png">ph.png (PHILIPPINES)</option>
                                <option value="uk.png">uk.png (REINO UNIDO)</option>
                                <option value="sg.png">sg.png (SINGAPORE)</option>
                                <option value="kr.png">kr.png (SOUTH KOREA)</option>
                                <option value="us.png">us.png (U.S.A)</option>
                            <option value="vivo">VIVO</option>
                                <option value="claro">CLARO</option>
                                <option value="tim">TIM</option>
                                <option value="fluke">FLUKE</option>
                                <option value="oi">OI</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for=""><span style="color: black;">Tipo</span></label>
                            <select name="tipo" class="form-select">
                                <option value="premium">PREMIUM</option>
                                <option value="free">FREE</option>
                            </select>

                        </div>
                    </div>

                    <label class="mt-2"><span style="color: black;">Categoria</span></label>
                    <select name="categoria" class="form-select">
                        <option value="1">CATEGORIA VIVO</option>
                        <option value="2">CATEGORIA CLARO</option>
                        <option value="3">CATEGORIA TIM</option>
                        <option value="4">CATEGORIA FLUKE</option>
                        <option value="5">CATEGORIA OI</option>
                        <option value="6">CATEGORIA VEEKE</option>
                        <option value="7">CATEGORIAS LARICEL</option>
                        <option value="8">CATEGORIA FLAMENGO</option>
                        <option value="9">CATEGORIA TODS</option>
                        <option value="10">CATEGORIA ALEATÓRIA</option>
                    </select>

                    <div class="mt-2 row">
                        <div class="col">
                            <label for=""><span style="color: black;">Server Port</span></label>
                            <input type="text" value="22" name="serverport" value="22" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><span style="color: black;">SSL Port</span></label>
                            <input type="text" value="443" name="sslport" class="form-control">
                        </div>
                    </div>

                    <div class="mt-2 row">
                        <div class="col">
                            <label for=""><span style="color: black;">CheckUser</span></label>
                            <input type="text" value="http://" name="checkuser" class="form-control">
                        </div>
                    </div>
                    
                       <div class="mt-2 row">
                        <div class="col">
                            <label for=""><span style="color: black;">Online</span></label>
                            <input type="text" value="http://" name="online" class="form-control">
                        </div>
                    </div>
                    
                    <div class="mt-2 row">
                        <div class="col">
                            <label for=""><span style="color: black;">ServerUser</span></label>
                            <input type="text" value="" name="serveruser" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><span style="color: black;">ServerPass</span></label>
                            <input type="text" value="" name="serverpass" class="form-control">
                        </div>
                    </div>

                       <div class="row">
                       
                        <div class="col">
                            <label for=""><span style="color: black;">SNI</span></label>
                            <input type="text" name="sni" class="form-control">
                        </div>
                    </div>

                    <div class="mt-2 row">
                        <div class="col">
                            <label for=""><span style="color: black;">ProxyIP</span></label>
                            <input type="text" name="proxyip" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><span style="color: black;">Proxy Port</span></label>
                            <input type="text" name="proxyport" class="form-control">
                        </div>
                    </div>

                    <div class="mt-2 row">
                        <div class="col">
                            <label for=""><span style="color: black;">TlsIP</span></label>
                            <input type="text" name="tlsip" class="form-control">
                        </div>
                      
                    </div>

                    <label class="mt-2"><span style="color: black;">Info</span></label>
                    <select name="info" class="form-select">
                        <option value="1">WS/SSL</option>
                        <option value="2">SSH/Direct</option>
                        <option value="3">SSH/Proxy</option>
                        <option value="4">SSH/SSL</option>
                    </select>

                   
                    <label class="mt-2"><span style="color: black;">Payload</span></label>
                    <textarea class="form-control" name="pay" rows="4"></textarea>

            </div>
            
            
            
            
            <div class="modal-footer">
                <button type="submit" name="adicionar_servidor" style="color: white" class="btn btn-success">Adicionar</button></form>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------>
<!-- MODAL IMPORTAR JSON -->
<!------------------------------------------------------------------------------------>
<div class="modal fade" id="modal-import-json" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Importar JSON</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="adicionar.php?acao=json" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_owner" value="<?= getIdBySid($sid) ?>">
                    <label for="json_file"><span style="color: black;">Arquivo</span></label>
                    <input type="file" name="json_file" id="json_file" class="form-control" accept=".json" required>
            </div>
            <div class="modal-footer">
                <button type="submit" name="importar_json" style="color: white" class="btn btn-success">Importar</button></form>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['editar_servidor'])) : ?>
    <!------------------------------------------------------------------------------------>
    <!-- MODAL EDITAR SERVIDOR -->
    <!------------------------------------------------------------------------------------>
    <div class="modal fade" id="modal-editar-servidor" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Editar servidor</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $id_servidor = $_POST['editar_servidor'];
                    $sql = $conn->prepare("SELECT * FROM servidores WHERE id=? ORDER BY categoria ASC, id ASC");
                    $sql->execute([$id_servidor]);
                    $dados = $sql->fetch(PDO::FETCH_ASSOC);  ?>

                    <form action="editar.php?acao=servidor" method="post">
                        <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                        <input type="hidden" name="id_owner" value="<?= htmlspecialchars(getIdBySid($sid))  ?>">

                        <div class="row">
                            <div class="col">
                                <label for=""><span style="color: black;">Nome</span></label>
                                <input type="text" name="nome" value="<?= htmlspecialchars($dados['Name']) ?>" class="form-control">
                            </div>
                            <div class="col">
                                <label for=""><span style="color: black;">Server IP</span></label>
                                <input type="text" name="serverip" value="<?= htmlspecialchars($dados['ServerIP']) ?>" class="form-control">
                            </div>
                        </div>

                        <div class="mt-2 row">
                            <div class="col">
                                <label for=""><span style="color: black;">Flag</span></label>
                                <select name="flag" class="form-select">
                                    <option value="br.png">br.png (BRASIL)</option>
                                    <option value="ar.png">ar.png (ARGENTINA)</option>
                                    <option value="ca.png">ca.png (CANADÁ)</option>
                                    <option value="ch.png">ch.png (CHINA)</option>
                                    <option value="fr.png">fr.png (FRANÇA)</option>
                                    <option value="hk.png">hk.png (HONG KONG)</option>
                                    <option value="in.png">in.png (ÍNDIA)</option>
                                    <option value="id.png">id.png (INDONÉSIA)</option>
                                    <option value="jp.png">jp.png (JAPÃO)</option>
                                    <option value="lr.png">lr.png (LIBÉRIA)</option>
                                    <option value="my.png">my.png (MALÁSIA)</option>
                                    <option value="mx.png">mx.png (MÉXICO)</option>
                                    <option value="pr.png">pr.png (PARAGUAY)</option>
                                    <option value="ph.png">ph.png (PHILIPPINES)</option>
                                    <option value="uk.png">uk.png (REINO UNIDO)</option>
                                    <option value="sg.png">sg.png (SINGAPORE)</option>
                                    <option value="kr.png">kr.png (SOUTH KOREA)</option>
                                    <option value="us.png">us.png (U.S.A)</option>
                                 <?php
                                    if ($dados['FLAG'] == 'vivo') { ?>
                                        <option value="vivo">VIVO</option>
                                        <option value="claro">CLARO</option>
                                        <option value="tim">TIM</option>
                                        <option value="oi">OI</option>
                                        <option value="fluke">FLUKE</option>
                                    <?php } else if ($dados['FLAG'] == 'claro') { ?>
                                        <option value="claro">CLARO</option>
                                        <option value="vivo">VIVO</option>
                                        <option value="tim">TIM</option>
                                        <option value="oi">OI</option>
                                        <option value="fluke">FLUKE</option>
                                    <?php } else if ($dados['FLAG'] == 'tim') { ?>
                                        <option value="tim">TIM</option>
                                        <option value="claro">CLARO</option>
                                        <option value="vivo">VIVO</option>
                                        <option value="oi">OI</option>
                                        <option value="fluke">FLUKE</option>
                                        <?php } else if ($dados['FLAG'] == 'fluke') { ?>
                                        <option value="fluke">FLUKE</option>
                                        <option value="claro">CLARO</option>
                                        <option value="vivo">VIVO</option>
                                        <option value="oi">OI</option>
                                        <option value="tim">TIM</option>
                                    <?php } else { ?>
                                       <option value="fluke">FLUKE</option>
                                        <option value="oi">OI</option>
                                        <option value="tim">TIM</option>
                                        <option value="claro">CLARO</option>
                                        <option value="vivo">VIVO</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for=""><span style="color: black;">Tipo</span></label>
                                <select name="tipo" class="form-select">
                                    <?php
                                    if ($dados['TYPE'] == 'premium') { ?>
                                        <option value="premium">PREMIUM</option>
                                        <option value="free">FREE</option>
                                    <?php } else { ?>
                                        <option value="free">FREE</option>
                                        <option value="premium">PREMIUM</option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <label class="mt-2"><span style="color: black;">Categoria</span></label>
                    <select name="categoria" class="form-select">
              <option value="1" <?php if ($dados['categoria'] == '1') echo 'selected'; ?>>CATEGORIA VIVO</option>
              <option value="2" <?php if ($dados['categoria'] == '2') echo 'selected'; ?>>CATEGORIA CLARO</option>
              <option value="3" <?php if ($dados['categoria'] == '3') echo 'selected'; ?>>CATEGORIA TIM</option>
              <option value="4" <?php if ($dados['categoria'] == '4') echo 'selected'; ?>>CATEGORIA FLUKE</option>
              <option value="5" <?php if ($dados['categoria'] == '5') echo 'selected'; ?>>CATEGORIA OI</option>
              <option value="6" <?php if ($dados['categoria'] == '6') echo 'selected'; ?>>CATEGORIA VEEKE</option>
              <option value="7" <?php if ($dados['categoria'] == '7') echo 'selected'; ?>>CATEGORIA LARICEL</option>
              <option value="8" <?php if ($dados['categoria'] == '8') echo 'selected'; ?>>CATEGORIA FLAMENGO</option>
              <option value="9" <?php if ($dados['categoria'] == '9') echo 'selected'; ?>>CATEGORIA TODS</option>
              <option value="10" <?php if ($dados['categoria'] == '10') echo 'selected'; ?>>CATEGORIA ALEATÓRIA</option>
                    </select>
                        <div class="mt-2 row">
                            <div class="col">
                                <label for=""><span style="color: black;">Server Port</span></label>
                                <input type="text" value="22" name="serverport" value="<?= htmlspecialchars($dados['ServerPort']) ?>" class="form-control">
                            </div>
                            <div class="col">
                                <label for=""><span style="color: black;">SSL Port</span></label>
                                <input type="text" value="<?= htmlspecialchars($dados['SSLPort']) ?>" name="sslport" class="form-control">
                            </div>
                        </div>

                        <div class="mt-2 row">
                            <div class="col">
                                <label for=""><span style="color: black;">CheckUser</span></label>
                                <input type="text" value="<?= htmlspecialchars($dados['CheckUser']) ?>" name="checkuser" class="form-control">
                            </div>
                        </div>
                        
                              <div class="mt-2 row">
                            <div class="col">
                                <label for=""><span style="color: black;">Online</span></label>
                                <input type="text" value="<?= htmlspecialchars($dados['Online']) ?>" name="online" class="form-control">
                            </div>
                        </div>
                        
                        
                        <div class="mt-2 row">
                            <div class="col">
                                <label for=""><span style="color: black;">ServerUser</span></label>
                                <input type="text" value="<?= $dados['ServerUser'] ?>" name="serveruser" class="form-control">
                            </div>
                            <div class="col">
                                <label for=""><span style="color: black;">ServerPass</span></label>
                                <input type="text" value="<?= $dados['ServerPass'] ?>" name="serverpass" class="form-control">
                            </div>
                        </div>

              
              
                   <div class="row">
                           
                            <div class="col">
                                <label for=""><span style="color: black;">SNI</span></label>
                                <input type="text" name="sni" value="<?= htmlspecialchars($dados['SNI']) ?>" class="form-control">
                            </div>
                        </div>

                        <div class="mt-2 row">
                            <div class="col">
                                <label for=""><span style="color: black;">ProxyIP</span></label>
                                <input type="text" name="proxyip" value="<?= htmlspecialchars($dados['ProxyIP']) ?>" class="form-control">
                            </div>
                            <div class="col">
                                <label for=""><span style="color: black;">Proxy Port</span></label>
                                <input type="text" name="proxyport" value="<?= htmlspecialchars($dados['ProxyPort']) ?>" class="form-control">
                            </div>
                        </div>

                        <div class="mt-2 row">
                            <div class="col">
                                <label for=""><span style="color: black;">TlsIP</span></label>
                                <input type="text" name="tlsip" value="<?= htmlspecialchars($dados['TlsIP']) ?>" class="form-control">
                     
                           
                            </div>
                        </div>

                        <label class="mt-2"><span style="color: black;">Info</span></label>
                        <select name="info" class="form-select">
                            <option value="Tlsws" <?php if ($dados['Info'] == 'Tlsws') echo 'selected'; ?>>WS/SSL</option>
                            <option value="Direct" <?php if ($dados['Info'] == 'Direct') echo 'selected'; ?>>SSH/Direct</option>
                            <option value="Proxy" <?php if ($dados['Info'] == 'Proxy') echo 'selected'; ?>>SSH/Proxy</option>
                            <option value="Ssl" <?php if ($dados['Info'] == 'Ssl') echo 'selected'; ?>>SSH/SSL</option>
                        </select>

                       
                       

                        <label class="mt-2"><span style="color: black;">Payload</span></label>
                        <textarea class="form-control" name="pay" rows="4"><?= htmlspecialchars(str_replace("\n","\\n",$dados['Payload'])) ?></textarea>

                </div>
              
                <div class="modal-footer">
                    <button type="submit" name="atualiza_servidor" style="color: white" class="btn btn-success">Editar</button></form>
                    <form action="excluir.php?acao=servidor" method="post">
                        <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                        <input type="hidden" name="id_owner" value="<?= getIdBySid($sid) ?>">
                        <button type="submit" name="excluir_servidor" style="color: white" class="btn btn-danger ms-auto" data-bs-dismiss="modal">Excluir</button>
                    </form>
                    <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#modal-editar-servidor').modal('show');
        });
    </script>

<?php endif; ?>

<!------------------------------------------------------------------------------------>
<!-- MODAL CONFIGURAÇÕES -->
<!------------------------------------------------------------------------------------>
<div class="modal fade" id="modal-configuracoes" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Configuracoes</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="editar.php?acao=config" method="post">
                    <input type="hidden" name="id_owner" value="<?= getIdBySid($sid) ?>">
                    <div class="row">
                        <div class="col">
                            <label for="">Update</label>
                            <input type="text" name="update" class="form-control" value="<?= htmlspecialchars(getConfig('link')) ?>/update/<?= getData('pasta_att', $uid) ?>/config" disabled>
                        </div>
                        <div class="col">
                            <label for="">SMS</label>
                            <input type="text" name="sms" class="form-control" value="<?= htmlspecialchars(getConfig('link')) ?>/update/<?= getData('pasta_att', $uid) ?>/sms" disabled>
                        </div>
                    </div>
                     <div class="row mt-2">
                        <div class="col">
                            <label for="">Painel do APP</label>
                            <input type="text" name="painel" class="form-control" value="<?= htmlspecialchars(getConfigUser('painel', $uid)) ?>">
                        </div>
                        
                      </div>
                       <div class="row mt-2">
                        <div class="col">
                            <label for="">Udp Port</label>
                            <input type="text" name="udpport" class="form-control" value="<?= htmlspecialchars(getConfigUser('udpport', $uid)) ?>">
                        </div>
                        
                      </div>
                      
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="<?= htmlspecialchars(getConfigUser('email', $uid)) ?>">
                        </div>
                        
                        <div class="row mt-2">
                        <div class="col">
                            <label for="">Contato</label>
                            <input type="text" name="contato" class="form-control" value="<?= htmlspecialchars(getConfigUser('contato', $uid)) ?>">
                        </div>
                    </div>
                    
                    
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">Video Online</label>
                            <input type="text" name="videoUrl" class="form-control" value="<?= htmlspecialchars(getConfigUser('videoUrl', $uid)) ?>">
                        </div>
                        </div>
                        
                    
                    <div class="row mt-2">
                    <div class="col">
                            • Site para hospedar suas foto <a href="https://pt-br.imgbb.com/" target="_blank" style="color: red;">AQUI</a>
                            <label for="">Logo Online ou Gif</label>
                            <input type="text" name="LogoOnline" class="form-control" value="<?= htmlspecialchars(getConfigUser('LogoOnline', $uid)) ?>">
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                    <div class="col">
                            <label for="">Fundo Online ou Gif</label>
                            <input type="text" name="FundoOnline" class="form-control" value="<?= htmlspecialchars(getConfigUser('FundoOnline', $uid)) ?>">
                        </div>
                    </div>
              
                    </div>
                    
                    
                    
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">CheckUser</label>
                            <select name="checkuser" class="form-select">
                                <option value="true">Ativado</option>
                                <option value="false">Desativado</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Online</label>
                            <select name="online" class="form-select">
                                <option value="true">Ativado</option>
                                <option value="false">Desativado</option>
                            </select>
                        </div>
                    </div>
                    
                        
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">Termos</label>
                            <input type="text" name="termos" class="form-control" value="<?= htmlspecialchars(getConfigUser('termos', $uid)) ?>">
                        </div>
                        
                    </div>

                    
                    
                    <div class="row mt-2">
                        <div class="col">
                            <label for="">Notas</label>
                            <textarea name="notas" class="form-control" rows="4"><?= htmlspecialchars(getConfigUser('notas', $uid)) ?></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="atualiza_config" style="color: white" class="btn btn-success">Editar</button></form>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------>
<!-- MODAL SMS -->
<!------------------------------------------------------------------------------------>
<div class="modal fade" id="modal-sms" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Enviar SMS</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $sql = $conn->prepare("SELECT * FROM mensagens WHERE id=?");
                $sql->execute([$uid]);
                $dados = $sql->fetch(PDO::FETCH_ASSOC);  ?>

                <form action="editar.php?acao=sms" method="post">
                    <input type="hidden" name="id_owner" value="<?= getIdBySid($sid) ?>">


                    <label for=""><span style="color: black;">Mensagem</span></label>
                    <textarea name="sms" class="form-control" rows="4"><?= htmlspecialchars(str_replace("\n","\\n",$dados['msg'])) ?></textarea>

            </div>
            <div class="modal-footer">
                <button type="submit" name="atualiza_sms" style="color: white" class="btn btn-success">Enviar</button></form>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>