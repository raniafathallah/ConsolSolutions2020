<?php
/**
 * The template for displaying the header
 *
 * 
 * @package Consol Solutions
 * @subpackage Consol
 * @since   Consol 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="" style="padding: 0px !important;
    margin: 0px !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if(is_page('ev')){?>
       <title>ev</title>
    <?php }?>
      <?php if(is_page('Consol Hakkında')){?>
       <title>Consol Hakkında</title>
    <?php }?>
      <?php if(is_page('müşteri hikayeleri')){?>
       <title>müşteri hikayeleri</title>
    <?php }?>
      <?php if(is_page('Hizmetler')){?>
       <title>Hizmetler</title>
    <?php }?>
      <?php if(is_page('ne yapıyoruz biz')){?>
       <title>ne yapıyoruz biz</title>
    <?php }?>
       <?php if(is_page('bize bağla')){?>
       <title>bize bağla</title>
    <?php }?>
    <meta charset="utf-8">
    <meta name="consol" content="medical integration environment ">
    <meta name="og:title" property="og:title" content="consol">
    <meta keyboard="websites development ,medical environment , medical integration , HIS ,DECISION SUPPORT ">
    <meta keyboard="websites development ,medical environment , medical integration , HIS ,DECISION SUPPORT
                   Consol Hakkinda,Consol ,integration ,medical ,nabiz,
                    getway,Getway ,Ecg,mointor ,medical mointor ,medical integration ,multi bed mointoring system ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/animate.css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">  
   <!-- fontawsome-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
<!--    font roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    
    

    <script src="<?php bloginfo('template_url');?>/js/html5shiv.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/respond.min.js"></script>
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    -->
	<?php wp_head(); ?>
</head>

