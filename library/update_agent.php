<?php

class UpdateAgent {


    /**
     * returns hospital wise count
     */
    public function update_agent_with_passwd(DB $db, $agent_id, $agent_name, $agent_pass, $agent_type) {
        //return doc_hospital name and its count value
        $sql_update_agent = "UPDATE agents SET agent_name = '$agent_name', agent_pass = '$agent_pass', agent_type = '$agent_type'
                            WHERE agent_id = '$agent_id'
                             ";

        $result_update_agent = $db -> query($sql_update_agent);
        //return array
        return $result_update_agent;
    }

    public function update_agent_without_passwd(DB $db, $agent_id, $agent_name, $agent_type) {
        //return doc_hospital name and its count value
        $sql_update_agent = "UPDATE agents SET agent_name = '$agent_name', agent_type = '$agent_type'
                            WHERE agent_id = '$agent_id'
                             ";

        $result_update_agent = $db -> query($sql_update_agent);
        //return array
        return $result_update_agent;
    }
       
}//End class

?>