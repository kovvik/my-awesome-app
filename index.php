<?php

$assets_url="http://my-awesome-site.local/assets/";

$files = array (
    "Free_logo.svg",
    "SampleVideo_1280x720_1mb.mp4",
    "SH00020-Multiple-Square-Logo-Template.png"
    );

$content = $assets_url.$files[rand(0, 2)];
include "templates/main.tpl";
