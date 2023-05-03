<?php
    session_start();
    require_once '../Model/User_Model.php';
    require_once '../Gmail/sendmail.php';
    
    // require_once '../helpers/session_helper.php';

    class User_Controller {
        private $userModel;
        public function __construct(){
            $this->userModel = new User_Model;
        }
       
        // show
        public function getSelect(){
        
            // $newArr = array();
            $data = json_decode(json_encode($this->userModel->select()),true);
            echo json_encode($data);
        }
        // show schedule
        public function getSelectServices(){
        
            // $newArr = array();
            $data = json_decode(json_encode($this->userModel->selectServices()),true);
            header('Content-Type: application/json');
            echo json_encode($data);
        }
        // get Selected date
        public function getSelectedDate(){
            $data = [
                's_date' => $_POST['getselected_date']['selected_date']
            ];
            $post = $this->userModel->getDate($data);
            echo json_encode($post);
        }

        public function getSelectBooked(){
            $newArr = array();
            $data = json_decode(json_encode($this->userModel->selectBooked()),true);
            foreach($data as $val){
                $val['action'] = "1";
                // $val['id']
                array_push($newArr,$val);
            }
            $newData = array("records"=>$newArr);
            echo json_encode($newData);
        }

        public function getRequest(){
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['updateRequest'])){
                 //Init data
                $data = [
                    'edit_id' => trim($_POST['updateRequest']['id'])
                ];
                // validate data;
                if(empty($data['edit_id'])){
                    $data = array('response' => "error", 'message' => "failed");
                }
                if($post = $this->userModel->editRequest($data)){
                    $data = array('response' => "success", 'post' => $post);
                }else{
                    $data = array('response' => "error", 'message' => "failed");
                    die("Something went wrong");
                }
                echo json_encode($data);
            }
	    }

        public function updateRequest(){
            if(isset($_POST)){
                $date = date('Y-m-d',strtotime($_POST['datetime'])); // change date format to yyyy-mm-dd for compatibility with MySQL DATE type
                // $time = date('hh:mm AM/PM',strtotime($_POST['datetime'])); // change time format to hh:mm AM/PM
                $time = date('g:i a',strtotime($_POST['datetime'])); // change time format to hh:mm AM/PM
                $inData = [
                    'Id' => trim($_POST['E_Id']),
                    'Title' => trim($_POST['Title']),
                    'Status' => trim($_POST['setStatus']),
                    'Date' => trim($date),
                    'Time' => trim($time),
                    'Email'=>trim($_POST['Email']),
                    // need email here to send mail
                ];
                // validate data;
                if(empty($inData['E_Id']) || 
                        empty($inData['Title']) || 
                        empty($inData['Date'])){
                    $data = array('response' => "error", 'message' => "failed");
                }
                if($this->userModel->update($inData)){
                    $data = array('response' => "success", 'message' => "Data update successfully");
                    // i need to change this to reciever
                    
                    // if($send){
                        
                    // }
                }else{
                    $data = array('response' => "error", 'message' => "failed");
                    die("Something went wrong");
                }
                echo json_encode($data);
                $send = new SendMail($inData['Email'],$inData['Status'],'ourladyparish2023@gmail.com','OurLady Parish',$inData['Title'],$inData['Date'],$inData['Time']);
            }
        }

        public function deleteRequest(){
             //Sanitize POST data
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             if(isset($_POST['deleteData'])){
                  //Init data
                 $data = [
                     'del_id' => trim($_POST['deleteData']['del_id']),
                 ];
                 //DELETE ID
                 if($this->userModel->delete($data)){
                     $data = array('response' => "success");
                 }else{
                     $data = array('response' => "error");
                     die("Something went wrong");
                 }
                 echo json_encode($data);
             }
        }

        public function countRequest(){
            $data = json_decode(json_encode($this->userModel->countReq()),true);
            echo json_encode($data);
        }
        public function countDonation(){
            $newArr = array();
            $data = json_decode(json_encode($this->userModel->countReqDonation()),true);
            foreach($data as $val){
                $val['action'] = "1";
                // $val['id']
                array_push($newArr,$val);
            }
            $newData = array("records"=>$newArr);
            echo json_encode($newData);
        }
        public function messageDonation(){
            $newArr = array();
            $data = json_decode(json_encode($this->userModel->countReqMessage()),true);
            foreach($data as $val){
                $val['action'] = "1";
                // $val['id']
                array_push($newArr,$val);
            }
            $newData = array("records"=>$newArr);
            echo json_encode($newData);
        }

        public function verifyDonation(){
            if(isset($_POST)){
                $inData = [
                    'Id' => trim($_POST['id']),
                    // need email here to send mail
                ];
                // // validate data;
                if($this->userModel->verify($inData)){
                    $data = array('response' => "success", 'message' => "Data update successfully");
                    // i need to change this to reciever
                    
                    // if($send){
                        
                    // }
                }else{
                    $data = array('response' => "error", 'message' => "failed");
                    die("Something went wrong");
                }
                echo json_encode($data);
                // $send = new SendMail($inData['Email'],$inData['Status'],'ourladyparish2023@gmail.com','OurLady Parish',$inData['Title'],$inData['Date'],$inData['Time']);
            }
        }

        public function verifyDelete(){
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['id'])){
                 //Init data
                 $inData = [
                    'Id' => trim($_POST['id']),
                    // need email here to send mail
                ];
                //DELETE ID
                if($this->userModel->verifyDelete($inData)){
                    $data = array('response' => "success");
                }else{
                    $data = array('response' => "error");
                    die("Something went wrong");
                }
                echo json_encode($data);
            }
       }

       public function selectServe(){
        
        $newArr = array();
        $data = json_decode(json_encode($this->userModel->serve()),true);
        foreach($data as $val){
            $val['action'] = "1";
            // $val['id']
            array_push($newArr,$val);
        }
        $newData = array("records"=>$newArr);
        
        echo json_encode($newData);
    }
       public function selectMessages(){
        
        $newArr = array();
        $data = json_decode(json_encode($this->userModel->serveMessages()),true);
        foreach($data as $val){
            $val['action'] = "1";
            // $val['id']
            array_push($newArr,$val);
        }
        $newData = array("records"=>$newArr);
        
        echo json_encode($newData);
    }

    public function deleteServe(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($_POST['id'])){
             //Init data
             $inData = [
                'Id' => trim($_POST['id']),
                // need email here to send mail
            ];
            //DELETE ID
            if($this->userModel->verifyDeleteServe($inData)){
                $data = array('response' => "success");
            }else{
                $data = array('response' => "error");
                die("Something went wrong");
            }
            echo json_encode($data);
        }
   }
    public function removeMessage(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($_POST['id'])){
             //Init data
             $inData = [
                'Id' => trim($_POST['id']),
                // need email here to send mail
            ];
            //DELETE ID
            if($this->userModel->verifyDeleteMessages($inData)){
                $data = array('response' => "success");
            }else{
                $data = array('response' => "error");
                die("Something went wrong");
            }
            echo json_encode($data);
        }
   }

   public function viewMessage(){
    //Sanitize POST data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if(isset($_POST['id'])){
         //Init data
         $inData = [
            'Id' => trim($_POST['id']),
            // need email here to send mail
        ];
       
            $data = $this->userModel->verifyMessages($inData);
       
            echo json_encode($data);
    }
}
        
     }
    // init class
     $init = new User_Controller;

    //  check request method
    if($_SERVER['REQUEST_METHOD']){
        switch ($_REQUEST['type']) {
           
            case 'show':
                $init->getSelect();
                break;
            case 'showServices':
                $init->getSelectServices();
                break;
            case 'getSelectedDate':
                $init->getSelectedDate();
                break;
            case 'selectBooked':
                $init->getSelectBooked();
                break;
            case 'getRequest':
                $init->getRequest();
                break;
            case 'updateRequest':
                $init->updateRequest();
                break;
            case 'deleteRequest':
                $init->deleteRequest();
                break;
            case 'countRequest':
                $init->countRequest();
                break;
            case 'countDonation':
                $init->countDonation();
                break;
            case 'verifyRequest':
                $init->verifyDonation();
                break;
            case 'deleteVerify':
                $init->verifyDelete();
                break;
            case 'selectServe':
                $init->selectServe();
                break;
            case 'deleteServe':
                $init->deleteServe();
                break;
            case 'selectMessages':
                $init->selectMessages();
                break;
            case 'viewMessage':
                $init->viewMessage();
                break;
            case 'removeMessage':
                $init->removeMessage();
                break;
            case 'countMessages':
                $init->messageDonation();
                break;
            default:
               
                break;
        }
    }

    // if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //     switch ($_REQUEST['type']) {
    //         case 'login':
    //             $init->login();
    //             break;
            
    //         default:
               
    //             break;
    //     }
    // }

    