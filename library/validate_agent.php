<?php

class ValidateAgent {


    /**
     * returns hospital wise count
     */
    public function looup_agent(DB $db, $agent_id, $agent_pass) {
        //return doc_hospital name and its count value
        $sql_lookup_agent = "SELECT agent_id, agent_name, agent_type
                             FROM agents
                             WHERE agent_id = '$agent_id' AND agent_pass = '$agent_pass'
                             ";

        $array_lookup_agent = $db -> select($sql_lookup_agent);
        //return array
        return $array_lookup_agent;
    }
       
}//End class


?>