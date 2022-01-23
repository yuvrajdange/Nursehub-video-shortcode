<?php
/**
 * The template for custom code
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */  


function nh_yt_embeds_callback($atts) {
   extract(shortcode_atts(array(
      "value" => 'http://',
      "name"=> 'movie',
      "allowFullScreen" => 'true',
      "allowScriptAccess"=>'always',
      "controls"=> '1',
   ), $atts));
   
   
   
   return '<object class="nh-yt-video-wrapper"><param name="'.$name.'" value="'.$value.'"><param name="allowFullScreen" value="'.$allowFullScreen.'"><param name="allowScriptAccess" value="'.$allowScriptAccess.'"><embed src="'.$value.'" type="application/x-shockwave-flash" allowfullscreen="'.$allowFullScreen.'" allowScriptAccess="'.$allowScriptAccess.'" width="'.$width.'" height="'.$height.'"></object>



   <style>     
    #nh_yt_embeds {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 40px;
    max-width: 1140px;
    }
     #nh_yt_embeds object {
           height: 170px;
        }

     @media screen and (max-width: 768px) {
        #nh_yt_embeds {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;

        }
        }
       @media screen and (max-width: 480px) {
        #nh_yt_embeds {
            display: block;
            margin-left: 10px;
            margin-right: 10px;
            }
            #nh_yt_embeds .nh-yt-video-wrapper {
                margin-bottom: 20px !important;
            }
        }

    </style>';
    
}
add_shortcode( 'nh_yt_embeds', 'nh_yt_embeds_callback' );