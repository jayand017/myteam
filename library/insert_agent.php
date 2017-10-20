<?php

class InsertAgent {


    /**
     * returns hospital wise count
     */
    public function insert_agent(DB $db, $agent_id, $agent_name, $agent_pass, $agent_type) {
        //return doc_hospital name and its count value
        $sql_insert_agent = "INSERT INTO agents (agent_id, agent_name, agent_pass, agent_type)
                             VALUES ('$agent_id', '$agent_name', '$agent_pass', '$agent_type')
                             ";

        $result_insert_agent = $db -> query($sql_insert_agent);
        //return array
        return $result_insert_agent;
    }
       
}//End class

?>