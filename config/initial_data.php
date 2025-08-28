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
        ],
        'forgot_password_themes' => [
            [
                'type' => 'forgot-password',
                'title' => 'Basic',
                'view' => 'auth.forgot_password.forgot_password_basic',
                'image_path' => '/assets/images/themes/forgot-password-basic.png',
                'is_applied' => true,
            ],
            [
                'type' => 'forgot-password',
                'title' => 'Cover',
                'view' => 'auth.forgot_password.forgot_password_cover',
                'image_path' => '/assets/images/themes/forgot-password-cover.png',

            ],
            [
                'type' => 'forgot-password',
                'title' => 'Full Cover LTR',
                'view' => 'auth.forgot_password.forgot_password_full_cover',
                'image_path' => '/assets/images/themes/forgot-password-full-cover-ltr.png',
                 'direction' => 'ltr'
            ],
            [
                'type' => 'forgot-password',
                'title' => 'Full Cover RTL',
                'view' => 'auth.forgot_password.forgot_password_full_cover',
                'image_path' => '/assets/images/themes/forgot-password-full-cover-rtl.png',
                 'direction' => 'rtl'
            ],
        ],
        'register_themes' => [
            [
                'type' => 'register',
                'title' => 'Basic',
                'view' => 'auth.register.basic_register',
                'image_path' => '/assets/images/themes/register-basic.png',
                'is_applied' => true,
            ],
            [
                'type' => 'register',
                'title' => 'Cover',
                'view' => 'auth.register.cover_register',
                'image_path' => '/assets/images/themes/register-cover.png',

            ],
            [
                'type' => 'register',
                'title' => 'Full Cover LTR',
                'view' => 'auth.register.full_cover_register',
                'image_path' => '/assets/images/themes/register-full-cover-ltr.png',
                 'direction' => 'ltr'
            ],
            [
                'type' => 'register',
                'title' => 'Full Cover RTL',
                'view' => 'auth.register.full_cover_register',
                'image_path' => '/assets/images/themes/register-full-cover-rtl.png',
                 'direction' => 'rtl'
            ],
        ]
    ];
