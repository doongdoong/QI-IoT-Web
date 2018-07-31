<?php
// Routes

$app->get('/', 'App\Controller\HomeController:dispatch')
->setName('homepage');

$app->get('/post/{id}', 'App\Controller\HomeController:viewPost')
->setName('view_post');

$app->post('/accounts/signup', 'App\Controller\UserController:signup')
->setName('accounts_signup');

$app->get('/accounts/approve/{nonce}', 'App\Controller\UserController:approve')
->setName('accounts_approve');

$app->post('/accounts/authenticate', 'App\Controller\UserController:authenticate')
->setName('accounts_authenticate');

$app->post('/accounts/validate', 'App\Controller\UserController:validate')
->setName('accounts_validate');

$app->put('/accounts/resetpassword', 'App\Controller\UserController:resetPassword')
->setName('accounts_resetpassword');

$app->put('/accounts/changepassword', 'App\Controller\UserController:changePassword')
->setName('accounts_changepassword');

$app->post('/accounts/signout', 'App\Controller\UserController:signout')
->setName('accounts_signout');

$app->delete('/accounts/IDcancellation', 'App\Controller\UserController:IDcancellation')
->setName('accounts_IDcancellation');

$app->post('/sensor/register', 'App\Controller\SensorController:register')
->setName('sensor_register');

$app->post('/sensor/unregister', 'App\Controller\SensorController:unregister')
->setName('sensor_unregister');

$app->post('/data/AQInsert', 'App\Controller\DataController:AQInsert')
->setName('data_AQInsert');

$app->post('/data/HRInsert', 'App\Controller\DataController:HRInsert')
->setName('data_HRInsert');