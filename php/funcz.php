<?php

function  photo($pic,$pic_tn,$picTtl,$ht_tn=150,$pgTtl,$fromUrl)
{
	print  '<a  href="displayPic.php?pic='.$pic.'&pgTtl='.$pgTtl.'&picTtl='.$picTtl.'&fromUrl='.$fromUrl.'" title="'.$pgTtl.'">
	             <img src = "images/'.$pic_tn.'" alt="'.$pgTtl.'" height="'.$ht_tn.' class="pic"/>
	        </a>  &nbsp; ';
    }
?>