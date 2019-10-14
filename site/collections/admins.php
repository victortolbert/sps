<?php

// A list of users
return function ($users) {
    return $users->filterBy('role', 'admin');
};