<?php

class InsertSale {


    /**
     * returns hospital wise count
     */
    public function insert_sale(DB $db, $agent_id, $agent_name, $agent_pass, $agent_type) {
        //return doc_hospital name and its count value
        $sql_insert_sale = "INSERT INTO agents (agent_id, agent_name, agent_pass, agent_type)
                             VALUES ('$agent_id', '$agent_name', '$agent_pass', '$agent_type')
                             ";

        $result_insert_sale = $db -> query($sql_insert_sale);
        //return array
        return $result_insert_sale;
    }
       
}//End class

?>