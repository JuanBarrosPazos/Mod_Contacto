<?php

    /* LLAMO LA CONEXION DE BBDD */
    require "../Mod_Cero/conect/conectBbdd.php";
    
    /* DEFINO LA RUTA DE HTML Y LLAMO AL HEADER Y ESTRUCTURA BODY */
        global $rutaHtml;
        $rutaHtml = "../Mod_Cero/";
    require "../Mod_Cero/inclu/header.php";

        print ("<h4 id='hora'>000000</h4>
                <h1>ESTOY EN REDIRECCION DE CLIENTES MENSAJES</h1>
                <h3>ESTAMOS EN CONSTRUCCIÓN</h3>");  

        /* CUENTA ATRAS Y RELOJ */
            global $retro;
            $retro = "<script>
                        let totalTime = 10;
                        function updateClock(){
            document.getElementById('countRegre').innerHTML = 'SE REDICCIONARA EN '+totalTime+' SEGUNDOS';
                            if(totalTime==0){ } else {  totalTime= totalTime - 1;
                                                        setTimeout('updateClock()',1000);
                                                            }
                                }
                        function cargaFunciones(){
                                hora(); updateClock();
                        }
                        window.onload = cargaFunciones;
                        </script>
                    <p id='countRegre'>0</p>";
            print($retro);
        
        /* REDIRECCIONA A LA PAGINA CORRECTA */
        function redirTime(){

            global $rutaJsRedir;
            $rutaJsRedir = "../../index.html";

            global $redirphp;
            $redirphp ="<script type='text/javascript'>
                            function redir(){
                                window.location.href='".$rutaJsRedir."';
                            }
                            setTimeout('redir()',10000);
                        </script>";
                        print ($redirphp);
        }
        redirTime();

    /* LLAMO AL FOOTER */
    require "../Mod_Cero/inclu/footer.php"

?>