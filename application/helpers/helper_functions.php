<?php

function d( $data )
{
    echo '<pre>';
    print_r( $data );
    echo '</pre>';
}

function dd( $data )
{
    echo '<pre>';
    print_r( $data );
    echo '</pre>';
    die;
}