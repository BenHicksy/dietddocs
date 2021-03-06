<?php

use Valitron\Validator;

function validateBmiForm($data) {
    $v = new Validator($data);
    $v->rule('required', ['email', 'height', 'weight']);
    $v->rule('numeric', [ 'height', 'weight']);
    $v->rule('email', 'email');
    $v->rule('max', 'height', 2.5);
    $v->rule('notIn', 'height', [0])->message('{field} - zero is not allowed here');
    $v->rule('min', 'weight', 30);

    return ['is_valid' => $v->validate(), 'has_errors' => $v->errors()];
}

function validateBmrForm($data) {
    $v = new Validator($data);
    $v->rule('required', ['age', 'height', 'weight']);
    $v->rule('numeric', [ 'age', 'height', 'weight']);
    $v->rule('max', 'height', 2.5);
    $v->rule('notIn', 'height', [0])->message('{field} - zero is not allowed here');
    $v->rule('min', 'weight', 30);
    $v->rule('min', 'age', 21)->message('This formula applies only to adults (more than 21 years old )');

    return ['is_valid' => $v->validate(), 'has_errors' => $v->errors()];
}

function validateRegisterForm($user) {
    $v = new Validator($user);
    $v->rule('required', ['user_name', 'full_name', 'email', 'password']);
    $v->rule('lengthMin', ['user_name', 'full_name', 'password'], 3);
    $v->rule('email', 'email');

    return ['is_valid' => $v->validate(), 'has_errors' => $v->errors()];
}

function validateLoginForm($user) {
    $v = new Validator($user);
    $v->rule('required', ['user_name',  'password']);
    $v->rule('lengthMin', ['user_name',  'password'], 3);
    
    return ['is_valid' => $v->validate(), 'has_errors' => $v->errors()];
}

function validatePasswordForm($data) {
    $v = new Validator($data);
    
    $v->rule('required', ['new_password',  'current_password', 'confirmed_password']);
    $v->rule('lengthMin', ['new_password',  'current_password', 'confirmed_password'], 3);
    
    return ['is_valid' => $v->validate(), 'has_errors' => $v->errors()];
}

function validateUserEditForm($user) {
    $v = new Validator($user);
    $v->rule('required', [ 'full_name', 'email', ]);
    $v->rule('lengthMin', ['full_name', ], 3);
    $v->rule('email', 'email');

    return ['is_valid' => $v->validate(), 'has_errors' => $v->errors()];
}