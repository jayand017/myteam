<?php

include("doctor.php");

class Batch {
    //Adjust Limit as required
    const BATCH_LIMIT = 10;


    /**
     * returns hospital wise count
     */
    public function hospital_wise_count(DB $db) {
        //return doc_hospital name and its count value
        $sql_hospital_wise_count = "SELECT  doc_hospital, count(doc_hospital) AS count_doc_hospital
                                    FROM doctor 
                                    WHERE doc_last_up_date < DATE_SUB(CURDATE(), INTERVAL 30 DAY) 
                                    GROUP BY doc_hospital";

        $array_hospital_wise_count = $db -> select($sql_hospital_wise_count);
        //return array
        return $array_hospital_wise_count;
    }

    public function hospital_list($array_hospital_wise_count, DB $db) {
        $current_limit = 0;
        $current_count = 0;
        $current_hospital = "";
        $array_hospital = array();
        foreach($array_hospital_wise_count as $key => $value) {
            $current_hospital = $value['doc_hospital'];
            $current_count = $value['count_doc_hospital'];
            if($current_limit + $current_count <= Batch::BATCH_LIMIT) {
                //run final query
        
                $sql_hosiptal_list = "SELECT * 
                                FROM doctor 
                                WHERE doc_hospital = '$current_hospital' and doc_last_up_date < DATE_SUB(CURDATE(), INTERVAL 30 DAY)
                                ORDER BY doc_location, doc_name, doc_qualif";
                
                $array_hospital_list = $db -> select($sql_hosiptal_list);
                //sub hospital list merged to from new required list
                $array_hospital = array_merge ($array_hospital,$array_hospital_list); 
                $current_limit = $current_limit + $current_count;
            }
            else {
                continue;
            }
        }
        return $array_hospital;
    }

    public function get_hospital($arr) {
        $array_hospital = array();
        foreach($arr as $key => $value) {
            //return array of objects
            $array_hospital = array_merge($array_hospital, array($value['doc_id'] =>new Doctor($value['doc_name'],$value['doc_hospital'],$value['doc_qualif'],$value['doc_location'],$value['doc_last_up_date'])));
        }
        return $array_hospital;
    } 
       
}//End class


?>