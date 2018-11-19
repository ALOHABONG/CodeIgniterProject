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
        //$this->db->select('title');
        return $this->db->query('SELECT * FROM topic')->result();
    }
}