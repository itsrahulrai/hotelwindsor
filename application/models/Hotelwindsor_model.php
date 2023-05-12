<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotelwindsor_model extends CI_Model
{
    // This funcation insert data in database
    public function create($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    // This function get room name form database to display
    public function get_room()
    {
        $query = $this->db->select('id,  room_name')->from('rooms')->get();
        return $query->result_array();
    }
    // This function get number of room form database to display
    public function getNumberof_room()
    {
        $query = $this->db->select('id,  room_no')->from('noof_rooms')->get();
        return $query->result_array();
    }
    // This function get adults form database to display
    public function get_adults()
    {
        $query = $this->db->select('id, adults_no')->from('adults')->get();
        return $query->result_array();
    }
    // This function get children form database to display
    public function get_children()
    {
        $query = $this->db->select('id, children_no')->from('children')->get();
        return $query->result_array();
    }

    // This function retrive all data from database
    public function all($table)
    {
        return  $this->db
            ->order_by('id', 'desc')
            ->get($table)->result_array();
    }


    // This function count all data 
    public function count_all($table)
    {
        $count = $this->db->count_all_results($table);
        return $count;
    }

    // This function retrive mini club data from database
    public function getMiniClub()
    {
        // Join code start
        $miniclub = $this->db->select('mini_club.id,mini_club.name,mini_club.phone,mini_club.children, mini_club.checkin_date,mini_club.checkout_date,mini_club.adults,rooms.room_name')
            ->from('mini_club')
            ->join('rooms', 'rooms.id =  mini_club.rooms', 'left')
            ->order_by('mini_club.id', 'desc')->get();
        return $miniclub->result_array();
    }

    // This function retrive club  room data from database
    public function getClubRoom()
    {
        // Join code start
        $clubroom = $this->db->select('club_room.id,club_room.name,club_room.phone,club_room.children, club_room.checkin_date,club_room.checkout_date,club_room.adults,rooms.room_name')
            ->from('club_room')
            ->join('rooms', 'rooms.id =  club_room.rooms', 'left')
            ->order_by('club_room.id', 'desc')->get();
        return $clubroom->result_array();
    }
    // This function retrive royal club data from database
    public function getRoyalClub()
    {
        // Join code start
        $royalclub = $this->db->select('royal_club.id, royal_club.name, royal_club.phone, royal_club.children,  royal_club.checkin_date, royal_club.checkout_date, royal_club.adults,rooms.room_name')
            ->from(' royal_club')
            ->join('rooms', 'rooms.id =   royal_club.rooms', 'left')
            ->order_by(' royal_club.id', 'desc')->get();
        return $royalclub->result_array();
    }

    // This function retrive book now data from database
    public function getBookNow()
    {
        // Join code start
        $royalclub = $this->db->select('book_now.id,book_now.fname,book_now.lname, book_now.numbersofroom, book_now.phone, book_now.childrens,  book_now.checkin_date, book_now.checkout_date, book_now.adults,rooms.room_name')
            ->from('book_now')
            ->join('rooms', 'rooms.id =   book_now.rooms', 'left')
            ->order_by('book_now.id', 'desc')->get();
        // echo $this->db->last_query();
        return $royalclub->result_array();
    }

    // This function retrive contact data from database
    public function getContact()
    {
        // Join code start
        $royalclub = $this->db->select('contact.id,contact.fname,contact.lname,contact.phone,contact.email,rooms.room_name,contact.message')
            ->from('contact')
            ->join('rooms', 'rooms.id =   contact.rooms', 'left')
            ->order_by('contact.id', 'desc')->get();
        // echo $this->db->last_query();
        return $royalclub->result_array();
    }

    // This function delete data 
    public function delete($table, $id)
    {
        $this->db->where('id', $id)->delete($table);
        return $this->db->affected_rows() == 1 ? true : false;
    }
}
