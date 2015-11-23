<?php

$app->get('/admin/users', function ($request, $response, $args) {
    $users = [];
    $flash_messages = $this->flash->getMessages();

    $userService = new AuthService();
    $users = $userService->getAllUsers();

    return $this->view->render($response, 'admin/users_all.twig', [
                'users' => $users,
                'flash_messages' => $flash_messages,
                'userLogged' => isset($_SESSION['user_id']),
    ]);
})->setName('admin-users-all');

$app->map(['GET', 'POST'], '/admin/users/edit/{id:[\d]*}', function ($request, $response, $args) {
    $user = [];
    $id = (int) $args['id'];

    $flash_messages = $this->flash->getMessages();
    $userService = new AuthService();
    $user = $userService->getUserById($id);


    if ($request->isPost()) {

        $user['full_name'] = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
        $user['email'] = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

        $user_form = validateUserEditForm($user);

        if ($user_form['is_valid']) {
            $userService->updateUser($user);
            $this->flash->addMessage('success', 'Details has been updated');
            return $response->withRedirect($this->router->pathFor('admin-users-all'));
        } else {
            $field_errors = $user_form['has_errors'];
        }
    }

    return $this->view->render($response, 'admin/admin_users_edit.twig', [
                'user' => $user,
                'flash_messages' => $flash_messages,
                'userLogged' => isset($_SESSION['user_id']),
    ]);
})->setName('admin-users-edit');


$app->map(['GET', 'POST'], '/admin/users/delete/{id:[\d]*}', function ($request, $response, $args) {
    $user = [];
    $id = (int) $args['id'];

    $flash_messages = $this->flash->getMessages();
    $userService = new AuthService();
    $user = $userService->getUserById($id);

    $OK_link = $this->router->pathFor('admin-users-delete', ['id' => $id]);

    if ($request->isPost()) {
        $userService->deleteUser($id);
        $this->flash->addMessage('success', 'User has been successfully deleted');
        return $response->withRedirect($this->router->pathFor('admin-users-all'));
    }

    return $this->view->render($response, 'admin/admin_users_delete.twig', [
                'user' => $user,
                'OK_link' => $OK_link,
                'flash_messages' => $flash_messages,
                'userLogged' => isset($_SESSION['user_id']),
    ]);
})->setName('admin-users-delete');