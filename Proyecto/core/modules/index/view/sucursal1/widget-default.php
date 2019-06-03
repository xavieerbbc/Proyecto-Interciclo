<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sucursales</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../controladores/css_sucursales/styles_registro.css">
    <link rel="stylesheet" href="../../css/estilos.css">
</head>

<body>

  
    <div class="content">
        <h1 class="logo"> Primera Sucursal </h1>

        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Contáctanos</h3>
                <form>
                    <div class="sppb-addon-content">
                        <h3>NOMBRE</h3>
                        <p>Pizzeria Federico Proaño</p>
                        <h1>DIRECCI&Oacute;N</h1>
                        <p>Federico Proaño S/N</p>
                        <h1>TEL&Eacute;FONOS</h1>
                        <p>1700-007-008 o (2)3993201</p>
                        
                    </div>
                </form>
            </div>
            <div class="contact-info">
                <ul>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14807.167665454925!2d-79.00431634879503!3d-2.9002542762375194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-2.8866229!2d-78.9948309!4m5!1s0x91cd1872663c6b21%3A0x47f03bd5be05bac!2sFederico+Proa%C3%B1o%2C+Cuenca!3m2!1d-2.906401!2d-79.00918109999999!5e0!3m2!1ses!2sec!4v1559271285817!5m2!1ses!2sec"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
<style type="text/css">
    /* ESTILOS PARA LA CABECERA */

.topHeader{
    width: 100%;
    text-align: right;
    margin: auto;
    font-family: monospace;
    background-color: rgb(61, 44, 37);
    background-image: url(../imagenes/img/fondo.jpg);
}
.topHeader h1{
    text-align: justify;
    color: #CFD8DC;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.topHeaderLogo img{
    width: 100px; height: 100px;
    float: left;
}

.topHeaderLogo {
    width: 100%;
    height: 30px;
    margin: auto;
}

.topHeader a{
    text-decoration: none;
    color: rgb(238, 238, 238);
}

.topHeader a:hover{
    color: #E74C3C;
}

.nombreUser{
    font-weight: bold;
}

.encabezado{
    background:rgb(255, 253, 253);
    width: 100%;
    height: 40px;
    margin: auto;
}

.menu {
    min-width: 80%;
    width: 10%;
    float: left;
}

.menu ul{
    padding: 0;
    margin: 0;
}

.menu ul {
    list-style: none;
}


.menu a{
    text-decoration: none;
    padding: 10px 20px;
    display: block;
}

.menu > ul > li > a{
    border: 0.5px solid gray;
    background: none;
    color: rgb(0, 0, 0);
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.menu > ul > li > ul > li > a {
    background: white;
    color: black;
    
}

.menu > ul > li{
    width: 15%;
    float: left;
}

.menu li a:hover {
    background-color: rgb(167, 53, 0);
}

.menu li ul{
    display: none ;
    position: absolute;
    min-width: 15%;
}

.menu li:hover > ul {
    display: block;
    border: 1px solid gray;
}

.carrito{
    
    float: left;
    margin-left: 5px;
}

.carrito img{
    width: 30px;
    height: 30px;
    padding: 10px 5px;
    display: block;
    float: left;
}

.contenidoPie img{
    width: 100px; height: 100px;
}
.carrito a{
    text-decoration: none;
    color: rgb(0, 0, 0);
    display: block;
    float: left;
    padding: 14px 5px
}

/* ESTILOS PARA EL BODY DE HOME.HTML */

body {
    background-color: rgb(61, 44, 37);
    background-image: url(../imagenes/img/ingredientes-pizza-costuras_1176-269.jpg);

}

.categorias{
    width: 20%;
    float: left;
}

.categorias h3{
    margin-top: 5px;
    padding: 15px 20px;
    background: #E74C3C;
    color: white;
}

.categorias a{
    text-decoration: none; 
    color: black;
}

.categorias a:hover{ 
    color: red;
}

.categorias ul{
    list-style: none;
    padding: 0 10px;
}

.categorias li{
    margin: 5px 0;
    padding: 5px 0;
    border-bottom: 1px solid #CFD8DC;
}

.imagenesContenido{
    padding: 10px 15px;
    width: 77%;
    height: 400px;
    float: left;
}

.imagenesContenido #imagen{
    width: 100%;
    height: 390px;
}

.caracteristicas {
    width: 75%;
    float: left;
    clear: both;
    text-align: center;
}

.caracteristicas .cajaCarac{
    border: 0.5px solid white;
    width: 50%;
    float: left;
    margin: 0px 20px;
    padding: 15px 5px;
    color: white;
    background-color: rgb(58, 58, 58);
}

.caracteristicas .cajaCarac img{
    width: 65px;
    height: 40px;
}

.caracteristicas .cajaCarac h4{
    color: #E74C3C;
}

/* ESTILOS PARA EL FOOTER*/

.contenidoPie{
    margin-top: 5px;
    clear: both;
    width: 100%;
    background:rgb(57, 57, 58);
    background-image: url(../imagenes/img/fondo2.jpg);
    float: left; 
    position: relative;
    text-size-adjust: 100%;
    display: block;
}

.infoPie{
    width: 30%;
    float: left;
    margin: 0 20px;
    text-align: center;
    color: black;
}

.tituloDetalleInfoPie{
    font-weight: bold;
}
.textoDetalleInfoPie{
    font-weight: lighter;

}
.pieNombre{
    border: 0.5px solid white;
    margin-top: 40px;
    clear: both;
    width: 100%;
    background:rgb(57, 57, 58);
    background-image: url(../imagenes/img/fondo.jpg);
    float: left; 
    color: #CFD8DC;
    text-align: center;

}
.derechos{
    border-top: 1px #CFD8DC solid;
    width: 100%;
    padding: 10px 0;
    background:rgb(57, 57, 58);
    clear: both;
    color: whitesmoke;
    text-align: center;
    background-image: url(../imagenes/img/fondo.jpg);

}
.p{
    color:rgb(16, 16, 17);
    background: rgb(228, 125, 78);
    padding: 20px;
}

@import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');

*{
    box-sizing: border-box;
}

body{
    background: #1a1818;
    color: white;
    font-family: 'Quicksand', sans-serif;
    padding: 0 1.5em;
}

.content{
    max-width: 1170px;
    margin-left: auto;
    margin-right: auto;
    padding: 1.5em;
}

.logo{
    text-align: center;
    font-size: 3em;
}

.logo span{
    color: rgb(229,9,20,1);
}

.contact-wrapper{
    box-shadow: 0 0 20px 0 rgba(10, 22, 27, 0.3);
}

.contact-wrapper > *{
    padding: 1em;
}

.contact-wrapper p select{
	width: 100%;
    padding: 0.7em;
    border: none;
    background: none;
    border-bottom: 1px solid rgb(229,9,20,1);
    outline: 0;
    color:rgb(229,9,20,1);
}
.contact-form{
    background: rgb(19, 41, 48);
}

.contact-form form{
    margin: 0;
    padding: 1em;
}
.contact-form form{
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.contact-form .block{
    display: grid;
    grid-template-columns: 1fr 1fr;   
    grid-column:1 / 3;
}

.contact-form form .block_contact{
	grid-column: 1 / 3;
}

.contact-form .button:hover,
.contact-form .button:focus{
    background: #0d0d0ee8;
    color: rgb(248, 240, 240);
    transition: background-color: 1s ease-out;
    outline: 0;
}

.contact-form form input, 
.contac-form form .button,
.contact-form form textarea{
    width: 100%;
    padding: 0.7em;
    border: none;
    background: none;
    border-bottom: 1px solid rgb(229,9,20,1);
    outline: 0;
    color: white;
}

.contact-form form select{
	color: rgb(229,9,20,1);
}

.contact-form form p{
    width: 100%;
    padding: 0.7em;
    outline: 0;
    color: white;
}

.contact-form form .button{
    background: rgb(229,9,20,1);
    border: 0;
    text-transform: uppercase;
    padding: 1em;
}

.contact-info{
    background: rgb(15, 25, 34);
}

.contact-info h4, 
.contact-info ul,
.contact-info p{
    text-align: center;
    margin: 0 0 1rem 0;
}

.contact-info h4{
	font-size: 20px;
}

.contact-info h4 i{
	margin-right: 5px;
}

.contact-info ul{
    list-style: none;
    padding: 0;
}

.contact-info ul li{
    padding: 0.5em;
}

.contact-info ul li a{
	text-decoration: none;
	color: white;
}

.contact-info ul li a:hover{
	color: #b70e21;
}

/**pantallas grandes**/
@media(min-width: 700px){
    body{
        padding: 0 4em;
    }
    
    .contact-wrapper{
        display: grid;
        grid-template-columns: 2fr 1fr;
    }
    
    .contact-wrapper > *{
        padding: 2em;
    }
}

/*----Footer--*/

.footer{
	width: 100%;
	height: auto;
	margin: auto;
	background: black;
	padding: 20px 0px;
}

.footer-social-icons{
	width: 100%;
	height: auto;
	margin: auto;
}
.footer-social-icons ul{
	margin: 0;
	padding: 0;
	text-align: center;
}

.footer-social-icons ul li{
	display: inline-block;
	width: 50px;
	height: 50px;
	margin: 0 10px;
	border-radius: 100%;
	background: rgb(229,9,20,1);
}

.footer-social-icons ul li a{
	color: white;
	font-size: 25px;
}

.footer-social-icons ul li a i{
	line-height: 50px;
}

.footer-menu-one{
	width: 100%;
	height: auto;
	margin: auto;
	margin-top: 25px;
}

.footer-menu-one ul{
	margin: 0px;
	padding: 0px;
	text-align: center;
}

.footer-menu-one ul li{
	display: inline-block;
	margin: 0px 20px;
}

.footer-menu-one ul li a{
	font-size: 15px;
	font-weight: 600;
	color: white;
	text-transform: uppercase;
	text-decoration: none;
}

.footer-txt{
	width: 100%;
	height: auto;
	margin: auto;
	margin-top: 25px;
}

.footer-txt p{
	text-align: center;
	color: white;
	margin: 0;
}

#f-min{
	font-size: 12px;
}
  </style>

</html>