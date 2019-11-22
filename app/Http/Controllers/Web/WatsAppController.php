<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WatsAppController extends Controller
{

    public function teste($code)
    {
        return $code;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = 'ZCRI5GQBNTX9YD2OAU78SW4V6LMK1H0JE3FP20171219164638';

        return view('whatsapp.form-1', compact('code'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function script($code)
    {


        return view('scripts.script-1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getLayout($code)
    {

        $doc    = '';
        $path   = asset('images');

        $iframe_web_route = route('iframe-web', $code);
        $iframe_web_json  = response()->json($iframe_web_route);
        $iframe_web_url   = str_replace('"', '', $iframe_web_json->getContent());


        $iframe_mobile_route = route('iframe-mobile', $code);
        $iframe_mobile_json  = response()->json($iframe_mobile_route);
        $iframe_mobile_url   = str_replace('"', '', $iframe_mobile_json->getContent());

        if ($code) {

            $doc .= 'document.write("<style>");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg .JanelaWhatsAberta{");';
            $doc .= 'document.write("border-width:3px !important;");';
            $doc .= 'document.write("width:278px;");';
            $doc .= 'document.write("background-color:#128C7E !important;");';
            $doc .= 'document.write("animation-iteration-count:infinite;");';
            $doc .= 'document.write("animation-fill-mode:both;");';
            $doc .= 'document.write("height:37px;");';
            $doc .= 'document.write("bottom:14px;");';
            $doc .= 'document.write("z-index:99999999;");';
            $doc .= 'document.write("margin-left:18px;");';
            $doc .= 'document.write("border-bottom-left-radius:19px;");';
            $doc .= 'document.write("border-bottom-right-radius:19px;");';
            $doc .= 'document.write("border-top-right-radius:19px;");';
            $doc .= 'document.write("border-top-left-radius:19px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg .JanelaWhatsAberta.yp_onscreen{");';
            $doc .= 'document.write("animation-duration:1s;");';
            $doc .= 'document.write("animation-name:pulse;");';
            $doc .= 'document.write("animation-delay:0s;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write(".WhatsCel .Whatsclose{");';
            $doc .= 'document.write("background-color:#128C7E !important;");';
            $doc .= 'document.write("border-bottom-left-radius:0px;");';
            $doc .= 'document.write("border-bottom-right-radius:0px;");';
            $doc .= 'document.write("border-top-right-radius:0px;");';
            $doc .= 'document.write("border-top-left-radius:0px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg #popcompany .WhatsCel{");';
            $doc .= 'document.write("border-top-left-radius:0px;");';
            $doc .= 'document.write("border-bottom-left-radius:0px;");';
            $doc .= 'document.write("border-bottom-right-radius:0px;");';
            $doc .= 'document.write("border-top-right-radius:0px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg .JanelaWhatsAberta{");';
            $doc .= 'document.write(" margin:15px;");';
            $doc .= 'document.write(" display: block;");';
            $doc .= 'document.write(" width: 22px;");';
            $doc .= 'document.write(" height: 22px;");';
            $doc .= 'document.write(" border-radius: 19%;");';
            $doc .= 'document.write(" background: #transparent;");';
            $doc .= 'document.write(" cursor: pointer;");';
            $doc .= 'document.write(" box-shadow: 0 0 0 rgba(204,169,44, 0.4);");';
            $doc .= 'document.write(" animation: pulse 2s infinite;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write(".JanelaWhatsAberta:hover {");';
            $doc .= 'document.write(" animation: none;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("@-webkit-keyframes pulse {");';
            $doc .= 'document.write(" 0% {");';
            $doc .= 'document.write(" -webkit-box-shadow: 0 0 0 0 rgba(255,0,0,0.3);");';
            $doc .= 'document.write(" }");';
            $doc .= 'document.write(" 70% {");';
            $doc .= 'document.write(" -webkit-box-shadow: 0 0 0 10px rgba(204,169,44, 0);");';
            $doc .= 'document.write(" }");';
            $doc .= 'document.write(" 100% {");';
            $doc .= 'document.write(" -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0);");';
            $doc .= 'document.write(" }");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("@keyframes pulse {");';
            $doc .= 'document.write(" 10% {");';
            $doc .= 'document.write(" -moz-box-shadow: 0 0 0 0 #128C7E;");';
            $doc .= 'document.write(" box-shadow: 0 0 0 0 #128C7E;");';
            $doc .= 'document.write(" }");';
            $doc .= 'document.write(" 80% {");';
            $doc .= 'document.write(" -moz-box-shadow: 0 0 0 10px rgba(204,169,44, 0);");';
            $doc .= 'document.write(" box-shadow: 0 0 0 15px rgba(204,169,44, 0);");';
            $doc .= 'document.write(" }");';
            $doc .= 'document.write(" 100% {");';
            $doc .= 'document.write(" -moz-box-shadow: 0 0 0 0 rgba(255,0,0,0.3);");';
            $doc .= 'document.write(" box-shadow: 0 0 0 0 rgba(204,169,44, 0);");';
            $doc .= 'document.write(" }");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg .JanelaWhatsAberta{");';
            $doc .= 'document.write("border-width:3px !important;");';
            $doc .= 'document.write("border-top-left-radius:10px;");';
            $doc .= 'document.write("border-top-right-radius:10px;");';
            $doc .= 'document.write("border-bottom-right-radius:10px;");';
            $doc .= 'document.write("border-bottom-left-radius:10px;");';
            $doc .= 'document.write("margin-left:18px;");';
            $doc .= 'document.write("z-index:99999999;");';
            $doc .= 'document.write("bottom:-5px;");';
            $doc .= 'document.write("height:37px;");';
            $doc .= 'document.write("animation-fill-mode:both;");';
            $doc .= 'document.write("animation-iteration-count:infinite;");';
            $doc .= 'document.write("background-color:#128C7E !important;");';
            $doc .= 'document.write("width:250px;");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg .JanelaWhatsAberta.yp_onscreen{");';
            $doc .= 'document.write("animation-duration:1s;");';
            $doc .= 'document.write("animation-delay:0s;");';
            $doc .= 'document.write("animation-name:bob;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write(".WhatsCel .Whatsclose{");';
            $doc .= 'document.write("background-color:#128C7E !important;");';
            $doc .= 'document.write("border-top-left-radius:0px;");';
            $doc .= 'document.write("border-top-right-radius:0px;");';
            $doc .= 'document.write("border-bottom-right-radius:0px;");';
            $doc .= 'document.write("border-bottom-left-radius:0px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg #popcompany .WhatsCel{");';
            $doc .= 'document.write("border-top-left-radius:0px;");';
            $doc .= 'document.write("border-top-right-radius:0px;");';
            $doc .= 'document.write("border-bottom-right-radius:0px;");';
            $doc .= 'document.write("border-bottom-left-radius:0px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("<\/style>");';
            $doc .= 'document.write("<style> ");';
            $doc .= 'document.write(".btn-toggle{ display: none; } ");';
            $doc .= 'document.write(".btn2-toggle{ display: none; } ");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("@media screen and (max-width: 580px) { ");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#Msg{display: none;} ");';
            $doc .= 'document.write(".btn-toggle{display: block;} ");';
            $doc .= 'document.write("} ");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("@media screen and (min-width: 580px) { ");';
            $doc .= 'document.write("#Msg2{display: none;} ");';
            $doc .= 'document.write(".btn-toggle{display: block;} ");';
            $doc .= 'document.write("} ");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("<\/style>");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("<div id=\"Msg\">");';
            $doc .= 'document.write("<style>");';
            $doc .= 'document.write("#popcompany{");';
            $doc .= 'document.write("display:none;");';
            $doc .= 'document.write("position:fixed;");';
            $doc .= 'document.write("bottom: 0;");';
            $doc .= 'document.write("right: 0px;");';
            $doc .= 'document.write(" margin-right: 10px;");';
            $doc .= 'document.write(" z-index: 9999999999;");';
            $doc .= 'document.write("background-image:url('.$path.'/whats_bg.jpg);");';
            $doc .= 'document.write("width:280px;");';
            $doc .= 'document.write("height:350px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("#popname{");';
            $doc .= 'document.write("position:fixed;");';
            $doc .= 'document.write("bottom: 19;");';
            $doc .= 'document.write("right: 20px;");';
            $doc .= 'document.write(" margin-right: 6px;");';
            $doc .= 'document.write(" margin-top: 7px;");';
            $doc .= 'document.write(" z-index: 9999999999;");';
            $doc .= 'document.write(" font-size:16px; color:#3C9;");';
            $doc .= 'document.write("font-family:Arial, Helvetica, sans-serif;");';
            $doc .= 'document.write(" color:#FFFFFF;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("#popname2{");';
            $doc .= 'document.write("position:fixed;");';
            $doc .= 'document.write("bottom: 325;");';
            $doc .= 'document.write("right: 20px;");';
            $doc .= 'document.write(" margin-right: 30px;");';
            $doc .= 'document.write(" margin-top: 7px;");';
            $doc .= 'document.write(" z-index: 9999999999;");';
            $doc .= 'document.write(" font-size:14px; color:#3C9;");';
            $doc .= 'document.write("font-family:Arial, Helvetica, sans-serif;");';
            $doc .= 'document.write(" color:#FFFFFF;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write(".JanelaWhatsAberta {");';
            $doc .= 'document.write("background-image:url('.$path.'/banner.png);");';
            $doc .= 'document.write(" background-color:#128C7E;");';
            $doc .= 'document.write("position: fixed;");';
            $doc .= 'document.write("bottom: 0px;");';
            $doc .= 'document.write("right: 0px;");';
            $doc .= 'document.write("z-index: 99999;");';
            $doc .= 'document.write("width:280px;");';
            $doc .= 'document.write("height:35px;");';
            $doc .= 'document.write("margin-right:10px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write(".WhatsIframe {");';
            $doc .= 'document.write("margin-left: 0px;");';
            $doc .= 'document.write("margin-top: 35px;");';
            $doc .= 'document.write("width: 280px;");';
            $doc .= 'document.write("height: 400px;");';
            $doc .= 'document.write("overflow: hidden;");';
            $doc .= 'document.write("border-width: 0px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write(".WhatsCel .Whatsclose {");';
            $doc .= 'document.write(" position: absolute;");';
            $doc .= 'document.write(" top: 0px;");';
            $doc .= 'document.write(" left: 0px;");';
            $doc .= 'document.write(" transition: all 200ms;");';
            $doc .= 'document.write(" font-size: 12px;");';
            $doc .= 'document.write(" font-family: Verdana, Sans-Serif;");';
            $doc .= 'document.write(" text-decoration: none;");';
            $doc .= 'document.write(" background-image:url('.$path.'/fechar.png);");';
            $doc .= 'document.write(" background-color:#128C7E;");';
            $doc .= 'document.write(" width:280px;");';
            $doc .= 'document.write(" height:35px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("<\/style>");';
            $doc .= 'document.write(" <div id=\"popcompany\">");';
            $doc .= 'document.write(" <div class=\"WhatsCel Whatscont\">");';
            $doc .= 'document.write(" <a class=\"Whatsclose\" onclick=\"document.getElementById(\'popcompany\').style.display=\'none\';\"><div id=\"popname2\">Atendimento via WhatsApp<\/div><\/a>");';
            //$doc .= 'document.write(" <iframe class=\"WhatsIframe\" src=\"http:\/\/127.0.0.1:8000\/iframe\/ZCRI5GQBNTX9YD2OAU78SW4V6LMK1H0JE3FP20171219164638\"><\/iframe>");';
            $doc .= 'document.write(" <iframe class=\"WhatsIframe\" src=\"'.$iframe_mobile_url.'\"><\/iframe>");';

            $doc .= 'document.write(" <\/div>");';
            $doc .= 'document.write(" <\/div>");';
            $doc .= 'document.write(" <a class=\"JanelaWhatsAberta\" onclick=\"document.getElementById(\'popcompany\').style.display=\'block\';\"><div id=\"popname\">Atendimento via WhatsApp<\/div><\/a>");';
            $doc .= 'document.write("<\/div>");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("<div id=\"Msg2\">");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("<style>");';
            $doc .= 'document.write("#popcompany2{");';
            $doc .= 'document.write("display:none;");';
            $doc .= 'document.write("position:fixed;");';
            $doc .= 'document.write("bottom: 0;");';
            $doc .= 'document.write("right: 0px;");';
            $doc .= 'document.write(" margin-right: 10px;");';
            $doc .= 'document.write(" z-index: 9999999999;");';
            $doc .= 'document.write("background-image:url('.$path.'/whats_bg.jpg);");';
            $doc .= 'document.write("width:280px;");';
            $doc .= 'document.write("height:310px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write("");';
            $doc .= 'document.write(".JanelaWhatsAberta2 {");';
            $doc .= 'document.write("background-image:url('.$path.'/banner2.png);");';
            $doc .= 'document.write("position: fixed;");';
            $doc .= 'document.write("bottom: 10px;");';
            $doc .= 'document.write("right: 0px;");';
            $doc .= 'document.write("z-index: 99999;");';
            $doc .= 'document.write("width:50px;");';
            $doc .= 'document.write("height:50px;");';
            $doc .= 'document.write("margin-right:10px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write(".WhatsIframe2 {");';
            $doc .= 'document.write("margin-left: 0px;");';
            $doc .= 'document.write("margin-top: 35px;");';
            $doc .= 'document.write("width: 280px;");';
            $doc .= 'document.write("height: 270px;");';
            $doc .= 'document.write("overflow: hidden;");';
            $doc .= 'document.write("border-width: 0px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("");';
            $doc .= 'document.write(".WhatsCel2 .Whatsclose2 {");';
            $doc .= 'document.write(" position: absolute;");';
            $doc .= 'document.write(" top: 0px;");';
            $doc .= 'document.write(" left: 0px;");';
            $doc .= 'document.write(" transition: all 200ms;");';
            $doc .= 'document.write(" font-size: 12px;");';
            $doc .= 'document.write(" font-family: Verdana, Sans-Serif;");';
            $doc .= 'document.write(" text-decoration: none;");';
            $doc .= 'document.write(" background-image:url('.$path.'/fechar.png);");';
            $doc .= 'document.write(" width:280px;");';
            $doc .= 'document.write(" height:35px;");';
            $doc .= 'document.write("}");';
            $doc .= 'document.write("<\/style>");';
            $doc .= 'document.write(" ");';
            $doc .= 'document.write(" <a class=\"JanelaWhatsAberta2\" href=\"'.$iframe_web_url.'\" target=\"_blank\"><\/a>");';
            $doc .= 'document.write("<\/div>");';

        }

        return $doc;

    }


    public function getIframeMobile($code)
    {
        return view('whatsapp.iframe-mobile-1', compact('code'));
    }


    public function getIframeWeb($code)
    {
        return view('whatsapp.iframe-web-1', compact('code'));
    }


    public function postMessage(Request $request, $code)
    {
        $message = $request->get('input');
        return view('whatsapp.form-2', compact('code', 'message'));

    }


    public function postData(Request $request, $code)
    {
        $name = $request->get('nome_r');
        $cell = $request->get('numero');
        $message = $request->get('input');

        return view('whatsapp.confirmation', compact('code', 'name', 'cell', 'message'));
    }

}
