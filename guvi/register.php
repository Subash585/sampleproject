<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                    $host = 'localhost'; 
                    $dbname = 'mydatabase';
                    $username = 'myusername';
                    $password = 'mypassword'; 
                    try {
                        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        } 
                        catch (PDOException $e) { 
                            echo 'Connection failed: ' . $e->getMessage();
                            } $username = $_POST['username'];
                            $email = $_POST['email'];
                            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
                            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)"); 
                            $stmt->bindParam(':username', $username); 
                            $stmt->bindParam(':email', $email); $stmt->bindParam(':password', $password);
                            if ($stmt->execute()) {
                                echo 'User registered successfully'; 
                                
                            }
                                else {
                                    echo 'Error registering user';
                                    }
                                    ?>
        ?>
    </body>
</html>
