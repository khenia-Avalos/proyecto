<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="proyecto tercera1" content="proyecto de pastelería">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONEXA</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <header>
    <nav>
           
            <a href="logo3.png" class="logo"><img id="logo" src="logo3.png" alt="Logo"></a>

         
            <div class="dropdown-container">
                <div class="dropdown">
                    <button>Televisión</button>
                    <div class="dropdown-menu">
                        <span class="close-dropdown" onclick="closeMenu(this)">✖</span>
                        <div class="contenedor-opciones">
                            <div class="opciones">
                                <a href="#">TELEVISORES</a>
                                <a href="#">Todos los televisores</a>
                                <a href="#">Televisores inteligentes</a>
                                <a href="#">Televisores LED</a>
                                <a href="#">Accesorios</a>
                                <a href="#">Televisores OLED</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <button>Imágenes</button>
                    <div class="dropdown-menu">
                        <span class="close-dropdown" onclick="closeMenu(this)">✖</span>
                        <div class="contenedor-opciones">
                            <div class="opciones">
                                <a href="#">Soportes de TV</a>
                                <a href="#">Accesorios para proyectores</a>
                                <a href="#">Barras de sonido</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <button>Audio</button>
                    <div class="dropdown-menu">
                        <span class="close-dropdown" onclick="closeMenu(this)">✖</span>
                        <div class="contenedor-opciones">
                            <div class="opciones">
                                <a href="#">Bocinas</a>
                                <a href="#">Audífonos</a>
                                <a href="#">Sistemas de sonido</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <button>Móvil</button>
                    <div class="dropdown-menu">
                        <span class="close-dropdown" onclick="closeMenu(this)">✖</span>
                        <div class="contenedor-opciones">
                            <div class="opciones">
                                <a href="#">Celulares</a>
                                <a href="#">Accesorios</a>
                                <a href="#">Cargadores</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <button>Equipo de juego</button>
                    <div class="dropdown-menu">
                        <span class="close-dropdown" onclick="closeMenu(this)">✖</span>
                        <div class="contenedor-opciones">
                            <div class="opciones">
                                <a href="#">Consolas</a>
                                <a href="#">Controles</a>
                                <a href="#">Juegos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <button>Más</button>
                    <div class="dropdown-menu">
                        <span class="close-dropdown" onclick="closeMenu(this)">✖</span>
                        <div class="contenedor-opciones">
                            <div class="opciones">
                                <a href="#">Laptops</a>
                                <a href="#">Tablets</a>
                                <a href="#">Accesorios</a>
                            </div>
                        </div>
                    </div>
                </div>
            

            
                <div class="right-buttons">

            <div class="lupa">
                            <button class="lupa-button">
                                <img src="lupa.png" alt="Buscar">
                            </button>
                        </div>

                           <!-- Capa de fondo gris y barra de búsqueda -->
                           <div class="overlay">
                            <div class="search-container">
                                <input type="text" class="search-input" placeholder="Buscar...">
                                <button class="search-close">
                                    <img src="lupa.png" alt="Cerrar búsqueda">
                                </button>
                            </div>
                        </div>
                        <div class="favorito">
                            <button class="favorito-button">
                                <img src="favorito.png" alt="Favoritos">
                            </button>
                        </div>
                        <div class="dropdown1">
                            <button class="dropdown-button1">
                                <img src="cuenta.png" alt="Cuenta"> 
                            </button>
                            <div class="dropdown-content1">
                                <a href="#"><button class="crear-cuenta"><img src="cuenta.png" alt="Crear cuenta"> Crear cuenta</button></a>
                                <a href="#">Datos de mi cuenta >></a>
                            </div>
                        </div>
                        <div class="carrito">
                            <button class="carrito-button">
                                <img src="carrito.png" alt="Carrito">
                            </button>
                        </div>
                        <div class="ayuda">
                            <button class="ayuda-button">
                                <img src="ayuda.png" alt="Ayuda">
                            </button>
                        </div>
                        <div class="dropdown3">
                            <button class="dropdown-button3">
                                <img src="cr.png" alt="Idioma"> ES
                            </button>
                            <div class="dropdown-content3">
                                <a href="#"><img src="cr.png" alt="Español"> ES</a>
                                <a href="#"><img src="un.png" alt="Inglés"> EN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </div> 

</div>
</div>
<div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    
        </nav>
    </header>
</body>
</html>
