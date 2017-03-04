﻿
<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Jettax - Home</title>

    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/blocks.css">
    <link rel="stylesheet" type="text/css" href="css/layouts.css">
    <link rel="stylesheet" type="text/css" href="css/modules.css">
    <link rel="stylesheet" type="text/css" href="css/widgets-styles.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<!-- Header -->


<header class="header" id="site-header">

    <div class="container">

            <div class="header-content-wrapper">

                <div class="logo">
                    <a href="index.html" class="full-block-link"></a>
                    <img src="img/logo-eye.png" alt="Seosight">
                    <div class="logo-text">
                        <div class="logo-title">Jettax</div>
                        <div class="logo-sub-title">Automação de Nfs-e</div>
                    </div>
                </div>

                <nav id="primary-menu" class="primary-menu">

                    <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                        <span class="mob-menu--title">Menu</span>
                        <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
                    </a>

                    <!-- menu-icon-wrapper -->

                    <ul class="primary-menu-menu">
                        <li class="menu-item-has-children">
                            <a href="logado.php">Dashboard</a>
                        </li>

                        <li class="active">
                            <a href="#">Gestão de Clientes</a>
                            <ul class="dropdown">
                               
                                <li class="hover-ver2">
                                    <a href="novoCliente.php"><i class="seoicon-pin-map"></i>
                                       Cadastrar Cliente
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="listarClientes.php"><i class="seoicon-mail-send"></i>
                                        Listar Clientes
                                    </a>
                                </li>
                            </ul>
                        </li>
						  <li class="">
                            <a href="consultar.php">Consultar Dados</a>
                        </li>
                        <li class="">
                            <a href="configuracoes.php">Configurações</a>
                        </li>
                        <li class="">
                            <button class="btn btn-medium btn--orange btn-hover-shadow js-open-aside">
                                <span class="text">Sair</span>
                                <span class="semicircle"></span>
                            </button>
                        </li>
                    </ul>
                </nav>

                <ul class="nav-add">
                    <li class="search search_main">
                        <a href="#" class="js-open-search">
                            <i class="seoicon-loupe"></i>
                        </a>
                    </li>
                </ul>
            </div>

    </div>

</header>
<!-- ... End Header -->

<div class="content-wrapper">
    <div class="header-spacer"></div>
<div class="container-fluid">
    <div class="row bg-border-color medium-padding120">
        <div class="container">
            <div class="row">
				
                <div class="col-lg-12">
				
                <div class="heading">

            <h4 class="h1 heading-title">Listar Clientes</h4>

            <div class="heading-line">
                <span class="short-line"></span>
                <span class="long-line"></span>
            </div>


        </div>
                
                	<div class="subscribe">
                    <form class="subscribe-form" method="post" action="import.php">
                            <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Buscar..." type="email">
                            <button class="subscr-btn" style="background-color:#55d5d3">Buscar
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                    </div>
                  
                            
                    <div class="cart">

                        <h1 class="cart-title">Você tem <span class="c-primary"> 4 clientes</span> cadastrados</h1>

                    </div>

                    <form action="#" method="post" class="cart-main">

                        <table class="shop_table cart">
                            <thead class="cart-product-wrap-title-main">
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">Razão Social</th>
                                <th class="product-price">CNPJ</th>
                                <th class="product-quantity">E-mail</th>
                                <th class="product-subtotal">Senha Web</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                       <img src="img/edit-32.png" />
                                    </a>
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                    
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                      <div class="cart-product-content">
                                            <p class="cart-author">ITLS Serviços</p>
                                            <h6 class="cart-product-title">ITLS Treinamentos LTDA - EPP</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h6 class="price amount">43.432.435/0001-45</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        ricardo.contini@itls.com.br
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h6 class="total amount">44324235</h5>
                                </td>

                            </tr>

                          <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                       <img src="img/edit-32.png" />
                                    </a>
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                    
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                      <div class="cart-product-content">
                                            <p class="cart-author">ITLS Serviços</p>
                                            <h6 class="cart-product-title">ITLS Treinamentos LTDA - EPP</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h6 class="price amount">43.432.435/0001-45</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        ricardo.contini@itls.com.br
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h6 class="total amount">44324235</h5>
                                </td>

                            </tr>
                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                       <img src="img/edit-32.png" />
                                    </a>
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                    
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                      <div class="cart-product-content">
                                            <p class="cart-author">ITLS Serviços</p>
                                            <h6 class="cart-product-title">ITLS Treinamentos LTDA - EPP</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h6 class="price amount">43.432.435/0001-45</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        ricardo.contini@itls.com.br
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h6 class="total amount">44324235</h5>
                                </td>

                            </tr>
                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                       <img src="img/edit-32.png" />
                                    </a>
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                    
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                      <div class="cart-product-content">
                                            <p class="cart-author">ITLS Serviços</p>
                                            <h6 class="cart-product-title">ITLS Treinamentos LTDA - EPP</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h6 class="price amount">43.432.435/0001-45</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        ricardo.contini@itls.com.br
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h6 class="total amount">44324235</h5>
                                </td>

                            </tr>
                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                       <img src="img/edit-32.png" />
                                    </a>
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                    
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                      <div class="cart-product-content">
                                            <p class="cart-author">ITLS Serviços</p>
                                            <h6 class="cart-product-title">ITLS Treinamentos LTDA - EPP</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h6 class="price amount">43.432.435/0001-45</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        ricardo.contini@itls.com.br
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h6 class="total amount">44324235</h5>
                                </td>

                            </tr>
                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                       <img src="img/edit-32.png" />
                                    </a>
                                    <a href="#" class="product-del remove" style="display:inline; padding:0px 12px;" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                    
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                      <div class="cart-product-content">
                                            <p class="cart-author">ITLS Serviços</p>
                                            <h6 class="cart-product-title">ITLS Treinamentos LTDA - EPP</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h6 class="price amount">43.432.435/0001-45</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        ricardo.contini@itls.com.br
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h6 class="total amount">44324235</h5>
                                </td>

                            </tr>

                            </tbody>
                        </table>


                    </form>

                   <div class="row" style=" background-color:#FFF;">
				<div class="col-lg-12">
					<nav class="navigation">

						<a href="#" class="page-numbers current bg-border-color"><span>1</span></a>
						<a href="#" class="page-numbers bg-border-color"><span>2</span></a>
						<a href="#" class="page-numbers bg-border-color"><span>3</span></a>
						<a href="#" class="page-numbers bg-border-color"><span>4</span></a>
						<a href="#" class="page-numbers next">
							<svg class="btn-next">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
							</svg>
						</a>

					</nav>
				</div>
			</div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">

            <div class="row">

                <div class="subscribe scrollme">

                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="import.php">
                            <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="img/subscr-gear.png" alt="gear" class="gear">
                        <img src="img/subscr1.png" alt="mail" class="mail">
                        <img src="img/subscr-mailopen.png" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Subscribe Form -->
</div>



<!-- Footer -->

<footer class="footer js-fixed-footer" id="site-footer">
    <div class="container">
        <div class="row">

            <div class="info">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h3 class="heading-title">Seosight Company!</h3>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p class="heading-text">Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham
                            liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut aliquip ex ea commodo consequat eleifend option nihil. Investigationes demonstraverunt
                            lectores legere me lius quod ii legunt saepius parum claram.
                        </p>
                    </div>

                    <div class="socials">
                        <a href="" class="social__item">
                            <img src="svg/circle-facebook.svg" alt="facebook">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/twitter.svg" alt="twitter">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/google.svg" alt="google">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/youtube.svg" alt="youtube">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/rss.svg" alt="rss">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="services">
                        <div class="heading">
                            <h3 class="heading-title">Services Provided</h3>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <ul class="list list--primary">
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">SEO Services</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Pay-per-click</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Social Media</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Web Analytics</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Content Management</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Blog Management</a>
                            </li>
                        </ul>

                        <ul class="list list--primary">
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Virtual Marketing</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Email Marketing</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Keyword Analytics</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="contacts">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="  M45.1,44.2C42.9,42,39.6,40,37,42.6c-1.8,1.8-2.6,3.9-2.6,3.9s-4.3,2.3-11.7-5.2s-5.2-11.7-5.2-11.7s2.1-0.8,3.9-2.6  c2.6-2.6,0.6-5.9-1.7-8.1c-2.7-2.7-6.2-4.9-8.2-2.9c-3.7,3.7-4.4,8.4-4.4,8.4S9,35.5,18.7,45.3s20.9,11.6,20.9,11.6s4.7-0.7,8.4-4.4  C50,50.4,47.8,46.9,45.1,44.2z" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M18.4,12.2C22.2,9.5,26.9,8,32,8c13.3,0,24,10.8,24,24c0,4-1.3,9-4.4,12.2" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M27.3,55.6c-9.8-1.9-17.5-9.8-19.1-19.7" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M30,21c0,0,4.4,0,5.2,0c1.2,0,1.8,0.2,1.8,1.1s0,0.7,0,1.3c0,0.6,0,1.4-1.6,2.5c-2.3,1.6-5.6,3.8-5.6,5.1c0,1.6,0.7,2,1.8,2  s5.3,0,5.3,0" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M40,21c0,0,0,2.8,0,3.8S39.9,27,41.5,27c1.6,0,4.5,0,4.5,0v-6.1V33" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">8 800 567.890.11</a>
                            <p class="sub-title">Mon-Fri 9am-6pm</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" points="  54,17 32,36 10,17 " stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="10.9" x2="26" y1="48" y2="36"/><path d="  M32.7,49H13c-2.2,0-4-1.8-4-4V19c0-2.2,1.8-4,4-4h38c2.2,0,4,1.8,4,4v15.5" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="44.9" cy="43.1" fill="none" r="10.1" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M44,41.4c0,0-1.3,3.4-0.9,5.1c0.4,1.7,2.6,2.1,3.7,1.1" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><g><circle cx="45.4" cy="38.3" fill="#DCE9EE" r="0.9"/><path d="M45.4,37.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C46.4,37.8,46,37.3,45.4,37.3   L45.4,37.3z" fill="#f15b26"/></g></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">info@seosight.com</a>
                            <p class="sub-title">online support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" points="  38.7,36.4 56,32 38.7,27.6 42,22 36.4,25.3 32,8 27.6,25.3 22,22 25.3,27.6 8,32 25.3,36.4 22,42 27.6,38.7 32,56 36.4,38.7 42,42   " stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polygon><circle cx="32" cy="32" fill="none" r="4" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle><path d="  M26.1,53.2c-7.9-2.2-13.9-8.6-15.6-16.7" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M53.5,36.9c-1.8,8.1-8.2,14.6-16.3,16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M36.9,10.5c8.2,1.9,14.7,8.3,16.6,16.6" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M10.5,27.1c1.9-8.2,8.3-14.6,16.4-16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">Melbourne, Australia</a>
                            <p class="sub-title">795 South Park Avenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <span>
                        Copyright © 2016 <a href="index.html" class="sub-footer__link">Seosight,</a>
                        Designed by <a href="https://themeforest.net/user/themefire/portfolio">themefire</a>
                    </span>

                    <span>Developed by <a href="https://themeforest.net/user/crumina/portfolio">Crumina</a></span>
                    <span>Only on <a href="https://themeforest.net/user/crumina/portfolio">Envato Market</a></span>

                    <a class="back-to-top" href="#">
                        <svg class="back-to-top">
                            <use xlink:href="#to-top"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- End Footer -->

<svg style="display:none;">
    <symbol id="arrow-left" viewBox="122.9 388.2 184.3 85">
        <path d="M124.1,431.3c0.1,2,1,3.8,2.4,5.2c0,0,0.1,0.1,0.1,0.1l34.1,34.1c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4
		c1.6-1.6,2.4-3.7,2.4-5.9s-0.9-3.9-2.4-5.5l-19.9-19.5h11.1c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3h-17.6c-1.1,0-2.1,0.6-2.5,1.6
		c-0.4,1-0.2,2.1,0.6,2.9l24.4,24.4c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9
		l-34.2-34.2c0,0,0,0,0,0c-0.6-0.6-0.8-1.4-0.9-1.9c0,0,0,0,0,0c0-0.2,0-0.4,0-0.6c0.1-0.6,0.3-1.1,0.7-1.6c0-0.1,0.1-0.1,0.2-0.2
		l34.1-34.1c0.6-0.6,1.3-0.9,2.1-0.9s1.6,0.3,2.1,0.9c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1l-24.4,24.4c-0.8,0.8-1,2-0.6,3
		c0.4,1,1.4,1.7,2.5,1.7h125.7c1.5,0,2.7-1,2.7-2.5c0-1.5-1.2-2.5-2.7-2.5H152.6l19.9-20.1c1.6-1.6,2.4-3.8,2.4-6s-0.9-4.4-2.4-6
		c-1.6-1.6-3.7-2.5-5.9-2.5s-4.3,0.9-5.9,2.4l-34.1,34.1c-0.2,0.2-0.3,0.3-0.5,0.5c-1.1,1.2-1.8,2.8-2,4.4
		C124.1,430.2,124.1,430.8,124.1,431.3C124.1,431.3,124.1,431.3,124.1,431.3z"></path>
        <path d="M283.3,427.9h14.2c1.7,0,3,1.3,3,3c0,1.7-1.4,3-3,3H175.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h122.4
		c4.6,0,8.4-3.9,8.4-8.5c0-4.6-3.8-8.5-8.4-8.5h-14.2c-1.5,0-2.7,1-2.7,2.5C280.7,426.9,281.8,427.9,283.3,427.9z"></path>
    </symbol>
    <symbol id="arrow-right" viewBox="122.9 388.2 184.3 85">
        <path d="M305.9,430.2c-0.1-2-1-3.8-2.4-5.2c0,0-0.1-0.1-0.1-0.1l-34.1-34.1c-1.6-1.6-3.7-2.5-5.9-2.5c-2.2,0-4.3,0.9-5.9,2.4
		c-1.6,1.6-2.4,3.7-2.4,5.9s0.9,4.1,2.4,5.7l19.9,19.6h-11.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h17.6c1.1,0,2.1-0.7,2.5-1.7
		c0.4-1,0.2-2.2-0.6-2.9l-24.4-24.5c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1c0.6-0.6,1.3-0.9,2.1-0.9c0.8,0,1.6,0.3,2.1,0.9
		l34.2,34.2c0,0,0,0,0,0c0.6,0.6,0.8,1.4,0.9,1.9c0,0,0,0,0,0c0,0.2,0,0.4,0,0.6c-0.1,0.6-0.3,1.1-0.7,1.6c0,0.1-0.1,0.1-0.2,0.2
		l-34.1,34.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1l24.4-24.4c0.8-0.8,1-1.9,0.6-2.9
		c-0.4-1-1.4-1.6-2.5-1.6H158.1c-1.5,0-2.7,1-2.7,2.5c0,1.5,1.2,2.5,2.7,2.5h119.3l-19.9,20c-1.6,1.6-2.4,3.7-2.4,6s0.9,4.4,2.4,5.9
		c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4l34.1-34.1c0.2-0.2,0.3-0.3,0.5-0.5c1.1-1.2,1.8-2.8,2-4.4
		C305.9,431.3,305.9,430.8,305.9,430.2C305.9,430.2,305.9,430.2,305.9,430.2z"></path>
        <path d="M146.7,433.9h-14.2c-1.7,0-3-1.3-3-3c0-1.7,1.4-3,3-3h122.4c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3H132.4
		c-4.6,0-8.4,3.9-8.4,8.5c0,4.6,3.8,8.5,8.4,8.5h14.2c1.5,0,2.7-1,2.7-2.5C149.3,434.9,148.1,433.9,146.7,433.9z"></path>
    </symbol>
    <symbol id="to-top" viewBox="0 0 32 32">
        <path d="M17,22 L25.0005601,22 C27.7616745,22 30,19.7558048 30,17 C30,14.9035809 28.7132907,13.1085075 26.8828633,12.3655101
         L26.8828633,12.3655101 C26.3600217,9.87224935 24.1486546,8 21.5,8 C20.6371017,8 19.8206159,8.19871575 19.0938083,8.55288165
         C17.8911816,6.43144875 15.6127573,5 13,5 C9.13400656,5 6,8.13400656 6,12 C6,12.1381509 6.00400207,12.275367 6.01189661,12.4115388
          L6.01189661,12.4115388 C4.23965876,13.1816085 3,14.9491311 3,17 C3,19.7614237 5.23249418,22 7.99943992,22 L16,22 L16,16 L12.75,19.25
           L12,18.5 L16.5,14 L21,18.5 L20.25,19.25 L17,16 L17,22 L17,22 Z M16,22 L16,27 L17,27 L17,22 L16,22 L16,22 Z" id="cloud-upload"></path>
    </symbol>

</svg>

<!-- Overlay Search -->

<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form>
                    <input class="overlay_search-input" placeholder="Digite e aperte 'Enter'..." type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Overlay Search -->

<!-- JS Script -->

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/crum-mega-menu.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<script src="js/theme-plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/form-actions.js"></script>

<script src="js/velocity.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/animation.velocity.min.js"></script>

<!-- ...end JS Script -->

</body>
</html>
