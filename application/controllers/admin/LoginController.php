<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Recaptcha_model');
    }
    // public function login_proses()
    // {
    //     if ($this->session->userdata('is_login')) {
    //         redirect(base_url('dashboard'));
    //     }
    //     $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[3]|max_length[45]');
    //     $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');

    //     if ($this->form_validation->run() == TRUE) {

    //         if ($this->Admin_model->m_cek_mail()->num_rows() == 1) {

    //             $db = $this->Admin_model->m_cek_mail()->row();
    //             if (hash_verified(xss_clean($this->input->post('password')), $db->password)) {

    //                 $data_login = array(
    //                     'is_login' => TRUE,
    //                     'email'  => $db->email,
    //                     'name'   => $db->name
    //                 );


    //                 $this->session->set_userdata($data_login);
    //                 redirect(base_url('dashboard'));
    //             } else {

    //                 $this->session->set_flashdata('warning', 'Email or Password incorrect');
    //                 redirect(base_url('admin'));
    //             }
    //         } else {

    //             $this->session->set_flashdata('warning', 'Email or Password incorrect');
    //             redirect(base_url('admin'));
    //         }
    //     } else {

    //         $this->load->view('backend/login');
    //     }
    // }


    public function login_proses()
    {
        if ($this->session->userdata('is_login')) {
            redirect(base_url('dashboard'));
        }

        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[3]|max_length[45]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');

        // Verify the reCAPTCHA response
        $recaptcha_response = $this->input->post('g-recaptcha-response');
        $captcha_success = $this->Recaptcha_model->verify($recaptcha_response);

        if (!$captcha_success) {
            // Handle the case where the user failed the reCAPTCHA challenge
            $this->session->set_flashdata('warning', 'reCAPTCHA verification failed');
            $this->load->view('backend/login');
        } else if ($captcha_success && $this->form_validation->run() == TRUE) {

            if ($this->Admin_model->m_cek_mail()->num_rows() == 1) {

                $db = $this->Admin_model->m_cek_mail()->row();
                if (hash_verified(xss_clean($this->input->post('password')), $db->password)) {

                    $data_login = array(
                        'is_login' => TRUE,
                        'email'  => $db->email,
                        'name'   => $db->name
                    );

                    $this->session->set_userdata($data_login);
                    redirect(base_url('dashboard'));
                } else {

                    $this->session->set_flashdata('warning', 'Email or Password incorrect');
                    $this->load->view('backend/login');
                }
            } else {

                $this->session->set_flashdata('warning', 'Email or Password incorrect');
                $this->load->view('backend/login');
            }
        } else {

            $this->load->view('backend/login');
        }
    }






    // public function changePassword()
    // {
    //     $this->form_validation->set_rules('current_password', 'Current Password', 'trim|required');
    //     $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|min_length[6]|max_length[12]');
    //     $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]');

    //     if ($this->form_validation->run() == TRUE) {
    //         $email = $this->session->userdata('email');
    //         $current_password = $this->input->post('current_password');
    //         $new_password = $this->input->post('new_password');

    //         $user = $this->Admin_model->get_user_by_email($email);
    //         if (password_verify($current_password, $user->password)) {
    //             $this->Admin_model->update_password($email, password_hash($new_password, PASSWORD_DEFAULT));
    //             $this->session->set_flashdata('success', 'Password changed successfully');
    //             redirect(base_url('admin'));
    //         } else {
    //             $this->session->set_flashdata('warning', 'Current password is incorrect');
    //             redirect(base_url('change-password'));
    //         }
    //     } else {
    //         $data = [
    //             'title' => 'change-password',
    //             'page' => 'change-password',
    //         ];
    //         $this->load->view('backend/index', $data);
    //         // $this->load->view('backend/change_password');

    //     }
    // }


    public function changePassword()
    {
        $this->form_validation->set_rules('current_password', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]');


        if ($this->form_validation->run() == TRUE) {
            $email = $this->session->userdata('email');
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');

            $user = $this->Admin_model->get_user_by_email($email);
            if (password_verify($current_password, $user->password)) {
                $this->Admin_model->update_password($email, password_hash($new_password, PASSWORD_DEFAULT));
                $this->session->set_flashdata('success', 'Password changed successfully');
                redirect(base_url('dashboard'));
            } else {
                $this->session->set_flashdata('warning', 'Current password is incorrect');
                redirect(base_url('dashboard'));
            }
        } else {

            $data = [
                'title' => 'Change Password',
                'page' => 'change-password',
            ];
            $this->load->view('backend/index', $data);
        }
    }




    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
}
