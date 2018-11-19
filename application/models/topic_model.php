<?php
class Topic_model extends CI_MODEL
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($topic_id)
    {
        return $this->db->get_where('topic', array('id'=>$topic_id))->row();
        //return $this->db->query('SELECT * FROM topic WHRE id='.$topic_id)
    }

    public function gets()
    {
        $this->db->select('id');
        $this->db->select('title');
        $this->db->select('description');
        $this->db->select('UNIX_TIMESTAMP (created) AS created');
        return $this->db->query('SELECT * FROM topic')->result();
    }

    public function add($title, $description)
    {
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('topic', array(
            'title'=>$title,
            'description'=>$description,
        ));
        return $this->db->insert_id();
        ;
    }
}