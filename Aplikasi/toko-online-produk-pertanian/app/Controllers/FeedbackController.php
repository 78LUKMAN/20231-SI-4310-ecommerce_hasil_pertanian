<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FeedbackModel;

class FeedbackController extends BaseController
{
    function __construct()
    {
        helper("form");
        $this->feedback = new FeedbackModel();
    }

    public function index()
    {
        return view("pages/feedback/feedback");

    }
    public function send()
    {
        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required',
                'email' => 'required|valid_email',
                'message' => 'required|max_length[600]',
            ];
    
            if ($this->validate($rules)) {
                $feedData = [
                    'username' => $this->request->getPost('username'),
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'message' => $this->request->getPost('message'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => $this->request->getPost('username'),
                ];
                
                $sendFeedback = $this->feedback->insert($feedData);
    
                if ($sendFeedback) {
                    return redirect()->to('activity/feedback')->with('success', 'Pesan berhasil dikirim');
                } else {
                    return redirect()->to('activity/feedback')->with('failed', 'Gagal mengirim pesan');
                }
            } else {
                return redirect()->to('activity/feedback')->withInput()->with('errors', $this->validator->getErrors());
            }
        }
    }
}    