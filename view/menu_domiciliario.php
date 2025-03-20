<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Premium Food Company
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="view/css/menu.css">
    <link rel="website icon" type="png" href="view/assets/Premium.png">
</head>

<body>
    <div class="sidebar">
        <div class="menu-icon">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
<div class="mb-navegacion">
<div class="mb-mover-objeto"></div>
<div class="mb-nav-objeto active">
<a href="#home">
<i class="bx bxs-home"></i>
</a>
</div>
<div class="mb-nav-objeto">
<a href="#about">
<i class='bx bxs-wink-smile'></i>
</a>
</div>
<div class="mb-nav-objeto">
<a href="#food-menu-section">
<i class='bx bxs-food-menu'></i>
</a>
</div>
<div class="mb-nav-objeto">
<a href="#testimonial">
<i class='bx bxs-comment-detail'></i>
</a>
</div>
</div>
<a href="#home" class="back-to-top">
<i class="bx bxs-to-top"></i>
</a>
<div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">
                    Premium Food Company
                </div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
                    <div class="menu-item active">
                        Inicio
                    </div>
                </a>
                <a href="#about">
                    <div class="menu-item">
                        Sobre Nosotros
                    </div>
                </a>
                <a href="#food-menu-section">
                    <div class="menu-item">
                        Comidas
                    </div>
                </a>
                <a href="#testimonial">
                    <div class="menu-item">
                        Testimonios
                    </div>
                </a>
            </div>
            <div class="right-menu">
                <div class="menu-item">
				<a href="?c=Salir">Cerrar Sesion</a></li>
                    </div>
                    
            </div>
        </div>
    </div>
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(view/assets/brooke-lark-08bOYnH_r_E-unsplash.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                            PFC
                        </h1>
                        <p class="left-to-right play-on-scroll delay-2"> <span style="color: white"> <strong>
                          OPCIONES
                          </span>
                        </strong>
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
        <li class="menu"><a href="?c=Usuario">Administra tu cuenta de Premium Food Coompany</a></li>
        <li class="menu"><a href="?c=domicilio">Domicilio </a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="view/assets/dan-gold-4_jhDO54BYg-unsplash.jpg" alt=""
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3>
                            <span class="primary-color">Nosotros</span> creamos <span class="primary-color">deliciosas</span>
                            memorias para <span class="primary-color">ti</span>
                        </h3>
                        <p>
                            Nuestros productos son de alta calidad, estamos seguros que no olvidaras su sorprende sabor ¿Que esperas para ordenar?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(view/assets/katherine-chase-4MMK78S7eyk-unsplash.jpg);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    ¿Que quieres <span class="primary-color">comer</span>  hoy?
                </h1>
                <p style="color: rgb(231, 216, 216)">
                   <strong>Estos son todos nuestros productos disponibles hasta la fecha, Con fabulosos descuentos. No te preocupes pronto traeremos mas </strong>
                </p>
                <div class="food-category">
                    <div class="zoom play-on-scroll">
                        <button class="active" data-food-type="all">
                            Toda la comida
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-2">
                        <button data-food-type="salad">
                            Hamburgesas
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-4">
                        <button data-food-type="lorem">
                            Tacos
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-6">
                        <button data-food-type="ipsum">
                            Arepas
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-8">
                        <button data-food-type="dolor">
                            Pizzas
                        </button>
                    </div>
                </div>

                <div class="food-item-wrap all">
                    <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(view/assets/hamburgesa1.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Hamburgesa con queso y papas
                                    </h3>
                                    <span style="color: white"> 
                                        9000$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                <a class="btn btn-info" href="?c=pedido&a=Crud">
                                    <i class="bx bx-cart-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('view/assets/taquitos.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Tacos al Pastor
                                    </h3>
                                    <span style="color: white">
                                        12.000$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                <a class="btn btn-info" href="?c=pedido&a=Crud">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item ipsum-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('view/assets/arepa_con_queso.jpg');">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Arepa con queso
                                    </h3>
                                    <span style="color: white">
                                        3000$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <a class="btn btn-info" href="?c=pedido&a=Crud">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('view/assets/taquitos_de_lengua.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Tacos de Lengua
                                    </h3>
                                    <span style="color: white">
                                        15.000$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                <a class="btn btn-info" href="?c=pedido&a=Crud">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('view/assets/pizza_con_piña.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Pizza Hawaiana (Completa)
                                    </h3>
                                    <span style="color: white">
                                        18.000$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                <a class="btn btn-info" href="?c=pedido&a=Crud">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('view/assets/hamburgesa_simple.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Hamburgesa Sencilla
                                    </h3>
                                    <span style="color: white">
                                        5000$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                <a class="btn btn-info" href="?c=pedido&a=Crud">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('view/assets/taquito_de_canasta.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Taco de Canasta
                                    </h3>
                                    <span style="color: white">
                                        12.000$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                <a class="btn btn-info" href="?c=pedido&a=Crud">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('view/assets/pizza_con_pepe.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Pizza con peperonni (Completa)
                                    </h3>
                                    <span style="color: white">
                                        18.500$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                <a class="btn btn-info" href="?c=pedido&a=Crud">
                                  <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-2">
                        <div class="review-content">
                            <p style="color: white;">
                                Laura Gonzales
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(view/assets/close-up-portrait-cute-young-woman-holding-textbook-colored-pencils-posing-studio-isolated-pink_176532-9674.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3 style="color: white;">
                                Buen servicio al cliente 
                            </h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="zoom play-on-scroll">
                        <div class="review-wrap active">
                            <div class="review-content">
                                <p style="color: white;">
                                
                                    Rachel Valle
                                </p>
                                <div class="review-img bg-img"
                                    style="background-image: url(view/assets/michael-dam-mEZ3PoFGs_k-unsplash.jpg);">
                                </div>
                            </div>
                            <div class="review-info">
                                <h3 style="color: white;">
                                    Excelente comida, lo volveria a probar una y otra vez
                                </h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-4">
                        <div class="review-content">
                            <p style="color: white;">
                                Alberto Daza
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(view/assets/portrait-happy-young-man_171337-21716.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3 style="color: white;">
                                Buenos domicilios y rapidos
                            </h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer bg-img" style="background-image: url(view/assets/fondo3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        Premium Food Company
                    </h1>
                    <br>
                    <p style="color:black"> <strong>Nuestra comida es unica, No te arrepentiras de comprar y te brinndaremos el mejor servicio </strong> </p>
                    <br>
                    <p style="color: black"><strong>Email: yesmayparedes@hotmail.com </strong></p>
                    <p style="color: black"><strong>Celular: 3175243264 </strong></p>
                </div>
               
                <div class="col-4 col-xs-12">
                    <h1>
                        ¡Sucribete e Informate!
                    </h1>
                    <br>
                    <p style="color: black"> <strong>Si te suscribes tendras acceso a nuestras ofertas antes que los demas ¿Que esperas? </strong> </p>
                    <div class="input-group">
                        <input type="text" placeholder="Ingresa tu Email">
                        <button>
                            Suscribete
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


    <script src="view/bootstrap_principal/index.js"></script>
</body>

</html>

