<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeleteController extends CI_Controller
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

    // This function delete mini club room booking
    public function miniDelete($id)
    {
        $success = $this->Hotelwindsor_model->delete('mini_club', $id);

        $response = [
            'status' => $success ? 'success' : 'error',
            'message' => $success ? 'Your mini club booking has been deleted.' : 'An error occurred while deleting the record.',
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    // This function delete club room booking
    public function clubDelete($id)
    {
        $success = $this->Hotelwindsor_model->delete('club_room', $id);

        $response = [
            'status' => $success ? 'success' : 'error',
            'message' => $success ? 'Your club room booking has been deleted.' : 'An error occurred while deleting the record.',
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
    // This function delete royal club room booking
    public function royalDelete($id)
    {
        $success = $this->Hotelwindsor_model->delete('royal_club', $id);

        $response = [
            'status' => $success ? 'success' : 'error',
            'message' => $success ? 'Your royal club booking has been deleted.' : 'An error occurred while deleting the record.',
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
    // This function delete book now room booking
    public function booknowDelete($id)
    {
        $success = $this->Hotelwindsor_model->delete('book_now', $id);

        $response = [
            'status' => $success ? 'success' : 'error',
            'message' => $success ? 'Your book now booking has been deleted.' : 'An error occurred while deleting the record.',
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
    // This function delete contact enquiry
    public function contactDelete($id)
    {
        $success = $this->Hotelwindsor_model->delete('contact', $id);

        $response = [
            'status' => $success ? 'success' : 'error',
            'message' => $success ? 'Your contact enquiry has been deleted.' : 'An error occurred while deleting the record.',
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
    // This function delete Feedback enquiry
    public function feedbackDelete($id)
    {
        $success = $this->Hotelwindsor_model->delete('feedback', $id);

        $response = [
            'status' => $success ? 'success' : 'error',
            'message' => $success ? 'Your feedback enquiry has been deleted.' : 'An error occurred while deleting the record.',
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
