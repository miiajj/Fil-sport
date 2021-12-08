<?php

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $ok = true;
    $messages = array();

    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Username để trống kìa!';
    }

    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Password để trống à!';
    }

    if ($ok) {
        if ($username === 'admin' && $password === 'admin') {
            $ok = true;
            $messages[] = 'Successful login!';
        } else {
            $ok = false;
            $messages[] = 'Sai username hoặc password. Có khi sai cả hai! Có cái tài khoản cũng không nhớ :)';
        }
    }

    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );

?>