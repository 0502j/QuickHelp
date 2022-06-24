<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lood->model("UserModel");
    }

    public function user($email, $password)
    {
        try {
            $user = $this->UserModel->getUserLogin($email, $password);
            http_response_code(200);
            echo json_encode([
                'user' => $user
            ]);
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
            http_response_code(200);
            echo json_encode([
                'wasCreate' => $wasCreate
            ]);
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
