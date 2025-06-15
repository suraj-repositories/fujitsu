<?php

use App\Models\User;

return [
    'registration' => [
        'title' => 'Registration',
        'fields' => [
            'referral_id' => [
                'label' => 'Referral ID',
                'type' => 'text',
                'validation_rules' => ['required', 'exists:users,id'],
            ],
            'name_prefix' => [
                'label' => 'Name Prefix',
                'type' => 'text',
                'options' => [
                    'Mr' => 'Mr',
                    'Ms' => 'Ms',
                    'Mrs' => 'Mrs',
                    'Dr' => 'Dr',
                ],
                'validation_rules' => ['required', 'in:Mr,Ms,Mrs,Dr'],
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
            'gender' => [
                'label' => 'Gender',
                'type' => 'select',
                'options' => [
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other',
                ],
                'validation_rules' => ['required', 'in:male,female,other'],
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
            'terms' => [
                'label' => 'Terms and Conditions',
                'type' => 'checkbox',
                'validation_rules' => ['required', 'accepted'],
            ],
        ],
        'submit_button_text' => 'Register',
    ],
];
