<?php


include "___connection.php";

class UserModel
{
    public $id;
    public $username;
    public $password;
    public $fname;
    public $lname;

    static function parse(mixed $data): UserModel
    {
        $res = new UserModel();
        $res->id = $data['id'];
        $res->password = $data['password'];
        $res->username = $data['username'];
        $res->fname = $data['fname'];
        $res->lname = $data['lname'];
        return $res;
    }
}

class Users
{
    static function SelectByUserAndPassword($username, $password): UserModel
    {
        $rr = null;
        $pdo = Connection::Connect();
        if ($pdo != null) {
            $stmt = $pdo->prepare("SELECT * FROM users where username=:username and password=:password LIMIT 1");
            $stmt->execute(['username' => $username, 'password' => $password]);
            if ($stmt->rowCount() > 0) {
                $data = $stmt->fetch();
                return UserModel::parse($data);
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
    static function aaa()
    {
        echo $_SESSION['root'];
    }
}
