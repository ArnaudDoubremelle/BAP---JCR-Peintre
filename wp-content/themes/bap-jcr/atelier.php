<?php
/*template name: atelier*/
/**
 * Created by PhpStorm.
 * User: Vasach
 * Date: 21/04/2016
 * Time: 18:57
 */

?>
<?php get_header()?>
<?php

?>
<div class="slider vcenter">
    <div><div class="image"><a href="//vimeo.com/1084537" data-lity>
                <img src="https://i.vimeocdn.com/video/553159401_1200.jpg" alt=""></a>
        </div>
    </div>
    <div><div class="image"><a href="<?php bloginfo('template_directory')?>/img/2.jpg" data-lity><img src="<?php bloginfo('template_directory')?>/img/2.jpg" alt=""></a>

        </div></div>
    <div><div class="image"><a href="<?php bloginfo('template_directory')?>/img/4.jpg" data-lity><img src="<?php bloginfo('template_directory')?>/img/4.jpg" alt=""></a>

        </div></div>
    <div><div class="image"><a href="<?php bloginfo('template_directory')?>/img/5.jpg" data-lity><img src="<?php bloginfo('template_directory')?>/img/5.jpg" alt=""></a>

        </div></div>
</div>


<!--<a href="//vimeo.com/<?php the_field(url_video)?>" data-lity>
    <div class="col-md-6 col-sm-6  col-xs-12 mg-top">
        <div class="grid">
            <figure class="effect-oscar">

                <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <div>
                        <?php the_content() ?>
                    </div>

                </figcaption>
            </figure>
        </div>

    </div>
</a>-->


<?php get_footer()?>
