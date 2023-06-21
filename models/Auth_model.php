<?php 

class Auth_model{
    private $table = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

   
    // Register and Login 

    public function register($data)
    {
        $query = "INSERT INTO tb_user VALUES ('', :username, :password, :nama_lengkap,:foto_profile, :role)";
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password',$password );
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('foto_profile', $data['foto_profile']);
        $this->db->bind('role', 'user');
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function registerAdmin($data)
    {
        $query = "INSERT INTO tb_user VALUES ('', :username, :password, :nama_lengkap,:foto_profile, :role)";
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password',$password );
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('foto_profile', $data['foto_profile']);
        $this->db->bind('role', 'admin');
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM tb_user WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM tb_user WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // updateProfile 
    public function updateProfile($data)
    {
        $query = "UPDATE tb_user SET nama_lengkap = :nama_lengkap, password = :password, photo_profile = :foto_profile WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('foto_profile', $data['foto_profile']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->execute();

        return $this->db->rowCount();
    }


}