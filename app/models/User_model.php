<?php


class User_model
{
    private $table = 'akun';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function getCredential($email)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE email=:email");
        $this->db->bind('email', $email);
        $this->db->execute();
        return $this->db->single();
    }

    public function daftarAkun($data)
    {
        $query = "INSERT INTO akun (email, nama, password, usia, kota, pekerjaan)
                    VALUES (
                        :email, :nama, :password, :usia, :kota, :pekerjaan
                    )";

        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('usia', $data['usia']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // public function update($data)
    // {
    //     $query = "UPDATE users SET
    //                         name = :name,
    //                         password = :password, 
    //                         email = :email,
    //                         address = :address
    //                     WHERE id = :id
    //                         ";
    //     $this->db->query($query);
    //     $this->db->bind('name', $data['name']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('password', $data['password']);
    //     $this->db->bind('address', $data['address']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

}