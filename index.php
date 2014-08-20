<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="es" />
        <link rel="shortcut Icon" href="./images/iconos/favicon.ico"/>
        <meta name="author" content="Sebastian Franco Brantes UTFSM - ¿y por qué no? - seb.frab@gmail.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="Keywords" content="cerveza, artesanal, andinez, cerveceria, valparaiso, playa ancha"/>
        <meta name="description" content="Cerveceria Andinez" />
        <meta http-equiv="X-UA-Compatible" content="IE=7,8,9" /> 
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
        <!-- Normalización para Web -->
        <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
        <!-- Css Web -->
        <link rel="stylesheet" type="text/css" href="./css/init.css" />
        <!-- Jquery -->
        <script type="text/javascript" src="./js/jquery.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="./js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        
        <title>Andinez - pasión y amistad</title>
    </head>
    
    <body>
        
        <?php
            $email = 0;
            if(isset($_POST['name'])){
                $name='=?UTF-8?B?'.base64_encode($_POST['name']).'?=';
		$subject='=?UTF-8?B?'.base64_encode($_POST['subject']).'?=';
		$headers="From: $name <{$_POST['email']}>\r\n".
					"Reply-To: {$_POST['email']}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";
                mail('andinez2011@hotmail.com',$subject,$_POST['body'],$headers);
                $email = 1;
            }
        ?>
        
        
        <header>
            <nav role="navigation">
                <div class="navbar-fixed-top">
                    <div class="grad_menu navbar navbar-inverse navbar-collapse">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-js-navbar-collapse">
                                    <span class="sr-only">Toggle</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="" class="navbar-brand">  <p style="color: #b19160; font-size: 20px;font-family: 'Museo 900';src: url('font/Museo900-Regular.otf');"><img style="vertical-align: middle;" src="./images/logoAndrade_color_small.png"/> An<b>dinez</b></p></a>
                            </div>
                            <div class="navbar-collapse bs-js-navbar-collapse collapse"> 
                                <ul class="menu nav navbar-nav navbar-right">
                                    <li><a href="./#quienesSomos"><b>QUIENES SOMOS</b> <span><br/>Historia</span> </a></li>
                                    <li><a href="./#cervezas"><b>CERVEZAS</b> <span><br/>Nuestra variedad</span> </a></li>
                                    <li><a href="./#dondeComprar"><b>¿DÓNDE COMPRAR?</b> <span><br/>Ubicación</span> </a></li>
                                    <li><a href="./#contacto"><b>CONTACTO</b> <span><br/>@Email</span> </a></li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        <div id="jumbotron" class="container-fluid">
            <div class="row">
        
                <div class="jumbotron">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-2 col-sm-2"></div>
                            <div class="col-lg-6 col-md-8 col-sm-8">
                                <a href="./" class="thumbnail" title="Andinez - pasión y amistad">
                                    <img src="./images/logoNegro.jpg"  alt="Andinez - pasión y amistad"/>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-2 col-sm-2"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div style="background-color: #ccc;" class="row">
                <div class="col-lg-12"  id="quienesSomos" >
                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <h2>QUIENES</h2>
                            <h3>SOMOS</h3>
                            <p id="separacion"></p>
                            <p>
                                La historia de Andinez habla de la búsqueda de 
                                lo natural de la pasión y la amistad. Un destino 
                                que siempre estuvo impreso, grabado en el alma 
                                de su  creador. 
                                Es por esto que  luego de un largo proceso de 
                                aprendizaje se llega a un producto realmente 
                                natural, sin perder su esencia de  sabor y aroma, 
                                de esto ya han pasado 7 años en los cuales 
                                nuestros pequeños pero muy apreciados 
                                clientes nos prefieren.
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a class="fancybox" href="./images/cerveza2.jpg" >
                                <span id="quienesRoll"  class="roll" ></span>
                                <img id="quienes" style="box-shadow: 10px 10px 5px #888888;" class="img-responsive" src="./images/cerveza2.jpg" alt="Andinez - pasión y amistad" />
                            </a>
                        </div>
                    </div>
                </div> 
             </div>
        </div> 
        
        <div data-speed="3" data-type="background" style="background: url('./images/fondo_cerveza_oscuro2.jpg') repeat-y center center #000; background-color:#000; min-height: 700px;" 
            class="container-fluid">
            <div class="row">
                <div class="col-lg-12" id="cervezas" >
                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-5 col-md-5 col-sm-6">
                                <h2>CERVEZAS</h2>
                                <h3>NUESTRA VARIEDAD</h3>
                                <p id="separacion_white"></p>
                                <p>
                                    Estos estilos fueron hechos minuciosamente, 
                                    con recetas y procesos realizados por las 
                                    grandes Cervecerías caseras. Dedicación y 
                                    exclusividad son el valor agregado de un 
                                    estilo propio y un producto final de calidad. 
                                    ANDINEZ Es elaborada bajo la ley de la pureza, 
                                    solo contiene agua purificada, cebada,  
                                    lúpulo y levadura.
                                    <br/><br/>

                                    La Ley de la pureza (Reinheitsgebot en alemán) 
                                    fue decretada el 23 de abril de 1516 por 
                                    Guillermo IV de Baviera. Se establecía que 
                                    la cerveza solamente se debía elaborar a partir 
                                    de 3 ingredientes: agua, malta de cebada y 
                                    lúpulo. Se cree que fue la primera regulación 
                                    legal de un alimento. La ley no menciona la 
                                    levadura, que fue descubierta en 1880 por 
                                    Luis Pasteur como parte del proceso de 
                                    fermentación de la cerveza.
                                </p>
                                
                                <ul>
                                    <li>Ambar Ale</li>
                                    <li>Oatmeal Stout</li>
                                    <li>Golden Ale</li>
                                    <li>Robust Porter</li>
                                    <li>Scotch Ale "Ahumada"</li>
                                </ul>
                        </div>
                        <div id="tipos" class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <a class="fancybox" href="./images/cervezas/amber_ale.jpg" title="Ambar Ale" >
                                    <span class="roll" ></span>
                                    <img id="imagen1" style="box-shadow: 0px 0px 5px #000;" class="img-responsive" src="./images/cervezas/amber_ale.jpg" alt="Ambar Ale" />
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <a class="fancybox" href="./images/cervezas/Oatmeal_stout.jpg" title="Oatmeal Stout" >
                                    <span class="roll" ></span>
                                    <img style="box-shadow: 0px 0px 5px #000;" class="img-responsive" src="./images/cervezas/Oatmeal_stout.jpg" alt="Oatmeal Stout" />
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <a class="fancybox" href="./images/cervezas/golden_ale.jpg" title="Golden Ale" >
                                    <span class="roll" ></span>
                                    <img style="box-shadow: 0px 0px 5px #000;" class="img-responsive" src="./images/cervezas/golden_ale.jpg" alt="Golden Ale" />
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <a class="fancybox" href="./images/cervezas/robust_porter.jpg" title="Robust Porter" >
                                    <span class="roll" ></span>
                                    <img style="box-shadow: 0px 0px 5px #000;" class="img-responsive" src="./images/cervezas/robust_porter.jpg" alt="Robust Porter" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div style="background-color: #ccc;" class="row">
                <div class="col-lg-12"  id="dondeComprar" >
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3"></div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <h2 style="text-align: center">¿DÓNDE</h2>
                            <h3 style="text-align: center">COMPRAR?</h3>
                            <p id="separacion"></p>
                            <p style="text-align: center">
                                Aun no tenemos proveedor de nuestros productos.<br/>
                                ¿Quieres ser el primero?
                            </p>

                                <a href="./#contacto" class="btn btn-inverse btn-lg center-block">
                                    <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                </a>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-3"></div>
                    </div>
                </div> 
             </div>
        </div> 
        
        <div data-speed="8" data-type="background" style="background: url('./images/mapa.jpg') repeat-y center center #000; background-color:#000; min-height: 500px;" 
            class="container-fluid">
            <div class="row">
                <div class="col-lg-12" id="contacto" >
                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                                <h2>CONTACTO</h2>
                                <h3>@EMAIL</h3>
                                <p id="separacion_white"></p>
                                <p>
                                    Email : andinez2011@hotmail.com<br/>
                                    Fono : +569 81499050<br/>
                                    Buscanos en : facebook.com/Cerveza Andinez<br/>
                                </p>
                        </div>
                        
                        <?php if($email==0){ ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <form id="contact-form"  action="./" method="post">
                                <div class="form-group">
                                    <label class="control-label required" for="ContactForm_name">nombre <span class="required">*</span></label>                                
                                    <input class="form-control" required name="name" id="ContactForm_name" type="text" />                                
                                </div>

                                <div class="form-group">
                                    <label class="control-label required" for="ContactForm_email">Email <span class="required">*</span></label>
                                    <input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required name="email" id="ContactForm_email" type="text" />                                                         
                                </div>

                                <div class="form-group">
                                    <label class="control-label required" for="ContactForm_subject">asunto <span class="required">*</span></label>
                                    <input size="60" maxlength="128" required class="form-control" name="subject" id="ContactForm_subject" type="text" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label required" for="ContactForm_body">mensaje <span class="required">*</span></label>
                                    <textarea rows="6" cols="50" required class="form-control" name="body" id="ContactForm_body"></textarea>
                                </div>

                                <div class="form-group">
                                        <input class="btn btn-primary" type="submit" name="yt0" value="enviar" />
                                </div>
                            </form>
                        </div>
                        <?php }else{ ?>
                            <p>Tu mensaje ha sido enviado, pronto nos comunicaremos.</p>
                        <?php }?>
                        
                        <div class="col-lg-5 col-md-5 col-sm-6 hidden-xs">
                                <h2>CONTACTO</h2>
                                <h3>@EMAIL</h3>
                                <p id="separacion_white"></p>
                                <p>
                                    Email : andinez2011@hotmail.com<br/>
                                    Fono : +569 81499050<br/>
                                    Buscanos en : facebook.com/Cerveza Andinez<br/>
                                </p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/fancybox/jquery.fancybox.js"></script>
        
        <script>
            $(document).ready(function() { 
                var imagen = $('#imagen1');
                $(".roll").width(imagen.width());
                $(".roll").height(imagen.height());
                
                var imagen1 = $('#quienes');
                $("#quienesRoll").width(imagen1.width());
                $("#quienesRoll").height(imagen1.height());
                
                // cache the window object
                $window = $(window);
                $('div[data-type="background"]').each(function(){
                    // declare the variable to affect the defined data-type
                    var $scroll = $(this);

                     $(window).scroll(function() {
                       // HTML5 proves useful for helping with creating JS functions!
                       // also, negative value because we're scrolling upwards                            
                       var yPos = -($window.scrollTop() / $scroll.data('speed'));

                       // background position
                       var coords = '50% '+ yPos + 'px';

                       // move the background
                       $scroll.css({ backgroundPosition: coords });   
                     }); // end window scroll
                });  // end section function
                
                $(".fancybox").fancybox();
                
                $(window).resize(function() {
                    $(".roll").width(imagen.width());
                    $(".roll").height(imagen.height());
                    
                    $("#quienesRoll").width(imagen1.width());
                    $("#quienesRoll").height(imagen1.height());
                });
                
            });
            
            $(function() {
                // OPACITY OF BUTTON SET TO 0%
                $(".roll").css("opacity","0");

                // ON MOUSE OVER
                $(".roll").hover(function () {

                // SET OPACITY TO 70%
                $(this).stop().animate({
                opacity: .5
                }, "slow");
            },

            // ON MOUSE OUT
            function () {
                // SET OPACITY BACK TO 50%
                $(this).stop().animate({
                opacity: 0
                }, "slow");
                });
            });
            
        </script>
  
    </body>
</html>