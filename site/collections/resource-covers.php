<?php

// A list of images/files
return function ($site) {
    return $site
        ->find('resources')
        ->children()
        ->images()
        ->template('cover');
};