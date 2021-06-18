<?php


class Relawan_model
{
    private $table = 'relawan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function tambahRelawan($data)
    {
        $query = "INSERT INTO relawan (nama, email, event, alasan)
                    VALUES (
                        :nama, :email, :event, :alasan
                    )";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('event', $data['event']);
        $this->db->bind('alasan', $data['alasan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}