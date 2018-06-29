<?php

class FetchAgent {


    /**
     * returns hospital wise count
     */
    public function fetch_agent(DB $db, $agent_id) {
        //return doc_hospital name and its count value
        $sql_lookup_agent = "SELECT agent_id, agent_name, agent_type, agent_pass
                             FROM agents
                             WHERE agent_id = '$agent_id'
                             ";

        $array_lookup_agent = $db -> select($sql_lookup_agent);
        //return array
        return $array_lookup_agent;
    }
       
}//End class


?>