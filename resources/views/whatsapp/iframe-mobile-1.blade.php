<!DOCTYPE html>
<html>

<head>
    <title>Nome Cliente</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='{{asset('css/chat.css')}}' rel='stylesheet' type='text/css' lazyload>
    <link rel="icon" href="{{asset('images/favicon-64x64.ico')}}" type="image/x-icon" />

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

        .send .circle {
            background: #005E54;
            border-radius: 50%;
            color: #fff;
            position: relative;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center
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

<body oncontextmenu="return false">

<form action="{{route('message', $code)}}" method="POST" onSubmit="this.BTEnvia.value='Enviando...'; this.BTEnvia.disabled=true;">
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
                                <!--<div class="message received aMsg2" id="aMsg2">-->

                                <div class="message received">
                                    Boa noite!
                                    <!---->
                                    <span class="metadata"><span class="time"> 23:31 </span></span>
                                </div>

                                <link rel="stylesheet" href="{{asset('css/confirmacao.css')}}" type="text/css" media="all">
                                <!--<script type="text/javascript" src="{{asset('js/confirmacao.js')}}"></script>

                                <div class="message received aMsg3" id="aMsg3">-->

                                <div class="message received">

                                    Nosso horário de atendimento é de segunda à sábado das 10h00 às 22h00 e domingos e feriados das 12h00 às 20h00.
                                    <span class="metadata"><span class="time"> 23:31 </span></span>
                                </div>

                            </div>

                            <div id="conversation-compose" class="conversation-compose" style="bottom:110px; position:fixed; z-index:100; ">
                                @csrf

                                <input name="end_code" type="hidden" value="ZCRI5GQBNTX9YD2OAU78SW4V6LMK1H0JE3FP20171219164638">
                                <input name="user_cli" type="hidden" value="V6ES8920171219164638">
                                <input name="id_site" type="hidden" value="Shopping D">
                                <input name="liga_desliga" type="hidden" value="-1">
                                <input name="aberto" type="hidden" value="00:00">
                                <input name="fechado" type="hidden" value="23:59">
                                <input name="silenciar" type="hidden" value="-1">
                                <input name="msg_whats2" type="hidden" value="Acabamos de receber sua mensagem. Por favor, aguarde alguns instantes que já lhe responderemos. Obrigado !">
                                <input name="msg_off2" type="hidden" value="Recebemos sua mensagem! Entraremos em contato assim que possível. Obrigado.">

                                <input name="nome_r" type="hidden" value="">
                                <input name="numero" type="hidden" value="">

                                <input name="rota_min" type="hidden" value="1" />
                                <input name="user_cli_destino" type="hidden" value="V6ES8920171219164638" />

                                <style>
                                    #input-msg {
                                        padding-left: 30px;
                                        background-image: url({{asset('images/smile.png')}});
                                        background-repeat: no-repeat;
                                    }
                                </style>

                                <textarea style="font-size:13px;" name="input" class="input-msg" id="input-msg" placeholder="Digite aqui..." autocomplete="off" required></textarea>

                                <button class="send" name="BTEnvia" type="submit">
                                    <div class="circle">
                                        <img src="{{asset('images/enviar_web.png')}}" height="20" border="0">
                                    </div>
                                </button>
                            </div>

                            <div style="width:100%; height:25px; background-color:#005E54; bottom:80px; position:fixed; margin-left:0px; margin-right:0px; padding-top:5px; font:Verdana, Geneva, sans-serif; color:#FFFFFF; font-size:10px; text-align:center;">

                                <font color="#FFFFFF">Copyright &copy; ShopZap</font>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</form>

</body>

</html>