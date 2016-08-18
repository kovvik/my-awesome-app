<?php

$files = array (
    "https://storage.googleapis.com/my-awesome-app/Free_logo.svg",
    "https://storage.googleapis.com/my-awesome-app/SampleVideo_1280x720_1mb.mp4",
    "https://storage.googleapis.com/my-awesome-app/SH00020-Multiple-Square-Logo-Template.png"
    );

$content = $files[rand(0, 2)];


include "templates/main.tpl";
