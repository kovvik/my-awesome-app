<?php

$assets_url="http://my-awesome-site.local/assets/";

$files = array (
    "Free_logo.svg",
    "tumblr_mvv8e1OQX51qj73e2o1_500.gif",
    "SH00020-Multiple-Square-Logo-Template.png"
    );

$content = $assets_url.$files[rand(0, 2)];
include "templates/main.tpl";
