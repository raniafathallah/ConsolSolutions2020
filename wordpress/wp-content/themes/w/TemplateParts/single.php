<style>
    .nabiz_des .icon div{
           width:40% !important;
            height: 100px;
    }

.nabiz_des .icon div img {
    height: 100%;
    width: 100%;
    float: left !important;
 
    }
.nabiz_des .icon div, .nabiz_des .icon h3{
        float: left;
    width: 60%;
    }
    .nabiz_des .icon h3{
        padding: 26px 8px;
    }
    .nabiz_des{
        height:250px;
    }
</style>


<?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
 <a href="<?php echo get_permalink(); ?>"> 
                <div class="nabiz_des" >
                    <div class="icon" style="background:#000"> 
                        
                        <h2>singgggggggggggg</h2>
                           <?php if( has_post_thumbnail() ): ?>		
			                        <div><?php the_post_thumbnail('full'); ?></div>
					       <?php endif; ?>
    
                                <h3 > <?php the_title(); ?>  </h3>
                    </div>
                    <article>  <?php the_content(); ?></article>      
                </div>     
</a>
        <?php endwhile?>
<?php endif?>
                       