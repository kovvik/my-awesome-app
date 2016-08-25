<?php

$assets_url="http://my-awesome-site.local/assets/";

$files = array (
    "image/upload/v1471533898/Free_logo_tcod2x.svg",
    "image/upload/v1471533898/tumblr_mvv8e1OQX51qj73e2o1_500_viaiep.gif",
    "image/upload/v1471533899/SH00020-Multiple-Square-Logo-Template_wvwy9x.png",
    "video/upload/v1471594573/SampleVideo_1280x720_1mb_gp31qc.mp4"
);

$image = $assets_url.$files[rand(0, 2)];
$video = $assets_url.$files[3];
$hostname = gethostname();

include "templates/main.tpl";
