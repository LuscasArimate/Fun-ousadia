<?php
include "conexaoBD.php";
?>


<!-- <script>window["__betalabsCheckoutLanguage"] = "pt"</script><meta charset="utf-8" /><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" /><base href="/"><link rel="stylesheet" href="https://checkout.betalabs.net/assets/css/bootstrap/bootstrap.min.css" type="text/css" /><link rel="stylesheet" href="https://checkout.betalabs.net/assets/font-awesome/css/font-awesome.min.css" type="text/css" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" /><link href="https://checkout.betalabs.net/styles.8f2b620fc345c137cce5.bundle.css" rel="stylesheet" /> -->
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funeraria Ousadia</title>
    <link href="https://io.betalabs.net/build/css/canopus/canopus-02635147ff.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://assets.betalabs.net/production/mensalidadeplanofunerario/styles/stores/1/style.css?47c6ff403330d7259b874e73378a7040">
    <link rel="icon" sizes="16x16" type="image/png" href="https://raw.githubusercontent.com/Ksanim0/fun-ousadia-bd/main/logos/logo1.png">
    <meta name="google-site-verification" content="ezTnfxOAOeXB6FaEOsqR0fcf63u74YI3CQX8biM0w7I" />
    
    
  
</head>
<body>
    
    
                        
    
    
    
    
  <style>
@import  url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;523;600;700;800&display=swap');


*{
    
   font-family: 'Manrope', sans-serif !important;
}

button#updateSubscriptionButton {
    display: none;
}


.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome !important;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.row.text-center.social-login .col-sm-12 {
    display: grid;
}
button.col.btn.btn-sm.btn-fb, button.col.btn.btn-sm.btn-fb:hover {
        border: 1px solid #3b5999!important;
        width: 222px !important;
        color: #fff !important;
        border-radius: 0;
    }
    
    button.col.btn.btn-sm.btn-gp, button.col.btn.btn-sm.btn-gp:hover {
        border: 1px solid #dd4b39!important;
        width: 222px !important;
        border-radius: 5;
        margin: 9px 0 0 0;
        color: #fff !important;
    }
    
    .btn-fb[_ngcontent-c26]:hover {
        color: #3b5999;
        background-color: #3b5999 !important;
    }
    
    .btn-gp[_ngcontent-c27]:hover {
        color: #dd4b39;
        background-color: #dd4b39 !important;
    }
    
    .header-checkout{
        padding: 19px 0;
    }
    
    .header-checkout p, .carrinho {
        font-size: 34px;
        color: #1D529D;
        font-weight: 700;
        margin-top: 0px;
    }
    span.ml-md-auto a{
        color: #FF593E;
        font-weight: bold;
        font-size: 12px;
        white-space: pre !important;
    }
    .continue-shopping {
    display: none !important;
    }
    
    .checkout-formbox[_ngcontent-c10], .checkout-formbox {
    background: #fff !important;
    
    }
    .checkout-formbox.active header.checkout-formbox-header i {
        border: 1px solid #e0e0e0;
        box-shadow: 0 0 8px 1px rgba(0,0,0,.2);
        display: none !important;
    }
    
    .checkout-formbox {
    border: 1px solid #e0e0e0;
    box-shadow:none !important;
}
   .checkout-formbox-header i{
       display:none;
   }
   
   .checkout-formbox.active {
    border: none;
    background-color: #d7ecff !important;
    box-shadow: none !important;
}
   
    .checkout-formbox-header {
    color: #5c5c5c !important;
    font-size: 20px !important;
}
   
   .checkout-formbox-header[_ngcontent-c5], .payment-resume-header[_ngcontent-c5] {
        font-weight: 600;
        color: #626262 !important;
        border-bottom: none !important;
        border: 1px solid #e0e0e0;
        width: 100%;
        margin: 0 0px 0 -15px;
        padding: 9px 0 0 18px;
        border-radius: 7px 7px 0 0;
        font-size: 20px;
        background: #fff;
    }
    
    payment-resume .row.canopus-cart-items {
        border: 1px solid #e0e0e0 !important;
        border-top: none !important;
        height: auto;
        width: 100%;
        border-radius: 0 0 7px 7px;
        padding: 0 20px 27px 20px;
        background: #fff;
    }
    
    .row.canopus-cart-items .col-12 {
        border: 1px solid #E8E8E8;
        width: 259px;
        padding: 4px 0 13px 10px;
        border-radius: 5px;
        margin: 17px 0 0 0px;
    }
    
    .value {
        font-size: 20px !important;
        color: #5D5D5D !important;
        font-weight: normal !important;
        
    }
    
   .title {
        font-size: 14px !important;
        color: #fff !important;
        word-wrap: break-word !important;
    }
    
    .canopus-cart-item-quantity[_ngcontent-c3] .cart-qty-input[_ngcontent-c3] {
    margin: 0;
    border: 0;
    }
    
    .canopus-cart-item-quantity input {
    margin: 0px;
    }
    
    .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show>.btn-success.dropdown-toggle {
      color: transparent;
      background-color: #C11C1C;
      border-color: #C11C1C;
    }
    
    .btn[_ngcontent-c3], .btn{
        color: #fff !important;
        background: #38B4AA !important;
        border: 1px #38B4AA !important;
        border-radius: 5px !important;
        font-size: 13px;
        height: 55px;
        width: 168px;
        margin: 0 62px 0 0px;
    }
    
    .btn[_ngcontent-c3], .btn[_ngcontent-c16] {
        color: #fff !important;
        border-radius: 50px !important;
        font-size: 13px;
        font-weight: bold;
        height: 45px;
        width: 252px;
        position: relative;
        margin: 0 36px 14px 0px;
        left: 23%;
    }
    
   .btn-primary:hover, .btn:hover, button.action:hover {
   
    color: #fff !important;
    
    font-weight: bold;
}

button.btn.btn-sm.btn-link {
    color: #fff !important;
    background-image: linear-gradient(to right,#C2D94C,#009EDA);
    border: navajowhite;
    border-radius: 50px;
    height: 50px;
}
    
    .btn:active {
        color: #242424 !important;
        border-color: #E0E0E0 !important;
        background-color: transparent !important;
    }
    
    .btn[_ngcontent-c7] {
        color: #fff !important;
        background: #38B4AA !important;
        border: 1px #38B4AA !important;
        border-radius: 5px !important;
        font-size: 13px;
        height: 45px;
        width: 250px;
        margin: 0 62px 0 0px;
    }
    
    
 .canopus-cart-empty-button a:hover {
    color: #242424 !important;
    background: #E0E0E0 !important;
    border: 1px #E0E0E0 !important;
    border-radius: 5px !important;
    font-size: 13px;
    height: 34px;
    width: 245px;
    margin: 0;
}
 
 .canopus-cart-empty-button a {
    color: #242424 !important;
    background: #E0E0E0 !important;
    border: 1px solid #E0E0E0 !important;
    border-radius: 5px !important;
    font-size: 13px;
    height: 55px;
    width: 245px;
    margin: 0;
    font-weight: bold;
}

    .btn, .btn-primary, 
    .btn-primary.focus, 
    .btn-primary:active, 
    .btn-primary:focus, 
    .btn.focus, 
    .btn:focus, 
    button.action, 
    button.action.focus, 
    button.action:focus {
    color: #fff !important;
    background-image: linear-gradient(to right,#C2D94C,#009EDA);
    border: navajowhite;
    border-radius: 50px;
}
    
    
    
.form-group a {
    color: #fff !important;
    background-image: linear-gradient(to right,#C2D94C,#009EDA);
    border-radius: 5px !important;
    font-size: 13px;
    height: 80px !important;
    width: 70px !important;
    padding: 5px 10px;
    font-weight: bold;
}
    
div.canopus-cart-item-info {
    display: flex !important;
}

    
    .btn .btn-success .btn-block .btn-block-icon mb-md{
        color: #fff !important;
        background: #38B4AA !important;
        border: 1px #38B4AA !important;
        border-radius: 5px !important;
        font-size: 13px;
        height: 80px !important;
        width: 70px !important;
        padding: 10px 10px;
    }
    
    .btn-outline-secondary {
        color: #fff !important;
        border-radius: 5px !important;
        font-size: 12px;
        vertical-align: baseline !important;
        width: 90px;
        height: 34px;
    }
    
    payment-resume-pay-button .btn .btn-success .btn-block .btn-block-icon .mb-md{
        color: #fff !important;
        background: #38B4AA !important;
        border: 1px #38B4AA !important;
        border-radius: 5px !important;
        font-size: 15px;
    }
    
    .col-lg-3.col-md-5.col-12.ml-auto cart-proceed-to-payment-button button.btn.btn-success.btn-block.btn-md.float-right {
        position: relative;
        left: 189%;
        bottom: -31px;
    }
    
    .canopus-cart-freight{
        display:none !important;
    }
    
    cart .container-fluid.canopus-cart-container, .container-fluid.canopus-payment-container {
        margin: 0;
        padding: 0;
    }
    
    header.checkout-formbox-header {
        position: static;
        width: 100%;
        margin: 0 auto;
        top: 0;
        left: 0;
        z-index: 1;
    }
    
    .container .row .col-12.col-lg-5.col-md-7.mx-auto.completed-resume {
        margin: 0px 0 17px 0;
    }
    
    cart-empty[_ngcontent-c1] {
        display: block;
        width: 100%;
        margin: 0 0 14% 0;
    }
    
    div#scroll-to-card-payment-options h6 {
    display: none;
}
    
    
    .cart-table {
        background: transparent;
    }
    
.canopus-cart-total .value strong {
    font-size: 20px !important;
    color: #FFf !important;
    margin: 0 0 0 -26px;
}
    
    .canopus-cart-discount {
        display: none;
    }
    
    .canopus-cart-discount, .canopus-cart-freight, .canopus-cart-subtotal, .canopus-cart-total, .canopus-next-step {
        padding: 16px 0 0;
    }
    
    .canopus-cart-subtotal .value {
        font-weight: 400;
    }
    
    .table-header .photo:after {
        content: "Produto";
        font-size: 13px;
        color: #fff;
        letter-spacing: 1px;
    }
    
    .table-header .qty {
        font-size: 0px;
        margin: 0 0 0 10px;
    }
    
    .table-header .qty:after {
        content: "Qtd";
        font-size: 13px;
        color: #fff;
        letter-spacing: 1px;
        margin: 0 0 0 82px;
        float: left;
    }
    
    .cart-table .table-header {
        font-size: 13px;
        line-height: 1.2em;
        font-weight: 700;
        padding: 4px 0;
        text-align: center;
        color: #fff;
        letter-spacing: 1px;
    }
    
   .table-header {
    border: 1px solid #0fa3d0;
    background: #0fa3d0;
    height: 40px;
}
    
    span.ml-md-auto a {
        color: #FF593E;
        font-weight: bold;
        font-size: 9px;
        white-space: pre !important;
        margin: 0px 0 0 0;
    }
    
    .checkout-formbox.ready {
        margin: 0 0 15px -7px;
    }
    
    .canopus-payment-delivery-addresses-address-item.mb-sm a.small {
        color: #999;
    }
    
    .canopus-payment-identification-identified-user a.small, checkout-formbox ready a.small {
        color: #999;
    }
    
    p a.small {
        color: #999;
    }
    
    .checkout-formbox.ready h5 {
        padding: 11px 0 0 0;
    }
    
    
   .canopus-payment-resume .canopus-cart-item-info a {
        font-size: 11px;
        display: block;
        display: -webkit-box;
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        padding: 11px 0 0 0;
        text-transform: uppercase;
        
    }
    
    .canopus-cart-item-info a {
        font-size: 14px !important;
        line-height: 22px;
        font-weight: bold !important;
        color: #5c5c5c !important;
    
    
    }
    
    
    
    form#form-payment-identification-identification {
        margin: 13px 0 0 0;
    }
    
       i.fa.fa-shopping-cart.fa-5x {
        color: #242424;
    }
    
    .canopus-cart-empty[_ngcontent-c5] h5[_ngcontent-c5] {
        font-size: 1.4rem;
        font-weight: 600;
        padding: 1rem;
        color: #000;
    }
    
    .canopus-cart-empty[_ngcontent-c12] {
        color: #000;
    }
    
    .canopus-cart-empty[_ngcontent-c6] h5 {
        color: #000;
    }
    
    .cart-table {
        
        margin-bottom: 50px;
    }
    
   
    
   section.breadcumb h1 {
    color: #5C5C5C;
}
    
    

@media  only screen and (max-width: 700px){
    
    .header-checkout img {
        margin: 0 0 0 125px;
    }
    
    cart-empty[_ngcontent-c1] {
        display: block;
        width: 100%;
        margin: 0 0 14% 0;
    }
    
  
    .header-checkout p, .carrinho {
        font-size: 34px;
        color: #1D529D;
        font-weight: 700;
        margin-top: 0px;
        
    }
    
    .container .row .col-12.col-lg-5.col-md-7.mx-auto.completed-resume {
        margin: 191px 0 17px 0;
    }
    
    span.fa.fa-minus {
        margin: 0 0 0 -35px;
    }
    
    .btn-primary span, .btn span, button.action span {
        position: relative;
        top: 0;
        left: 8px;
    }
    
    a.mt-md.mb-md.pull-left {
        color: #ffffff !important;
        background: #0fa3d0 !important;
        border: 1px solid #0fa3d0 !important;
        border-radius: 50px !important;
        font-size: 13px;
        font-weight: bold;
        height: 45px;
        width: 252px;
        position: relative;
        padding: 12px 31px;
        text-transform: uppercase;
        margin: 0 35px;
    }
    
    .btn[_ngcontent-c3], .btn[_ngcontent-c16] {
        color: #fff !important;
        border-radius:50px !important;
        font-size: 13px;
        font-weight: bold;
        height: 45px;
        width: 252px;
        position: relative;
        margin: 12px 36px 14px 0px;
        left: 4px;
    }
    
    .col-lg-3.col-md-5.col-12.ml-auto cart-proceed-to-payment-button button.btn.btn-success.btn-block.btn-md.float-right {
        position: relative;
        left: 0;
        bottom: -31px;
    }
    
    .canopus-cart-resume[_ngcontent-c1] {
        margin: .5rem 0px 0.75rem;
        padding: .5rem 0;
        width: 100%;
        position: relative;
        left: 0;
    }
    
   .col-8.canopus-cart-item-info {
        display: flex !important;
    }
    
    .canopus-payment-resume .cart-row {
        margin: 0 !important;
        padding: 0 !important;
        border-bottom: none !important;
    }
    
    .col-8.canopus-cart-item-info {
        display: flex !important;
    }
        
    
    .canopus-payment-resume .cart-row {
    margin: 0 !important;
    padding: 0 !important;
    border-bottom: none !important;
}


    .canopus-payment-resume .cart-row {
        margin: .5rem 0;
        padding: 0;
        border: 1px solid  #F0F0F0;
        height: 100px;
        border-radius: 5px;
        position: relative;
        left: 0px;
        width: 285px;
        font-size: 12px !important;
    }
    
    .canopus-payment-resume .canopus-cart-item-info a {
        font-size: 11px;
        display: block;
        display: -webkit-box;
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        padding: 11px 0 0 0;
        text-transform: uppercase;
        
    }
    
    .canopus-cart-total .title {
        text-align: right;
        margin: 0;
        margin-left: -113px !important;
        padding: 0;
        position: relative;
        left: -44px;
    }
    
    .canopus-cart-total .value strong {
        font-size: 20px !important;
        color: #FFf !important;
        margin: 0;
        position: relative;
        left: -46px;
    }
    
    .container-fluid.canopus-payment-container .row.canopus-cart-total {
        border: 1px solid #C2D94C;
        background: #C2D94C;
        border-radius: 5px;
        padding: 14px 0;
    }
    
}

.abc-checkbox.abc-checkbox-circle[_ngcontent-c23] label[_ngcontent-c23]:before{
    display:none;
}


/*
label.checkbox.abc-checkbox.abc-checkbox-success.abc-checkbox-circle.payment-option-item-check-same-address.mb-md span.description {
    display: none;
}
*/
.canopus-cart-total .title {
    text-align: right;
    margin: 0 0px 0 -17px;
}

section.breadcumb {
    overflow-y: hidden;
    padding: 220px 0 100px;
    margin: -215px 0 0 0;
    background-repeat: no-repeat;
    background-position: center bottom;
}

.voltar {
    margin-bottom: 50px;
    text-align: center;
}

.voltar a {
    background-color: transparent;
    color: #636161;
    font-weight: 600;
    font-size: 13px;
    padding: 0;
    text-decoration: none;
    position: relative;
    top: 49px;
}

header.header-checkout {
    margin-top: 30px;
}

.logo img {
    width: 80px;
    height: 50px;
}

.row.canopus-cart-total {
    border: 1px solid #C2D94C;
    background: #C2D94C;
    border-radius: 5px;
    padding: 14px 0;
}
.row.canopus-cart-subtotal {
    display: none;
}


.canopus-payment-resume .canopus-cart-item-quantity h5 {
    margin: 4px 4px 0 -7px;
}

/*.header-checkout{
    position: initial;
    background-image: url(https://assets.betalabs.net/production/ecommerceintersept/images/stores/1/banner-outras2x.png);
    background-repeat: no-repeat;
}*/

.header-checkout img {
    margin: 0 0 0 0;
}

.hide{
    display:none;
}

completed {
    display: none;
}

.col-6.canopus-cart-item-price h5 strong {
    font-size: 16px !important;
    color: #009EDA;
    margin: 0 0 0 0;
    position: relative;
    left: 49px;
}
@media (max-width: 375px){

.checkout-formbox-header[_ngcontent-c5], .payment-resume-header[_ngcontent-c5] {
    font-weight: 600;
    color: #626262 !important;
    border-bottom: none !important;
    border: 1px solid #e0e0e0;
    width: 315px !important;
    margin: 0 0px 0 -15px;
    padding: 9px 0 0 18px;
    border-radius: 7px 7px 0 0;
    font-size: 20px;
    background: #fff;
}


}
@media (max-width:480px){

    .canopus-cart-item-info[_ngcontent-c4] a[_ngcontent-c4] {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: normal;
    }
    
    .checkout-formbox-header[_ngcontent-c5], .payment-resume-header[_ngcontent-c5] {
        font-weight: 600;
        color: #626262 !important;
        border-bottom: none !important;
        border: 1px solid #e0e0e0;
        width: 354px;
        margin: 0 0px 0 -15px;
        padding: 9px 0 0 18px;
        border-radius: 7px 7px 0 0;
        font-size: 20px;
        background: #fff;
    }
    
    div#mudar-confirma {
        flex-wrap: wrap-reverse;
    }
    
    .img-erro {
        padding: 0!important;
        margin: 70px 0 0 0;
    }
    
    .img-erro img {
        width: 100%!important;
    }
    
    .canopus-cart-resume .row.canopus-cart-total {
        border: 1px solid #C2D94C;
        background: #C2D94C;
        border-radius: 5px;
        padding: 10px 0 0 41px !important;
        width: 250px;
        height: 44px;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }
    
    .canopus-cart-total .title {
        text-align: right;
        margin: 0;
        margin-left: -105px !important;
        padding: 0;
    }
    
}    
    
.canopus-cart-item-quantity[_ngcontent-c4] button.btn[_ngcontent-c4] {
    border: 0;
    background-color: transparent !important;
    color: #333;
    cursor: pointer;
    width: 20px;
    height: 20px;
    -webkit-appearance: none;
    border-radius: 0;
    text-align: center;
    padding: 0;
}

/*button#recurrencyModelsButton {
    display: none;
}*/


input.form-control.ng-untouched.ng-pristine.ng-invalid {
    width: 100% !important;
}

.input-group-append {
    margin-left: -1px;
    display: block;
}

.input-group.mb-3 {
    display: block;
}

.toast-message{
    color: #F16521 ;
}

    
cart-recurrent {
        margin-bottom: 28px !important;
    }
    
cart-recurrent .dropdown-menu {
    top: 0 !important;
    margin: 0px !important;
}

cart-recurrent button:last-child, cart-recurrent .dropdown-divider {
    display: block;
}

payment-resume-cart-recurrent .alert-secondary {
    color: #fff;
}

button.dropdown-item:not(.botao-a-ser-clicado-assinatura) {
    display: none;
}
cart-subscriptions-update .btn-group.btn-success.pull-right {
    height: 56px;
    background-color: transparent !important;
    margin-top: -35px;
    width: 200px;
}
div.dropdown-menu[aria-labelledby="updateSubscriptionButton"] {
    position: unset !important;
    margin-top: 0px;
    border-radius: 50px;
    width: 200px;
    border: transparent;
    background: transparent;
}


.input-group-btn button {
    display: none;
}
.list-group-item.active {
    background-color: #f16521a1!important;
    border-color: #f16521a1!important;
}
.list-group-item.active span {
    color: #fff !important;
    font-weight: 700 !important;
}


input.cart-qty-input {
    pointer-events: none !important;
}



cart-recurrent {
    display: none !important;
}


div.dropdown-menu[aria-labelledby="updateSubscriptionButton"] {
    transform: none!important;
}

.col-6.canopus-cart-item-quantity h5 span {
    display: none !important;
}


.col-6.canopus-cart-item-quantity {
    display: none;
}

.col-4.d-flex.justify-content-center.canopus-cart-item-image {
    display: none !important;
}


li.alert.alert-secondary strong:before {
    content: "Plano Selecionado:" !important;
    font-size: 14px !important;
}

li.alert.alert-secondary strong {
    font-size:0 !important;
}


payment-resume-cart-recurrent {
    position: relative;
    top: 27px;
    display:none;
}

.minha-cesta-bg {
    padding: 0 0 40px 0;
}

button.btn.btn-sm.btn-block.btn-link.mb-sm {
    width: 277px;
}

form#form-payment-identification-new-user a.small.pull-right {
    color: #242424 !important;
    background: #fff !important;
    border: 1px #123371 !important;
    border-radius: 5px !important;
    font-size: 13px;
    height: 32px !important;
    width: 200px !important;
    padding: 5px 10px;
    font-weight: bold;
}

button.btn.btn-block.btn-block-icon {
    color: #fff!important;
    background-image: linear-gradient(to right,#C2D94C,#009EDA);
    border: 1px solid!important;
    border-radius: 50px !important;
    font-size: 13px;
    height: 50px;
    width: 230px;
    margin: 0 0px 0 30px;
}

a.quero {
    color: #009EDA;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    position: relative;
    text-transform: uppercase;
}


.btn-quero {
    width: 260px;
    height: 50px;
    background: #fff;
    text-align: center;
    border-radius: 50px;
    padding: 13px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}


section.confirmacao a img {
   
    margin: 95px 10px 0 0;
}

section.confirmacao h2 {
    font-size: 38px;
    color: #fff;
    font-weight: bold !important;
}

section.confirmacao p {
    font-size: 20px;
    color: #fff;
}

section.confirmacao h1 {
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    margin: 0;
}

section.confirmacao {
    background-repeat: no-repeat;
    background-position: bottom;
    width: 100%;
}

header#header-checkout-complete {
    margin: -31px 0 0 0;
    height: 800px;
    background-position: top;
    background-size: cover;
}

section.confirmacao a.quero img {
    width: 28px;
    margin: 0 10px 0 0;
}


.table-row.cart-row {
    border: 1px solid #fff !important;
    border-radius: 6px;
    background: #fff;
}



.col-lg-3.col-md-5.col-12.ml-auto cart-proceed-to-payment-button button.btn.btn-success.btn-block.btn-md.float-right {
    display: none !important;
}



.confirmacao .texto-erro {
    padding: 65px 0px 0 50px;
}

.confirmacao .texto-erro p {
    font-size: 16px;
    color: #fff;
    font-weight: 400;
    width: 100%;
    text-align: left;
}


footer.footer {
    display: none;
}


section.infos-check p {
    font-size: 11px;
    text-align: center;
    color: #535353;
}

.canopus-cart-item-info h4 a {
    text-align: center;
    font-size: 16px !important;
}

.cart-table .table-row .name {
    padding: 24px 0 0 0;
}

.price.canopus-cart-item-price {
    position: relative;
    left: 270px;
}

.qty.qty-changer.canopus-cart-item-quantity {
    position: relative;
    left: 270px;
}

.remove.canopus-cart-item-remove {
    position: relative;
    left: 270px;
}

.canopus-cart-total .title {
    text-align: right;
    margin: 0;
    margin-left: 0 !important;
    padding: 0;
}

.canopus-cart-total .value strong {
    font-size: 20px !important;
    color: #FFf !important;
    margin: 0;
}

.canopus-cart-resume .row.canopus-cart-total {
    border: 1px solid #C2D94C;
    background: #C2D94C;
    border-radius: 5px;
    padding: 10px 0 0 41px !important;
    width: 250px;
    height: 44px;
}

.canopus-cart-total .title {
    text-align: right;
    margin: 0;
    margin-left: 0 !important;
    padding: 0;
}

.canopus-cart-total .value strong {
    font-size: 20px !important;
    color: #FFf !important;
    margin: 0;
}

a.mt-md.mb-md.pull-left {
    color: #ffffff !important;
    background: #0fa3d0 !important;
    border: 1px solid #0fa3d0 !important;
    border-radius: 50px !important;
    font-size: 13px;
    font-weight: bold;
    height: 45px;
    width: 252px;
    position: relative;
    padding: 12px 31px;
    text-transform: uppercase;
}

.container-fluid.canopus-payment-container .canopus-cart-total .title {
    text-align: right;
    margin: 0;
    margin-left: 0 !important;
    padding: 0;
    position: relative;
    left: -59px;
}

.container-fluid.canopus-payment-container .row.canopus-cart-total {
    border: 1px solid #C2D94C;
    background: #C2D94C;
    border-radius: 5px;
    padding: 14px 0;
    width: 260px !important;
    margin-left: auto;
    margin-right: auto;
}

.container-fluid.canopus-payment-container .canopus-cart-total .value strong {
    font-size: 20px !important;
    color: #FFf !important;
    margin: 0;
    position: relative;
    left: -50px;
}

li.alert.alert-info {
    display: none;
}

.btn.btn-sm {
    line-height: 0;
    height: 34px;
}

label[for="installments-0-1"] span:before {
    content: "Mensalidade";
    font-size: 14px;
}

label[for="installments-0-1"] span {
    font-size: 0;
}

button.btn.btn-danger {
    margin-left: auto;
    margin-right: auto;
}




.checkout-formbox.active header.checkout-formbox-header {
    color: #009fdb !important;
}

@media (max-width: 768px) {
    section.breadcumb {
        padding: 180px 0 0;
        margin-top: 0;
        background-position: center top;
    }
    header.header-checkout {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: 0;
    }
    .checkout-formbox-header[_ngcontent-c5], .payment-resume-header[_ngcontent-c5] {
        margin: 0 !important;
        width: 100% !important;
    }
    .row.canopus-cart-items .col-12 {
        width: 100% !important;
    }
    payment-resume .row.canopus-cart-items {
        margin: 0 !important;
    }
    .col-12.canopus-payment-resume {
        padding: 0 !important;
    }
}










header#header-checkout-complete {
    height: max-content;
    padding: 40px 0;
}

#video-segurojazigo {
    width: 100%;
}

#txt-segurojazigo .title {
    font-size: 19px !important;
    font-weight: 700;
    margin-bottom: 10px;
}

#txt-segurojazigo .desc {
    font-size: 17px !important;
    color: #fff;
}

#video-segurojazigo .video iframe {
    width: 100%;
}

.assjazigo {
    background-color: #fff;
    border: none;
    border-radius: 50px;
    padding: 16px 0;
    color: #009EDA;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    width: 260px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}




@media (max-width: 768px) {
    #txt-segurojazigo {
        padding: 40px 15px 0;
    }
    #video-segurojazigo {
        padding: 30px 15px 40px;
    }
    #txt-segurojazigo .title {
        line-height: 30px;
    }
    #video-segurojazigo .video {
        padding: 30px 0;
    }
    .confirmacao .texto-erro p {
        text-align: center;
    }
    .btn-quero {
        margin: 0 auto;
    }
    section.confirmacao.comjazigo .texto-erro {
        padding: 30px 20px 0 !important;
    }
    section.confirmacao.comjazigo .img-erro {
        margin-top: 0 !important;
        padding: 0 60px !important;
    }
}

@media (min-width: 769px) {
    /*
    #txt-segurojazigo {
        padding: 50px 0 0;
    }
    */
    #video-segurojazigo {
        padding: 50px 0;
    }
    section.confirmacao > div > .row > div {
        width: 50%;
    }
    #video-segurojazigo .video {
        padding: 20px 0 50px;
    }
    #video-segurojazigo .video iframe {
        height: 500px;
    }
    section.confirmacao.comjazigo > div > .row > div {
        width: calc(100% / 3);
    }
    .confirmacao.comjazigo .texto-erro {
        padding: 0 30px;
    }
    #txt-segurojazigo {
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    section.confirmacao h1 {
        text-align: left;
    }
}

#txt-segurojazigo .desc {
    margin-bottom: 15px;
}

payment-payment-coupon input {
    width: 100% !important;
    flex: unset !important;
}

section.confirmacao.comjazigo .img-erro img {
    max-width: 100%;
}

section.confirmacao.comjazigo .img-erro {
    display: flex;
    align-items: center;
}

section.confirmacao h1 {
    line-height: 30px;
    margin-bottom: 20px;
}

#video-segurojazigo .title {
    font-size: 38px !important;
    font-weight: 700;
}

</style>
<header class="header-checkout">
    <div class="container">
        <div class="row" style="align-items: center;">
            <div class="col text-center">
                <a href="/">
                    <img src="" alt="" width="165px">
                </a>
            </div>
        </div>
        <div class="voltar">
            
        </div>
    </div>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '278221543743274'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=278221543743274&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</header>

<header id="header-checkout-complete" class="hide" style="background-image:url(https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bg-erro.png)">
    <section class="confirmacao" >
        <div class="container text-center">
            <a href="" class="d-block mx-auto mt-3 mb-5">
                <img src="" alt="" class="img-fluid" width="257px">
            </a>
            <div class="row">
                <div class="img-erro">
                    <img src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/puff.png">
                </div>
                <div class="texto-erro">
                    
                    <h1 class="font-weight-bold">Assinatura realizada com sucesso!</h1>
                    <p class="mb-5">Você vai receber a confirmação por email, <br>e pode acompanhar o status do seu pedido na sua conta</p>
                    <a href="/account/subscriptions" class="btn-quero quero">
                        Acompanhar pedido
                    </a>
                </div>
            </div>    
        </div>



















































        <section class="container infos-check">
            <p> plataforma de venda de planos de assistência online ofertado por Funeraria Assistência e Prestação de Serviços de Apoio e Planos de Auxílio a Empresas Ltda, CNPJ 37.351.245/0001-73, e Corretora: Inforseg Corretora e Administradora De Seguros Eireli, CNPJ 03.240.235/0001-49. Seguro garantido pela MAPFRE Seguros Gerais S.A., CNPJ 61.074.175/0001-38, Cód. SUSEP: 06238, Av. das Nações Unidas, 14.261, Ala A, 29º andar, 04794-000, Vila Gertrudes, São Paulo/SP, www.mapfre.com.br. Assistência oferecida por MAPFRE Assistência Ltda, CNPJ 68.181.221/0001-47, Processo SUSEP - 15414.900614/2014-11 – Microsseguro e 15414.900026/2017-11 - Decessos Individual. Contato: Serviço de Atendimento ao Consumidor Funeraria Assist (SAC Atendimento 24h): 0800-944-1120. Serviço de Atendimento ao Consumidor MAPFRE (SAC 24h) 0800 771 8978 / Deficiente Auditivo e de Fala MAPFRE 0800 775 5045. Ouvidoria 0800 775 1079 (2ª a 6ª-feira, exceto feriado, das 8h às 18h) / Ouvidoria Deficiente Auditivo e de Fala 0800 962 7373, exceto feriado ou pelo site www.mapfre.com.br. A Ouvidoria poderá ser acionada para atuar na defesa dos direitos dos consumidores, esclarecer e/ou solucionar demandas já tratadas pelos canais de atendimento habituais.</p>
        </section>
    </section>
</header>


<section class="breadcumb check" style="background-image:url(https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bg-checkout.png)">
    

    <div class="minha-cesta-bg">
        <div class="container">
            <app-root></app-root><script src="https://checkout.betalabs.net/assets/js/bootstrap/popper.min.js"></script><script src="https://checkout.betalabs.net/assets/js/bootstrap/jquery-3.2.1.slim.min.js"></script><script src="https://checkout.betalabs.net/assets/js/bootstrap/bootstrap.min.js"></script><script type="text/javascript" src="https://checkout.betalabs.net/inline.10c1b4b93957187d329d.bundle.js"></script><script type="text/javascript" src="https://checkout.betalabs.net/polyfills.3272a79620d2f7dc5912.bundle.js"></script><script type="text/javascript" src="https://checkout.betalabs.net/vendor.ded1bebbee8b5f6ce808.bundle.js"></script><script type="text/javascript" src="https://checkout.betalabs.net/main.74c86d3fe812094d3a1a.bundle.js"></script>        </div>
    </div>
</section>


<section class="container infos-check">
    <br><br><br><br><br>

<!-- Escrever aqui,, lucAS  --> 


  <style id="stitches">
    --sxs {
      --sxs: 0 t-iEJzr t-bwiHlN
    }

    --sxs {
      --sxs: 1 k-jYBrOR k-fNLrdV k-kBYfKb
    }

    @media (min-width: 1200px) {
      @keyframes k-jYBrOR {
        from {
          height: 0
        }

        to {
          height: var(--radix-accordion-content-height)
        }
      }

      @keyframes k-fNLrdV {
        from {
          height: var(--radix-accordion-content-height)
        }

        to {
          height: 0
        }
      }

      @keyframes k-kBYfKb {
        from {
          transform: rotate(0)
        }

        to {
          transform: rotate(360deg)
        }
      }
    }

    --sxs {
      --sxs: 2 c-PJLV c-biNYZn c-byyrWi c-dkrkOl c-greilc c-cYoyrL c-dlYIZK
    }

    @media (min-width: 1200px) {
      .c-biNYZn {
        box-sizing: border-box;
        max-width: calc(var(--sizes-screenWidth) + (var(--space-xxs) * 2));
        margin-right: auto;
        margin-left: auto;
        padding-left: var(--space-xxs);
        padding-right: var(--space-xxs)
      }

      .c-byyrWi {
        font-family: var(--fonts-paragraphFontFamily);
        font-weight: var(--fontWeights-paragraphFontWeight);
        line-height: var(--lineHeights-paragraphLineHeight);
        margin: 0
      }

      .c-byyrWi * {
        margin: 0;
        font-size: inherit;
        font-weight: inherit;
        line-height: inherit;
        text-decoration: none;
        color: CurrentColor
      }

      .c-dkrkOl {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: underline;
        color: var(--colors-linkColor);
        cursor: pointer
      }

      .c-dkrkOl svg {
        color: inherit
      }

      .c-dkrkOl:hover {
        color: var(--colors-linkColorHover)
      }

      .c-dkrkOl:active {
        color: var(--colors-linkColorActive)
      }

      .c-dkrkOl:focus {
        border: 1px solid var(--colors-focused)
      }

      .c-greilc {
        font-family: var(--fonts-headingFontFamily);
        font-weight: var(--fontWeights-headingFontWeight);
        line-height: var(--lineHeights-headingLineHeight);
        margin: 0
      }

      .c-greilc * {
        margin: 0;
        font-size: inherit;
        font-weight: inherit;
        line-height: inherit;
        text-decoration: none;
        color: CurrentColor
      }

      .c-cYoyrL {
        box-sizing: border-box;
        display: grid;
        grid-template-columns: repeat(4, 1fr)
      }

      @media (min-width: 600px) {
        .c-cYoyrL {
          grid-template-columns: repeat(12, 1fr)
        }
      }

      .c-dlYIZK {
        box-sizing: inherit;
        display: inherit
      }
    }

    --sxs {
      --sxs: 6 c-PJLV-ijCCuYq-css c-biNYZn-iPJLV-css c-byyrWi-ibHwuwj-css c-greilc-ibHwuwj-css c-PJLV-ihsgieY-css c-PJLV-ikcARyp-css c-cYoyrL-icmQVfI-css c-dlYIZK-ijavhne-css c-dlYIZK-ibuFcjK-css c-PJLV-iigxoJa-css c-PJLV-ihVjDQK-css c-PJLV-iikIjca-css
    }

    @media  (min-width: 1200px) {
      .c-PJLV-ijCCuYq-css {
        
        padding-top: var(--space-baseSpacing);
        padding-bottom: var(--space-baseSpacing)
      }

      @media (min-width: 1200px) {
        .c-PJLV-ijCCuYq-css {
          padding-top: var(--space-baseSpacingDesktop);
          padding-bottom: var(--space-baseSpacingDesktop)
        }
      }

      .c-byyrWi-ibHwuwj-css {
        color: inherit
      }

      .c-greilc-ibHwuwj-css {
        color: inherit
      }

      .c-PJLV-ihsgieY-css {
        background: var(--be-brand-secondary);
        padding-top: var(--space-0);
        padding-bottom: var(--space-0)
      }

      @media (min-width: 1200px) {
        .c-PJLV-ihsgieY-css {
          padding-top: var(--space-0);
          padding-bottom: var(--space-0)
        }
      }

      .c-PJLV-ikcARyp-css {
        background: linear-gradient(180deg, var(--be-brand-secondary) 0%, var(--be-brand-primary) 100%);
        padding-top: var(--space-0);
        padding-bottom: var(--space-0)
      }

      @media (min-width: 1200px) {
        .c-PJLV-ikcARyp-css {
          padding-top: var(--space-baseSpacingDesktop);
          padding-bottom: var(--space-baseSpacingDesktop)
        }
      }

      .c-cYoyrL-icmQVfI-css {
        gap: var(--space-gridGutter)
      }

      @media (max-width: 599px) {
        .c-dlYIZK-ijavhne-css {
          grid-column: span 4 / span 4
        }
      }

      @media (min-width: 600px) {
        .c-dlYIZK-ijavhne-css {
          grid-column: span 12 / span 12
        }
      }

      @media (min-width: 900px) {
        .c-dlYIZK-ijavhne-css {
          grid-column: span 8 / span 8
        }
      }

      @media (min-width: 1200px) {
        .c-dlYIZK-ijavhne-css {
          grid-column: span 8 / span 8
        }
      }

      @media (max-width: 599px) {
        .c-dlYIZK-ibuFcjK-css {
          grid-column: span 4 / span 4
        }
      }

      @media (min-width: 600px) {
        .c-dlYIZK-ibuFcjK-css {
          grid-column: span 12 / span 12
        }
      }

      @media (min-width: 900px) {
        .c-dlYIZK-ibuFcjK-css {
          grid-column: span 4 / span 4
        }
      }

      @media (min-width: 1200px) {
        .c-dlYIZK-ibuFcjK-css {
          grid-column: span 4 / span 4
        }
      }

      .c-PJLV-iigxoJa-css {
        background: var(--be-bg-secondary);
        padding-top: var(--space-baseSpacing);
        padding-bottom: var(--space-baseSpacing)
      }

      @media (min-width: 1200px) {
        .c-PJLV-iigxoJa-css {
          padding-top: var(--space-baseSpacingDesktop);
          padding-bottom: var(--space-baseSpacingDesktop)
        }
      }

      .c-PJLV-ihVjDQK-css {
        background: var(--be-bg-secondary);
        padding-top: var(--space-0);
        padding-bottom: var(--space-0)
      }

      @media (min-width: 1200px) {
        .c-PJLV-ihVjDQK-css {
          padding-top: var(--space-0);
          padding-bottom: var(--space-0)
        }
      }

   

      @media (min-width: 1200px) {
        .c-PJLV-iikIjca-css {
          padding-top: var(--space-0);
          padding-bottom: var(--space-0)
        }
      }
    }
  </style>
  <style data-styled="" data-styled-version="5.3.3">
    @font-face {
      font-family: 'Roboto';
      font-style: swap;
      font-weight: 400;
      font-display: swap;
      unicode-range: U+000-5FF;
      src: local(''), url('/fonts/roboto-v20-latin-regular.woff2') format('woff2');
    }

    /*!sc*/
    @font-face {
      font-family: 'Roboto';
      font-style: swap;
      font-weight: 600;
      font-display: swap;
      unicode-range: U+000-5FF;
      src: local(''), url('/fonts/roboto-v20-latin-500.woff2') format('woff2');
    }

    /*!sc*/
    @font-face {
      font-family: 'Roboto';
      font-style: swap;
      font-weight: 700;
      font-display: swap;
      unicode-range: U+000-5FF;
      src: local(''), url('/fonts/roboto-v20-latin-700.woff2') format('woff2');
    }

    /*!sc*/
    @font-face {
      font-family: 'Faustina';
      font-style: swap;
      font-weight: 500;
      font-display: swap;
      unicode-range: U+000-5FF;
      src: local(''), url('/fonts/Faustina-Medium.ttf') format('truetype');
    }

    /*!sc*/
    @font-face {
      font-family: 'Poppins';
      font-style: swap;
      font-weight: 400;
      font-display: swap;
      unicode-range: U+000-5FF;
      src: local(''), url('/fonts/Poppins-Regular.ttf') format('truetype');
    }

    /*!sc*/
    @font-face {
      font-family: 'Poppins';
      font-style: swap;
      font-weight: 500;
      font-display: swap;
      unicode-range: U+000-5FF;
      src: local(''), url('/fonts/Poppins-Medium.ttf') format('truetype');
    }

  

    /*!sc*/
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section {
      display: block;
    }

    /*!sc*/
    *[hidden] {
      display: none;
    }

    /*!sc*/
    body {
      line-height: 1;
    }

    /*!sc*/
    menu,
    ol,
    ul {
      list-style: none;
    }

    /*!sc*/
    blockquote,
    q {
      quotes: none;
    }

    /*!sc*/
    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: '';
      content: none;
    }

    /*!sc*/
    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /*!sc*/
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /*!sc*/
    html {
      -webkit-scroll-behavior: smooth;
      -moz-scroll-behavior: smooth;
      -ms-scroll-behavior: smooth;
      scroll-behavior: smooth;
    }

    /*!sc*/
    body {
      background: var(--be-bg-primary);
      
    }

    /*!sc*/
    @media (min-width:1100px) {
      body {
        background: var(--be-bg-primary);
      }
    }

    /*!sc*/
    img {
      max-width: 100%;
    }

    /*!sc*/
    :root {
      --color-primary-darkest: #8D0143;
      --color-primary-dark: #CA025F;
      --color-primary: #FD1884;
      --color-primary-light: #FE85BE;
      --color-primary-lightest: #FAF8F9;
      --color-secondary-darkest: #C70;
      --color-secondary-dark: #E08300;
      --color-secondary: #FF9505;
      --color-secondary-light: #FFB347;
      --color-secondary-lightest: #FFEED6;
      --color-neutral-lighest: #FFF;
      --color-neutral-light: #F5F5F5;
      --color-neutral: #DDD;
      --color-neutral-dark: #575757;
      --color-neutral-darkest: #222;
      --color-feedback-success-dark: #00850F;
      --color-feedback-success-light: #D7F6CA;
      --color-feedback-warning-dark: #FF9505;
      --color-feedback-warning-light: #FFEED6;
      --color-feedback-critical-dark: #BF000C;
      --color-feedback-critical-light: #FFD6D9;
      --color-focused: #F09905;
      --border-radius-xxs: 4px;
      --border-radius-sm: 8px;
      --border-radius-md: 16px;
      --border-radius-lg: 24px;
      --border-radius-pill: 500px;
      --border-radius-circular: 50%;
      --border-width-none: 0;
      --border-width-hairline: 1px;
      --border-width-thin: 2px;
      --border-width-thick: 4px;
      --border-width-heavy: 8px;
      --container: 1366px;
      --container-gutter: 24px;
      --opacity-level-semiopaque: .8;
      --opacity-level-intense: .64;
      --opacity-level-medium: .32;
      --opacity-level-light: .16;
      --opacity-level-semitransparent: .08;
      --shadow-flat: 0 4px 8px rgba(0, 0, 0, .08);
      --shadow-soft: 0 8px 16px rgba(0, 0, 0, .08);
      --shadow-raised: 0 8px 32px rgba(0, 0, 0, .08);
      --shadow-spotlight: 0 16px 48px rgba(0, 0, 0, .08);
      --spacing-quarck: .25rem;
      --spacing-nano: .5rem;
      --spacing-xxxs: 1rem;
      --spacing-xxs: 1.5rem;
      --spacing-xs: 2rem;
      --spacing-sm: 2.5rem;
      --spacing-md: 3rem;
      --spacing-lg: 4rem;
      --spacing-xl: 5rem;
      --spacing-xxl: 5.5rem;
      --spacing-xxxl: 6rem;
      --spacing-xxxxl: 6.5rem;
      --spacing-huge: 7rem;
      --spacing-xhuge: 7.5rem;
      --font-family-primary: 'Faustina', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      --font-family-secondary: ’Poppins’, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      --font-size-xxxxs: .75rem;
      --font-size-xxxs: .875rem;
      --font-size-xxs: 1rem;
      --font-size-xs: 1.125rem;
      --font-size-sm: 1.25rem;
      --font-size-md: 1.5rem;
      --font-size-lg: 1.75rem;
      --font-size-xlg: 2rem;
      --font-size-xxl: 2.5rem;
      --font-size-xxxl: 3rem;
      --font-size-xxxxl: 4rem;
      --font-size-display: 5rem;
      --font-size-giant: 6rem;
      --font-weight-bold: 700;
      --font-weight-medium: 600;
      --font-weight-regular: 500;
      --font-weight-light: 400;
      --line-height-tight: 100%;
      --line-height-md: 120%;
      --line-height-distant: 150%;
      --line-height-super-distant: 200%;
    }

    /*!sc*/
    .hughesnet {
      --be-brand-primary: #0060A7;
      --be-brand-secondary: #FF6B00;
      --be-brand-tertiary: #052C4C;
    }

    /*!sc*/
    .net {
      --be-brand-primary: #00afe8;
      --be-brand-secondary: #461bfb;
      --be-brand-tertiary: #461bfb;
    }

    /*!sc*/
    .vivo {
      --be-brand-secondary: #47006A;
      --be-brand-primary: #660099;
      --be-brand-tertiary: #fff;
    }

    /*!sc*/
    .claro {
      --be-brand-secondary: #A61D19;
      --be-brand-primary: #E3262E;
      --be-brand-tertiary: #fff;
    }

    /*!sc*/
    .oi {
      --be-brand-secondary: #35A934;
      --be-brand-primary: #66BE3F;
      --be-brand-tertiary: #fed830;
    }

    /*!sc*/
    .tim {
      --be-brand-secondary: #002198;
      --be-brand-primary: #0026D9;
      --be-brand-tertiary: #fff;
    }

    /*!sc*/
    .gvt {
      --be-brand-primary: #7c05b2;
      --be-brand-secondary: #fbd710;
      --be-brand-tertiary: #fbd710;
    }

    /*!sc*/
    .nextel {
      --be-brand-primary: #ea5b0c;
      --be-brand-secondary: #d84d00;
      --be-brand-tertiary: #000;
    }

    /*!sc*/
    .viasat {
      --be-brand-primary: #006caa;
      --be-brand-secondary: #5ea023;
      --be-brand-tertiary: #ea5b0c;
    }

    /*!sc*/
    .reclameaqui {
      --be-brand-primary: #65a603;
      --be-brand-secondary: #1f69c1;
      --be-brand-tertiary: #fff;
    }

    /*!sc*/
    .theme-celular {
      --be-brand-primary: #629004;
    }

    /*!sc*/
    .theme-internet {
      --be-brand-primary: #fa8400;
    }

    /*!sc*/
    .theme-telefone {
      --be-brand-primary: #008294;
    }

    /*!sc*/
    .theme-tv {
      --be-brand-primary: #7c05b2;
    }

    /*!sc*/
    .theme-dicas {
      --be-brand-primary: #4268e0;
    }

    /*!sc*/
    .theme-comparativos {
      --be-brand-primary: #f24451;
    }

    /*!sc*/
    :root {
      --be-base-primary-dark: #ececf5;
      --be-base-primary-light: #f6f6fa;
      --be-base-primary: #fdfdfd;
      --be-base-secondary-dark: #000;
      --be-ui-dark-tertiary: #E0E0E0;
      --be-ui-dark-secondary: #717171;
      --be-base-secondary-light: #192742;
      --be-base-secondary: #dadae4;
      --be-base-tertiary-light: #dae5df;
      --be-base-tertiary: #ede6f2;
      --be-bg-primary: #f4f4f4;
      --be-bg-secondary: #fff;
      --be-bg-session: #efefef;
      --be-bg-tertiary: #1A202B;
      --be-bg-dark-primary: #414141;
      --be-border-primary: #f4f4f4;
      --be-border-secondary: #dfdfdf;
      --be-border-tertiary: #cfcfcf;
      --be-border-tertiary-light: #ddd;
      --be-box-shadow-flat: none;
      --be-box-shadow-hover: 0 4px 8px rgba(0, 0, 0, .2);
      --be-box-shadow-modal: 0 14px 20px rgba(0, 0, 0, .1);
      --be-box-shadow-raised: 0 2px 4px rgba(0, 0, 0, .15);
      --be-box-shadow-spotlight: 0 6px 12px 0 rgba(0, 0, 0, .1);
      --be-brand-highlight-dark: #0f9946;
      --be-brand-highlight-gradient: linear-gradient(101.88deg, #0f9946 5.28%, #13bf58 94.72%);
      --be-brand-highlight-light: #dae6df;
      --be-brand-highlight: #fbd710;
      --be-brand-primary-dark: #6500b2;
      --be-brand-primary-gradient: linear-gradient(101.88deg, #6500b2 5.28%, #8b00f2 94.72%);
      --be-brand-primary-light: #9e30f2;
      --be-brand-primary: #fd1884;
      --be-brand-secondary-dark: #7c05b2;
      --be-brand-secondary-gradient: linear-gradient(101.88deg, #7c05b2 5.28%, #b008ff 94.72%);
      --be-brand-secondary-light: #c13bff;
      --be-brand-secondary: #fd1884;
      --be-brand-tertiary: #fd1884;
      --be-elevation-flat: none;
      --be-elevation-hover: 1100;
      --be-elevation-modal: 1300;
      --be-elevation-raised: 1000;
      --be-elevation-spotlight: 1200;
      --be-feedback-error: #d40d12;
      --be-feedback-success: #068320;
      --be-feedback-warning: #dc9a19;
      --be-font-body1: normal 400 16px/24px none;
      --be-font-body2: normal 400 14px/17px none;
      --be-font-body3: normal 600 16px/24px none;
      --be-font-body4: normal 600 14px/17px none;
      --be-font-caption1: normal 400 12px/18px none;
      --be-font-caption2: normal 400 10px/15px none;
      --be-font-display1: normal 400 96px/144px none;
      --be-font-display2: normal 400 64px/96px none;
      --be-font-link1: normal 400 16px/24px none;
      --be-font-link2: normal 400 14px/17px none;
      --be-font-link3: normal 600 16px/24px none;
      --be-font-link4: normal 600 14px/17px none;
      --be-font-overline: normal 400 10px/15px none;
      --be-font-size-body1: 16px;
      --be-font-size-body2: 14px;
      --be-font-size-body3: 16px;
      --be-font-size-body4: 14px;
      --be-font-size-caption1: 12px;
      --be-font-size-caption2: 10px;
      --be-font-size-display1: 90px;
      --be-font-size-display2: 64px;
      --be-font-size-link1: 16px;
      --be-font-size-link2: 14px;
      --be-font-size-link3: 16px;
      --be-font-size-link4: 14px;
      --be-font-size-overline: 10px;
      --be-font-size-subtitle1: 18px;
      --be-font-size-subtitle2: 16px;
      --be-font-size-title1: 48px;
      --be-font-size-title2: 36px;
      --be-font-size-title3: 28px;
      --be-font-size-title4: 22px;
      --be-font-size-title5: 20px;
      --be-font-subtitle1: normal 600 18px/27px none;
      --be-font-subtitle2: normal 400 16px/24px none;
      --be-font-title1: normal 700 48px/72px;
      --be-font-title2: normal 700 36px/54px none;
      --be-font-title3: normal 700 28px/42px none;
      --be-font-title4: normal 700 22px/32px none;
      --be-font-weight-bold: 700;
      --be-font-weight-regular: 400;
      --be-font-weight-semibold: 600;
      --be-grid-column-desktop: 12;
      --be-grid-column-mobile: 4;
      --be-grid-column-tablet: 8;
      --be-grid-gutter-desktop: 24px;
      --be-grid-gutter-mobile: 16px;
      --be-grid-gutter-tablet: 24px;
      --be-grid-margin-desktop: 24px;
      --be-grid-margin-mobile: 16px;
      --be-grid-margin-tablet: 24px;
      --be-line-height-body1: 24px;
      --be-line-height-body2: 17px;
      --be-line-height-body3: 24px;
      --be-line-height-body4: 22px;
      --be-line-height-caption1: 18px;
      --be-line-height-caption2: 15px;
      --be-line-height-display1: 144px;
      --be-line-height-display2: 96px;
      --be-line-height-link1: 24px;
      --be-line-height-link2: 17px;
      --be-line-height-link3: 28px;
      --be-line-height-link4: 17px;
      --be-line-height-overline: 15px;
      --be-line-height-subtitle1: 27px;
      --be-line-height-subtitle2: 24px;
      --be-line-height-title1: 72px;
      --be-line-height-title2: 54px;
      --be-line-height-title3: 34px;
      --be-line-height-title4: 29px;
      --be-line-height-title5: 24px;
      --be-shape-circle: 50%;
      --be-shape-line: 0;
      --be-shape-oval: 40px;
      --be-shape-rounded: 4px;
      --be-shape-rounded2: 8px;
      --be-shape-straight: 0;
      --be-size-lg: 1280px;
      --be-size-md: 600px;
      --be-size-sm: 360px;
      --be-size-xl: 1332px;
      --be-size-xs: 0;
      --be-spacing-internal-01: 2px;
      --be-spacing-internal-02: 4px;
      --be-spacing-internal-03: 8px;
      --be-spacing-internal-04: 12px;
      --be-spacing-internal-05: 16px;
      --be-spacing-internal-06: 24px;
      --be-spacing-internal-07: 32px;
      --be-spacing-internal-08: 48px;
      --be-spacing-layout-01: 16px;
      --be-spacing-layout-02: 24px;
      --be-spacing-layout-03: 32px;
      --be-spacing-layout-04: 48px;
      --be-spacing-layout-05: 64px;
      --be-spacing-layout-06: 80px;
      --be-spacing-layout-07: 96px;
      --be-spacing-layout-08: 112px;
      --be-text-breadcrumb: #337ab7;
      --be-text-primary-dark: #192742;
      --be-text-primary-footer: #777;
      --be-text-primary-light: #777;
      --be-text-primary: #414141;
      --be-text-secondary-dark: #000;
      --be-text-secondary-light: #f6f6fa;
      --be-text-secondary: #fff;
      --be-text-tertiary-dark: #A2A2A2;
      --be-text-quaternary-dark: #747474;
    }

    

    /*!sc*/
    :root {
      --font-family-primary: 'Roboto', sans-serif;
      --font-family-secondary: 'Faustina', serif;
      --font-family-tertiary: 'Poppins', sans-serif;
    }

    /*!sc*/
    body,
    button,
    select,
    input,
    textarea {
      font-family: var(--font-family-primary);
    }

    /*!sc*/
    html,
    body,
    p,
    ul,
    ol,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    select {
      font-weight: var(--be-font-weight-regular);
      color: var(--be-text-primary);
    }

    /*!sc*/
    p,
    ul,
    ol,
    h1,
    h2,
    h3,
    h4 {
      margin-bottom: var(--be-spacing-layout-02);
    }

    /*!sc*/
    strong,
    b {
      font-weight: var(--be-font-weight-semibold);
    }

    /*!sc*/
    h2 {
      font-size: var(--be-font-size-title2);
    }

    /*!sc*/
    h3 {
      font-size: var(--be-font-size-title3);
    }

    /*!sc*/
    h4 {
      font-size: var(--be-font-size-title4);
    }

    /*!sc*/
    p {
      font-size: var(--be-font-size-body1);
      line-height: var(--be-line-height-body1);
    }

    /*!sc*/
    ul,
    ol {
      list-style-position: inside;
    }

    /*!sc*/
    ul li,
    ol li {
      margin-bottom: var(--be-spacing-layout-01);
      line-height: var(--be-line-height-link3);
    }

    /*!sc*/
    ul li:last-child,
    ol li:last-child {
      margin-bottom: 0;
    }

    /*!sc*/
    ul {
      list-style-type: disc;
    }

    /*!sc*/
    ol {
      list-style-type: decimal;
    }

    /*!sc*/
    a {
      color: var(--be-brand-primary);
      -webkit-text-decoration: none;
      text-decoration: none;
      -webkit-transition: color .2s ease;
      transition: color .2s ease;
    }

    /*!sc*/
    a:hover {
      color: inherit;
      color: var(--be-brand-highlight);
    }


    /*!sc*/
    .button {
      display: inline-block;
      min-width: 172px;
      height: 40px;
      padding: 8px 22px;
      font-size: var(--be-font-size-body1);
      font-weight: var(--be-font-weight-semibold);
      line-height: var(--be-line-height-body1);
      color: var(--be-text-secondary);
      text-align: center;
      -webkit-text-decoration: none;
      text-decoration: none;
      cursor: pointer;
      background: #5a94c1;
      border: 0;
      border-radius: var(--be-shape-rounded);
      outline: none;
      -webkit-transition: all 300ms ease 0s;
      transition: all 300ms ease 0s;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    /*!sc*/
    .button a,
    .button button {
      color: var(--be-text-secondary);
    }

    /*!sc*/
    .button:hover {
      color: var(--be-text-secondary);
      -webkit-filter: grayscale(20%);
      filter: grayscale(20%);
    }

    /*!sc*/
    .button--secondary {
      color: var(--be-brand-primary);
      background: var(--be-bg-secondary);
      border: 1px solid var(--be-brand-primary);
    }

    /*!sc*/
    .button--secondary a,
    .button--secondary button {
      color: var(--be-brand-primary);
    }

    /*!sc*/
    .button--secondary:hover {
      color: var(--be-text-secondary);
      background: var(--be-brand-secondary);
      -webkit-filter: grayscale(20%);
      filter: grayscale(20%);
    }

    /*!sc*/
    .button--banner {
      height: auto;
      padding: 16px 32px;
      font-family: var(--font-family-tertiary);
      font-weight: 400;
    }

    /*!sc*/
    .button--banner-secondary {
      color: var(--be-brand-secondary);
      background: #fff;
      border: 1px solid var(--be-brand-secondary);
    }

    /*!sc*/
    .button--banner-secondary:hover {
      background: var(--be-brand-secondary);
    }



    /*!sc*/
    .dljgmI {
      font-size: var(--be-font-size-body2);
      line-height: var(--be-line-height-body2);
      color: var(--be-text-secondary);
      background: #222;
    }

    /*!sc*/
    .dljgmI,
    .dljgmI button,
    .dljgmI select,
    .dljgmI input,
    .dljgmI textarea {
      font-family: var(--font-family-tertiary);
    }


    /*!sc*/
    data-styled.g124[id="MenuSecondary__Label-sc-kuui82-7"] {
      content: "ebonnJ,"
    }

    /*!sc*/
    .eKeiTl {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 40px;
      padding: 6px 0;
      margin: 0;
      overflow-x: auto;
      background: var(--be-bg-secondary);
    }

    /*!sc*/
    data-styled.g129[id="sc-crHmcD"] {
      content: "eKeiTl,"
    }

    /*!sc*/
    .dRdeNy {
      margin-bottom: 0;
      font-size: var(--be-font-size-caption1);
      white-space: nowrap;
      list-style: none;
    }

    /*!sc*/
    .dRdeNy:first-child .label {
      padding-left: 0;
      margin-left: 0;
    }

    /*!sc*/
    .dRdeNy:last-child a,
    .dRdeNy:last-child span {
      color: var(--be-brand-primary);
      pointer-events: none;
    }

    /*!sc*/
    .dRdeNy a {
      color: var(--be-text-primary);
    }

    /*!sc*/
    .dRdeNy a:hover {
      color: var(--be-brand-primary);
    }

    /*!sc*/
    .dRdeNy .label {
      padding: 0 10px;
    }

    /*!sc*/
    .dRdeNy .icon {
      font-size: 9px;
    }

    /*!sc*/
    data-styled.g130[id="sc-egiyK"] {
      content: "dRdeNy,"
    }

    /*!sc*/
    .lbFlhL {
      background: var(--be-bg-secondary);
      border-radius: var(--be-shape-rounded);
      box-shadow: var(--be-box-shadow-raised);
    }

    /*!sc*/
    data-styled.g165[id="sc-dlVxhl"] {
      content: "lbFlhL,"
    }

    /*!sc*/
    .hgkVbQ {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100vw;
      padding: 0 var(--be-grid-gutter-mobile);
      margin-left: calc(var(--be-grid-gutter-mobile) * -1);
      overflow: hidden;
      overflow-x: auto;
    }

    /*!sc*/
    @media (min-width:600px) {
      .hgkVbQ {
        width: 100%;
        padding: 0;
        margin-left: unset;
      }
    }

    /*!sc*/
    .hgkVbQ a {
      font-weight: var(--be-font-weight-bold);
    }

    /*!sc*/
    .hgkVbQ a:hover {
      color: var(--be-brand-secondary);
    }

    /*!sc*/
    .hgkVbQ p,
    .hgkVbQ h1,
    .hgkVbQ h2,
    .hgkVbQ h3,
    .hgkVbQ h4,
    .hgkVbQ h5,
    .hgkVbQ h6 {
      margin: 0;
      font-size: inherit;
    }

    /*!sc*/
    .hgkVbQ table {
      min-width: 100%;
    }

    /*!sc*/
    .hgkVbQ table thead {
      background: var(--be-brand-primary);
    }

    /*!sc*/
    .hgkVbQ table thead p,
    .hgkVbQ table thead h1,
    .hgkVbQ table thead h2,
    .hgkVbQ table thead h3,
    .hgkVbQ table thead h4,
    .hgkVbQ table thead h5,
    .hgkVbQ table thead h6 {
      color: var(--be-text-secondary);
    }

    /*!sc*/
    .hgkVbQ table p,
    .hgkVbQ table h1,
    .hgkVbQ table h2,
    .hgkVbQ table h3,
    .hgkVbQ table h4,
    .hgkVbQ table h5,
    .hgkVbQ table h6 {
      font-size: 22px;
      font-weight: var(--be-font-weight-semibold);
      color: var(--be-base-secondary-dark);
    }

    /*!sc*/
    .hgkVbQ table td,
    .hgkVbQ table th {
      padding: 18px;
      font-size: var(--be-font-size-title4);
      font-weight: var(--be-font-weight-bold);
      text-align: left;
      vertical-align: middle;
      border-bottom: none;
    }

    /*!sc*/
    .hgkVbQ table tr {
      height: 55px;
    }

    /*!sc*/
    .hgkVbQ table tr:last-child td {
      border-bottom: none;
    }

    /*!sc*/
    .hgkVbQ table td {
      min-width: 170px;
      padding: 10px 18px;
      font-size: var(--be-font-size-body1);
      line-height: var(--be-line-height-body1);
      text-align: left;
      vertical-align: middle;
      border-bottom: 1px solid #E6E6F1;
    }

    /*!sc*/
    .hgkVbQ table td:first-child {
      white-space: normal;
    }

    /*!sc*/
    .hgkVbQ table td:last-child {
      white-space: nowrap;
    }

    /*!sc*/
    @media (min-width:600px) {
      .hgkVbQ table td:first-child:nth-last-child(2) {
        width: 50%;
      }
    }

    /*!sc*/
    data-styled.g176[id="sc-kLwhqv"] {
      content: "hgkVbQ,"
    }

    /*!sc*/
    .edLPDy {
      width: 100%;
      max-width: 1164px;
      padding-right: 16px;
      padding-left: 16px;
      margin-right: auto;
      margin-left: auto;
    }

    /*!sc*/
    @media (min-width:600px) {
      .edLPDy {
        padding-right: 24px;
        padding-left: 24px;
      }
    }

    /*!sc*/
    .ckjGDl {
      width: 100%;
      max-width: 100%;
      margin: 0 auto;
    }

    /*!sc*/
    data-styled.g193[id="sc-cidDSM"] {
      content: "edLPDy,ckjGDl,"
    }

    /*!sc*/
    .cCsIwe {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-direction: column-reverse;
      -ms-flex-direction: column-reverse;
      flex-direction: column-reverse;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
      height: -webkit-fit-content;
      height: -moz-fit-content;
      height: fit-content;
      margin: 20px auto;
      font-size: var(--be-font-size-subtitle1);
      font-weight: var(--be-font-weight-semibold);
      text-align: center;
      background: var(--be-bg-secondary);
      border-radius: var(--be-shape-rounded);
      box-shadow: var(--be-box-shadow-raised);
    }

    /*!sc*/
    .cCsIwe.inverse {
      background: var(--be-brand-primary);
    }

    /*!sc*/
    @media (min-width:600px) {
      .cNxpar {
        width: 274px;
        padding: 0;
        margin-right: 26px;
        margin-bottom: 30px;
        text-align: left;
      }
    }

    /*!sc*/
    data-styled.g213[id="sc-nVkyK"] {
      content: "cNxpar,"
    }

    /*!sc*/
    .jQOlHh h1,
    .jQOlHh h2,
    .jQOlHh h3,
    .jQOlHh h4,
    .jQOlHh h5,
    .jQOlHh h6 {
      margin-bottom: var(--be-spacing-layout-01);
      font-size: var(--be-font-size-body1);
      font-weight: var(--be-font-weight-semibold);
      color: var(--be-text-primary);
    }

    /*!sc*/
    data-styled.g214[id="sc-hiwPVj"] {
      content: "jQOlHh,"
    }

    /*!sc*/
    .fgsZzv p {
      margin-bottom: 4px;
      font-size: var(--be-font-size-body1);
      line-height: var(--be-line-height-body4);
    }

    /*!sc*/
    .fgsZzv a {
      color: var(--be-brand-primary);
    }

    /*!sc*/
    .fgsZzv .button {
      min-width: 140px;
      height: 40px;
      color: var(--be-bg-secondary);
      background:#0026D9;
      border: none;
    }


    /*!sc*/
    .slick-dots li button {
      font-size: 0;
      line-height: 0;
      display: block;
      width: 20px;
      height: 20px;
      padding: 5px;
      cursor: pointer;
      color: transparent;
      border: 0;
      outline: 0;
      background: 0 0;
    }

    /*!sc*/
    .slick-dots li button:focus,
    .slick-dots li button:hover {
      outline: 0;
    }

    /*!sc*/
    .slick-dots li button:focus:before,
    .slick-dots li button:hover:before {
      opacity: 1;
    }

    /*!sc*/
    .slick-dots li button:before {
      font-family: slick;
      font-size: 6px;
      line-height: 20px;
      position: absolute;
      top: 0;
      left: 0;
      width: 20px;
      height: 20px;
      content: '•';
      text-align: center;
      opacity: .25;
      color: #000;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /*!sc*/
    .slick-dots li.slick-active button:before {
      opacity: .75;
      color: #000;
    }

    /*!sc*/
    data-styled.g243[id="sc-global-elUrJf1"] {
      content: "sc-global-elUrJf1,"
    }

    /*!sc*/
    .dEgWah .slick-slider {
      left: -16px;
      width: 100vw;
    }

    /*!sc*/
    .dEgWah .slick-list {
      width: 303px;
      margin: 0 auto;
    }

    /*!sc*/
    .dEgWah .slick-list .slick-track {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 303px;
    }

    /*!sc*/
    .dEgWah .slick-list .slick-track .slick-slide {
      height: inherit;
    }

    /*!sc*/
    .dEgWah .slick-list .slick-track .slick-slide>div {
      width: 303px;
      height: 100%;
      padding: 2px 0;
      margin: 0 8px;
    }

    /*!sc*/
    @media (min-width:600px) {
      .dEgWah .slick-slider {
        left: unset;
        width: 100%;
      }

      .dEgWah .slick-list {
        width: auto;
        padding: 0;
      }

      .dEgWah .slick-list .slick-track {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: space-around;
        -webkit-justify-content: space-around;
        -ms-flex-pack: space-around;
        justify-content: space-around;
        width: auto;
      }

      .dEgWah .slick-list .slick-track .slick-slide {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        width: auto;
      }

      .dEgWah .slick-list .slick-track .slick-slide>div {
        width: 100%;
        margin-top: 20x;
        padding: 80opx;
      }
    }

    /*!sc*/
    data-styled.g244[id="sc-ctqQKy"] {
      content: "dEgWah,"
    }

    /*!sc*/
    .bWLepN {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    /*!sc*/
    .bWLepN.slick-arrow::before {
      content: '';
    }

    /*!sc*/
    .bWLepN.slick-arrow .icon {
      font-size: 20px;
    }

  
    /*!sc*/
    .bWLepN.slick-disabled {
      opacity: .25;
    }

    /*!sc*/
    @media (min-width:600px) {
      .bWLepN.slick-prev {
        left: -36px;
      }

      .bWLepN.slick-next {
        right: -36px;
      }
    }

    /*!sc*/
    data-styled.g245[id="sc-dFtzxp"] {
      content: "bWLepN,"
    }

    /*!sc*/
    .fncnaV {
      font-weight: var(--font-weight-medium);
    }

    /*!sc*/
    .fncnaV .card {
      height: 100%;
    }

    /*!sc*/
    data-styled.g246[id="CardImage-sc-19fsw8-0"] {
      content: "fncnaV,"
    }

    /*!sc*/
    .diaiUT {
      width: 100%;
      height: 204px;
      object-fit: cover;
    }

    /*!sc*/
    data-styled.g248[id="CardImage__Image-sc-19fsw8-2"] {
      content: "diaiUT,"
    }

    /*!sc*/
    .idyqgL {
      padding: 24px;
    }

    /*!sc*/
    .idyqgL.extra-margin {
      margin-bottom: 72px;
    }

    /*!sc*/
    .idyqgL .title {
      margin-bottom: 10px;
    }

    /*!sc*/
    .idyqgL .title h2,
    .idyqgL .title h3,
    .idyqgL .title h4,
    .idyqgL .title h5,
    .idyqgL .title h6,
    .idyqgL .title p {
      margin-bottom: 0;
      font-size: var(--font-size-xxs);
      font-weight: var(--font-weight-medium);
      line-height: var(--be-line-height-body3);
    }

    /*!sc*/
    .idyqgL p {
      margin-bottom: 0;
      font-size: var(--font-size-xxxs);
    }

    /*!sc*/
    data-styled.g249[id="CardImage__Content-sc-19fsw8-3"] {
      content: "idyqgL,"
    }

    /*!sc*/
    .dcrudy {
      margin: 0;
    }

    /*!sc*/
    data-styled.g251[id="sc-brSvTw"] {
      content: "dcrudy,"
    }

    /*!sc*/
    .lhDxAG p,
    .lhDxAG h1,
    .lhDxAG h2,
    .lhDxAG h3,
    .lhDxAG h4,
    .lhDxAG h5,
    .lhDxAG h6 {
      font-size: var(--be-font-size-subtitle1);
      font-weight: var(--be-font-weight-semibold);
      color: var(--be-base-secondary-dark);
      text-align: center;
    }

    /*!sc*/
    @media (min-width:1100px) {

      .lhDxAG p,
      .lhDxAG h1,
      .lhDxAG h2,
      .lhDxAG h3,
      .lhDxAG h4,
      .lhDxAG h5,
      .lhDxAG h6 {
        margin-bottom: var(--be-spacing-layout-03);
        font-size: var(--be-font-size-title3);
      }
    }

    /*!sc*/
    data-styled.g252[id="sc-gIDmLj"] {
      content: "lhDxAG,"
    }

    /*!sc*/
    .fmPDbi {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      overflow: visible;
      overflow: -moz-scrollbars-none;
      -ms-overflow-style: none;
      overflow-x: auto;
    }

    /*!sc*/
    .fmPDbi::-webkit-scrollbar {
      width: 0;
    }

    /*!sc*/
    @media (min-width:1100px) {
      .fmPDbi {
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
      }
    }

    /*!sc*/
    data-styled.g253[id="sc-evcjhq"] {
      content: "fmPDbi,"
    }

    /*!sc*/
    .cUfoah {
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      max-width: var(--be-font-size-display1);
      margin-right: 13px;
      text-align: center;
    }

    /*!sc*/
    .cUfoah:first-child {
      padding-left: 16px;
      margin-right: 24px;
    }

    /*!sc*/
    .cUfoah:last-child {
      padding-right: 16px;
    }

    /*!sc*/
    data-styled.g254[id="sc-fHeRUh"] {
      content: "cUfoah,"
    }

    /*!sc*/
    .hIKZMg {
      position: relative;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      width: 84px;
      height: 84px;
      margin-bottom: 8px;
      background: var(--be-bg-secondary);
      border-radius: 50%;
      box-shadow: 0 1px 4px rgba(0, 0, 0, .15);
    }

    /*!sc*/
    .hIKZMg:hover {
      box-shadow: 0 6px 12px rgba(0, 0, 0, .25);
    }

    /*!sc*/
    .hIKZMg .icon {
      position: absolute;
      top: 21px;
      left: 21px;
      font-size: 42px;
      color: var(--be-text-secondary);
    }

    /*!sc*/
    .hIKZMg .logo {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      height: auto;
      margin: auto;
      font-size: 60px;
    }

    /*!sc*/
    data-styled.g255[id="sc-dtDOqo"] {
      content: "hIKZMg,"
    }

    /*!sc*/
    .bKCiRF {
      font-size: var(--be-font-size-body2);
      font-weight: var(--be-font-weight-regular);
      color: var(--be-base-secondary-dark);
    }

    /*!sc*/
    data-styled.g256[id="sc-dkYRCH"] {
      content: "bKCiRF,"
    }

    /*!sc*/
    .dqRaGi {
      position: relative;
      display: inline-block;
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content;
      max-width: 300px;
      font-weight: var(--be-font-weight-semibold);
    }

    /*!sc*/
    data-styled.g344[id="sc-XxNYO"] {
      content: "dqRaGi,"
    }

    /*!sc*/
    .eRSDyg {
      position: relative;
      top: -22px;
    }

    /*!sc*/
    data-styled.g345[id="sc-ilfuhL"] {
      content: "eRSDyg,"
    }

    /*!sc*/
    .evjslR {
      margin: 4px;
      font-size: var(--be-font-size-title1);
    }

    /*!sc*/
    data-styled.g346[id="sc-uojGG"] {
      content: "evjslR,"
    }

    /*!sc*/
    .dwrJvN {
      position: relative;
      top: -22px;
      display: inline-block;
      width: 30px;
    }

    /*!sc*/
    data-styled.g347[id="sc-bilyIR"] {
      content: "dwrJvN,"
    }

    /*!sc*/
    .fACiry {
      position: relative;
      right: 28px;
    }

    /*!sc*/
    data-styled.g348[id="sc-eGPXGI"] {
      content: "fACiry,"
    }

    /*!sc*/
    .kBxfJc {
      display: inline-block;
    }

    /*!sc*/
    data-styled.g349[id="sc-hAcGzb"] {
      content: "kBxfJc,"
    }

    /*!sc*/
    .BDPDH {
      position: relative;
      width: 100%;
      height: -webkit-fit-content;
      height: -moz-fit-content;
      height: fit-content;
      padding: var(--be-spacing-internal-06) var(--be-spacing-internal-06) var(--be-spacing-internal-08);
      margin-bottom: 38px;
      background: var(--be-brand-primary);
    }

    /*!sc*/
    .BDPDH a,
    .BDPDH p,
    .BDPDH h1,
    .BDPDH h2,
    .BDPDH h3,
    .BDPDH h4,
    .BDPDH h5,
    .BDPDH h6 {
      margin: 0;
      color: var(--be-text-secondary);
    }

    /*!sc*/
    .BDPDH .container {
      position: relative;
      height: 100%;
      padding: 0;
      overflow: hidden;
    }

    /*!sc*/
    @media (min-width:1100px) {
      .BDPDH {
        min-height: 304px;
      }

      .BDPDH .container {
        position: static;
      }
    }

    /*!sc*/
    data-styled.g365[id="sc-hjGZqJ"] {
      content: "BDPDH,"
    }

    /*!sc*/
    .dvyjkR {
      margin: 0 0 var(--be-spacing-layout-01);
    }

    /*!sc*/
    .dvyjkR p,
    .dvyjkR h1,
    .dvyjkR h2,
    .dvyjkR h3,
    .dvyjkR h4,
    .dvyjkR h5,
    .dvyjkR h6 {
      font-size: var(--be-font-size-body2);
      font-weight: var(--be-font-weight-semibold);
      line-height: var(--be-line-height-body4);
    }

    /*!sc*/
    data-styled.g367[id="sc-fXeWAj"] {
      content: "dvyjkR,"
    }

    /*!sc*/
    .hAnOYq {
      margin: 3px 0 var(--be-spacing-layout-02);
    }

    /*!sc*/
    .hAnOYq p,
    .hAnOYq h1,
    .hAnOYq h2,
    .hAnOYq h3,
    .hAnOYq h4,
    .hAnOYq h5,
    .hAnOYq h6 {
      font-size: var(--be-font-size-title2);
      font-weight: var(--be-font-weight-semibold);
      line-height: 100%;
    }

    /*!sc*/
    @media (min-width:1100px) {
      .hAnOYq {
        width: 576px;
      }
    }

    /*!sc*/
    data-styled.g368[id="sc-fIosxK"] {
      content: "hAnOYq,"
    }

    /*!sc*/
    .lhfTOE {
      max-height: 90px;
      overflow: hidden;
    }

    /*!sc*/
    .lhfTOE p,
    .lhfTOE h1,
    .lhfTOE h2,
    .lhfTOE h3,
    .lhfTOE h4,
    .lhfTOE h5,
    .lhfTOE h6 {
      font-size: var(--be-font-size-body2);
      font-weight: var(--be-font-weight-semibold);
      line-height: var(--be-line-height-body4);
    }

    /*!sc*/
    @media (min-width:1100px) {
      .lhfTOE {
        width: 576px;
      }

      .lhfTOE p,
      .lhfTOE h1,
      .lhfTOE h2,
      .lhfTOE h3,
      .lhfTOE h4,
      .lhfTOE h5,
      .lhfTOE h6 {
        font-size: var(--be-font-size-body1);
        line-height: 150%;
      }
    }

    /*!sc*/
    data-styled.g369[id="sc-gyElHZ"] {
      content: "lhfTOE,"
    }

    /*!sc*/
    .hGwdMH {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      margin-top: 60px;
    }

    /*!sc*/
    .hGwdMH .cta {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      width: 100%;
      height: -webkit-fit-content;
      height: -moz-fit-content;
      height: fit-content;
      padding: 6px var(--be-spacing-internal-05);
      margin-bottom: 12px;
      background: var(--be-bg-secondary);
      border-radius: var(--be-shape-rounded);
      box-shadow: 0 1px 4px rgba(0, 0, 0, .15);
    }

    /*!sc*/
    .hGwdMH .cta .icon {
      color: var(--be-brand-primary);
    }

    /*!sc*/
    .hGwdMH .cta--desktop {
      display: none;
    }

    /*!sc*/
    .hGwdMH .cta:hover {
      box-shadow: 0 6px 12px rgba(0, 0, 0, .25);
    }

    /*!sc*/
    @media (min-width:1100px) {
      .hGwdMH {
        position: absolute;
        bottom: -38px;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
      }

      .hGwdMH .cta {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        width: 140px;
        height: 140px;
        padding: var(--be-spacing-internal-05);
        margin: 0 var(--be-spacing-layout-02) 0 0;
      }

      .hGwdMH .cta--desktop {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }

      .hGwdMH .cta--mobile {
        display: none;
      }
    }

    /*!sc*/
    data-styled.g370[id="sc-gjNHFA"] {
      content: "hGwdMH,"
    }

    /*!sc*/
    .lasHVx {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-right: var(--be-spacing-layout-01);
    }

    /*!sc*/
    .lasHVx .icon {
      font-size: 35px;
    }

    /*!sc*/
    @media (min-width:1100px) {
      .lasHVx {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        margin: 0;
      }

      .lasHVx .icon {
        font-size: 50px;
      }
    }

    /*!sc*/
    data-styled.g371[id="sc-fmciRz"] {
      content: "lasHVx,"
    }

    /*!sc*/
    .fqpkyD {
      margin: 0;
      font-size: var(--be-font-size-body2);
      font-weight: var(--be-font-weight-semibold);
      line-height: var(--be-line-height-caption1);
      color: #000;
      text-align: center;
    }

    /*!sc*/
    data-styled.g372[id="sc-eXlEPa"] {
      content: "fqpkyD,"
    }

    /*!sc*/
    .ljnBcj {
      text-align: center;
    }

    /*!sc*/
    .ljnBcj h1,
    .ljnBcj h2,
    .ljnBcj h3,
    .ljnBcj h4,
    .ljnBcj h5,
    .ljnBcj h6 {
      margin-bottom: 0;
      font-size: var(--be-font-size-title4);
      line-height: var(--be-line-height-title4);
      color: var(--be-base-secondary-dark);
      text-align: left;
    }

    /*!sc*/
    @media (min-width:1100px) {

      .ljnBcj h1,
      .ljnBcj h2,
      .ljnBcj h3,
      .ljnBcj h4,
      .ljnBcj h5,
      .ljnBcj h6 {
        font-size: var(--be-font-size-title3);
        line-height: var(--be-line-height-title3);
      }
    }

    /*!sc*/
    data-styled.g443[id="sc-iqVWFU"] {
      content: "ljnBcj,"
    }

    /*!sc*/
    .jMwxZe {
      color: var(--be-base-secondary-dark);
      text-align: left;
    }

    /*!sc*/
    .jMwxZe h1,
    .jMwxZe h2,
    .jMwxZe h3,
    .jMwxZe h4,
    .jMwxZe h5,
    .jMwxZe h6 {
      font-size: var(--be-font-size-title5);
      font-weight: var(--be-font-weight-semibold);
      line-height: var(--be-line-height-title4);
      color: inherit;
    }

    /*!sc*/
    @media (min-width:600px) {

      .jMwxZe h1,
      .jMwxZe h2,
      .jMwxZe h3,
      .jMwxZe h4,
      .jMwxZe h5,
      .jMwxZe h6 {
        font-size: var(--be-font-size-title3);
        line-height: var(--be-line-height-title4);
        color: inherit;
      }
    }

    /*!sc*/
    data-styled.g502[id="sc-cvlWTT"] {
      content: "jMwxZe,"
    }

    /*!sc*/
    .eslSlA .slider-item {
      height: 100%;
    }

    /*!sc*/
    .eslSlA .card {
      height: 100%;
    }

    /*!sc*/
    .eslSlA .card--big-offer {
      height: calc(100% - 40px);
    }

    /*!sc*/
    data-styled.g503[id="sc-fTQvRK"] {
      content: "eslSlA,"
    }

    /*!sc*/
    .gzWYNj {
      position: relative;
      height: 100%;
      border-bottom: none;
      border-radius: 0 0 4px 4px;
    }

    /*!sc*/
    data-styled.g506[id="sc-fTxOGA"] {
      content: "gzWYNj,"
    }

    /*!sc*/
    .jqroXn {
      position: relative;
      padding: 24px;
      text-align: center;
      background: linear-gradient(180deg, #fff 70%, #f4f4f4 100%);
      border-radius: 4px 4px 0 0;
    }

    /*!sc*/
    .jqroXn .cta {
      position: relative;
      top: 42px;
      min-width: 210px;
    }

    /*!sc*/
    data-styled.g507[id="sc-BHvUt"] {
      content: "jqroXn,"
    }

    /*!sc*/
    .gcKRrL {
      padding: 15px 0;
      color: var(--be-brand-primary);
    }

    /*!sc*/
    .gcKRrL h1,
    .gcKRrL h2,
    .gcKRrL h3,
    .gcKRrL h4,
    .gcKRrL h5,
    .gcKRrL h6 {
      margin: 0;
      font-size: var(--be-font-size-body2);
      font-weight: var(--be-font-weight-semibold);
      color: var(--be-text-primary);
    }

    /*!sc*/
    data-styled.g508[id="sc-bjeSbO"] {
      content: "gcKRrL,"
    }

    /*!sc*/
    .dqIzrZ {
      padding: 15px 0;
      font-size: var(--be-font-size-body2);
      color: var(--be-brand-primary);
    }

    /*!sc*/
    .dqIzrZ p {
      margin: 0;
      font-size: var(--be-font-size-body2);
      color: var(--be-text-primary);
    }

    /*!sc*/
    .dqIzrZ> :first-child,
    .dqIzrZ h1,
    .dqIzrZ h2,
    .dqIzrZ h3,
    .dqIzrZ h4,
    .dqIzrZ h5,
    .dqIzrZ h6 {
      margin: 0;
      font-size: var(--be-font-size-title4);
      color: var(--be-brand-primary);
    }

    /*!sc*/
    data-styled.g509[id="sc-hgKiOD"] {
      content: "dqIzrZ,"
    }

    /*!sc*/
    .eVpXqx {
      padding: 24px;
      font-size: var(--be-font-size-body2);
      color: var(--be-text-primary-dark);
      text-align: center;
    }

    /*!sc*/
    .eVpXqx p {
      margin-bottom: 0;
      font-size: var(--be-font-size-body2);
      line-height: var(--be-line-height-body1);
    }

    /*!sc*/
    .eVpXqx ol,
    .eVpXqx ul {
      margin-bottom: 0;
      line-height: 26px;
      text-align: left;
      list-style: none;
    }

    /*!sc*/
    .eVpXqx li::before {
      margin-right: 10px;
      content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAALCAYAAACgR9dcAAAABmJLR0QA/wD/AP+gvaeTAAAAz0lEQVQokZXOsU7CYBTF8f+9koaExcGBxILxKRgZcGJqorf99EufrtG2q3FjID6EPAUJk0vTUJYORCxpz3x/51wYGDObOufeAGQgvFfVLTALguBuNGRRVTfAg4hYlmW/N32g9z5smuYbeBQRK4ris9fb3vuwrustMD+HAAoQx/E6iqLbK3AGPJ9DAEnTdFJV1QHYqepTnuf7f+BLWZZff8ulXY5F5L0tWKnquOvVC9wWvIpIBvwAEyDsWrzAAEmSGPABHK8tdsbMls65RZ/bE96qTamLse0/AAAAAElFTkSuQmCC);
    }

    /*!sc*/
    .eVpXqx .block-img {
      text-align: center;
    }

    /*!sc*/
    .eVpXqx .center {
      display: block;
      text-align: center;
    }

    /*!sc*/
    data-styled.g510[id="sc-fivaXQ"] {
      content: "eVpXqx,"
    }

    /*!sc*/
    .hoMpMj {
      width: 100%;
      height: null;
    }

    /*!sc*/
    data-styled.g517[id="sc-kHdrYz"] {
      content: "hoMpMj,"
    }

    /*!sc*/
    .HzRTc .skeleton-box {
      position: relative;
      overflow: hidden;
      background-color: #DDDBDD;
      border-radius: 8px;
    }

    /*!sc*/
    .HzRTc .skeleton-box::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: '';
      background-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, .2) 20%, rgba(255, 255, 255, .5) 60%, rgba(255, 255, 255, 0));
      -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
      transform: translateX(-100%);
      -webkit-animation: shimmer 2s infinite;
      animation: shimmer 2s infinite;
    }

    /*!sc*/
    @-webkit-keyframes shimmer {
      100% {
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
      }
    }

    /*!sc*/
    @keyframes shimmer {
      100% {
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
      }
    }

    /*!sc*/
    data-styled.g518[id="ComparisonSkeleton__Skeleton-sc-1aa7w23-0"] {
      content: "HzRTc,"
    }

    /*!sc*/
    .fPWKhu {
      width: 100%;
      height: 80px;
      margin-bottom: 10px;
      border-radius: 8px;
    }

    /*!sc*/
    @media (min-width:600px) {
      .fPWKhu {
        height: 84px;
      }
    }

    /*!sc*/
    data-styled.g519[id="ComparisonSkeleton__CoverageArea-sc-1aa7w23-1"] {
      content: "fPWKhu,"
    }

    /*!sc*/
    .lgVLro {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    /*!sc*/
    data-styled.g520[id="ComparisonSkeleton__FilterAndList-sc-1aa7w23-2"] {
      content: "lgVLro,"
    }

    /*!sc*/
    .dUBNIB {
      display: none;
      width: 20%;
    }

    /*!sc*/
    @media (min-width:600px) {
      .dUBNIB {
        display: block;
      }
    }

    /*!sc*/
    data-styled.g521[id="ComparisonSkeleton__Filter-sc-1aa7w23-3"] {
      content: "dUBNIB,"
    }

    /*!sc*/
    .dEyHAR {
      width: 100%;
      height: 40px;
      margin: 10px 0;
    }

    /*!sc*/
    data-styled.g522[id="ComparisonSkeleton__FilterItem-sc-1aa7w23-4"] {
      content: "dEyHAR,"
    }

    /*!sc*/
    .QJlQO {
      width: 100%;
    }

    /*!sc*/
    @media (min-width:600px) {
      .QJlQO {
        width: 77%;
        margin-left: 3%;
      }
    }

    /*!sc*/
    data-styled.g523[id="ComparisonSkeleton__Products-sc-1aa7w23-5"] {
      content: "QJlQO,"
    }

    /*!sc*/
    .khqseG {
      width: 100%;
      height: 42px;
      margin-bottom: 32px;
    }

    /*!sc*/
    @media (min-width:600px) {
      .khqseG {
        margin-top: 10px;
        margin-bottom: 20px;
      }
    }

    /*!sc*/
    data-styled.g524[id="ComparisonSkeleton__OrderBy-sc-1aa7w23-6"] {
      content: "khqseG,"
    }

    /*!sc*/
    .dKpesL {
      display: block;
      height: 304px;
      margin-bottom: 32px;
    }

    /*!sc*/
    @media (min-width:600px) {
      .dKpesL {
        display: inline-block;
        width: 30%;
        margin: 0 1.5% 20px;
        margin-top: 10px;
        margin-bottom: 20px;
      }
    }

    /*!sc*/
    data-styled.g526[id="ComparisonSkeleton__Product-sc-1aa7w23-8"] {
      content: "dKpesL,"
    }

    /*!sc*/
    .slick-slider {
      position: relative;
      display: block;
      box-sizing: border-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-touch-callout: none;
      -khtml-user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    /*!sc*/
    .slick-list {
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }

    /*!sc*/
    .slick-list:focus {
      outline: 0;
    }

    /*!sc*/
    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    /*!sc*/
    .slick-slider .slick-list,
    .slick-slider .slick-track {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    /*!sc*/
    .slick-track {
      position: relative;
      top: 0;
      left: 0;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    /*!sc*/
    .slick-track:after,
    .slick-track:before {
      display: table;
      content: '';
    }

    /*!sc*/
    .slick-track:after {
      clear: both;
    }

    /*!sc*/
    .slick-loading .slick-track {
      visibility: hidden;
    }

    /*!sc*/
    .slick-slide {
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }

    /*!sc*/
    [dir=rtl] .slick-slide {
      float: right;
    }

    /*!sc*/
    .slick-slide img {
      display: block;
    }

    /*!sc*/
    .slick-slide.slick-loading img {
      display: none;
    }

    /*!sc*/
    .slick-slide.dragging img {
      pointer-events: none;
    }

    /*!sc*/
    .slick-initialized .slick-slide {
      display: block;
    }

    /*!sc*/
    .slick-loading .slick-slide {
      visibility: hidden;
    }

    /*!sc*/
    .slick-vertical .slick-slide {
      display: block;
      height: auto;
      border: 1px solid transparent;
    }

    /*!sc*/
    .slick-arrow.slick-hidden {
      display: none;
    }

    /*!sc*/
    .slick-next,
    .slick-prev {
      font-size: 0;
      line-height: 0;
      position: absolute;
      top: 50%;
      display: block;
      width: 20px;
      height: 20px;
      padding: 0;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%);
      cursor: pointer;
      color: transparent;
      border: none;
      outline: 0;
      background: 0 0;
    }

    /*!sc*/
    .slick-next:focus,
    .slick-next:hover,
    .slick-prev:focus,
    .slick-prev:hover {
      color: transparent;
      outline: 0;
      background: 0 0;
    }

    /*!sc*/
    .slick-next:focus:before,
    .slick-next:hover:before,
    .slick-prev:focus:before,
    .slick-prev:hover:before {
      opacity: 1;
    }

    /*!sc*/
    .slick-next.slick-disabled:before,
    .slick-prev.slick-disabled:before {
      opacity: .25;
    }

    /*!sc*/
    .slick-next:before,
    .slick-prev:before {
      font-family: slick;
      font-size: 20px;
      line-height: 1;
      opacity: .75;
      color: #fff;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /*!sc*/
    .slick-prev {
      left: -25px;
    }

    /*!sc*/
    [dir=rtl] .slick-prev {
      right: -25px;
      left: auto;
    }

    /*!sc*/
    .slick-prev:before {
      content: '←';
    }

    /*!sc*/
    [dir=rtl] .slick-prev:before {
      content: '→';
    }

    /*!sc*/
    .slick-next {
      right: -25px;
    }

    /*!sc*/
    [dir=rtl] .slick-next {
      right: auto;
      left: -25px;
    }

    /*!sc*/
    .slick-next:before {
      content: '→';
    }

    /*!sc*/
    [dir=rtl] .slick-next:before {
      content: '←';
    }

    /*!sc*/
    .slick-dotted.slick-slider {
      margin-bottom: 30px;
    }

    /*!sc*/
    .slick-dots {
      position: absolute;
      bottom: -25px;
      display: block;
      width: 100%;
      padding: 0;
      margin: 0;
      list-style: none;
      text-align: center;
    }

    /*!sc*/
    .slick-dots li {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px;
      margin: 0 5px;
      padding: 0;
      cursor: pointer;
    }

    /*!sc*/
    .slick-dots li button {
      font-size: 0;
      line-height: 0;
      display: block;
      width: 20px;
      height: 20px;
      padding: 5px;
      cursor: pointer;
      color: transparent;
      border: 0;
      outline: 0;
      background: 0 0;
    }

    /*!sc*/
    .slick-dots li button:focus,
    .slick-dots li button:hover {
      outline: 0;
    }

    /*!sc*/
    .slick-dots li button:focus:before,
    .slick-dots li button:hover:before {
      opacity: 1;
    }

    /*!sc*/
    .slick-dots li button:before {
      font-family: slick;
      font-size: 6px;
      line-height: 20px;
      position: absolute;
      top: 0;
      left: 0;
      width: 20px;
      height: 20px;
      content: '•';
      text-align: center;
      opacity: .25;
      color: #000;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /*!sc*/
    .slick-dots li.slick-active button:before {
      opacity: .75;
      color: #000;
    }

    /*!sc*/
    data-styled.g679[id="sc-global-elUrJf2"] {
      content: "sc-global-elUrJf2,"
    }

    /*!sc*/
    .slick-slider {
      position: relative;
      display: block;
      box-sizing: border-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-touch-callout: none;
      -khtml-user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    /*!sc*/
    .slick-list {
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }

    /*!sc*/
    .slick-list:focus {
      outline: 0;
    }

    /*!sc*/
    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    /*!sc*/
    .slick-slider .slick-list,
    .slick-slider .slick-track {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    /*!sc*/
    .slick-track {
      position: relative;
      top: 0;
      left: 0;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    /*!sc*/
    .slick-track:after,
    .slick-track:before {
      display: table;
      content: '';
    }

    /*!sc*/
    .slick-track:after {
      clear: both;
    }

    /*!sc*/
    .slick-loading .slick-track {
      visibility: hidden;
    }

    /*!sc*/
    .slick-slide {
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }

    /*!sc*/
    [dir=rtl] .slick-slide {
      float: right;
    }

    /*!sc*/
    .slick-slide img {
      display: block;
    }

    /*!sc*/
    .slick-slide.slick-loading img {
      display: none;
    }

    /*!sc*/
    .slick-slide.dragging img {
      pointer-events: none;
    }

    /*!sc*/
    .slick-initialized .slick-slide {
      display: block;
    }

    /*!sc*/
    .slick-loading .slick-slide {
      visibility: hidden;
    }

    /*!sc*/
    .slick-vertical .slick-slide {
      display: block;
      height: auto;
      border: 1px solid transparent;
    }

    /*!sc*/
    .slick-arrow.slick-hidden {
      display: none;
    }

    /*!sc*/
    .slick-next,
    .slick-prev {
      font-size: 0;
      line-height: 0;
      position: absolute;
      top: 50%;
      display: block;
      width: 20px;
      height: 20px;
      padding: 0;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%);
      cursor: pointer;
      color: transparent;
      border: none;
      outline: 0;
      background: 0 0;
    }

    /*!sc*/
    .slick-next:focus,
    .slick-next:hover,
    .slick-prev:focus,
    .slick-prev:hover {
      color: transparent;
      outline: 0;
      background: 0 0;
    }

    /*!sc*/
    .slick-next:focus:before,
    .slick-next:hover:before,
    .slick-prev:focus:before,
    .slick-prev:hover:before {
      opacity: 1;
    }

    /*!sc*/
    .slick-next.slick-disabled:before,
    .slick-prev.slick-disabled:before {
      opacity: .25;
    }

    /*!sc*/
    .slick-next:before,
    .slick-prev:before {
      font-family: slick;
      font-size: 20px;
      line-height: 1;
      opacity: .75;
      color: #fff;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /*!sc*/
    .slick-prev {
      left: -25px;
    }

    /*!sc*/
    [dir=rtl] .slick-prev {
      right: -25px;
      left: auto;
    }

    /*!sc*/
    .slick-prev:before {
      content: '←';
    }

    /*!sc*/
    [dir=rtl] .slick-prev:before {
      content: '→';
    }

    /*!sc*/
    .slick-next {
      right: -25px;
    }

    /*!sc*/
    [dir=rtl] .slick-next {
      right: auto;
      left: -25px;
    }

    /*!sc*/
    .slick-next:before {
      content: '→';
    }

    /*!sc*/
    [dir=rtl] .slick-next:before {
      content: '←';
    }

    /*!sc*/
    .slick-dotted.slick-slider {
      margin-bottom: 30px;
    }

    /*!sc*/
    .slick-dots {
      position: absolute;
      bottom: -25px;
      display: block;
      width: 100%;
      padding: 0;
      margin: 0;
      list-style: none;
      text-align: center;
    }

    /*!sc*/
    .slick-dots li {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px;
      margin: 0 5px;
      padding: 0;
      cursor: pointer;
    }

    /*!sc*/
    .slick-dots li button {
      font-size: 0;
      line-height: 0;
      display: block;
      width: 20px;
      height: 20px;
      padding: 5px;
      cursor: pointer;
      color: transparent;
      border: 0;
      outline: 0;
      background: 0 0;
    }

    /*!sc*/
    .slick-dots li button:focus,
    .slick-dots li button:hover {
      outline: 0;
    }

    /*!sc*/
    .slick-dots li button:focus:before,
    .slick-dots li button:hover:before {
      opacity: 1;
    }

    /*!sc*/
    .slick-dots li button:before {
      font-family: slick;
      font-size: 6px;
      line-height: 20px;
      position: absolute;
      top: 0;
      left: 0;
      width: 20px;
      height: 20px;
      content: '•';
      text-align: center;
      opacity: .25;
      color: #000;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /*!sc*/
    .slick-dots li.slick-active button:before {
      opacity: .75;
      color: #000;
    }

    /*!sc*/
    data-styled.g680[id="sc-global-elUrJf3"] {
      content: "sc-global-elUrJf3,"
    }

    /*!sc*/
  </style>
</head>

<body>
  
          <section class="UIBase-sc-9ob58w-0 gGybBX">
            <div class="UIBase__Container-sc-9ob58w-1 cwLYcy">
              <div id="object-object" class="sc-cvlWTT jMwxZe">
                <h2>Melhores planos, prontinhos para você!
                </h2>
                <br> <br> <br>
              </div>
              <div data-component-name="CardPrice" class="sc-fTQvRK eslSlA">
                <div class="sc-ctqQKy dEgWah">
                  <div class="slick-slider slick-initialized" dir="ltr"><button data-role="none"
                      class="sc-dFtzxp bWLepN slick-arrow slick-prev slick-disabled" style="display:block"
                      aria-label="Anterior"><svg class="" width="12" height="20" viewBox="0 0 12 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                       
                      </svg></button>
                    <div class="slick-list">
                      <div class="slick-track" style="width:0px;left:0px">
                        <div style="outline:none" data-index="0" class="slick-slide slick-active slick-current"
                          tabindex="-1" aria-hidden="false">
                          
                        </div>
                        <div style="outline:none" data-index="1" class="slick-slide slick-active" tabindex="-1"
                          aria-hidden="false">
                          <div>
                            <div class="slider-item" tabindex="-1" style="width:100%;display:inline-block">
                              <div class="sc-dlVxhl lbFlhL card ">
                                <div class="sc-fTxOGA gzWYNj">
                                  <div class="sc-BHvUt jqroXn">
                                    <div class="sc-bjeSbO gcKRrL">
                                      <h2>Plano basico </h2>
                                    </div>
                                    <!-- <div class="sc-hgKiOD dqIzrZ">
                                      <p></p>
                                    </div> -->
                                    <div class="sc-XxNYO dqRaGi"><span class="sc-ilfuhL eRSDyg">R$</span><span
                                        class="sc-uojGG evjslR">47</span>
                                      <div class="sc-hAcGzb kBxfJc">
                                        <div class="sc-bilyIR dwrJvN">,90</div><span
                                          class="sc-eGPXGI fACiry">/mês</span>
                                      </div>
                                    </div><a href="cadastro.php" class="cta button cs-card-price" rel="index,follow"
                                      data-phone="true">Asssinar</a>
                                  </div>
                                  <div class="sc-fivaXQ eVpXqx">
                                    <ul>
                                      <li>Titular de até 60 anos</li>
                                      <li>Cônjuge de até 65 anos </li>
                                      <li>Até 4 familiares de até 60 anos</li>
                                      <li>Cremação e Sepltamento </li>
                                      
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div style="outline:none" data-index="2" class="slick-slide slick-active" tabindex="-1"
                          aria-hidden="false">
                          <div>
                            <div class="slider-item" tabindex="-1" style="width:100%;display:inline-block">
                              <div class="sc-dlVxhl lbFlhL card ">
                                <div class="sc-fTxOGA gzWYNj">
                                  <div class="sc-BHvUt jqroXn">
                                    <div class="sc-bjeSbO gcKRrL">
                                      <h2> Plano Plus </h2>
                                    </div>
                                    <!-- <div class="sc-hgKiOD dqIzrZ">
                                      <p>1</p>
                                    </div> -->
                                    <div class="sc-XxNYO dqRaGi"><span class="sc-ilfuhL eRSDyg">R$</span><span
                                        class="sc-uojGG evjslR">49</span>
                                      <div class="sc-hAcGzb kBxfJc">
                                        <div class="sc-bilyIR dwrJvN">,99</div><span
                                          class="sc-eGPXGI fACiry">/mês</span>
                                      </div>
                                    </div><a href="cadastro.php"
                                      class="cta button cs-card-price" rel="index,follow">Assinar</a>
                                  </div>
                                  <div class="sc-fivaXQ eVpXqx">
                                    <ul>

                                      <li>Titular de até 60 anos</li>
                                      <li>Cônjuge de até 65 anos </li>
                                      <li>Até 4 familiares de até 60 anos</li>
                                      <li>Até 2 idosos de até 80 anos</li>
                                      <li>Cremação e Sepltamento </li>

                                      </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div style="outline:none" data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true">
                          <div>
                            <div class="slider-item" tabindex="-1" style="width:100%;display:inline-block">
                              <div class="sc-dlVxhl lbFlhL card ">
                                <div class="sc-fTxOGA gzWYNj">
                                  <div class="sc-BHvUt jqroXn">
                                    <div class="sc-bjeSbO gcKRrL">
                                      <h2>Plano Premium</h2>
                                    </div>
                                <!--     <div class="sc-hgKiOD dqIzrZ">
                                      <p>apenas</p>
                                    </div> -->
                                    <div class="sc-XxNYO dqRaGi"><span class="sc-ilfuhL eRSDyg">R$</span><span
                                        class="sc-uojGG evjslR">87</span>
                                      <div class="sc-hAcGzb kBxfJc">
                                        <div class="sc-bilyIR dwrJvN">,90</div><span
                                          class="sc-eGPXGI fACiry">/mês</span>
                                      </div>
                                    </div><a href="cadastro.php" class="cta button cs-card-price" rel="index,follow"
                                      data-phone="true">Assinar</a>
                                  </div>
                                  <div class="sc-fivaXQ eVpXqx">
                                    <ul>
                                     
                                      <li>Titular de até 60 anos</li>
                                      <li>Cônjuge de até 65 anos </li>
                                      <li>Até 4 familiares de até 60 anos</li>
                                      <li>Até 4 idosos de até 80 anos</li>
                                      <li>Dependente sem vínculo familiar</li>
                                      <li>Cremação e Sepltamento </li>

                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
                            


<br> <br> <br> <br> <br> <br>

    <p>A Funeraria Ousadia é uma plataforma de venda de planos de assistência online, ofertado por Ousadia Assistências em Seguros Ltda, CNPJ 12.417.295/0001-85, e Corretora: CBJR Boaventura Serviços, Administração e Corretagem de Seguros Ltda, CNPJ 05.278.779/0001-25. Seguro garantido pela MAPFRE Seguros Gerais S.A., CNPJ 61.074.175/0001-38, Cód. SUSEP: 06238, Av. das Nações Unidas, 14.261, Ala A, 29º andar, 04794-000, Vila Gertrudes, São Paulo/SP, www.mapfre.com.br. Assistência oferecida por MAPFRE Assistência Ltda, CNPJ 68.181.221/0001-47, Processo SUSEP – 15414.900614/2014-11 – Microsseguro e 15414.900026/2017-11 – Decessos Individual. O registro deste plano na SUSEP não implica, por parte da Autarquia, incentivo ou recomendação à sua comercialização. Contato: Serviço de Atendimento ao Consumidor Funeraria Assist (SAC 24h): 9999-9999. Serviço de Atendimento ao Consumidor MAPFRE (SAC 24h) 0800 771 8978 / Deficiente Auditivo e de Fala MAPFRE 0800 775 5045. Ouvidoria 0800 775 1079 (2ª a 6ª-feira, exceto feriado, das 8h às 18h) / Ouvidoria Deficiente Auditivo e de Fala 0800 962 7373, exceto feriado ou pelo site www.mapfre.com.br. A Ouvidoria poderá ser acionada para atuar na defesa dos direitos dos consumidores, esclarecer e/ou solucionar demandas já tratadas pelos canais de atendimento habituais.</p>
</section>


      <div id="txtsegurojazigo" class="hide"
                video="https://www.youtube.com/embed/aVq8AS9qkoQ"
                >
                <div class="title">Podemos te mostrar como um seguro jazigo é fundamental para sua família!</div>
                        <div class="desc">Por apenas R$ 29,90 por mês você adquire o Seguro Jazigo!</div>
                        <div class="txtbtn">Assinar seguro jazigo</div>
            </div>
  



<head>
    <!-- Google Tag Manager -->

            <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="https://io.betalabs.net/build/js/canopus/canopus-cee32835e2.js"></script>
        <script src="https://assets.betalabs.net/production/mensalidadeplanofunerario/scripts/stores/1/checkout-preview.js?69bcc5301387f4720ba13480541e3ff6"></script>
        <script src="https://assets.betalabs.net/production/mensalidadeplanofunerario/scripts/stores/1/theme.js?02f3093a05b9857f1d4a6af9464c5b37"></script>
            </body>
</html>
<head>
</script>
</html>
