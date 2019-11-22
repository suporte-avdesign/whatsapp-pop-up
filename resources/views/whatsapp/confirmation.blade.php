<!DOCTYPE html>
<html>

<head>
    <title>Whats</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='{{asset('css/chat.css')}}' rel='stylesheet' type='text/css' lazyload>
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon" />

    <script type="text/javascript">
        function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function mtel(v) {
            v = v.replace(/\D/g, "");
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
            v = v.replace(/(\d)(\d{4})$/, "$1-$2");
            return v;
        }

        function id(el) {
            return document.getElementById(el);
        }
        window.onload = function() {
            id('telefone').onkeyup = function() {
                mascara(this, mtel);
            }
        }
    </script>

    <style type="text/css">
        <!-- a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }

        --> .user-bar {
                height: 40px;
                background: #005E54;
                color: #fff;
                padding: 0 8px;
                font-size: 20px;
                position: relative;
                z-index: 1
            }
    </style>
</head>

<script>
    document.onkeypress = function(event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
    document.onmousedown = function(event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
    document.onkeydown = function(event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
</script>

<body oncontextmenu="return false" onLoad="location.href='#ancora'">

    <div class="page">

        <div class="screen">
            <div class="screen-container">

                <div class="chat">

                    <div class="cc" id="cc">
                        <div class="user-bar">

                            <div class="avatar ubi">
                                <img id="ccp" src="{{asset('images/logos/9KJ1FA2BMC20180402114345.jpg')}}">
                            </div>

                            <div class="name ubi">
                                <span id="ccn" data-userid="1">Nome Cliente</span>
                                <span id="ccs" class="status">
                                    </span>
                            </div>

                            <div class="actions more ubi">

                                <img src="{{asset('images/plus.png')}}" width="27" height="27" border="0" style="margin-right:-15px; margin-top:3px;">

                            </div>
                        </div>

                        <div class="conversation">
                            <div class="conversation-container">

                                <div class="message sent" style="margin-right:0px;">
                                    {{$message}}... <span class="metadata"><span class="time"> 11:35 <img src="{{asset('images/tick.png')}}" width="17" height="9" border="0"></span></span>
                                </div>

                                <link rel="stylesheet" href="{{asset('css/confirmacao.css')}}" type="text/css" media="all">
                                <script type="text/javascript" src="{{asset('js/confirmacao.js')}}"></script>

                                <div class="message received aMsg2" id="aMsg2">

                                    Acabamos de receber sua mensagem. Por favor, aguarde alguns instantes que já lhe responderemos. Obrigado !

                                    <span class="metadata"><span class="time"> 11:35 </span></span>
                                </div>

                                <!--<div class="message received aMsg3" id="aMsg3">
                            <div class="message received">
                                Aguarde nosso contato em seu WhatsApp !
                            </div>
                            <a href="#" id="ancora"></a>
                            -->

                            </div>

                            <!-- Integrações -->

                            <META HTTP-EQUIV='REFRESH' CONTENT='60; URL={{route('iframe-mobile', $code)}}'>
                            <style>
                                #input-msg {
                                    padding-left: 30px;
                                    background-image: url({{asset('images/smile.png')}});
                                    background-repeat: no-repeat;
                                }
                            </style>

                            <div id="conversation-compose" class="conversation-compose" style="bottom:110px; position:fixed; z-index:100; ">

                                <form action="{{route('data', $code)}}" method="POST" id="conversation-compose" class="conversation-compose" onSubmit="this.BTEnvia.value='Enviando...'; this.BTEnvia.disabled=true;">

                                    <input name="end_code" type="hidden" value="{{$code}}">
                                    <input name="user_cli" type="hidden" value="V6ES8920171219164638">
                                    <input name="n_destino" type="hidden" value="">
                                    <input name="id_site" type="hidden" value="Nome Loja">
                                    <input name="liga_desliga" type="hidden" value="-1">
                                    <input name="aberto" type="hidden" value="00:00">
                                    <input name="fechado" type="hidden" value="23:59">
                                    <input name="silenciar" type="hidden" value="-1">
                                    <input name="nome_r" type="hidden" value="{{$name}}">
                                    <input name="numero" type="hidden" value="{{$cell}}">

                                    <input name="pais_d" type="hidden" value="55" />
                                    <input name="log_num" type="hidden" value="6281396728">
                                    <input name="status_cli" type="hidden" value="-1" />
                                    <input name="rota_min" type="hidden" value="1" />
                                    <input name="user_cli_destino" type="hidden" value="V6ES8920171219164638" />
                                    <input name="rg_d" type="hidden" value="N59YLK20190228155346" />

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>