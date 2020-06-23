<?php get_header(); ?>
<?php get_template_part('TemplateParts/topnav'); ?>

<style>
    .comment-metadata a,.comment-content p{
        color: #000 !important;
    }
    .posttitle h1{ 
    font-weight: 200;
    font-size: 4.5rem;
    }
    .posttitle{
        width: 100%;
        float: left;   
    }
    .postimg{
        height: 90px;
        float: left;
        width: 15%;
    }
     .our_content .postcontent,#reply-title,.comment-notes {  
        color: #000 !important;
    }
    .posttitle h1
    {
        color:rgba(3, 57, 87, .8) !important;
    }
    .postcontent p{
        color:#333 !important;
    }
    
    .our_content{   
        float: left;
        width:60%;
    }
    .commentssection{
        width:100%;
    }
    .postcon{
        width: 100%;
        display: block;
        overflow: auto;
        height: auto;
        background: #eee;
    }
    .postcon p{
        font-weight: 600;
    }
    .rowww{
        padding: 0px;
        margin: 0px;
        overflow: auto;
        padding-top: 10px;
    }
/*    #commentform{
        overflow: auto;
        display: block;
    }
    #commentform p label{
        width:10%;
        color: #fff;
    }
    #commentform p input{
        width: 50%;
    }
    #commentform p textarea{
          width:50%;
    }*/
/*
    .comment-form-cookies-consent{
        display: none;
    }
    #commentform{
        padding: 10px;
    }
   #commentform p textarea#comment{
       height: 120px
    }
    #commentform p input#submit
    {
       width: 10%;
       margin-left: 51%;
         background-color: #2b4555;
        opacity: .9;
        color: #fff;
    }
        #commentform p input#submit:hover
    {
            background-color: #2b4555;
    color: #fff;
           opacity: 1;
    }
    .comment-reply-link{
       opacity: .7;
    }
*/
    h1{
            FONT-WEIGHT: 700;
    COLOR: #033957;
        display: inline-block;
}
    .imgcon{
        margin: 10px 20px 10px 0px;
    }
    .wp-image-138{
            position: relative;
    bottom: 10px;
    }
      
    .wp-block-image{
        display: none;
    }
    

 @media (min-width:300px) and (max-width:1200px){
     
     .postimg,.our_content{
         width: 100% !important;
         margin: 10px;
     }
     #commentform p textarea ,#commentform p input{
         width: 90%;
     }
     #commentform p label {
         width:50%;
     }
    }
</style>
<div class="row rowww " style="background-size:100% 100%;">
	
	<div class="container-fluid"  >
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
			
           <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>   > 
                    <div class="container-fluid postcon " style="">
                     <!--    <?php if( has_post_thumbnail() ): ?>
						          <div  class="postimg col-lg-12 col-md-12 col-sm-12 col-xs-12" ><?php the_post_thumbnail('full'); ?></div>
				          <?php endif; ?>-->
				  <!--   <div class="our_content container" style="background:#fff;">-->
                    <!--	<header class="posttitle">  <h1 style="color:#fff;"> <?php the_title(); ?>   </h1>   </header>	-->
			          	<div class="postcontent container" style="background:#eee;">  <?php the_content(); ?></div>	
           
                 <!--   </div>-->
			
					 
				<!--	<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
					-->
			
					</div>
			
					<div class="commentssection container-fluid" style="">
                    	   <?php 
						if( comments_open() ){ 
							comments_template(); 
						} else {
							echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
						}
						
					 ?>
                    
                    </div>
			
				
				</div>

			<?php endwhile;
			
		endif;
				
		?>
	
	</div>

</div>
<?php get_template_part('TemplateParts/foot');?>
<?php get_footer(); ?>





