<style>
    .nabiz_des .icon div img
    {
            background: #eee;
    border-radius: 90% 90% !important;
    padding: 10px;
    }
    .nabiz_des .icon div{
           width:40% !important;
            height: 120px;
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
        font-weight: 400;
        font-size: 30px;
    }
    .nabiz_des{
        height:256px;
    }
    .wp-image-65{
        height: 144px;
        width: 100%;
}
    article a{
        color: #fff !important;
     
    }
    article {
        padding:11px 0px 0px 21px;
        
    }
    .more{
            font-weight: 600;

    }
    
</style>
<!-- appeared in home -->
<?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
 <a href="<?php echo get_permalink(); ?>"> 

                <div class="nabiz_des " >
                    <div class="icon"> 
                      <!--  <h3>imageeeeeeeeeeeeeeee</h3>-->
                   
                           <?php if( has_post_thumbnail() ): ?>		
			                        <div ><?php the_post_thumbnail('full'); ?></div>
					       <?php endif; ?>
    
                           <h3> <?php the_title(); ?>  </h3>
                    </div>
                    <!--<article>  <?php the_content(); ?></article>-->  
                    
                    <article>    <?php echo get_excerpt(); ?> </article>
              </div>     
</a>
        <?php endwhile?>
<?php endif?>
                       