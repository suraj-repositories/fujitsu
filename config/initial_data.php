<?php
return [
        'login_themes' => [
            [
                'type' => 'login',
                'title' => 'Basic',
                'view' => 'auth.login.basic_login',
                'image_path' => '/assets/images/themes/basic.png',
                'is_applied' => true,
            ],
            [
                'type' => 'login',
                'title' => 'Cover',
                 'view' => 'auth.login.cover_login',
                'image_path' => '/assets/images/themes/cover.png',
            ],
            [
                'type' => 'login',
                'title' => 'Full Cover LTR',
                 'view' => 'auth.login.full_cover_login',
                'image_path' => '/assets/images/themes/full_cover_ltr.png',
                'direction' => 'ltr'
            ],
            [
                'type' => 'login',
                'title' => 'Full Cover RTL',
                 'view' => 'auth.login.full_cover_login',
                'image_path' =>  '/assets/images/themes/full_cover_rtl.png',
                'direction' => 'rtl'
            ],
        ]
    ];
