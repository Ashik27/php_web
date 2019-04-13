<?php
include 'DB.php';
$db = new DB();
$tblName = 'users';
if(isset($_REQUEST['type']) && !empty($_REQUEST['type'])){
    $type = $_REQUEST['type'];
    switch($type){
//        case "view":
//            $records = $db->executeQuery('Select stp.company.*,stp.images.* From stp.images Inner Join stp.company On stp.images.cid = stp.company.cid Where stp.images.image_type = 1');
//            if($records){
//                $data['records'] = $records;
//                $data['status'] = 'OK';
//            }else{
//                $data['records'] = array();
//                $data['status'] = 'ERR';
//            }
//            echo json_encode($data);
//            break;
//        case "view1":
//            $company = $db->executeQuery("Select * From  stp.company ");
//            $company?$data['company'] = $company:$data['company'] = array();
//            $data['status'] = 'OK';
//            echo json_encode($data);
//            break;
        case "gallary":
            $cimages = $db->executeQuery("SELECT * FROM rejuvsense.gallary ");
            $cimages?$data['cimages'] = $cimages:$data['cimages'] = array();
            $data['status'] = 'OK';
            echo json_encode($data);
            break;
        case "syllubus":
            $rsyllubus = $db->executeQuery("SELECT * FROM rejuvsense.syllubus ");
            $rsyllubus?$data['rsyllubus'] = $rsyllubus:$data['rsyllubus'] = array();
            $data['status'] = 'OK';
            echo json_encode($data);
            break;
        case "news":
            $rnews = $db->executeQuery("SELECT * FROM rejuvsense.post ");
            $rnews?$data['rnews'] = $rnews:$data['rnews'] = array();
            $data['status'] = 'OK';
            echo json_encode($data);
            break;
        default:
            echo '{"status":"INVALID"}';
    }
}