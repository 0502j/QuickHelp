<?php

require_once('vendor/autoload.php');

use QuickHelp\REST\Http\HttpMethods;

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    /**
     * @var mixed $startTime
     */
    private $startTime;

    /**
     * @var mixed $endTime
     */
    private $endTime;

    /**
     * @var string $fileName
     */
    private $fileName = 'debug';

    public function __construct()
    {
        parent::__construct();
    }

    protected function getPagination($perPage, $segment = FILTER_URI_DEFAULT)
    {
        $page = $this->uri->segment($segment);
        $offset = ($page - 1) * $perPage;
        return [$page, $perPage, $offset];
    }

    public function startPagination($url, $total, $perPage = 20, $segment = 4)
    {

        $config = array();
        $config["base_url"] = site_url($url . '/page');
        $config['first_url'] = site_url($url . '/page/1') . (!empty($this->input->get()) ? '?' . http_build_query($this->input->get()) : '');
        $config["total_rows"] = $total;
        $config["per_page"] = $perPage;
        $config["uri_segment"] = $segment;
        $config['use_page_numbers'] = TRUE;
        $config["reuse_query_string"] = TRUE;

        $config['full_tag_open'] = "<ul class='pagination mb-0'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        return $config["per_page"];
    }

    public function startUpload()
    {
        $config = array();
        $config['upload_path']          = './assets/arquivos/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|zip|rar';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        return;
    }

    public function setConnection($connSettings)
    {
        if (empty($connSettings))
            return false;

        $this->conexao = $connSettings;
        return true;
    }

    public function getConnection()
    {
        return $this->conexao;
    }

    public function setIdEmpresa($id_empresa)
    {
        if (empty($id_empresa))
            return false;

        $this->id_empresa = $id_empresa;
        return true;
    }

    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    public function is_mobile()
    {
        $this->load->library('user_agent');

        if ($this->agent->is_mobile())
            return true;
        else
            return false;
    }

    public function asDropdown(array $array = [], $key, $name, $default = '')
    {
        $dropdown = array_column($array, $name, $key);
        if (!empty($default)) {
            return ['' => $default] + $dropdown;
        } else {
            return $dropdown;
        }
    }

    protected function getFilters()
    {
        $origin = $this->uri->segment(1);
        $filterName = "filters-{$origin}";
        if ($this->input->method() == 'post') {
            $filters = $this->input->post();
            $this->session->set_userdata($filterName, $filters);
        } elseif (!empty($this->uri->segment(FILTER_URI_DEFAULT)) or !empty($this->session->{$filterName})) {
            $filters = $this->session->{$filterName};
        } else {
            $this->session->unset_userdata($filterName);
            $filters = [];
        }
        return $filters;
    }

    protected function getBase64From($path)
    {
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = base64_encode($data);
        return "data:image/{$type};base64,{$base64}";
    }

    /**
     * Adiciona um nome para o arquivo
     * 
     * @param string $_fileName nome do arquivo
     * @return void
     */
    public function setDebugNameFile($_fileName)
    {
        $this->fileName = str_replace(' ', '', trim($_fileName) . '.txt');
    }

    /**
     * Inicia cronometro de execução
     * 
     * @param string $_tagName name function
     * @return void
     */
    public function startDebug($_tagName)
    {
        $file = fopen($this->fileName, 'a+');
        if ($file != false) {
            $this->startTime = microtime(true);
            $text = $_tagName . ' : start time: ' . $this->startTime . '\n';
            fwrite($file, $text);
        }
        fclose($file);
    }

    /**
     * Finaliza cronometro de execução
     * 
     * @param string $_tagName name function
     * @return void
     */
    public function endDebug($_tagName)
    {
        $file = fopen($this->fileName, 'a+');
        if ($file != false) {
            $this->endTime = microtime(true);
            $executionTime = ((float)$this->endTime - (float)$this->startTime);
            $text = $_tagName . ' : end time: ' . $this->endTime . '\n' . 'Execution time: ' . $executionTime . '\n';
            fwrite($file, $text);
        }
        fclose($file);
    }

    /* API-like implementation */
    public function api($resourceId = null)
    {
        header('Content-Type: application/json');
        try {
            switch ($_SERVER['REQUEST_METHOD']) {
                case HttpMethods::GET:
                    $this->_get();
                    break;
                case HttpMethods::POST:
                    $this->_post();
                    break;
                case HttpMethods::PUT:
                    $this->_put($resourceId);
                    break;
                case HttpMethods::PATCH:
                    $this->_patch($resourceId);
                    break;
                case HttpMethods::DELETE:
                    $this->_delete($resourceId);
            }
        } catch (Throwable $e) {
            $statusCode = ($e->getCode() ?: 500);
            http_response_code($statusCode);
            echo json_encode([
                'error' => [
                    'message' => $e->getMessage(),
                    'code' => $statusCode
                ]
            ]);
        }
    }

    protected function _get()
    {
        throw new Exception('Método não permitido', 405);
    }

    protected function _post()
    {
        throw new Exception('Método não permitido', 405);
    }

    protected function _put($resourceId)
    {
        throw new Exception('Método não permitido', 405);
    }

    protected function _patch($resourceId)
    {
        throw new Exception('Método não permitido', 405);
    }

    protected function _delete($resourceId)
    {
        throw new Exception('Método não permitido', 405);
    }
}
