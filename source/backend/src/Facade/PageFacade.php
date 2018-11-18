<?php

namespace App\Facade;

class PageFacade
{
    /** @var Database */
    private $db;

    /** @var Template */
    private $view;

    /** @var Logger */
    private $logger;

    public function __construct()
    {
        $this->db = new Database();
        $this->view = new Template();
        $this->logger = new Logger();
    }

    public function createAndServe(int $id, string $msg = '')
    {
        $this->logger->log($msg);
        $data = $this->db->getData($id);
        echo $this->view->serve($id, $data);
    }
}
