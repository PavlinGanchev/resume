<?php
// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
$breadcrumbs->push('Home', url('/'));
});

// Home > Login
Breadcrumbs::register('login', function($breadcrumbs)
{
$breadcrumbs->parent('home');
$breadcrumbs->push('Login', url('login'));
});

// Home > Register
Breadcrumbs::register('register', function($breadcrumbs)
{
$breadcrumbs->parent('home');
$breadcrumbs->push('Register', url('register'));
});

// Home >  Create Comment
Breadcrumbs::register('comment', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Leave comment', url('comment/create'));
});
// Home >  Edit Comment
Breadcrumbs::register('commentEdit', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Update comment', route('comment.edit'));
});
