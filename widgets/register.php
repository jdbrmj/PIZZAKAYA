<?php

$_SESSION['user_input'] = array('', '', '', '', '');




$conn = new mysqli('localhost', 'root', '', 'pizzakaya');

function saveInput($a, $b, $c, $d, $e)
{
    $_SESSION['user_input'][0] = $a;
    $_SESSION['user_input'][1] = $b;
    $_SESSION['user_input'][2] = $c;
    $_SESSION['user_input'][3] = $d;
    $_SESSION['user_input'][4] = $e;
}

if ($conn->connect_error) {
    die('Connection error: ' . $conn->connect_error);
}

if (!empty($_POST)) {
    $checkemail = substr($_POST['email'], strrpos($_POST['email'], '@'));

    if (strtolower($checkemail) != '@email.com') {
        $resetEmail = strstr($_POST['email'], '@', true);
        ?>
        <div id="error-message">
            <p><?= "Email must be in the format example@email.com. " ?></p>

        </div>
        <?php
        saveInput(strtolower($resetEmail . '' . '@email.com'), ucwords(strtolower($_POST['name'])), ucwords(strtolower($_POST['lastname'])), $_POST['password'], $_POST['c-password']);
    } else if ($_POST['password'] != $_POST['c-password']) {
        ?>

            <div id="error-message">
                <p><?= "Oops! The passwords you entered do not match. Please make sure to enter the same password in both fields." ?>
                </p>
            </div>

            <?php
            saveInput(strtolower($_POST['email']), ucwords(strtolower($_POST['name'])), ucwords(strtolower($_POST['lastname'])), $_POST['password'], $_POST['c-password']);
    } else {
        $checkemail = $conn->prepare("SELECT user_id FROM user WHERE email = ? ");
        $checkemail->bind_param("s", $_POST['email']);
        $checkemail->execute();
        $result = $checkemail->get_result();
        if ($result->num_rows > 0) {
            ?>
                <div id="error-message">
                    <p><?= "Email is already registered." ?></p>
                </div>
                <?php
                saveInput(strtolower($_POST['email']), ucwords(strtolower($_POST['name'])), ucwords(strtolower($_POST['lastname'])), $_POST['password'], $_POST['c-password']);
                $checkemail->close();
                $conn->close();
        } else {
            $stmt = $conn->prepare("INSERT INTO user (firstname, lastname, password, email) VALUES (?, ?, ?, ?)");
            $name = ucwords(strtolower($_POST['name']));
            $lname = ucwords(strtolower($_POST['lastname']));
            $email = strtolower($_POST['email']);
            $stmt->bind_param("ssss", $name, $lname, $_POST['password'], $email);

            if ($stmt->execute()) {
                ?>
                    <div id="message">
                        <p><?= "Successfully Registered." ?></p>
                    </div>
                    <?php
                    $_SESSION['user_input'] = array('', '', '', '', '');
            } else {

                echo "Error: " . $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }

    }
}
?>