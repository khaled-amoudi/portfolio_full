<?php

return [
    [
        'menu_label' => 'dashboard',
    ],
    [
        'route' => 'dashboard',
        'label' => 'Dashboard',
        'icon' => 'bi bi-house-fill',
        'active' => 'dashboard.dashboard',
    ],
    [
        'menu_title' => 'projects',
        'menu_title_icon' => 'bi bi-grid-fill',
        'active' => 'dashboard.project.*',
        'menu_title_list' => [
            [
                'route' => 'dashboard.project.index',
                'label' => 'projects',
                'active' => 'dashboard.project.*',
            ],
            [
                'route' => 'dashboard.project.create',
                'label' => 'create project',
                'active' => 'dashboard.project.create',
            ],
        ],
    ],

    [
        'menu_title' => 'blogs',
        'menu_title_icon' => 'lni lni-text-align-justify',
        'active' => 'dashboard.blog.*',
        'menu_title_list' => [
            [
                'route' => 'dashboard.blog.index',
                'label' => 'blogs',
                'active' => 'dashboard.blog.*',
            ],
            [
                'route' => 'dashboard.blog.create',
                'label' => 'create blog',
                'active' => 'dashboard.blog.create',
            ],
        ],
    ],

    [
        'menu_title' => 'tags',
        'menu_title_icon' => 'lni lni-tag',
        'active' => 'dashboard.tag.*',
        'menu_title_list' => [
            [
                'route' => 'dashboard.tag.index',
                'label' => 'tags',
                'active' => 'dashboard.tag.*',
            ],
            [
                'route' => 'dashboard.tag.create',
                'label' => 'create tag',
                'active' => 'dashboard.tag.create',
            ],
        ],
    ],

    [
        'menu_title' => 'authors',
        'menu_title_icon' => 'bi bi-person-lines-fill',
        'active' => 'dashboard.author.*',
        'menu_title_list' => [
            [
                'route' => 'dashboard.author.index',
                'label' => 'authors',
                'active' => 'dashboard.author.*',
            ],
            [
                'route' => 'dashboard.author.create',
                'label' => 'create author',
                'active' => 'dashboard.author.create',
            ],
        ],
    ],


];
