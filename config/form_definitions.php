<?php

use App\Models\User;

return [
    'registration' => [
        'title' => 'Registration',
        'fields' => [
            'name_prefix' => [
                'label' => 'Name Prefix',
                'type' => 'text',
                'validation_rules' => ['required'],
            ],
            'first_name' => [
                'label' => 'First Name',
                'type' => 'text',
                'validation_rules' => ['required'],
            ],
            'middle_name' => [
                'label' => 'Middle Name',
                'type' => 'text',
                'validation_rules' => ['required'],
            ],
            'last_name' => [
                'label' => 'Last Name',
                'type' => 'text',
                'validation_rules' => ['required'],
            ],
            'email' => [
                'label' => 'Email',
                'type' => 'email',
                'validation_rules' => [
                    'required',
                    'email',
                    ['max_usage' => [
                        'model' => User::class,
                        'column' => 'email',
                        'max' => 3
                    ]]
                ],
            ],
            'phone' => [
                'label' => 'Phone',
                'type' => 'tel',
                'validation_rules' => [
                    'required',
                    'regex:/^[0-9+\-\s()]*$/'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'type' => 'password',
                'validation_rules' => [
                    'required',
                    'min:8'
                ],
            ],
            'confirm_password' => [
                'label' => 'Confirm Password',
                'type' => 'password',
                'validation_rules' => ['required', 'same:password'],
            ],
        ],
        'submit_button_text' => 'Register',
    ],
];
