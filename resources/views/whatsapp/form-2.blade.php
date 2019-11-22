<html>

<head>
    <title>Condominio Shopping D</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/chat.css')}}" rel="stylesheet" type="text/css" lazyload="">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

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
</head>

<body oncontextmenu="return false" onload="location.href='#ancora'">

<link rel="stylesheet" href="{{asset('css/formulario.css')}}" type="text/css" media="all">
<div style="height:350px; width:100%;">

    <div style="height:12%;"> </div>

    <div align="center" style="background:#005E54; height:200px; width:95%; margin-left:7px;">
        <br>
        <br>
        <div style="width:100%; height:25px; background:#128C7E;; margin-left:0px; margin-right:0px; padding-top:5px; font:Verdana, Geneva, sans-serif; color:#FFF;">Por favor, complete seus dados!</div>

        <div style="margin-top:0px; width:90%; padding:15px;">
            <form action="{{route('data', $code)}}" method="POST" onsubmit="this.BTEnvia.value='Enviando...'; this.BTEnvia.disabled=true;">
                @csrf
                <input name="end_code" type="hidden" value="ZCRI5GQBNTX9YD2OAU78SW4V6LMK1H0JE3FP20171219164638">
                <input name="user_cli" type="hidden" value="V6ES8920171219164638">
                <input name="n_destino" type="hidden" value="">
                <input name="id_site" type="hidden" value="Id Cliente">
                <input name="liga_desliga" type="hidden" value="-1">
                <input name="aberto" type="hidden" value="00:00">
                <input name="fechado" type="hidden" value="23:59">
                <input name="silenciar" type="hidden" value="-1">
                <input name="input" type="hidden" value="{{$message}}">

                <input name="pais_d" type="hidden" value="55">
                <input name="rota_min" type="hidden" value="1">
                <input name="user_cli_destino" type="hidden" value="V6ES8920171219164638">
                <input name="log_num" type="hidden" value="6281396728">
                <input name="rg_d" type="hidden" value="N59YLK20190228155346">

                <input style="font-size:16px;" class="nome" type="text" id="name" name="nome_r" placeholder="Nome" value="" autocomplete="off" required="">

                <input type="hidden" name="pais" value="55">

                <input style="font-size:13px;" class="tel" type="tel" id="telefone" name="numero" onkeyup="mascara(this, mtel);" maxlength="15" value="" placeholder="DDD + WhatsApp" autocomplete="off" required="">


                <button type="submit" class="botaoContato" name="BTEnvia" style="margin-top:10px; background:#128C7E;">Enviar</button>

            </form>
        </div>

    </div>

</div>

</body>

</html>