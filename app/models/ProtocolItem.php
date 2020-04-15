<?php

namespace app\models;

class ProtocolItem extends TemplateModel{

    private $path;
    private $filename;
    private $purchase_order;
    private $vendor;
    private $issue_date;
    private $due_date;
    private $invoice_num;
    private $sent_date;



    function __construct(){

        $this->sent_date = "01/01/2020";
    }
}

?>