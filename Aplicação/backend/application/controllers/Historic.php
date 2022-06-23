<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Historic extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HistoricModel');
    }

    protected function _get()
    {
        try {
            $historic = $this->HistoricModel->getHistoric();
            $symptons = $this->HistoricModel->getSymptomForHistoric($historic['id_diagnostic']);

            http_response_code(202);
            echo json_encode([
                'historic' => $historic,
                'symptons' => $symptons
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
}
