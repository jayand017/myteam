<?php

class InsertSale {


    /**
     * returns hospital wise count
     */
    public function insert_sale(DB $db, $sale_date, $cust_name, $cust_email, $cust_phone, $cust_address, $sale_amount, $card_no, $card_exp, $card_user, $tech_issue, $soft_plan, $tech_plan, $remark, $agent_id) {
        //return doc_hospital name and its count value
        $sql_insert_sale = "INSERT INTO sales (sale_date, cust_name, cust_email, cust_phone, cust_address, sale_amount, card_no, card_exp, card_user, tech_issue, soft_plan, tech_plan, remark, agent_id)
                            VALUES ('$sale_date', '$cust_name', '$cust_email', '$cust_phone', '$cust_address', '$sale_amount', '$card_no', '$card_exp', '$card_user', '$tech_issue', '$soft_plan', '$tech_plan', '$remark', '$agent_id')
                           ";

        $result_insert_sale = $db -> query($sql_insert_sale);
        //return array
        return $result_insert_sale;
    }
       
}//End class

?>