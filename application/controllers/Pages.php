<?php
class Pages extends CI_Controller {

public function view()
{
        $data['usuarios'] = $this->news_model->get_users();

        if (empty($data['users']))
        {
                show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
}
}