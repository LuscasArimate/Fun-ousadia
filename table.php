<?php
include "conexaoBD.php";
include "listar.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funeraria ousadia</title>
    <link href="https://io.betalabs.net/build/css/canopus/canopus-02635147ff.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
 
    <link rel="stylesheet" href="https://assets.betalabs.net/production/mensalidadeplanofunerario/styles/stores/1/style.css?47c6ff403330d7259b874e73378a7040">
    <link rel="icon" sizes="16x16" type="image/png" href="">
 
  
</head>
<body>
    
    
                          <div id="idplanjazigo" data="5"></div>
                      
    
    
    
    
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
button.dropdown-item.botao-a-ser-clicado-assinatura {
    background-color: #F6A200!important;
    border-radius: 50px!important;
    color: #fff!important;
    font-size: 20px!important;
    text-transform: none!important;
    border-color: #F6A200!important;
    padding: 3px 48px!important;
    height: 43px!important;
    margin-top: 29px;
    margin-left: 160px;
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
                <a href="index.php">
                    <img src="https://raw.githubusercontent.com/Ksanim0/fun-ousadia-bd/main/logos/funerariaWide__1_-removebg-preview.png" alt="" width="165px">
                </a>
<!-- 
                LOGO AQUI -->


            </div>
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
                <img src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/logo-white.svg" alt="" class="img-fluid" width="257px">
            </a>
            <div class="row">
                <div class="img-erro">
                    <img src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/puff.png">
                </div>
               
                </div>
            </div>    
        </div>

<!-- TABELA AQUI GAY  -->



















        <section class="container infos-check">
            <p> plataforma de venda de planos de assistência online ofertado por Cuidar Assistência e Prestação de Serviços de Apoio e Planos de Auxílio a Empresas Ltda, CNPJ 37.351.245/0001-73, e Corretora: Inforseg Corretora e Administradora De Seguros Eireli, CNPJ 03.240.235/0001-49. Seguro garantido pela MAPFRE Seguros Gerais S.A., CNPJ 61.074.175/0001-38, Cód. SUSEP: 06238, Av. das Nações Unidas, 14.261, Ala A, 29º andar, 04794-000, Vila Gertrudes, São Paulo/SP, www.mapfre.com.br. Assistência oferecida por MAPFRE Assistência Ltda, CNPJ 68.181.221/0001-47, Processo SUSEP - 15414.900614/2014-11 – Microsseguro e 15414.900026/2017-11 - Decessos Individual. Contato: Serviço de Atendimento ao Consumidor Cuidar Assist (SAC Atendimento 24h): 0800-944-1120. Serviço de Atendimento ao Consumidor MAPFRE (SAC 24h) 0800 771 8978 / Deficiente Auditivo e de Fala MAPFRE 0800 775 5045. Ouvidoria 0800 775 1079 (2ª a 6ª-feira, exceto feriado, das 8h às 18h) / Ouvidoria Deficiente Auditivo e de Fala 0800 962 7373, exceto feriado ou pelo site www.mapfre.com.br. A Ouvidoria poderá ser acionada para atuar na defesa dos direitos dos consumidores, esclarecer e/ou solucionar demandas já tratadas pelos canais de atendimento habituais.</p>
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

<!-- A tabela ta aqui, corno, almadiçoado   --> 
<p>Escreva algo no input para pesquisar na tabela, por exemplo Nomes ou Emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>



<div class="tabela">

 <div class="row" id="titulo">
    <h3 id="titulocor">Cadastros</h3>
    </div>
    <br>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Tel</th>
      <th scope="col">CPF</th>
    </tr>
  </thead>

  <?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>

   <tbody id="myTable">
    <tr>
      <th scope="row"><?php echo $usuario['id'];?></th>
      <td> <?php echo $usuario['nome'];?></td>
      <td> <?php echo $usuario['email'];?></td>
      <td> <?php echo $usuario['telefone'];?></td>
      <td> <?php echo $usuario['cpf'];?></td>
    </tr>

   
  </tbody>

  <?php } ?>

  </table>

  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>










  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</body>
</html>

