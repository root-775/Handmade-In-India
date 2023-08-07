<?php

function activeMenu($uri = '', $class = 'active') {
    return (request()->is($uri)) ? $class : '';
}
