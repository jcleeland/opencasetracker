<?php
    //print_r($_POST);
    $poiId=isset($_POST['poiId']) ? $_POST['poiId'] : null;
    
    if(empty($poiId)) {
        $output = array("results"=>"Error - Not enough data provided");
    } else {
        $query = "DELETE FROM ".$oct->dbprefix."people_of_interest";
        $query .= "\r\n WHERE id = :poiId";
        $parameters[':poiId']=$poiId;
        
        $results=$oct->execute($query, $parameters);
        
        $output=array("results"=>$results." rows deleted", "query"=>$query, "parameters"=>$parameters, "count"=>$results, "total"=>$results);
        
    }
    
?>
