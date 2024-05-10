

<?php
include_once("connection.php");
class User extends DB
{

    private $name;
    private $username;

    public function userExists($user, $pass)
    {
        $md5pass = md5($pass);
        $connection = $this->connect();
        $query = $connection->prepare('SELECT * FROM usuarios WHERE username = ? AND pass = ?');
        $query->bind_param('ss', $user, $md5pass);
        $query->execute();
        $query->store_result();

        return $query->num_rows > 0;
    }

    public function setUser($user)
    {
        $connection = $this->connect();
        $query = $connection->prepare('SELECT * FROM usuarios where username = ?');
        $query->bind_param('s', $user);
        $query->execute();

        foreach ($query as $currentUser) {
            $this->name = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
    }

    public function getName()
    {
        return $this->name;
    }
}

?>