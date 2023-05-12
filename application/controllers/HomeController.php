<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    // This function display home page
    public function index()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'index',
        ];
        $this->load->view('frontend/index', $data);
    }

    // This function display about page
    public function aboutUs()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'about',
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display about patna page
    public function aboutPatna()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'about-patna',
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display the vision-mission Page
    public function visionMission()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'vision-mission'
        ];
        $this->load->view('frontend/index', $data);
    }

    // This function display event meeting page
    public function eventsMeenting()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'event-meeting'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display dining page
    public function dining()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'dining'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display facilities page
    public function facilities()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'facilities'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display offers page
    public function offers()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'offers'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display gallery page
    public function gallery()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'gallery'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display gallery details page
    public function gallery1()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'gallery1'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display gallery details page
    public function gallery2()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'gallery2'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display gallery details page
    public function gallery3()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'gallery3'
        ];
        $this->load->view('frontend/index', $data);
    }
    // This function display room page
    public function rooms()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'rooms'
        ];
        $this->load->view('frontend/index', $data);
    }

    // This function display 404 page
    public function Page404()
    {
        $data = [
            'title' => '404 PAGE',
            'page' => '404'
        ];
        $this->load->view('frontend/404', $data);
    }
}
