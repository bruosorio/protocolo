<?php

namespace app\models;

class ProtocolItem {

    const TABLE_NAME = 'protocol_item' ;

    private $id_item;
    private $filename;
    private $purchase_order;
    private $vendor_name;
    private $issue_date;
    private $due_date;
    private $num_doc;

    function __construct(){

    }

    
}

?>