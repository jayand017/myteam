<?php

class InsertAgent {


    /**
     * insert a row of data
     */
    public function insert_agent(DB $db, $agent_id, $agent_name, $agent_pass, $agent_type) {
        //query to insert an agent
        $sql_insert_agent = "INSERT INTO agents (agent_id, agent_name, agent_pass, agent_type)
                             VALUES ('$agent_id', '$agent_name', '$agent_pass', '$agent_type')
                             ";

        $result_insert_agent = $db -> query($sql_insert_agent);
        //return array
        return $result_insert_agent;
    }
       
}//End class

?>