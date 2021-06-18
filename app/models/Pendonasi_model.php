<?php


class Pendonasi_model
{
    private $table = 'pendonasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function tambahDonasi($data)
    {
        $query = "INSERT INTO pendonasi (nama, email, pembayaran)
                    VALUES (
                        :nama, :email, :pembayaran
                    )";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pembayaran', $data['pembayaran']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}