<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Consol Solutions
 * @subpackage Consol
 * @since   Consol 1.0
 */

/*get_header();*/ 
?>
<?php get_template_part('TemplateParts/indexhead');?>

<!--
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
-->

<body class="container-fluid">
<div class="container-fluid">

<?php get_template_part('TemplateParts/topnav'); ?>
    <?php get_template_part('TemplateParts/home'); ?>


<?php get_template_part('TemplateParts/foot');?>
<?php get_footer();?>  
