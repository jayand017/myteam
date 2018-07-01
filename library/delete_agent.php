<?php

class DeleteAgent {


    /**
     * returns hospital wise count
     */
    public function delete_agent(DB $db, $agent_id) {
        //query to delete agent
        $sql_delete_agent = "DELETE FROM agents WHERE agent_id = '$agent_id'
                             ";

        $result_delete_agent = $db -> query($sql_delete_agent);
        //return array
        return $result_delete_agent;
    }
       
}//End class

?>