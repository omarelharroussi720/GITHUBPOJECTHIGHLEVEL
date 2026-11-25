<?php

$projects = [
    [
        'title' => 'Portfolio Website',
        'description' => 'My personal portfolio website',
        'status' => 'completed',
        'link' => '#'
    ],
    [
        'title' => 'Online Store',
        'description' => 'An e-commerce website',
        'status' => 'in progress',
        'link' => '#'
    ],
    [
        'title' => 'Gym Store',
        'description' => 'a gym store about who love sports ',
        'status' => 'completed',
        'link' => '#'
    ],
    [
        'title' => 'Shoes Store',
        'description' => 'a Shoes Store about who love shoes ',
        'status' =>''
    ]
];

$totalProjects = count($projects);

require 'index-template.php';

?>

