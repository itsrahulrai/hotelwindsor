<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    /* start Check user is Authorized or Not */
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect(base_url('admin'));
        }
    }
    /* End Check user is Authorized or Not */


    // This function display the dashboard and display data 

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'page' => 'dashboard',
            'miniclub' => $this->Hotelwindsor_model->count_all('mini_club'),
            'clubroom' => $this->Hotelwindsor_model->count_all('club_room'),
            'royalclub' => $this->Hotelwindsor_model->count_all('royal_club'),
            'bookNow' => $this->Hotelwindsor_model->count_all('book_now'),
        ];
        $data['booknow'] = $this->Hotelwindsor_model->getBookNow();
        $this->load->view('backend/index', $data);
    }

    // This function featch the mini club room data from database
    public function miniClub()
    {
        $data = [
            'title' => 'Mini Club',
            'page' => 'mini-club',
        ];
        $data['miniclub'] = $this->Hotelwindsor_model->getMiniClub();
        $this->load->view('backend/index', $data);
    }
    // This function featch the club room data from database
    public function clubRoom()
    {
        $data = [
            'title' => 'Club Room',
            'page' => 'club-room',
        ];
        $data['clubroom'] = $this->Hotelwindsor_model->getClubRoom();
        $this->load->view('backend/index', $data);
    }

    // This function featch the royal club data from database
    public function royalClub()
    {
        $data = [
            'title' => 'Royal Club',
            'page' => 'royal-club',
        ];
        $data['royalclub'] = $this->Hotelwindsor_model->getRoyalClub();
        $this->load->view('backend/index', $data);
    }

    // This function featch the book now data from database
    public function bookNow()
    {
        $data = [
            'title' => 'Book Now',
            'page' => 'book-now',
        ];
        $data['booknow'] = $this->Hotelwindsor_model->getBookNow();
        $this->load->view('backend/index', $data);
    }

    // This function featch the contact data from database
    public function contact()
    {
        $data = [
            'title' => 'contact',
            'page' => 'contact'
        ];
        $data['contacts'] = $this->Hotelwindsor_model->getContact();
        $this->load->view('backend/index', $data);
    }

    // This function featch the feedback data from database
    public function feedback()
    {
        $data = [
            'title' => 'Feedback',
            'page' => 'feedback'
        ];
        $data['feedback'] = $this->Hotelwindsor_model->all('feedback');
        $this->load->view('backend/index', $data);
    }
}
