<?php
require_once '../libraries/Database.php';
class User_Model {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    // Select RECORDS
    public function select(){
        $this->db->query("SELECT * FROM services order by services ASC");
        $this->db->execute();
        $select = $this->db->resultSet();
        $data = $select;
        return $data;
    }
    // Select Services
    public function selectServices(){
        $this->db->query("SELECT id,title,description,start,end FROM schedule order by start ASC");
        $this->db->execute();
        $select = $this->db->resultSet();
        $data = $select;
        return $data;
    }
    // get Date
    public function getDate($data){
        $this->db->query("SELECT * FROM schedule WHERE start = :selectedDate order by start ASC");
        $this->db->bind(':selectedDate', $data['s_date']);
        $this->db->execute();
        $select = $this->db->resultSet();
        return $select;
    }
    
    public function selectBooked(){
        // joinning table and get base on event id
        $this->db->query("SELECT booking.id,booking.name,booking.email,booking.phonenumber,booking.date,booking.time,booking.status,booking.event, services.services FROM booking INNER JOIN services ON booking.event = services.id ORDER BY booking.date ASC");
        $this->db->execute();
        $select = $this->db->resultSet();
        return $select;
    }

    public function editRequest($data){
        try {
            //code...
            $this->db->query("SELECT booking.email,booking.id,booking.status,booking.date,booking.time,booking.approve,booking.event,services.services FROM booking INNER JOIN services ON booking.event = services.id WHERE booking.id=:id");
            $this->db->bind(':id', $data['edit_id']);
            $this->db->execute();
            $select = $this->db->single();
            if($this->db->rowCount() > 0){
                return $select;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            echo "Error executing query: " . $e->getMessage();
        }
       
    }

    public function update($data){
        $this->db->query("UPDATE booking SET 
            date=:date, 
            time=:time,
            status=:status, 
            approve=:approve
            WHERE id=:id");
        $this->db->bind(':id',$data['Id']);
        $this->db->bind(':date', $data['Date']);
        $this->db->bind(':time', $data['Time']);
        $this->db->bind(':status', $data['Status']);
        if($data['Status'] == "Approved"){
            $this->db->bind(':approve', 1);
        }

        if($data['Status'] == "Declined"){
            $this->db->bind(':approve', 2);
        }
       
        return $this->db->execute();
        
    }

    //Delete RECORDs
    public function delete($data){
        $this->db->query('DELETE FROM booking WHERE id=:id');
        //Bind values
        $this->db->bind(':id', $data['del_id']);
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function countReq(){
        $this->db->query('SELECT * FROM booking WHERE approve=0');
        $this->db->execute();
        $select = $this->db->resultSet();
        if($this->db->rowCount() > 0){
            return $select;
        }else{
            return false;
        }
    }
    public function countReqDonation(){
        $this->db->query('SELECT * FROM donation WHERE status=0');
        $this->db->execute();
        $select = $this->db->resultSet();
        if($this->db->rowCount() > 0){
            return $select;
        }else{
            return false;
        }
    }
    public function countReqMessage(){
        $this->db->query('SELECT * FROM contactus');
        $this->db->execute();
        $select = $this->db->resultSet();
        if($this->db->rowCount() > 0){
            return $select;
        }else{
            return false;
        }
    }

    public function verify($data){
        $this->db->query("UPDATE donation SET status=:status WHERE id=:id");
        $this->db->bind(":status",1);
        $this->db->bind(":id",$data['Id']);
         //Execute
         if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function verifyDelete($data){
        $this->db->query('DELETE FROM donation WHERE id=:id');
        //Bind values
        $this->db->bind(':id', $data['Id']);
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function serve(){
        $this->db->query("SELECT * FROM services order by services ASC");
        $this->db->execute();
        $select = $this->db->resultSet();
        $data = $select;
        return $data;
    }
    public function serveMessages(){
        $this->db->query("SELECT * FROM contactus");
        $this->db->execute();
        $select = $this->db->resultSet();
        $data = $select;
        return $data;
    }

    public function verifyDeleteServe($data){
        $this->db->query('DELETE FROM services WHERE id=:id');
        //Bind values
        $this->db->bind(':id', $data['Id']);
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function verifyDeleteMessages($data){
        $this->db->query('DELETE FROM contactus WHERE ID=:id');
        //Bind values
        $this->db->bind(':id', $data['Id']);
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function verifyMessages($data){
        $this->db->query('SELECT * FROM contactus WHERE ID=:id');
        //Bind values
        $this->db->bind(':id', $data['Id']);
        //Execute
        $select = $this->db->single();
            if($this->db->rowCount() > 0){
                return $select;
            }else{
                return false;
            }
    }

}