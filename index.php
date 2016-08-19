<?php

$assets_url="http://my-awesome-site.local/assets/";

$files = array (
    "Free_logo_tcod2x.svg",
    "tumblr_mvv8e1OQX51qj73e2o1_500_viaiep.gif",
    "SH00020-Multiple-Square-Logo-Template_wvwy9x.png"
    );

$content = $assets_url.$files[rand(0, 2)];
include "templates/main.tpl";
