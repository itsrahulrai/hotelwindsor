<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hotelwindsor_model');
        $this->load->model('Recaptcha_model');
    }

    // This function display mini club page and insert data in database 
    public function miniClub()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'mini-club'
        ];
        $data['rooms'] = $this->Hotelwindsor_model->get_room();
        $data['adults'] = $this->Hotelwindsor_model->get_adults();
        $data['childrens'] = $this->Hotelwindsor_model->get_children();
        if (empty($this->input->post())) {
            $this->load->view('frontend/index', $data);
        } else {
            // If the form has been submitted, the extract() function is called to extract the form data into separate variables.
            extract(array_merge(xss_clean($this->input->post())));
            // your eyes are looking for validation rules but don't worry validation rules are defined in javascript code. (Path: views\frontend\section\validation.js)

            $recaptcha_response = $this->input->post('g-recaptcha-response');
            $captcha_success = $this->Recaptcha_model->verify($recaptcha_response);

            if (!$captcha_success) {
                // Handle the case where the user failed the reCAPTCHA challenge
                $this->session->set_flashdata('warning', 'reCAPTCHA verification failed');
                redirect(base_url('mini-club'));
            } else if ($captcha_success) {
                // Your form submission code here
                $data = [
                    'name' => $name,
                    'phone' => $phone,
                    'adults' => $adults,
                    'children' => $childrens,
                    'rooms' => $rooms,
                    'checkin_date' => $checkin_date,
                    'checkout_date' => $checkout_date,
                ];
                $this->Hotelwindsor_model->create($data, 'mini_club');
                $this->session->set_flashdata('success', 'Mini club room booked successfully');
                redirect(base_url('mini-club'));
            }
        }
    }

    // This function display club room page and insert data in database 

    public function clubRoom()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'club-room'
        ];
        $data['rooms'] = $this->Hotelwindsor_model->get_room();
        $data['adults'] = $this->Hotelwindsor_model->get_adults();
        $data['childrens'] = $this->Hotelwindsor_model->get_children();
        if (empty($this->input->post())) {
            $this->load->view('frontend/index', $data);
        } else {
            // If the form has been submitted, the extract() function is called to extract the form data into separate variables.
            extract(array_merge(xss_clean($this->input->post())));

            // your eyes are looking for validation rules but don't worry validation rules are defined in javascript code. (Path: views\frontend\section\validation.js)

            // Verify the reCAPTCHA response
            $recaptcha_response = $this->input->post('g-recaptcha-response');
            $captcha_success = $this->Recaptcha_model->verify($recaptcha_response);

            if (!$captcha_success) {
                // Handle the case where the user failed the reCAPTCHA challenge
                $this->session->set_flashdata('warning', 'reCAPTCHA verification failed');
                redirect(base_url('club-room'));
            } else if ($captcha_success) {
                // Your form submission code here

                $data = [
                    'name' => $name,
                    'phone' => $phone,
                    'adults' => $adults,
                    'children' => $childrens,
                    'rooms' => $rooms,
                    'checkin_date' => $checkin_date,
                    'checkout_date' => $checkout_date,
                ];
                $this->Hotelwindsor_model->create($data, 'club_room');
                $this->session->set_flashdata('success', 'Club room booked successfully');
                redirect(base_url('club-room'));
            }
        }
    }

    // This function display royal club page and insert data in database 
    public function royalClub()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'royal-club'
        ];
        $data['rooms'] = $this->Hotelwindsor_model->get_room();
        $data['adults'] = $this->Hotelwindsor_model->get_adults();
        $data['childrens'] = $this->Hotelwindsor_model->get_children();
        if (empty($this->input->post())) {
            $this->load->view('frontend/index', $data);
        } else {
            // If the form has been submitted, the extract() function is called to extract the form data into separate variables.
            extract(array_merge(xss_clean($this->input->post())));

            // your eyes are looking for validation rules but don't worry validation rules are defined in javascript code. (Path: views\frontend\section\validation.js)

            // Verify the reCAPTCHA response
            $recaptcha_response = $this->input->post('g-recaptcha-response');
            $captcha_success = $this->Recaptcha_model->verify($recaptcha_response);

            if (!$captcha_success) {
                // Handle the case where the user failed the reCAPTCHA challenge
                $this->session->set_flashdata('warning', 'reCAPTCHA verification failed');
                redirect(base_url('royal-club'));
            } else if ($captcha_success) {
                // Your form submission code here
                $data = [
                    'name' => $name,
                    'phone' => $phone,
                    'adults' => $adults,
                    'children' => $childrens,
                    'rooms' => $rooms,
                    'checkin_date' => $checkin_date,
                    'checkout_date' => $checkout_date,
                ];
                $this->Hotelwindsor_model->create($data, 'royal_club');
                $this->session->set_flashdata('success', 'Royal club room booked successfully');
                redirect(base_url('royal-club'));
            }
        }
    }



    // This function display book now page and insert data in database 
    public function bookNow()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'book-now'
        ];

        $data['rooms'] = $this->Hotelwindsor_model->get_room();
        $data['noofrooms'] = $this->Hotelwindsor_model->getNumberof_room();
        $data['adults'] = $this->Hotelwindsor_model->get_adults();
        $data['childrens'] = $this->Hotelwindsor_model->get_children();

        if (empty($this->input->post())) {
            $this->load->view('frontend/index', $data);
        } else {
            // If the form has been submitted, the extract() function is called to extract the form data into separate variables.
            extract(array_merge(xss_clean($this->input->post())));

            // Verify the reCAPTCHA response
            $recaptcha_response = $this->input->post('g-recaptcha-response');
            $captcha_success = $this->Recaptcha_model->verify($recaptcha_response);

            if (!$captcha_success) {
                // Handle the case where the user failed the reCAPTCHA challenge
                $this->session->set_flashdata('warning', 'reCAPTCHA verification failed');
                redirect(base_url('book-now'));
            } else if ($captcha_success) {
                // your eyes are looking for other fields' validation rules but don't worry other validation rules are defined in javascript code. (Path: views\frontend\section\validation.js)


                // validation
                $rules = [
                    [
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email|is_unique[book_now.email]'
                    ]
                ];

                $this->form_validation->set_rules($rules);
                if (!$this->form_validation->run()) {
                    $this->load->view('frontend/index', $data);
                } else {
                    // Your form submission code here
                    $data = [
                        'fname' => $fname,
                        'lname' => $lname,
                        'email' => $email,
                        'phone' => $phone,
                        'adults' => $adults,
                        'childrens' => $childrens,
                        'numbersofroom' => $numbersofroom,
                        'rooms' => $rooms,
                        'checkin_date' => $checkin_date,
                        'checkout_date' => $checkout_date,

                    ];
                    $this->Hotelwindsor_model->create($data, 'book_now');
                    $this->session->set_flashdata('success', 'Booking successfully Done');
                    // Clear form fields after successful submission
                    redirect(base_url('book-now'));
                }
            }
        }
    }




    // This function display contact page and insert data in database 
    public function contact()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'contact'
        ];


        $data['rooms'] = $this->Hotelwindsor_model->get_room();

        if (empty($this->input->post())) {
            $this->load->view('frontend/index', $data);
        } else {
            // If the form has been submitted, the extract() function is called to extract the form data into separate variables.
            extract(array_merge(xss_clean($this->input->post())));

            // Verify the reCAPTCHA response
            $recaptcha_response = $this->input->post('g-recaptcha-response');
            $captcha_success = $this->Recaptcha_model->verify($recaptcha_response);

            if (!$captcha_success) {
                // Handle the case where the user failed the reCAPTCHA challenge
                $this->session->set_flashdata('warning', 'reCAPTCHA verification failed');
                redirect(base_url('contact'));
            } else if ($captcha_success) {
                // your eyes are looking for other fields' validation rules but don't worry other validation rules are defined in javascript code. (Path: views\frontend\section\validation.js)

                // validation
                $rules = [

                    [
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email|is_unique[contact.email]'
                    ]
                ];

                $this->form_validation->set_rules($rules);
                if (!$this->form_validation->run()) {
                    $this->load->view('frontend/index', $data);
                } else {
                    // Your form submission code here
                    $data = [
                        'fname' => $fname,
                        'lname' => $lname,
                        'email' => $email,
                        'phone' => $phone,
                        'rooms' => $rooms,
                        'message' => $message,
                    ];
                    $this->Hotelwindsor_model->create($data, 'contact');
                    $this->session->set_flashdata('success', 'Your contact request has been submitted successfully');
                    // Clear form fields after successful submission
                    redirect(base_url('contact'));
                }
            }
        }
    }



    // This function display feedback page and insert data in database 
    public function feedback()
    {
        $data = [
            'title' => 'Hotel Windsor Patna, Hotel in Patna, Luxury Hotels, Best Hotel in Patna, Hotels in Patna',
            'page' => 'feedback'
        ];

        if (empty($this->input->post())) {
            $this->load->view('frontend/index', $data);
        } else {
            // If the form has been submitted, the extract() function is called to extract the form data into separate variables.
            extract(array_merge(xss_clean($this->input->post())));

            // Verify the reCAPTCHA response
            $recaptcha_response = $this->input->post('g-recaptcha-response');
            $captcha_success = $this->Recaptcha_model->verify($recaptcha_response);

            if (!$captcha_success) {
                // Handle the case where the user failed the reCAPTCHA challenge
                $this->session->set_flashdata('warning', 'reCAPTCHA verification failed');
                redirect(base_url('feedback'));
            } else if ($captcha_success) {
                // your eyes are looking for other fields' validation rules but don't worry other validation rules are defined in javascript code. (Path: views\frontend\section\validation.js)
                // validation
                $rules = [

                    [
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email|is_unique[feedback.email]'
                    ]
                ];

                $this->form_validation->set_rules($rules);
                if (!$this->form_validation->run()) {
                    $this->load->view('frontend/index', $data);
                } else {
                    // Your form submission code here
                    $data = [
                        'fname' => $fname,
                        'lname' => $lname,
                        'phone' => $phone,
                        'email' => $email,
                        'message' => $message,
                    ];
                    $this->Hotelwindsor_model->create($data, 'feedback');
                    $this->session->set_flashdata('success', 'Your feedback has been submitted successfully');
                    // Clear form fields after successful submission
                    redirect(base_url('feedback'));
                }
            }
        }
    }
}
