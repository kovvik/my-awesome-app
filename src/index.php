<?php

$assets_url="assets/";

$files = array (
    "Free_logo_tcod2x.svg",
    "tumblr_mvv8e1OQX51qj73e2o1_500_viaiep.gif",
    "SH00020-Multiple-Square-Logo-Template_wvwy9x.png",
    "SampleVideo_1280x720_1mb_gp31qc.mp4"
);

$image = $assets_url.$files[rand(0, 2)];
$video = $assets_url.$files[3];
$hostname = gethostname();

include "templates/main.tpl";
