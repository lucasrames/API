<?php
include "include/config.php";

if($_POST){
       
        try{
             $stmt = $c->prepare ( "INSERT cliente  VALUES(null,
        `tipo_pessoa`,
        `email`,
        `cpf`,
        `rg`,
        `data_nascimento`,
        `inscricao_estadual`,
        `telefone`,
        `celular`,
        `site`,
        `observacao`,
        `cep`,
        `logradouro`,
        `numero`,
        `complemento`,
        `bairro`,
        `cidade`,
        `estado`");
        $stmt->bindParam ( 1, $_POST['data']['Cliente']['tipo_pessoa']);
        $stmt->bindParam ( 2, $_POST['data']['Cliente']['email']);
        $stmt->bindParam ( 3, $_POST['data']['Cliente']['pf_cpf']);
        $stmt->bindParam ( 4, $_POST['data']['Cliente']['pf_rg']);
        $stmt->bindParam ( 5, $_POST['data']['Cliente']['pf_data_nascimento']);
        $stmt->bindParam ( 6, $_POST['data']['Cliente']['pj_inscricao_estadual']);
        $stmt->bindParam ( 7, $_POST['data']['Cliente']['telefone']);
        $stmt->bindParam ( 8, $_POST['data']['Cliente']['celular']);
        $stmt->bindParam ( 9, $_POST['data']['Cliente']['site']);
        $stmt->bindParam ( 10, $_POST['data']['Cliente']['observacoes']);
        $stmt->bindParam ( 11, $_POST['data']['ClientesEndereco']['cep']);
        $stmt->bindParam ( 12, $_POST['data']['ClientesEndereco']['logradouro']);
        $stmt->bindParam ( 13,$_POST['data']['ClientesEndereco']['numero']);
        $stmt->bindParam ( 14,$_POST['data']['ClientesEndereco']['complemento']);
        $stmt->bindParam ( 15,$_POST['data']['ClientesEndereco']['bairro']);
        $stmt->bindParam ( 16,$_POST['data']['ClientesEndereco']['nome_cidade']);
        $stmt->bindParam ( 17,$_POST['data']['ClientesEndereco']['estado']);
        $stmt->execute();
        echo $_POST['data']['Cliente']['tipo_pessoa'];
        echo $_POST['data']['Cliente']['email'];
        echo $_POST['data']['Cliente']['pf_cpf'];
        echo $_POST['data']['Cliente']['pf_rg'];

        }catch(Exception $e){
            die("erro:" . $e->errorInfo());
        }


echo "<pre>";
print_r($_POST);
die();
}

?>
<!DOCTYPE html>
<!-- saved from url= -->
<html style="min-height: 1553px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Adicionar cliente</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#0C1B25">
    <meta name="msapplication-navbutton-color" content="#0C1B25">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0C1B25">
    <link href="https://drive.beteltecnologia.com/icons/dominios/favicon.gestaoclick.com.ico" type="image/x-icon" rel="icon"><link href="https://drive.beteltecnologia.com/icons/dominios/favicon.gestaoclick.com.ico" type="image/x-icon" rel="shortcut icon"><style>.file-input-wrapper { overflow: hidden; position: relative; cursor: pointer; z-index: 1; }.file-input-wrapper input[type=file], .file-input-wrapper input[type=file]:focus, .file-input-wrapper input[type=file]:hover { position: absolute; top: 0; left: 0; cursor: pointer; opacity: 0; filter: alpha(opacity=0); z-index: 99; outline: 0; }.file-input-name { margin-left: 8px; }</style><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/bootstrap.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/font-awesome.min.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/iconFont.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/whhg.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/datepicker.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/AdminLTE.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/dataTables.bootstrap.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/bootstrap-timepicker.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/token-input.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/all.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/jquery.simplecolorpicker.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/tabdrop.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/bootstrap-tour.css"><link rel="stylesheet" type="text/css" href="./GestãoClick - Adicionar cliente_files/bootstrap-select.css"><script async="" charset="utf-8" src="./GestãoClick - Adicionar cliente_files/w" type="text/javascript"></script><script type="text/javascript" async="" src="./GestãoClick - Adicionar cliente_files/f.txt"></script><script src="./GestãoClick - Adicionar cliente_files/leadflows.js.download" type="text/javascript" id="LeadFlows-5929776" crossorigin="anonymous" data-leadin-portal-id="5929776" data-leadin-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="5929776" data-hsjs-env="prod"></script><script src="./GestãoClick - Adicionar cliente_files/fb.js.download" type="text/javascript" id="hs-ads-pixel-5929776" data-ads-portal-id="5929776" data-ads-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="5929776" data-hsjs-env="prod"></script><script src="./GestãoClick - Adicionar cliente_files/5929776.js.download" type="text/javascript" id="hs-analytics"></script><script src="./GestãoClick - Adicionar cliente_files/conversations-embed.js.download" type="text/javascript" id="hubspot-messages-loader" data-loader="hs-scriptloader" data-hsjs-portal="5929776" data-hsjs-env="prod"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/jquery-1.7.1.min.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/jquery-ui-1.10.3.min.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap.min.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootbox.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap.file-input.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap-tabdrop.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/jquery.validate.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/jquery.simplecolorpicker.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/mascaras.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/cep.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/receitaws.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/token-input.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap-datepicker.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap-datepicker.pt-BR.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap-timepicker.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/app.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/urlify.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap-tour.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/jquery.scrollTo.min.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/bootstrap-select.js.download"></script><style>
    #carregando div,#carregando-nfc div {
        border-color: #f3f3f3;
        border-top-color: #0C1B25;
        border-bottom-color: #0C1B25;
    }

    #bem-vindo .modal-header, #curtir-facebook .modal-header{
        background: #0C1B25;
        color: #FFFFFF;
    }

    .pace .pace-progress {
      background: #1F4968;
    }

    a {
      color: #0C1B25;
    }

    a:hover,
    a:active,
    a:focus {
      color: #1F4968    }

    .text-primary{
        color: #0C1B25    }

    .text-primary:hover{
        color: #1F4968    }

    .cor-padrao{
      color: #0C1B25    }

    .flash-tab{
      background: #0C1B25;
    }

    .dropdown-menu > li > a:hover {
      background-color: #0C1B25;
    }

    .navbar-nav > .user-menu > .dropdown-menu > li.user-header {
      background: #0C1B25;
    }

    .box.box-primary {
      border-top-color: #0C1B25;
    }

    .box.box-solid.box-primary > .box-header {
      background: #0C1B25;
      background-color: #0C1B25;
    }

    .box .todo-list > li.primary {
      border-left-color: #0C1B25;
    }

    .bg-light-blue {
      background-color: #0C1B25 !important;
    }

    .bg-olive {
      background-color: #0C1B25 !important;
    }

    .text-light-blue {
      color: #0C1B25 !important;
    }

    .text-olive {
      color: #0C1B25 !important;
    }

    .btn.btn-primary {
      background-color: #0C1B25;
      border-color: #1F4968;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open .dropdown-toggle.btn-primary {
      background-color: #1F4968;
      border-color: #0C1B25;
    }

    .nav.nav-pills > li.active > a,
    .nav.nav-pills > li.active > a:hover {
      border-top-color: #0C1B25;
      color: #444;
    }

    .nav.nav-pills.nav-stacked > li.active > a,
    .nav.nav-pills.nav-stacked > li.active > a:hover {
      border-left-color: #0C1B25;
    }

    .nav-tabs-custom > .nav-tabs > li.active {
      border-top-color: #0C1B25;
    }

    .form-box .header {
      background: #0C1B25;
    }

    .skin-blue .navbar {
      background-color: #0C1B25;
    }

    .form-control:hover,.form-control:focus,.form-control-table:hover,.form-control-table:focus{
      border-color: #0C1B25 !important;
    }

    .progress-bar-light-blue,
    .progress-bar-primary {
      background-color: #0C1B25;
    }

    fieldset legend {
        color: #0C1B25;
    }

    table.calendario tr td .compromissos{
        background: #0C1B25;
    }

    .btn.btn-primary {
      border-color: #0C1B25;
    }

    .btn.btn-primary:hover,
    .btn.btn-primary:active,
    .btn.btn-primary.hover {
      background-color: #0C1B25;
    }

    .skin-blue .logo {
      background-color: #0C1B25;
    }


    div.token-input-dropdown ul li.token-input-selected-dropdown-item {
        background: #0C1B25 !important;
    }

    .text-info {
      color:#0C1B25;
    }
    .text-info:hover {
      color:#1F4968;
    }

    .pagination > .active > a,
    .pagination > .active > span,
    .pagination > .active > a:hover,
    .pagination > .active > span:hover,
    .pagination > .active > a:focus,
    .pagination > .active > span:focus {
      background-color: #0C1B25;
    }

    .wizard li.active span.round-tab {
        border: 2px solid #0C1B25;
    }

    .wizard li.active span.round-tab i{
        color: #0C1B25;
    }

    .wizard li:after{
        border-bottom-color: #0C1B25;
    }

    .wizard li.active:after {
        border-bottom-color: #0C1B25;
    }

    .ui-button.ui-state-active:hover {
    	background: #0C1B25 !important;
    }
</style> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script>
        var casasDecimaisQuantidade = 2;
        var casasDecimaisValor = 2;
        var nomeApp = 'GestãoClick';
        var urlApp = 'https://gestaoclick.com';
        var iconeApp = 'favicon.gestaoclick.com.ico';
        var ipRede = '189.33.140.183';
        var urlBase = '/';
        var urlExternalFiles = 'https://drive.beteltecnologia.com';

            </script>

<style>
    #carregando{
        display: block;
    }
</style><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/asset_composer.5e12e43b022a913c3713.js.download" charset="utf-8" async=""></script><script async="" src="./GestãoClick - Adicionar cliente_files/js"></script><script src="./GestãoClick - Adicionar cliente_files/f(1).txt"></script><style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style></head>    
    <body class="skin-blue  pace-done" style="min-height: 1553px;"><div class="zopim" __jx__id="___$_141 ___$_141" data-test-id="ChatWidgetButton" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000002; width: 180px; height: 30px; right: 10px; bottom: 0px; display: none;"><iframe frameborder="0" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;" src="./GestãoClick - Adicionar cliente_files/saved_resource.html" data-test-id="ChatWidgetButton-iframe" title="Zendesk Chat widget button"></iframe></div><div class="zopim" __jx__id="___$_4 ___$_4" data-test-id="ChatWidgetWindow" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000001; right: 8px; bottom: 0px; border-top-left-radius: 5px; border-top-right-radius: 5px; display: none; width: 350px; height: 450px; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 3px 2px;"><iframe frameborder="0" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;" src="./GestãoClick - Adicionar cliente_files/saved_resource(1).html" data-test-id="ChatWidgetWindow-iframe" title="Zendesk Chat widget window"></iframe></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><style type="text/css">html.hs-messages-widget-open.hs-messages-mobile,html.hs-messages-widget-open.hs-messages-mobile body{height:100%!important;overflow:hidden!important;position:relative!important}html.hs-messages-widget-open.hs-messages-mobile body{margin:0!important}#hubspot-messages-iframe-container{display:initial!important;z-index:2147483647;position:fixed!important;bottom:0!important}#hubspot-messages-iframe-container.widget-align-left{left:0!important}#hubspot-messages-iframe-container.widget-align-right{right:0!important}#hubspot-messages-iframe-container.internal{z-index:1016}#hubspot-messages-iframe-container.internal iframe{min-width:108px}#hubspot-messages-iframe-container .shadow{display:initial!important;z-index:-1;position:absolute;width:0;height:0;bottom:0;content:""}#hubspot-messages-iframe-container .shadow.internal{display:none!important}#hubspot-messages-iframe-container .shadow.active{width:400px;height:400px}#hubspot-messages-iframe-container iframe{display:initial!important;width:100%!important;height:100%!important;border:none!important;position:absolute!important;bottom:0!important;right:0!important;background:transparent!important}</style>
        <div id="carregando" style="display: none;"><div><img src="./GestãoClick - Adicionar cliente_files/loading.gif" alt=""></div></div>
<script type="text/javascript" id="hs-script-loader" async="" defer="" src="./GestãoClick - Adicionar cliente_files/5929776.js(1).download"></script>
                <script type="text/javascript">
                    var _hsq = window._hsq = window._hsq || [];
                    _hsq.push(["identify", {
                        firstname: 'lucas rames de oliveira',
                        email: 'lucas_rames@hotmail.com',
                    } ]);
                </script>
<script id="ze-snippet" src="./GestãoClick - Adicionar cliente_files/snippet.js.download"> </script>
<script type="text/javascript">
$(document).ready(function(){

    window.zESettings = {
        webWidget: {
            color: {
                theme: '#0C1B25'
            },
            helpCenter: {
                filter: {
                                            section: '360002564894,360001808354,360001821573,360001803893,360001803873,360001744194,360001787433,360001787413,360001787393,360001744134,360001744114,360001787353,360001744074,360001744054,360001744034,360001744014,360001743994,360001743954'
                                    }
            }
        }
    };

    zE(function(){
        $zopim(function(){
            window.$zopim.livechat.window.onHide(function () {
               $('#webWidget').css('top', '-9999px');
            });
                                window.$zopim.livechat.departments.filter('1 - Suporte', '2 - Comercial', '3 - Financeiro');
                        $('#launcher')
            .css('width', 'auto')
            .css('height', '30px')
            .css('min-height', '30px')
            .css('margin', '0')
            //.contents().find('.src-component-Launcher-wrapper')
            .contents().find('.src-component-launcher-WidgetLauncher-wrapper')
            .css('padding', '5px 10px 10px 10px')
            .css('border-radius', '5px 5px 0 0')
            //.find('span.src-component-Launcher-label')
            .find('span.src-component-launcher-WidgetLauncher-label')
            .text('Suporte ao sistema');
        });
                        zE.identify({
                    name: 'lucas rames de oliveira',
                    email: 'lucas_rames@hotmail.com',
                    organization: 'Matriz',
                });
            });
    setTimeout(function(){
        zE(function(){
            $zopim(function(){
                                        window.$zopim.livechat.departments.filter('1 - Suporte', '2 - Comercial', '3 - Financeiro');
                                $('#launcher')
                .css('width', 'auto')
                .css('height', '30px')
                .css('min-height', '30px')
                .css('margin', '0')
                //.contents().find('.src-component-Launcher-wrapper')
                .contents().find('.src-component-launcher-WidgetLauncher-wrapper')
                .css('padding', '5px 10px 10px 10px')
                .css('border-radius', '5px 5px 0 0')
                //.find('span.src-component-Launcher-label')
                .find('span.src-component-launcher-WidgetLauncher-label')
                .text('Suporte ao sistema');
            });
        });
    }, 3000);
});

function ativaChat(){
    zE.activate();
}

</script>
<script>

    $(document).ready(function(){
        if($('body').find('h1').length){
            document.title = document.title + ' - ' + $('body').find('h1:first').text();
        }
                                escondeMenu();
                });
</script>

<header class="header">

    <a href="https://" class="logo"><img src="GestãoClick - Adicionar cliente_files/logo_finais_trans-01.png" width="205" height="69" alt=""/></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
        <a id="statusmenu" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
                <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li id="topo-notificacoes" class="dropdown notifications-menu">
                    <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#" class="dropdown-toggle" data-toggle="dropdown" onclick="carregaUltimasNotificacoes();">
                        <i class="fa fa-warning"></i>
                                            </a>
                    <ul id="ultimas-notificacoes" class="dropdown-menu"></ul>
                </li>
                <li id="topo-ajuda" class="dropdown help-menu">
                    <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-question-circle"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Ajuda</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; max-height: 350px;"><ul class="menu" style="overflow: hidden; width: 100%; max-height: 350px;">
                                                                    <li>
                                        <a href="https://gestaoclick.com/ajuda">
                                            <h3>
                                                <div><i class="fa fa fa-list-alt margin-right-5px"></i>Central de ajuda</div>
                                                <span class="text-muted">Encontre aqui soluções e respostas rápidas</span>
                                            </h3>
                                        </a>
                                    </li>
                                    <li><!-- Task item -->
                                        <a href="https://gestaoclick.com/ajuda/videos_tutoriais">
                                            <h3>
                                                <div><i class="fa fa-caret-square-o-right margin-right-5px"></i>Vídeos tutoriais</div>
                                                <span class="text-muted">Aprenda sobre os recursos do sistema</span>
                                            </h3>
                                        </a>
                                    </li><!-- end task item -->
                                                                <li><!-- Task item -->
                                    <a href="javascript:ativaChat()">
                                        <h3>
                                            <div><i class="fa fa-comments margin-right-5px"></i>Atendimento via chat</div>
                                            <span class="text-muted">Converse com nossa equipe de suporte</span>
                                        </h3>
                                    </a>
                                </li>
                                                                    <li><!-- Task item -->
                                        <a href="https://gestaoclick.com/atualizacoes">
                                            <h3>
                                                <div><i class="fa fa-refresh margin-right-5px"></i>Atualizações</div>
                                                <span class="text-muted">Confira o que há de novo no GestãoClick</span>
                                            </h3>
                                        </a>
                                    </li><!-- end task item -->
                                                                <li><!-- Task item -->
                                    <a href="https://gestaoclick.com/desktop/GestaoClick.exe" target="_blank">
                                        <h3>
                                            <div><i class="fa icon-font icon-battery margin-right-5px"></i>Aplicativo Desktop</div>
                                            <span class="text-muted">Aplicativo para emissão de notas com certificado A3</span>
                                        </h3>
                                    </a>
                                </li>
                                <li><!-- Task item -->
                                    <a href="https://gestaoclick.com/downloads/TeamViewer.exe" target="_blank">
                                        <h3>
                                            <div><i class="fa icon-sync margin-right-5px"></i>Suporte remoto</div>
                                            <span class="text-muted">Acessamos seu computador pela Internet</span>
                                        </h3>
                                    </a>
                                </li>
                            </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 0px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </li>
                    </ul>
                </li>
                <li id="topo-configuracoes" class="dropdown help-menu">
                    <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa fa-cogs"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Configurações</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; max-height: 350px;"><ul class="menu" style="overflow: hidden; width: 100%; max-height: 350px;">
                                <li>
                                    <a href="https://gestaoclick.com/configuracoes/gerais">
                                        <h3><i class="fa fa-gear"></i> Gerais</h3>
                                    </a>
                                </li>
                                                                <li>
                                    <a href="https://gestaoclick.com/planos/meu_plano">
                                        <h3><i class="fa fa-star-half-o"></i> Meu plano</h3>
                                    </a>
                                </li>
                                                                                                    <li>
                                        <a href="https://gestaoclick.com/integracoes">
                                            <h3><i class="fa fa icon-sync"></i> Integrações</h3>
                                        </a>
                                    </li>
                                                                <li>
                                    <a href="https://gestaoclick.com/configuracoes/dados_empresa">
                                        <h3><i class="fa fa-suitcase"></i> Dados da empresa</h3>
                                    </a>
                                </li>
                                                                    <li>
                                        <a href="https://gestaoclick.com/contador">
                                            <h3><i class="fa icon-user"></i> Meu contador</h3>
                                        </a>
                                    </li>
                                                                                                    <li>
                                        <a href="https://gestaoclick.com/backup_dados">
                                            <h3><i class="fa fa-hdd-o"></i> Backup de dados</h3>
                                        </a>
                                    </li>
                                                                <li>
                                    <a href="https://gestaoclick.com/exclusao_dados">
                                        <h3><i class="fa fa-trash-o"></i> Exclusão de dados</h3>
                                    </a>
                                </li>
                            </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 0px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="hidden-xs">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>lucas rames de oliveira <i class="caret"></i></span>
                        </div>
                        <div class="visible-xs">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>lucas... <i class="caret"></i></span>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="./GestãoClick - Adicionar cliente_files/sem-foto.png" width="200">
                            <p>
                                lucas rames de oliveira                                <small>Membro desde 16/08/2019 12:11:58</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="https://gestaoclick.com/usuarios/meus_dados" class="btn btn-default btn-flat">Meus Dados</a>
                            </div>
                            <div class="pull-right">
                                <a href="https://gestaoclick.com/usuarios/logout" class="btn btn-default btn-flat">Sair</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>        <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 526px;">

                            <!-- Left side column. contains the logo and sidebar -->
                <aside class="left-side sidebar-offcanvas left-side-demonstration" style="min-height: 1553px;">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                        <!-- Sidebar user panel -->
                        <div class="user-panel">
                            <div class="text-center image">
                                                                <a href="https://gestaoclick.com/inicio" border="0">
                                    <img src="./GestãoClick - Adicionar cliente_files/no-foto.png" width="150" alt="">                                </a>
                            </div>
                            <div class="">
                                                            </div>
                        </div>
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">

                    <li class="active treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa fa-list-alt"></span>Cadastros                                                        <i class="fa pull-right fa-angle-down"></i>
                      </a>
                                                <ul class="treeview-menu" style="display: block;">
                                                                <li class="">
                                    <a class="bold" href="https://gestaoclick.com/clientes/?menu=MTU=" style="margin-left: 10px;">
                                        <span class="fa icon-groups-friends"></span>Clientes                                                                            </a>
                                                  </li>
                                                                
                                                                <li class=""></li>
                                                                <li class="treeview">
                                                                  <ul class="treeview-menu">
                                                                                      <li>
                                                        <a class="" href="https://gestaoclick.com/tipos_contatos/?menu=MTU=" style="margin-left: 20px;">
                                                            <span class="fa fa-bullhorn"></span>Tipos de contatos                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/tipos_enderecos/?menu=MTU=" style="margin-left: 20px;">
                                                            <span class="glyphicon glyphicon-map-marker"></span>Tipos de endereços                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_clientes/?menu=MTU=" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                      </ul>
                              </li>
                        <li class="treeview">
<ul class="treeview-menu">
                          <li class="">
                                    <a class="" href="https://gestaoclick.com/produtos/?menu=OA==" style="margin-left: 10px;">
                                        <span class="fa  icon-cube"></span>Gerenciar produtos                                                                            </a>
          </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/tipos_valores_produtos/?menu=OA==" style="margin-left: 10px;">
                                        <span class="fa icon-resellerhosting"></span>Valores de venda                                                                            </a>
          </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/etiquetas/?menu=OA==" style="margin-left: 10px;">
                                        <span class="fa fa-tag"></span>Etiquetas                                                                            </a>
          </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=OA==" style="margin-left: 10px;">
                                        <span class="fa fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/grupos_produtos/?menu=OA==" style="margin-left: 20px;">
                                                            <span class="fa fa-sitemap"></span>Grupos de produtos                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/unidades_produtos/?menu=OA==" style="margin-left: 20px;">
                                                            <span class="fa  fa-flask"></span>Unidades de produtos                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/grades/?menu=OA==" style="margin-left: 20px;">
                                                            <span class="fa icon-foldertree"></span>Grades/variações                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_produtos/?menu=OA==" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                  </ul>
          </li>
                          </ul>
                              </li>
                        <li class="treeview">
<ul class="treeview-menu">
                        <li class="">
                                    <a class="" href="https://gestaoclick.com/servicos/?menu=NTE=" style="margin-left: 10px;">
                                        <span class="fa icon-wrenchalt"></span>Gerenciar serviços                                                                            </a>
          </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa fa-clipboard"></span>Orçamentos                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/orcamentos_produtos/?menu=NjA=" style="margin-left: 10px;">
                                        <span class="fa icon-cube"></span>Produtos                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/orcamentos_servicos/?menu=NjA=" style="margin-left: 10px;">
                                        <span class="fa icon-websitebuilder"></span>Serviços                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=NjA=" style="margin-left: 10px;">
                                        <span class="fa fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/situacoes_orcamentos/?menu=NjA=" style="margin-left: 20px;">
                                                            <span class="fa fa-list-ol"></span>Situações                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_orcamentos/index?menu=NjA=" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=NjA=&amp;modulo=orcamento" style="margin-left: 20px;">
                                                            <span class="fa fa-gear"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa icon-breakable"></span>Ordens de serviços                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/ordens_servicos/?menu=MTI4" style="margin-left: 10px;">
                                        <span class="fa icon-websitebuilder"></span>Gerenciar O.S.                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=MTI4" style="margin-left: 10px;">
                                        <span class="fa  fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/situacoes_ordens_servicos/?menu=MTI4" style="margin-left: 20px;">
                                                            <span class="fa fa-list-ul"></span>Situações                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_ordens_servicos/?menu=MTI4" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=MTI4&amp;modulo=os" style="margin-left: 20px;">
                                                            <span class="fa fa-gear"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa icon-shopping"></span>Vendas                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/vendas_produtos/?menu=MTE=" style="margin-left: 10px;">
                                        <span class="fa  icon-cube"></span>Produtos                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/vendas_balcao/?menu=MTE=" style="margin-left: 10px;">
                                        <span class="fa fa-laptop"></span>Balcão                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/vendas_servicos/?menu=MTE=" style="margin-left: 10px;">
                                        <span class="fa icon-websitebuilder"></span>Serviços                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=MTE=" style="margin-left: 10px;">
                                        <span class="fa fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/devolucoes/?menu=MTE=" style="margin-left: 20px;">
                                                            <span class="fa fa-mail-reply-all"></span>Devoluções                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/canais_vendas/?menu=MTE=" style="margin-left: 20px;">
                                                            <span class="fa fa-bullhorn"></span>Canais                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/situacoes_vendas/?menu=MTE=" style="margin-left: 20px;">
                                                            <span class="fa fa-list-ul"></span>Situações                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_vendas/?menu=MTE=" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=MTE=&amp;modulo=vendas" style="margin-left: 20px;">
                                                            <span class="fa fa-gear"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa icon-cube"></span>Estoque                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/produtos/index?menu=NDc=&amp;movimentacoes=true" style="margin-left: 10px;">
                                        <span class="fa fa-external-link"></span>Movimentações                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/ajustes_estoques/?menu=NDc=" style="margin-left: 10px;">
                                        <span class="fa  fa-arrows-alt"></span>Ajustes                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/transferencias_estoques/?menu=NDc=" style="margin-left: 10px;">
                                        <span class="fa fa-exchange"></span>Transferências                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/cotacoes/?menu=NDc=" style="margin-left: 10px;">
                                        <span class="fa icon-clipboard-paste"></span>Cotações                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/compras/?menu=NDc=" style="margin-left: 10px;">
                                        <span class="fa icon-addtocart"></span>Compras                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=NDc=" style="margin-left: 10px;">
                                        <span class="fa fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/situacoes_compras/?menu=NDc=" style="margin-left: 20px;">
                                                            <span class="fa fa-list-ul"></span>Situações de compras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_compras/?menu=NDc=" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=NDc=&amp;modulo=estoque" style="margin-left: 20px;">
                                                            <span class="fa fa-cogs"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa icon-moneybag"></span>Financeiro                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/movimentacoes_financeiras/index_pagamento?menu=MTg=" style="margin-left: 10px;">
                                        <span class="fa icon-stairsdown"></span>Contas a pagar                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/movimentacoes_financeiras/index_recebimento?menu=MTg=" style="margin-left: 10px;">
                                        <span class="fa icon-stairsup"></span>Contas a receber                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/movimentacoes_financeiras/fluxo_caixa?menu=MTg=" style="margin-left: 10px;">
                                        <span class="fa fa-bar-chart-o"></span>Fluxo de caixa                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/movimentacoes_financeiras/boletos_bancarios?menu=MTg=" style="margin-left: 10px;">
                                        <span class="fa fa-barcode"></span>Boletos bancários                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=MTg=" style="margin-left: 10px;">
                                        <span class="fa fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/caixas/index?menu=MTg=&amp;vendas=true" style="margin-left: 20px;">
                                                            <span class="fa fa-laptop"></span>Caixas                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/contas_bancarias/?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa icon-piggybank"></span>Contas bancárias                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/formas_pagamentos/?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa fa-money"></span>Formas de pagamento                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/categorias_movimentacoes_financeiras/?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa fa-sitemap"></span>Plano de contas                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/centros_custos/?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa icon-money-cash"></span>Centros de custos                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/movimentacoes_financeiras/importar_extrato?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa icon-piggybank"></span>Conciliação bancária                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/cheques/?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa icon-font icon-dollar"></span>Controle de cheques                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/movimentacoes_financeiras/transferencia_contas?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa fa-exchange"></span>Transferências                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_movimentacoes_financeiras/?menu=MTg=" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=MTg=&amp;modulo=financeiro" style="margin-left: 20px;">
                                                            <span class="fa fa-cogs"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa icon-sync"></span>Notas fiscais                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/notas_fiscais/?menu=ODU=" style="margin-left: 10px;">
                                        <span class="fa  fa-shopping-cart"></span>Gerenciar NF-e                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/notas_fiscais_servicos/?menu=ODU=" style="margin-left: 10px;">
                                        <span class="fa fa-file-text-o"></span>Gerenciar NFS-e                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/notas_fiscais_consumidores/?menu=ODU=" style="margin-left: 10px;">
                                        <span class="fa fa-qrcode"></span>Gerenciar NFC-e                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=ODU=" style="margin-left: 10px;">
                                        <span class="fa  fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/notas_fiscais/importar_xml?menu=ODU=" style="margin-left: 20px;">
                                                            <span class="fa icon-font icon-file-xml"></span>Importar XML                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/certificado_digital?menu=ODU=" style="margin-left: 20px;">
                                                            <span class="fa icon-certificatethree"></span>Certificado digital                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/naturezas_operacoes/?menu=ODU=" style="margin-left: 20px;">
                                                            <span class="fa fa-exchange"></span>Naturezas de operações                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/ncm/?menu=ODU=" style="margin-left: 20px;">
                                                            <span class="fa fa-barcode"></span>NCM - Tabela IBPT                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atividades_servicos/?menu=ODU=" style="margin-left: 20px;">
                                                            <span class="fa icon-websitebuilder"></span>Atividades de serviços                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=ODU=&amp;modulo=fiscal" style="margin-left: 20px;">
                                                            <span class="fa fa-cogs"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa fa-pencil-square-o"></span>Contratos                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/contratos_servicos/?menu=MTAz" style="margin-left: 10px;">
                                        <span class="fa icon-websitebuilder"></span>Serviços                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/locacoes/?menu=MTAz" style="margin-left: 10px;">
                                        <span class="glyphicon glyphicon-transfer"></span>Locações                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/servicos_recorrentes/?menu=MTAz" style="margin-left: 10px;">
                                        <span class="fa fa-refresh"></span>Assinaturas                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=MTAz" style="margin-left: 10px;">
                                        <span class="fa  fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/situacoes_contratos/?menu=MTAz" style="margin-left: 20px;">
                                                            <span class="fa fa-list-ul"></span>Situações de contratos                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/situacoes_locacoes/?menu=MTAz" style="margin-left: 20px;">
                                                            <span class="fa fa-list-ul"></span>Situações de locações                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_contratos/?menu=MTAz" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=MTAz&amp;modulo=contrato" style="margin-left: 20px;">
                                                            <span class="fa fa-cogs"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa fa-comments"></span>Atendimentos                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/atendimentos/?menu=NzU=" style="margin-left: 10px;">
                                        <span class="fa fa-phone-square"></span>Atendimentos                                                                            </a>
                                                  </li>
                                                                <li class="treeview">
                                    <a class="" href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#/?menu=NzU=" style="margin-left: 10px;">
                                        <span class="fa fa-clipboard"></span>Opções auxiliares                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                            <ul class="treeview-menu">
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/formas_atendimentos/?menu=NzU=" style="margin-left: 20px;">
                                                            <span class="fa fa-headphones"></span>Formas                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/assuntos_atendimentos/?menu=NzU=" style="margin-left: 20px;">
                                                            <span class="fa fa-pencil"></span>Assuntos                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/situacoes_atendimentos/?menu=NzU=" style="margin-left: 20px;">
                                                            <span class="fa fa-list-ul"></span>Situações                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/atributos_atendimentos/?menu=NzU=" style="margin-left: 20px;">
                                                            <span class="fa fa-files-o"></span>Campos extras                                                        </a>
                                                    </li>
                                                                                                <li>
                                                        <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=NzU=&amp;modulo=atendimento" style="margin-left: 20px;">
                                                            <span class="fa fa-cogs"></span>Configurações                                                        </a>
                                                    </li>
                                                                  </ul>
                                                  </li>
                          </ul>
                              </li>
                        <li class="">
                      <a href="https://gestaoclick.com/agendamentos/index"><span class="fa fa-calendar"></span>Agenda                                                  </a>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa icon-font icon-stats"></span>Relatórios                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_cadastros/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa fa-list-alt"></span>Cadastros                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_vendas/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa icon-shopping"></span>Vendas                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_ordens_servicos/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa icon-breakable"></span>Ordens de serviços                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_estoque/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa icon-cube"></span>Estoque                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_financeiros/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa icon-moneybag"></span>Financeiro                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_contratos/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa fa-pencil-square-o"></span>Contratos                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_notas_fiscais/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa icon-sync"></span>Notas fiscais                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_atendimentos/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa fa-comments"></span>Atendimentos                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/relatorios_agendamentos/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa fa-calendar"></span>Agendamentos                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/usuarios_logs/?menu=NjU=" style="margin-left: 10px;">
                                        <span class="fa fa-bar-chart-o"></span>Logs do sistema                                                                            </a>
                                                  </li>
                          </ul>
                              </li>
                        <li class="">
                      <a href="https://gestaoclick.com/webdesk/listar_clientes"><span class="fa fa-group"></span>WebDesk                                                  </a>
                              </li>
                        <li class="treeview">
                      <a href="https://gestaoclick.com/clientes/adicionar?retorno=https%3A%2F%2Fgestaoclick.com%2Fclientes%2F%3Fmenu%3DMTU%3D#"><span class="fa fa-cogs"></span>Configurações                                                        <i class="fa fa-angle-left pull-right"></i>
                          </a>
                                                <ul class="treeview-menu">
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/configuracoes/gerais?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa fa-gear"></span>Gerais                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/planos/meu_plano?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa fa-star-half-o"></span>Meu plano                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/usuarios/?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa fa-user"></span>Usuários                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/configuracoes/dados_empresa?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa fa-suitcase"></span>Dados da empresa                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/configuracoes/marca_empresa?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa icon-images-gallery"></span>Marca da empresa                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/lojas/?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa icon-store"></span>Empresas / Lojas                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/avisos/?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa fa-bullhorn"></span>Avisos por e-mail                                                                            </a>
                                                  </li>
                                                                <li class="">
                                    <a class="" href="https://gestaoclick.com/configuracoes/certificado_digital?menu=MzY=" style="margin-left: 10px;">
                                        <span class="fa icon-certificatethree"></span>Certificado digital                                                                            </a>
                                                  </li>
                          </ul>
                              </li>
            </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>
                        <!-- Right side column. Contains the navbar and content of the page -->
            <aside id="flash-message" class="right-side">
                			    <script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/jquery.fileupload.js.download"></script><script type="text/javascript" src="./GestãoClick - Adicionar cliente_files/adicionar.js.download"></script><script>
$(document).ready(function(){

            //$('#tour').modal('show');
        $('#start-tour').click();
    
    $.extend(jQuery.validator.messages, {required: ''});
    $('form').validate({
        ignore: [],
        onkeyup: false,
        highlight: function(element) {
            $(element).addClass('error');
            $('a[href="#' + $(element).parents('.tab-pane').attr('id') + '"]').trigger('click');
                    },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                validator.errorList[0].element.focus();
            }
        },
        submitHandler: function(form){
                            $('#carregando').show();
                form.submit();
                    }
    });

    
    $('#ClientePfCpf').live('change',function(){
        if($(this).val() != '' && $(this).valid()){
            $('#ClientePfCpf').addClass('carregando-validate');
            $.post('/clientes/verificaCpf',{'data[Cliente][pf_cpf]':$(this).val()},function(retorno){
                retorno = $.parseJSON(retorno);
                if(!retorno){
                    bootbox.alert('Já existe um cliente utilizando este CPF!');
                }
                $('#ClientePfCpf').removeClass('carregando-validate');
            });
        }
    });

    $('#ClientePjCnpj').live('change',function(){
        if($(this).val() != '' && $(this).valid()){
            $('#ClientePjCnpj').addClass('carregando-validate');
            $.post('/clientes/verificaCnpj',{'data[Cliente][pj_cnpj]':$(this).val()},function(retorno){
                retorno = $.parseJSON(retorno);
                if(!retorno){
                    bootbox.alert('Já existe um cliente utilizando este CNPJ!');
                }
                $('#ClientePjCnpj').removeClass('carregando-validate');
            });
        }
    });

    $('#ClienteTipoPessoa').live('change',function(){

        $('#pessoa-fisica #ClientePjIsentoInsEst, #pessoa-juridica #ClientePjIsentoInsEst').iCheck('uncheck');
        $('#pessoa-fisica #ClientePjInscricaoEstadual, #pessoa-juridica #ClientePjInscricaoEstadual').val('');

        if($(this).val() == 'PF'){

            $('#pessoa-fisica').show().find('input,select').attr('disabled',false);
            $('#pessoa-juridica').hide().find('input,select').attr('disabled',true);
            $('#pessoa-estrageira').hide().find('input,select').attr('disabled',true);

            if($('#ClientePjCnpj').valid() == 0){
                $('#ClientePjCnpj').val('');
            }

            $('#ClientePjTipoContribuinte').val(3);

            $('label:not(.error)[for="ClienteNome"]').html('Nome');
        }else if($(this).val() == 'PJ'){

            $('#pessoa-juridica').show().find('input,select').attr('disabled',false);
            $('#pessoa-fisica').hide().find('input,select').attr('disabled',true);
            $('#pessoa-estrageira').hide().find('input,select').attr('disabled',true);

            if($('#ClientePfCpf').valid() == 0){
                $('#ClientePfCpf').val('');
            }

            if($('#ClientePfDataNascimento').valid() == 0){
                $('#ClientePfDataNascimento').val('');
            }

            if($('#ClientePjInscricaoEstadual').val() == '' || $('#ClientePjInscricaoEstadual').attr('disabled') == true){
                $('#ClientePjTipoContribuinte').val(2);
            }else{
                $('#ClientePjTipoContribuinte').val(1);
            }

            $('label:not(.error)[for="ClienteNome"]').html('Nome fantasia');
        }else if($(this).val() == 'ES'){

            $('#ClientePjTipoContribuinte').val('');

            $('#pessoa-estrageira').show().find('input,select').attr('disabled',false);
            $('#pessoa-fisica').hide().find('input,select').attr('disabled',true);
            $('#pessoa-juridica').hide().find('input,select').attr('disabled',true);

            $('label:not(.error)[for="ClienteNome"]').html('Nome');

            if($('#ClientePfCpf').valid() == 0){
                $('#ClientePfCpf').val('');
            }

            if($('#ClientePjCnpj').valid() == 0){
                $('#ClientePjCnpj').val('');
            }

            if($('#ClientePfDataNascimento').valid() == 0){
                $('#ClientePfDataNascimento').val('');
            }

        }else{

            $('#ClientePjTipoContribuinte').val('');

            $('#pessoa-fisica').hide();
            $('#pessoa-juridica').hide();
            $('#pessoa-estrageira').hide();

            $('label:not(.error)[for="ClienteNome"]').html('Nome');

            if($('#ClientePfCpf').valid() == 0){
                $('#ClientePfCpf').val('');
            }

            if($('#ClientePjCnpj').valid() == 0){
                $('#ClientePjCnpj').val('');
            }

            if($('#ClientePfDataNascimento').valid() == 0){
                $('#ClientePfDataNascimento').val('');
            }
        }

                validaEnderecoTipoPessoa();
    });

    var iContatos = 0;
    $('#AdicionarContato').live('click',function(){
        contato = '';
        contato += '<div class = "contato">';
            contato += '<div class="form-group col-sm-4 col-md-4 col-lg-2">';
                contato += '<label>Tipo</label>';
                contato += '<input id = "tipo-contato-'+iContatos+'" type="text" name="data[ClientesContato]['+iContatos+'][tipo_id]" autoplay="true" class="form-control">';
                contato += '<input type="hidden" name="data[ClientesContato]['+iContatos+'][nome_tipo]" class = "nome-tipo">';
            contato += '</div>';
            contato += '<div class="form-group col-sm-4 col-md-4 col-lg-3">';
                contato += '<label>Nome</label>';
                contato += '<input type="text" maxlength="100" name="data[ClientesContato]['+iContatos+'][nome]" class = "form-control">';
            contato += '</div>';
            contato += '<div class="form-group col-sm-4 col-md-4 col-lg-3">';
                contato += '<label>Contato</label>';
                contato += '<input type="text" maxlength="60" name="data[ClientesContato]['+iContatos+'][contato]" class = "cliente-contato form-control">';
            contato += '</div>';
            contato += '<div class="form-group col-sm-4 col-md-4 col-lg-2">';
                contato += '<label>Cargo</label>';
                contato += '<input type="text" maxlength="100" name="data[ClientesContato]['+iContatos+'][cargo]" class = "form-control">';
            contato += '</div>';
            contato += '<div class="form-group col-sm-8 col-md-8 col-lg-2">';
                contato += '<label>Observação</label>';
                contato += '<input type="text" name="data[ClientesContato]['+iContatos+'][observacao]" class = "form-control">';
            contato += '</div>';
            contato += '<div class="delete-contato">';
                contato += '<a href = "javascript:;" class = "remove-contato btn btn-xs btn-danger">';
                    contato += '<i class = "glyphicon glyphicon-remove"></i>';
                contato += '</a>';
            contato += '</div>';
        contato += '</div>';
        $('#contatos').append(contato);

        $('#tipo-contato-'+iContatos).tokenInput('/tipos_contatos/buscaTiposContatos',{
            modalClass: 'modal-frame-small',
            linkNew:'/tipos_contatos/adicionar/?modal=true',
            inputClass: 'form-control',
            cache:false,
                        permissionLinkNew:true,
                        onAdd: function (tipo) {
                if(tipo.tipo == 'tel'){
                    $(this).parent().parent().find('.cliente-contato').addClass('mascara-telefone');
                }
                if(tipo.tipo == 'email'){
                    $(this).parent().parent().find('.cliente-contato').addClass('email');
                }
                $(this).parent().find('.nome-tipo').val(tipo.nome);
            },
            onDelete: function (tipo) {
                $(this).parent().parent().find('.cliente-contato').removeClass('mascara-telefone');
                $(this).parent().parent().find('.cliente-contato').removeClass('email');
                $(this).parent().find('.nome-tipo').val('');
            }
        });

        iContatos++;
        
        formataContato();
    });

    $('.remove-contato').live('click',function(){
        $(this).parent().parent().remove();
                formataContato();
    });

    var iEnderecos = 0;
    $('#AdicionarEndereco').live('click',function(){
        endereco = '';
        endereco += '<div class = "endereco">';
            endereco += '<div class="form-group col-sm-2 col-lg-2 col-md-2">';
                endereco += '<label>Tipo</label>';
                endereco += '<input type="text" id = "tipo-endereco-'+iEnderecos+'" name="data[ClientesEndereco]['+iEnderecos+'][tipo_id]" class = "form-control">';
                endereco += '<input type="hidden" name="data[ClientesEndereco]['+iEnderecos+'][nome_tipo]" class = "nome-tipo">';
            endereco += '</div>';
            endereco += '<div class="form-group col-sm-3 col-lg-3 col-md-3">';
                endereco += '<label>CEP</label>';
                endereco += '<input type="text" maxlength="10" name="data[ClientesEndereco]['+iEnderecos+'][cep]" class = "mascara-cep cep form-control">';
            endereco += '</div>';
            endereco += '<div class="form-group col-sm-4 col-lg-4 col-md-4">';
                endereco += '<label>Logradouro</label>';
                endereco += '<input type="text" maxlength="60" name="data[ClientesEndereco]['+iEnderecos+'][logradouro]" class = " logradouro form-control">';
            endereco += '</div>';
            endereco += '<div class="form-group col-sm-3 col-lg-3 col-md-3">';
                endereco += '<label>Número</label>';
                endereco += '<input type="text" maxlength="60" name="data[ClientesEndereco]['+iEnderecos+'][numero]" class = "numero form-control">';
            endereco += '</div>';
            endereco += '<div class="form-group col-sm-4 col-lg-4 col-md-4">';
                endereco += '<label>Complemento</label>';
                endereco += '<input type="text" maxlength="100" name="data[ClientesEndereco]['+iEnderecos+'][complemento]" class = "complemento form-control">';
            endereco += '</div>';
            endereco += '<div class="form-group col-sm-4 col-lg-4 col-md-4">';
                endereco += '<label>Bairro</label>';
                endereco += '<input type="text" name="data[ClientesEndereco]['+iEnderecos+'][bairro]" class = " bairro form-control">';
            endereco += '</div>';

            endereco += '<div class="campo-pais hidden form-group col-sm-4 col-lg-4 col-md-4">';
                endereco += '<label>País</label>';
                endereco += '<select name="data[ClientesEndereco]['+iEnderecos+'][pais]" class = "pais form-control">';
                    endereco += '<option value = "">Selecione</option>';
                                                endereco += '<option value = "1058">Brasil</option>';
                                                endereco += '<option value = "132">Afeganistão</option>';
                                                endereco += '<option value = "175">Albânia, Republica da</option>';
                                                endereco += '<option value = "590">Argélia</option>';
                                                endereco += '<option value = "6912">Samoa Americana</option>';
                                                endereco += '<option value = "370">Andorra</option>';
                                                endereco += '<option value = "400">Angola</option>';
                                                endereco += '<option value = "418">Anguilla</option>';
                                                endereco += '<option value = "434">Antigua e Barbuda</option>';
                                                endereco += '<option value = "639">Argentina</option>';
                                                endereco += '<option value = "647">Armênia, Republica da</option>';
                                                endereco += '<option value = "655">Aruba</option>';
                                                endereco += '<option value = "698">Austrália</option>';
                                                endereco += '<option value = "728">Áustria</option>';
                                                endereco += '<option value = "736">Azerbaijão, Republica do</option>';
                                                endereco += '<option value = "779">Bahamas, Ilhas</option>';
                                                endereco += '<option value = "809">Bahrein, Ilhas</option>';
                                                endereco += '<option value = "817">Bangladesh</option>';
                                                endereco += '<option value = "833">Barbados</option>';
                                                endereco += '<option value = "850">Belarus, Republica da</option>';
                                                endereco += '<option value = "876">Bélgica</option>';
                                                endereco += '<option value = "884">Belize</option>';
                                                endereco += '<option value = "2291">Benin</option>';
                                                endereco += '<option value = "906">Bermudas</option>';
                                                endereco += '<option value = "1198">Butão</option>';
                                                endereco += '<option value = "973">Bolívia</option>';
                                                endereco += '<option value = "981">Bósnia-herzegovina (Republica da)</option>';
                                                endereco += '<option value = "1015">Botsuana</option>';
                                                endereco += '<option value = "7820">Território Britânico do Oceano Indico</option>';
                                                endereco += '<option value = "1082">Brunei</option>';
                                                endereco += '<option value = "1112">Bulgária, Republica da</option>';
                                                endereco += '<option value = "310">Burkina Faso</option>';
                                                endereco += '<option value = "1155">Burundi</option>';
                                                endereco += '<option value = "1414">Camboja</option>';
                                                endereco += '<option value = "1457">Camarões</option>';
                                                endereco += '<option value = "1490">Canada</option>';
                                                endereco += '<option value = "1279">Cabo Verde, Republica de</option>';
                                                endereco += '<option value = "1376">Cayman, Ilhas</option>';
                                                endereco += '<option value = "6408">Republica Centro-Africana</option>';
                                                endereco += '<option value = "7889">Chade</option>';
                                                endereco += '<option value = "1589">Chile</option>';
                                                endereco += '<option value = "1600">China, Republica Popular</option>';
                                                endereco += '<option value = "5118">Christmas, Ilha (Navidad)</option>';
                                                endereco += '<option value = "1651">Cocos(Keeling), Ilhas</option>';
                                                endereco += '<option value = "1694">Colômbia</option>';
                                                endereco += '<option value = "1732">Comores, Ilhas</option>';
                                                endereco += '<option value = "1775">Congo</option>';
                                                endereco += '<option value = "8885">Congo, Republica Democrática do</option>';
                                                endereco += '<option value = "1830">Cook, Ilhas</option>';
                                                endereco += '<option value = "1961">Costa Rica</option>';
                                                endereco += '<option value = "1937">Costa do Marfim</option>';
                                                endereco += '<option value = "1953">Croácia (Republica da)</option>';
                                                endereco += '<option value = "1996">Cuba</option>';
                                                endereco += '<option value = "1635">Chipre</option>';
                                                endereco += '<option value = "7919">Tcheca, Republica</option>';
                                                endereco += '<option value = "2321">Dinamarca</option>';
                                                endereco += '<option value = "7838">Djibuti</option>';
                                                endereco += '<option value = "2356">Dominica, Ilha</option>';
                                                endereco += '<option value = "6475">Republica Dominicana</option>';
                                                endereco += '<option value = "7951">Timor Leste</option>';
                                                endereco += '<option value = "2399">Equador</option>';
                                                endereco += '<option value = "2402">Egito</option>';
                                                endereco += '<option value = "6874">El Salvador</option>';
                                                endereco += '<option value = "3310">Guine-Equatorial</option>';
                                                endereco += '<option value = "2437">Eritreia</option>';
                                                endereco += '<option value = "2518">Estônia, Republica da</option>';
                                                endereco += '<option value = "2534">Etiópia</option>';
                                                endereco += '<option value = "2550">Falkland (Ilhas Malvinas)</option>';
                                                endereco += '<option value = "2593">Feroe, Ilhas</option>';
                                                endereco += '<option value = "8702">Fiji</option>';
                                                endereco += '<option value = "2712">Finlândia</option>';
                                                endereco += '<option value = "2755">Franca</option>';
                                                endereco += '<option value = "3255">Guiana francesa</option>';
                                                endereco += '<option value = "5991">Polinésia Francesa</option>';
                                                endereco += '<option value = "2810">Gabão</option>';
                                                endereco += '<option value = "2852">Gambia</option>';
                                                endereco += '<option value = "2917">Georgia, Republica da</option>';
                                                endereco += '<option value = "230">Alemanha</option>';
                                                endereco += '<option value = "2895">Gana</option>';
                                                endereco += '<option value = "2933">Gibraltar</option>';
                                                endereco += '<option value = "3018">Grécia</option>';
                                                endereco += '<option value = "3050">Groenlândia</option>';
                                                endereco += '<option value = "2976">Granada</option>';
                                                endereco += '<option value = "3093">Guadalupe</option>';
                                                endereco += '<option value = "3131">Guam</option>';
                                                endereco += '<option value = "3174">Guatemala</option>';
                                                endereco += '<option value = "3298">Guine</option>';
                                                endereco += '<option value = "3344">Guine-Bissau</option>';
                                                endereco += '<option value = "3379">Guiana</option>';
                                                endereco += '<option value = "3417">Haiti</option>';
                                                endereco += '<option value = "8486">Vaticano, Estado da Cidade do</option>';
                                                endereco += '<option value = "3450">Honduras</option>';
                                                endereco += '<option value = "3514">Hong Kong</option>';
                                                endereco += '<option value = "3557">Hungria, Republica da</option>';
                                                endereco += '<option value = "3794">Islândia</option>';
                                                endereco += '<option value = "3611">Índia</option>';
                                                endereco += '<option value = "3654">Indonésia</option>';
                                                endereco += '<option value = "3727">Ira, Republica Islâmica do</option>';
                                                endereco += '<option value = "3697">Iraque</option>';
                                                endereco += '<option value = "3751">Irlanda</option>';
                                                endereco += '<option value = "3832">Israel</option>';
                                                endereco += '<option value = "3867">Itália</option>';
                                                endereco += '<option value = "3913">Jamaica</option>';
                                                endereco += '<option value = "3999">Japão</option>';
                                                endereco += '<option value = "4030">Jordânia</option>';
                                                endereco += '<option value = "1538">Cazaquistão, Republica do</option>';
                                                endereco += '<option value = "6238">Quênia</option>';
                                                endereco += '<option value = "4111">Kiribati</option>';
                                                endereco += '<option value = "1872">Coreia, Republica Popular Democrática da</option>';
                                                endereco += '<option value = "1902">Coreia, Republica da</option>';
                                                endereco += '<option value = "1988">Coveite</option>';
                                                endereco += '<option value = "6254">Quirguiz, Republica</option>';
                                                endereco += '<option value = "4200">Laos, Republica Popular Democrática do</option>';
                                                endereco += '<option value = "4278">Letônia, Republica da</option>';
                                                endereco += '<option value = "4316">Líbano</option>';
                                                endereco += '<option value = "4260">Lesoto</option>';
                                                endereco += '<option value = "4340">Libéria</option>';
                                                endereco += '<option value = "4383">Líbia</option>';
                                                endereco += '<option value = "4405">Liechtenstein</option>';
                                                endereco += '<option value = "4421">Lituânia, Republica da</option>';
                                                endereco += '<option value = "4456">Luxemburgo</option>';
                                                endereco += '<option value = "4472">Macau</option>';
                                                endereco += '<option value = "4499">Macedônia, Antiga Republica Iugoslava</option>';
                                                endereco += '<option value = "4502">Madagascar</option>';
                                                endereco += '<option value = "4588">Malavi</option>';
                                                endereco += '<option value = "4553">Malásia</option>';
                                                endereco += '<option value = "4618">Maldivas</option>';
                                                endereco += '<option value = "4642">Mali</option>';
                                                endereco += '<option value = "4677">Malta</option>';
                                                endereco += '<option value = "4766">Marshall, Ilhas</option>';
                                                endereco += '<option value = "4774">Martinica</option>';
                                                endereco += '<option value = "4880">Mauritânia</option>';
                                                endereco += '<option value = "4855">Mauricio</option>';
                                                endereco += '<option value = "4885">Mayotte (Ilhas Francesas)</option>';
                                                endereco += '<option value = "4936">México</option>';
                                                endereco += '<option value = "4995">Micronesia</option>';
                                                endereco += '<option value = "4944">Moldávia, Republica da</option>';
                                                endereco += '<option value = "4952">Mônaco</option>';
                                                endereco += '<option value = "4979">Mongólia</option>';
                                                endereco += '<option value = "5010">Montserrat, Ilhas</option>';
                                                endereco += '<option value = "4740">Marrocos</option>';
                                                endereco += '<option value = "5053">Moçambique</option>';
                                                endereco += '<option value = "930">Mianmar (Birmânia)</option>';
                                                endereco += '<option value = "5070">Namíbia</option>';
                                                endereco += '<option value = "5088">Nauru</option>';
                                                endereco += '<option value = "5177">Nepal</option>';
                                                endereco += '<option value = "5738">Países Baixos (Holanda)</option>';
                                                endereco += '<option value = "477">Antilhas Holandesas</option>';
                                                endereco += '<option value = "5428">Nova Caledonia</option>';
                                                endereco += '<option value = "5487">Nova Zelândia</option>';
                                                endereco += '<option value = "5215">Nicarágua</option>';
                                                endereco += '<option value = "5258">Níger</option>';
                                                endereco += '<option value = "5282">Nigéria</option>';
                                                endereco += '<option value = "5312">Niue, Ilha</option>';
                                                endereco += '<option value = "5355">Norfolk, Ilha</option>';
                                                endereco += '<option value = "4723">Marianas do Norte</option>';
                                                endereco += '<option value = "5380">Noruega</option>';
                                                endereco += '<option value = "5568">Oma</option>';
                                                endereco += '<option value = "5762">Paquistão</option>';
                                                endereco += '<option value = "5754">Palau</option>';
                                                endereco += '<option value = "5800">Panamá</option>';
                                                endereco += '<option value = "5452">Papua Nova Guine</option>';
                                                endereco += '<option value = "5860">Paraguai</option>';
                                                endereco += '<option value = "5894">Peru</option>';
                                                endereco += '<option value = "2674">Filipinas</option>';
                                                endereco += '<option value = "5932">Pitcairn, Ilha</option>';
                                                endereco += '<option value = "6033">Polônia, Republica da</option>';
                                                endereco += '<option value = "6076">Portugal</option>';
                                                endereco += '<option value = "6114">Porto Rico</option>';
                                                endereco += '<option value = "1546">Catar</option>';
                                                endereco += '<option value = "6700">Romênia</option>';
                                                endereco += '<option value = "6769">Rússia, Federação da</option>';
                                                endereco += '<option value = "6750">Ruanda</option>';
                                                endereco += '<option value = "6781">São Cristovão e Neves, Ilhas</option>';
                                                endereco += '<option value = "7153">Santa Lucia</option>';
                                                endereco += '<option value = "7056">São Vicente e Granadinas</option>';
                                                endereco += '<option value = "6904">Samoa</option>';
                                                endereco += '<option value = "6971">San Marino</option>';
                                                endereco += '<option value = "7200">São Tome e Príncipe, Ilhas</option>';
                                                endereco += '<option value = "531">Arábia Saudita</option>';
                                                endereco += '<option value = "7285">Senegal</option>';
                                                endereco += '<option value = "7315">Seychelles</option>';
                                                endereco += '<option value = "7358">Serra Leoa</option>';
                                                endereco += '<option value = "7412">Cingapura</option>';
                                                endereco += '<option value = "2470">Eslovaca, Republica</option>';
                                                endereco += '<option value = "2461">Eslovênia, Republica da</option>';
                                                endereco += '<option value = "6777">Salomão, Ilhas</option>';
                                                endereco += '<option value = "7480">Somalia</option>';
                                                endereco += '<option value = "7560">África do Sul</option>';
                                                endereco += '<option value = "2453">Espanha</option>';
                                                endereco += '<option value = "7501">Sri Lanka</option>';
                                                endereco += '<option value = "7102">Santa Helena</option>';
                                                endereco += '<option value = "7005">São Pedro e Miquelon</option>';
                                                endereco += '<option value = "7595">Sudão</option>';
                                                endereco += '<option value = "7706">Suriname</option>';
                                                endereco += '<option value = "7544">Suazilândia</option>';
                                                endereco += '<option value = "7641">Suécia</option>';
                                                endereco += '<option value = "7676">Suíça</option>';
                                                endereco += '<option value = "7447">Síria, Republica Árabe da</option>';
                                                endereco += '<option value = "1619">Formosa (Taiwan)</option>';
                                                endereco += '<option value = "7722">Tadjiquistao, Republica do</option>';
                                                endereco += '<option value = "7803">Tanzânia, Republica Unida da</option>';
                                                endereco += '<option value = "7765">Tailândia</option>';
                                                endereco += '<option value = "8001">Togo</option>';
                                                endereco += '<option value = "8052">Toquelau, Ilhas</option>';
                                                endereco += '<option value = "8109">Tonga</option>';
                                                endereco += '<option value = "8150">Trinidad e Tobago</option>';
                                                endereco += '<option value = "8206">Tunísia</option>';
                                                endereco += '<option value = "8273">Turquia</option>';
                                                endereco += '<option value = "8249">Turcomenistão, Republica do</option>';
                                                endereco += '<option value = "8230">Turcas e Caicos, Ilhas</option>';
                                                endereco += '<option value = "8281">Tuvalu</option>';
                                                endereco += '<option value = "8338">Uganda</option>';
                                                endereco += '<option value = "8311">Ucrânia</option>';
                                                endereco += '<option value = "2445">Emirados Árabes Unidos</option>';
                                                endereco += '<option value = "6289">Reino Unido</option>';
                                                endereco += '<option value = "2496">Estados Unidos</option>';
                                                endereco += '<option value = "8451">Uruguai</option>';
                                                endereco += '<option value = "8478">Uzbequistão, Republica do</option>';
                                                endereco += '<option value = "5517">Vanuatu</option>';
                                                endereco += '<option value = "8508">Venezuela</option>';
                                                endereco += '<option value = "8583">Vietnã</option>';
                                                endereco += '<option value = "8630">Virgens, Ilhas (Britânicas)</option>';
                                                endereco += '<option value = "8664">Virgens, Ilhas (E.U.A.)</option>';
                                                endereco += '<option value = "6858">Saara Ocidental</option>';
                                                endereco += '<option value = "3573">Iémen</option>';
                                                endereco += '<option value = "8907">Zâmbia</option>';
                                                endereco += '<option value = "6653">Zimbabue</option>';
                                                endereco += '<option value = "1504">Guernsey, Ilha do Canal (Inclui Alderney e Sark)</option>';
                                                endereco += '<option value = "1508">Jersey, Ilha do Canal</option>';
                                                endereco += '<option value = "1511">Canarias, Ilhas</option>';
                                                endereco += '<option value = "3595">Man, Ilha de</option>';
                                                endereco += '<option value = "3964">Johnston, Ilhas</option>';
                                                endereco += '<option value = "4525">Madeira, Ilha da</option>';
                                                endereco += '<option value = "4985">Montenegro</option>';
                                                endereco += '<option value = "7370">Republika Srbija</option>';
                                                endereco += '<option value = "7600">Sudao do Sul</option>';
                                                endereco += '<option value = "8958">Zona do Canal do Panamá</option>';
                                                endereco += '<option value = "8737">Wake, Ilha</option>';
                                                endereco += '<option value = "4235">Lebuan, Ilhas</option>';
                                                endereco += '<option value = "5780">Palestina</option>';
                                    endereco += '</select>';
            endereco += '</div>';

            endereco += '<div class="campo-cidade form-group col-sm-4 col-lg-4 col-md-4">';
                endereco += '<label>Cidade/UF</label>';
                endereco +='<input type="text" id = "cidade-'+iEnderecos+'" name="data[ClientesEndereco]['+iEnderecos+'][cidade_id]" class = "cidade form-control">';
                endereco +='<input type="hidden" name="data[ClientesEndereco]['+iEnderecos+'][codigo_cidade]" class = "codigo-cidade">';
                endereco +='<input type="hidden" name="data[ClientesEndereco]['+iEnderecos+'][nome_cidade]" class = "nome-cidade">';
                endereco +='<input type="hidden" name="data[ClientesEndereco]['+iEnderecos+'][estado]" class = "estado">';
            endereco +='</div>';
            endereco += '<div class="delete-endereco">';
                endereco += '<a href = "javascript:;" class = "remove-endereco btn btn-xs btn-danger">';
                    endereco += '<i class = "glyphicon glyphicon-remove"></i>';
                endereco += '</a>';
            endereco += '</div>';

        endereco += '</div>';
        $('#enderecos').append(endereco);

        $('#tipo-endereco-'+iEnderecos).tokenInput('/tipos_enderecos/buscaTiposEnderecos',{
            modalClass: 'modal-frame-small',
            linkNew:'/tipos_enderecos/adicionar/?modal=true',
            inputClass: 'form-control',
            cache:false,
                        permissionLinkNew:true,
                        onAdd: function (tipo) {
                $(this).parent().find('.nome-tipo').val(tipo.nome);

            },
            onDelete: function (tipo) {
                $(this).parent().find('.nome-tipo').val('');
            }
        });

        $('#cidade-'+iEnderecos).tokenInput('/cidades/buscaCidades',{
            inputClass: 'form-control',
            onAdd: function (item) {
                $(this).parent().find('.codigo-cidade').val(item.codigo);
                $(this).parent().find('.nome-cidade').val(item.cidade);
                $(this).parent().find('.estado').val(item.estado);

            },
            onDelete: function (item) {
                $(this).parent().find('.codigo-cidade').val('');
                $(this).parent().find('.nome-cidade').val('');
                $(this).parent().find('.estado').val('');
            }
        });
        iEnderecos++;
                formataEndereco();
        validaEnderecoTipoPessoa();
    });

    $('.remove-endereco').live('click',function(){
        i = 0;
        $('#enderecos').find('.endereco').each(function(){
            if(i > 0){
                $(this).prepend(linha);
            }
            i++;
        });
        if(i > 1){
            $(this).parent().parent().remove();
                        formataEndereco();
        }
    });

    
    $('#ClienteTipoPessoa').val('');

    $('#pessoa-fisica #ClientePjIsentoInsEst, #pessoa-juridica #ClientePjIsentoInsEst').live('ifChanged', function(){
        if($(this).is(':checked')){
            $(this).parents('.tipo-pessoa').find('#ClientePjInscricaoEstadual').attr('disabled', true);
            $(this).parents('.tipo-pessoa').find('#ClientePjInscricaoEstadual').val('ISENTO');
        }else{
            $(this).parents('.tipo-pessoa').find('#ClientePjInscricaoEstadual').attr('disabled', false);
            $(this).parents('.tipo-pessoa').find('#ClientePjInscricaoEstadual').val('');
        }
        $(this).parents('.tipo-pessoa').find('#ClientePjTipoContribuinte').val(2);
    });

    $('#pessoa-fisica #ClientePjInscricaoEstadual, #pessoa-juridica #ClientePjInscricaoEstadual').live('change', function(){
        if($(this).val() == ''){
            $(this).parents('.tipo-pessoa').find('#ClientePjTipoContribuinte').val(2);
        }else{
            $(this).parents('.tipo-pessoa').find('#ClientePjTipoContribuinte').val(1);
        }
    });

    $('#AdicionarEndereco').click();

    $('#ClienteFoto').bootstrapFileInput();

    $("#ClienteFoto").fileupload({
        dataType: 'json',
        singleFileUploads: false,
        add: function(e, data) {
            var arquivo_nao_suportado = false;
            var tamanho_maximo = 5048576;
            $.each(data.files, function(index, file) {
                var ext = file.name.split('.');
                ext = ext[ext.length-1];
                var arquivos_suportados = ['jpg', 'jpeg', 'gif'];
                if ($.inArray(ext.toLowerCase(), arquivos_suportados) == -1 || file.size > tamanho_maximo) {
                    bootbox.error('Insira uma imagem JPG ou gif de até 5Mb.');
                    arquivo_nao_suportado = true;
                }
            });
            if (!arquivo_nao_suportado) {
                data.submit();
            }
        },
        send: function(e, data){
            $('.area-barra-progresso').removeClass('hidden');
        },
        done: function (e, data) {
            $('.area-barra-progresso').addClass('hidden');
            $('#uploadProgressbar .progress-bar').css('width','0%');
            var retorno = data.result;
            if(retorno){
                $('input[name="foto_id"]').val(retorno.id);
                $('#foto-cliente img').attr('src', 'https://drive.beteltecnologia.com/img/clientes/'+retorno.pasta+'/'+retorno.foto);
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#uploadProgressbar .progress-bar').css('width', progress + '%').html(progress + '%');
        }
    });

    setTimeout(function(){
        $('#ClienteLojaVirtualEmail').val('');
        $('#ClienteLojaVirtualNovaSenha').val('');
    }, 1000);

});

function formataEndereco(){
    $('.linha-endereco').remove();
    linha = '<div class = "linha-endereco"></div>';
    i = 0;
    $('#enderecos').find('.endereco').each(function(){
        if(i > 0){
            $(this).prepend(linha);
        }
        i++;
    });
}

function formataContato(){
    $('.linha-contato').remove();
    linha = '<div class = "linha-contato"></div>';
    i = 0;
    $('#contatos').find('.contato').each(function(){
        if(i > 0){
            $(this).prepend(linha);
        }
        i++;
    });
}

function validaEnderecoTipoPessoa(){
    if($('#ClienteTipoPessoa').val() == 'ES'){
        $('.campo-cidade').addClass('hidden');
        $('.campo-pais').removeClass('hidden');
    }else{
        $('.campo-cidade').removeClass('hidden');
        $('.campo-pais').addClass('hidden').val('');
    }
}

</script>

        <div class="modal" id="tour" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h2 class="margin-top-10px">Adicionar de cliente</h2>
                    </div>
                    <div class="modal-body margin-top-20px">
                        <div class="col-sm-9 col-md-9 col-lg-9" style="font-size: 120%">
                            Olá, você está na tela de adicionar cliente onde vamos aprender algumas funcionalidades básicas do sistema.
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 text-right hidden-xs">
                            <i class="fa icon-groups-friends" style="font-size: 60px"></i>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                <button class="btn btn-default end-tour" data-dismiss="modal" aria-label="Close"><i class="glyphicon glyphicon-remove"></i> Cancelar tutorial</button>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                                <button data-dismiss="modal" aria-label="Close" class="btn btn-success start-tour">Continuar <i class="fa fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-header">
        <h1>Adicionar cliente</h1>
        <ol class="breadcrumb">
            <li><a href="https://gestaoclick.com/inicio"><i class="fa fa-dashboard"></i>Início</a></li>
            <li><a href="https://gestaoclick.com/clientes">Clientes</a></li>
            <li class="active">Adicionar</li>
        </ol>
    </section>
<section class="content">
    <div class="box">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                
                <form action="#" name="cad_cliente" role="form" id="ClienteAdicionarForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>                <h4 class="col-sm-12 col-lg-12 col-md-12 text-primary"><i class="fa fa-list-alt margin-right-5px"></i>Dados gerais</h4>

                <div class="form-group col-sm-3 col-lg-3 col-md-3 required"><label for="ClienteTipoPessoa">Tipo de cliente</label><select name="data[Cliente][tipo_pessoa]" class="form-control" autocomplete="off" id="ClienteTipoPessoa" required="required">
<option value="">Selecione</option>
<option value="PF">Pessoa física</option>
<option value="PJ">Pessoa jurídica</option>
<option value="ES">Estrangeiro</option>
</select></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClienteAtivo">Situação</label><select name="data[Cliente][ativo]" class="form-control" autocomplete="off" id="ClienteAtivo">
<option value="1">Ativo</option>
<option value="0">Inativo</option>
</select></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClienteEmail">E-mail</label><input name="data[Cliente][email]" class="email form-control" maxlength="60" autocomplete="off" type="email" id="ClienteEmail"></div><div id="pessoa-fisica" class="tipo-pessoa none"><div class="form-group col-sm-3 col-md-3 col-lg-3"><label for="ClientePfCpf">CPF</label><input name="data[Cliente][pf_cpf]" class="mascara-cpf form-control" maxlength="14" autocomplete="off" type="text" id="ClientePfCpf"></div><div class="form-group col-sm-3 col-md-3 col-lg-3"><label for="ClientePfRg">RG</label><input name="data[Cliente][pf_rg]" class="form-control" maxlength="18" autocomplete="off" type="text" id="ClientePfRg"></div><div class="form-group col-sm-3 col-md-3 col-lg-3"><label for="ClientePfDataNascimento">Nascimento</label><input name="data[Cliente][pf_data_nascimento]" class="mascara-data form-control" maxlength="10" autocomplete="off" type="text" id="ClientePfDataNascimento"></div>                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                            <label>Inscrição estadual</label>
                            <div class="input-group">
                                <input name="data[Cliente][pj_inscricao_estadual]" class="form-control" maxlength="30" autocomplete="off" type="text" id="ClientePjInscricaoEstadual">                                <span class="input-group-addon">
                                    <input type="hidden" name="data[Cliente][pj_isento_ins_est]" id="ClientePjIsentoInsEst_" value="0"><div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="data[Cliente][pj_isento_ins_est]" autocomplete="off" value="1" id="ClientePjIsentoInsEst" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                    <label>ISENTO</label>
                                </span>
                            </div>
                        </div>
                <div class="form-group col-sm-3 col-md-3 col-lg-3"><label for="ClientePjTipoContribuinte">Tipo de contribuinte</label><select name="data[Cliente][pj_tipo_contribuinte]" class="form-control" autocomplete="off" id="ClientePjTipoContribuinte">
<option value="">Selecione</option>
<option value="1">Contribuinte ICMS</option>
<option value="2">Contribuinte ISENTO</option>
<option value="9">Não contribuinte</option>
</select></div></div><div id="pessoa-juridica" class="tipo-pessoa none">                    <div class="form-group col-sm-4 col-lg-4 col-md-4">
                        <label>CNPJ</label>
                        <div class="input-group">
                            <input name="data[Cliente][pj_cnpj]" class="cnpj mascara-cnpj form-control" maxlength="18" autocomplete="off" type="text" id="ClientePjCnpj">                            <span class="input-group-btn">
                                <button class="btn btn-default buscar-cnpj" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Buscar CNPJ">
                                    <span>
                                        <i class="fa fa-search"></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </div>
                <div class="form-group col-sm-4 col-lg-4 col-md-4"><label for="ClientePjRazaoSocial">Razão social</label><input name="data[Cliente][pj_razao_social]" class="razao-social form-control" maxlength="200" autocomplete="off" type="text" id="ClientePjRazaoSocial"></div>                      <div class="form-group col-sm-4 col-lg-4 col-md-4">
                          <label>Inscrição estadual</label>
                          <div class="input-group">
                              <input name="data[Cliente][pj_inscricao_estadual]" class="form-control" maxlength="30" autocomplete="off" type="text" id="ClientePjInscricaoEstadual">                              <span class="input-group-addon">
                                  <input type="hidden" name="data[Cliente][pj_isento_ins_est]" id="ClientePjIsentoInsEst_" value="0"><div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="data[Cliente][pj_isento_ins_est]" autocomplete="off" value="1" id="ClientePjIsentoInsEst" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                  <label>ISENTO</label>
                              </span>
                          </div>
                      </div>
                <div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClientePjTipoContribuinte">Tipo de contribuinte</label><select name="data[Cliente][pj_tipo_contribuinte]" class="form-control" autocomplete="off" id="ClientePjTipoContribuinte">
<option value="">Selecione</option>
<option value="1">Contribuinte ICMS</option>
<option value="2">Contribuinte ISENTO</option>
<option value="9">Não contribuinte</option>
</select></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClientePjInscricaoMunicipal">Inscrição municipal</label><input name="data[Cliente][pj_inscricao_municipal]" class="form-control" maxlength="18" autocomplete="off" type="text" id="ClientePjInscricaoMunicipal"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClientePjInscricaoSuframa">Inscrição SUFRAMA</label><input name="data[Cliente][pj_inscricao_suframa]" class="mascara-num form-control" maxlength="9" autocomplete="off" type="text" id="ClientePjInscricaoSuframa"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClientePjResponsavel">Responsável</label><input name="data[Cliente][pj_responsavel]" class="form-control" maxlength="60" autocomplete="off" type="text" id="ClientePjResponsavel"></div></div><div id="pessoa-estrageira" class="none"><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClienteEsDocumento">Documento</label><input name="data[Cliente][es_documento]" class="form-control" maxlength="50" autocomplete="off" type="text" id="ClienteEsDocumento"></div></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClienteTelefone">Telefone comercial</label><input name="data[Cliente][telefone]" class="telefone-comercial form-control" maxlength="50" autocomplete="off" type="text" id="ClienteTelefone"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClienteCelular">Telefone celular</label><input name="data[Cliente][celular]" class="form-control" maxlength="50" autocomplete="off" type="text" id="ClienteCelular"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClienteFax">FAX</label><input name="data[Cliente][fax]" class="form-control" maxlength="50" autocomplete="off" type="text" id="ClienteFax"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="ClienteSite">Site</label><input name="data[Cliente][site]" class="form-control" maxlength="100" autocomplete="off" type="text" id="ClienteSite"></div>                <h4 class="col-sm-12 col-lg-12 col-md-12 margin-top-0 text-primary"><i class="glyphicon glyphicon-map-marker margin-right-5px"></i>Endereços</h4>
                <div id="enderecos" class="both"><div class="endereco"><div class="form-group col-sm-2 col-lg-2 col-md-2"><label>Tipo</label><ul id="ul-tipo-endereco-0" class="token-input-list"><li class="token-input-input-token"><input type="text" class="form-control" placeholder="Digite para buscar" autocomplete="off" id="token-input-tipo-endereco-0" style="outline: none;"><tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-weight: 400; letter-spacing: normal; white-space: nowrap;"></tester></li></ul><input type="text" id="tipo-endereco-0" name="data[ClientesEndereco][0][tipo_id]" class="form-control" style="display: none;"><input type="hidden" name="data[ClientesEndereco][0][nome_tipo]" class="nome-tipo"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label>CEP</label><input type="text" maxlength="10" name="data[ClientesEndereco][0][cep]" class="mascara-cep cep form-control"></div><div class="form-group col-sm-4 col-lg-4 col-md-4"><label>Logradouro</label><input type="text" maxlength="60" name="data[ClientesEndereco][0][logradouro]" class=" logradouro form-control"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label>Número</label><input type="text" maxlength="60" name="data[ClientesEndereco][0][numero]" class="numero form-control"></div><div class="form-group col-sm-4 col-lg-4 col-md-4"><label>Complemento</label><input type="text" maxlength="100" name="data[ClientesEndereco][0][complemento]" class="complemento form-control"></div><div class="form-group col-sm-4 col-lg-4 col-md-4"><label>Bairro</label><input type="text" name="data[ClientesEndereco][0][bairro]" class=" bairro form-control"></div><div class="campo-pais hidden form-group col-sm-4 col-lg-4 col-md-4"><label>País</label><select name="data[ClientesEndereco][0][pais]" class="pais form-control"><option value="">Selecione</option><option value="1058">Brasil</option><option value="132">Afeganistão</option><option value="175">Albânia, Republica da</option><option value="590">Argélia</option><option value="6912">Samoa Americana</option><option value="370">Andorra</option><option value="400">Angola</option><option value="418">Anguilla</option><option value="434">Antigua e Barbuda</option><option value="639">Argentina</option><option value="647">Armênia, Republica da</option><option value="655">Aruba</option><option value="698">Austrália</option><option value="728">Áustria</option><option value="736">Azerbaijão, Republica do</option><option value="779">Bahamas, Ilhas</option><option value="809">Bahrein, Ilhas</option><option value="817">Bangladesh</option><option value="833">Barbados</option><option value="850">Belarus, Republica da</option><option value="876">Bélgica</option><option value="884">Belize</option><option value="2291">Benin</option><option value="906">Bermudas</option><option value="1198">Butão</option><option value="973">Bolívia</option><option value="981">Bósnia-herzegovina (Republica da)</option><option value="1015">Botsuana</option><option value="7820">Território Britânico do Oceano Indico</option><option value="1082">Brunei</option><option value="1112">Bulgária, Republica da</option><option value="310">Burkina Faso</option><option value="1155">Burundi</option><option value="1414">Camboja</option><option value="1457">Camarões</option><option value="1490">Canada</option><option value="1279">Cabo Verde, Republica de</option><option value="1376">Cayman, Ilhas</option><option value="6408">Republica Centro-Africana</option><option value="7889">Chade</option><option value="1589">Chile</option><option value="1600">China, Republica Popular</option><option value="5118">Christmas, Ilha (Navidad)</option><option value="1651">Cocos(Keeling), Ilhas</option><option value="1694">Colômbia</option><option value="1732">Comores, Ilhas</option><option value="1775">Congo</option><option value="8885">Congo, Republica Democrática do</option><option value="1830">Cook, Ilhas</option><option value="1961">Costa Rica</option><option value="1937">Costa do Marfim</option><option value="1953">Croácia (Republica da)</option><option value="1996">Cuba</option><option value="1635">Chipre</option><option value="7919">Tcheca, Republica</option><option value="2321">Dinamarca</option><option value="7838">Djibuti</option><option value="2356">Dominica, Ilha</option><option value="6475">Republica Dominicana</option><option value="7951">Timor Leste</option><option value="2399">Equador</option><option value="2402">Egito</option><option value="6874">El Salvador</option><option value="3310">Guine-Equatorial</option><option value="2437">Eritreia</option><option value="2518">Estônia, Republica da</option><option value="2534">Etiópia</option><option value="2550">Falkland (Ilhas Malvinas)</option><option value="2593">Feroe, Ilhas</option><option value="8702">Fiji</option><option value="2712">Finlândia</option><option value="2755">Franca</option><option value="3255">Guiana francesa</option><option value="5991">Polinésia Francesa</option><option value="2810">Gabão</option><option value="2852">Gambia</option><option value="2917">Georgia, Republica da</option><option value="230">Alemanha</option><option value="2895">Gana</option><option value="2933">Gibraltar</option><option value="3018">Grécia</option><option value="3050">Groenlândia</option><option value="2976">Granada</option><option value="3093">Guadalupe</option><option value="3131">Guam</option><option value="3174">Guatemala</option><option value="3298">Guine</option><option value="3344">Guine-Bissau</option><option value="3379">Guiana</option><option value="3417">Haiti</option><option value="8486">Vaticano, Estado da Cidade do</option><option value="3450">Honduras</option><option value="3514">Hong Kong</option><option value="3557">Hungria, Republica da</option><option value="3794">Islândia</option><option value="3611">Índia</option><option value="3654">Indonésia</option><option value="3727">Ira, Republica Islâmica do</option><option value="3697">Iraque</option><option value="3751">Irlanda</option><option value="3832">Israel</option><option value="3867">Itália</option><option value="3913">Jamaica</option><option value="3999">Japão</option><option value="4030">Jordânia</option><option value="1538">Cazaquistão, Republica do</option><option value="6238">Quênia</option><option value="4111">Kiribati</option><option value="1872">Coreia, Republica Popular Democrática da</option><option value="1902">Coreia, Republica da</option><option value="1988">Coveite</option><option value="6254">Quirguiz, Republica</option><option value="4200">Laos, Republica Popular Democrática do</option><option value="4278">Letônia, Republica da</option><option value="4316">Líbano</option><option value="4260">Lesoto</option><option value="4340">Libéria</option><option value="4383">Líbia</option><option value="4405">Liechtenstein</option><option value="4421">Lituânia, Republica da</option><option value="4456">Luxemburgo</option><option value="4472">Macau</option><option value="4499">Macedônia, Antiga Republica Iugoslava</option><option value="4502">Madagascar</option><option value="4588">Malavi</option><option value="4553">Malásia</option><option value="4618">Maldivas</option><option value="4642">Mali</option><option value="4677">Malta</option><option value="4766">Marshall, Ilhas</option><option value="4774">Martinica</option><option value="4880">Mauritânia</option><option value="4855">Mauricio</option><option value="4885">Mayotte (Ilhas Francesas)</option><option value="4936">México</option><option value="4995">Micronesia</option><option value="4944">Moldávia, Republica da</option><option value="4952">Mônaco</option><option value="4979">Mongólia</option><option value="5010">Montserrat, Ilhas</option><option value="4740">Marrocos</option><option value="5053">Moçambique</option><option value="930">Mianmar (Birmânia)</option><option value="5070">Namíbia</option><option value="5088">Nauru</option><option value="5177">Nepal</option><option value="5738">Países Baixos (Holanda)</option><option value="477">Antilhas Holandesas</option><option value="5428">Nova Caledonia</option><option value="5487">Nova Zelândia</option><option value="5215">Nicarágua</option><option value="5258">Níger</option><option value="5282">Nigéria</option><option value="5312">Niue, Ilha</option><option value="5355">Norfolk, Ilha</option><option value="4723">Marianas do Norte</option><option value="5380">Noruega</option><option value="5568">Oma</option><option value="5762">Paquistão</option><option value="5754">Palau</option><option value="5800">Panamá</option><option value="5452">Papua Nova Guine</option><option value="5860">Paraguai</option><option value="5894">Peru</option><option value="2674">Filipinas</option><option value="5932">Pitcairn, Ilha</option><option value="6033">Polônia, Republica da</option><option value="6076">Portugal</option><option value="6114">Porto Rico</option><option value="1546">Catar</option><option value="6700">Romênia</option><option value="6769">Rússia, Federação da</option><option value="6750">Ruanda</option><option value="6781">São Cristovão e Neves, Ilhas</option><option value="7153">Santa Lucia</option><option value="7056">São Vicente e Granadinas</option><option value="6904">Samoa</option><option value="6971">San Marino</option><option value="7200">São Tome e Príncipe, Ilhas</option><option value="531">Arábia Saudita</option><option value="7285">Senegal</option><option value="7315">Seychelles</option><option value="7358">Serra Leoa</option><option value="7412">Cingapura</option><option value="2470">Eslovaca, Republica</option><option value="2461">Eslovênia, Republica da</option><option value="6777">Salomão, Ilhas</option><option value="7480">Somalia</option><option value="7560">África do Sul</option><option value="2453">Espanha</option><option value="7501">Sri Lanka</option><option value="7102">Santa Helena</option><option value="7005">São Pedro e Miquelon</option><option value="7595">Sudão</option><option value="7706">Suriname</option><option value="7544">Suazilândia</option><option value="7641">Suécia</option><option value="7676">Suíça</option><option value="7447">Síria, Republica Árabe da</option><option value="1619">Formosa (Taiwan)</option><option value="7722">Tadjiquistao, Republica do</option><option value="7803">Tanzânia, Republica Unida da</option><option value="7765">Tailândia</option><option value="8001">Togo</option><option value="8052">Toquelau, Ilhas</option><option value="8109">Tonga</option><option value="8150">Trinidad e Tobago</option><option value="8206">Tunísia</option><option value="8273">Turquia</option><option value="8249">Turcomenistão, Republica do</option><option value="8230">Turcas e Caicos, Ilhas</option><option value="8281">Tuvalu</option><option value="8338">Uganda</option><option value="8311">Ucrânia</option><option value="2445">Emirados Árabes Unidos</option><option value="6289">Reino Unido</option><option value="2496">Estados Unidos</option><option value="8451">Uruguai</option><option value="8478">Uzbequistão, Republica do</option><option value="5517">Vanuatu</option><option value="8508">Venezuela</option><option value="8583">Vietnã</option><option value="8630">Virgens, Ilhas (Britânicas)</option><option value="8664">Virgens, Ilhas (E.U.A.)</option><option value="6858">Saara Ocidental</option><option value="3573">Iémen</option><option value="8907">Zâmbia</option><option value="6653">Zimbabue</option><option value="1504">Guernsey, Ilha do Canal (Inclui Alderney e Sark)</option><option value="1508">Jersey, Ilha do Canal</option><option value="1511">Canarias, Ilhas</option><option value="3595">Man, Ilha de</option><option value="3964">Johnston, Ilhas</option><option value="4525">Madeira, Ilha da</option><option value="4985">Montenegro</option><option value="7370">Republika Srbija</option><option value="7600">Sudao do Sul</option><option value="8958">Zona do Canal do Panamá</option><option value="8737">Wake, Ilha</option><option value="4235">Lebuan, Ilhas</option><option value="5780">Palestina</option></select></div><div class="campo-cidade form-group col-sm-4 col-lg-4 col-md-4"><label>Cidade/UF</label><ul id="ul-cidade-0" class="token-input-list"><li class="token-input-input-token"><input type="text" class="form-control" placeholder="Digite para buscar" autocomplete="off" id="token-input-cidade-0" style="outline: none;"><tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-weight: 400; letter-spacing: normal; white-space: nowrap;"></tester></li></ul><input type="text" id="cidade-0" name="data[ClientesEndereco][0][cidade_id]" class="cidade form-control" style="display: none;"><input type="hidden" name="data[ClientesEndereco][0][codigo_cidade]" class="codigo-cidade"><input type="hidden" name="data[ClientesEndereco][0][nome_cidade]" class="nome-cidade"><input type="hidden" name="data[ClientesEndereco][0][estado]" class="estado"></div><div class="delete-endereco"><a href="javascript:;" class="remove-endereco btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a></div></div></div>
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <button id="AdicionarEndereco" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign margin-right-5px"></i>Inserir novo endereço</button>
                </div>
<div id="contatos" class="both"></div>
<div id="foto-cliente" class="col-sm-12 col-lg-12 col-md-12 margin-bottom-10px">
                  <div class="area-barra-progresso hidden">
                        <span class="mensagem-upload">Upload em progresso...</span>
                        <div class="progress" id="uploadProgressbar">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                0%
                            </div>
                        </div>
                    </div>
</div>
                <input type="hidden" name="foto_id" value="" autocomplete="off" id="ClienteFotoId">
<h4 class="text-primary margin-top-20px col-sm-12 col-lg-12 col-md-12" style="margin-bottom:0"><i class="fa fa-pencil-square-o margin-right-5px"></i>Observações</h4>
                <div class="margin-top-10px col-sm-12 col-lg-12 col-md-12"><textarea name="data[Cliente][observacoes]" class="form-control" autocomplete="off" cols="30" rows="6" id="ClienteObservacoes"></textarea></div>
                
                <div class="margin-top-10px col-sm-12 col-lg-12 col-md-12">
                    <button id="cadastrar" name="cadastrar" class="btn btn-success btn-responsive" type="submit"><span class="glyphicon glyphicon-ok"></span> Cadastrar</button>                    <a href="https://gestaoclick.com/clientes/?menu=MTU=" class="btn btn-danger btn-responsive"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>                </div>
            </form></div>
                    </div>
    </div>
</section>
<style></style></body></html>
