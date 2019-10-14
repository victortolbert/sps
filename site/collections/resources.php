<?php
return function ($site) {
    return $site->find('resources')->children();
};