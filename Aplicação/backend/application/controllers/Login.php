<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lood->model("UserModel");
    }

    public function login($email, $password)
    {
        try {
            $user = $this->UserModel->getUserLogin($email, $password);
            if (!empty($user)) {
                $this->session->set_userdata($user);
                $this->session->set_userdata(['logado' => true]);
            }
        } catch (Throwable $e) {
            http_response_code($e->getCode() ?: 500);
            echo json_encode([
                'error' => [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ]);
        }
    }

    public function createLogin($data)
    {
        try {
            if($this->input->method() != 'post'){
                throw new Exception('Método indisponível.', 404);
            }
            $wasCreate = $this->UserModel->createUser($data);
            if(!$wasCreate){
                throw new Exception('Não foi possivél efetuar o cadastro.', 400);
            }
        } catch (Throwable $e){
            http_response_code($e->getCode() ?: 500);
            echo json_encode([
                'error' => [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ]);
        }
    }

    public function logout()
	{
		$this->session->unset_userdata('logado');
		$this->session->sess_destroy();
		redirect('inicio');
	}
}
