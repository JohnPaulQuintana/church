     <?php   if(isset($_POST['checcking_viewbtn']))
        {
            $s_id= $_POST['message_id'];
            // echo $return = $s_id;
        
            $query = "SELECT * FROM contactus where id='$s_id'";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run)>0)
            {
                foreach($query_run as $row)
                {
                    echo$return = '
                    <h5> ID :'.$row['id'].'</h5>
                    <h5> Name :'.$row['email'].'</h5>
                    <h5> Email:'.$row['name'].'</h5>
                    <h5> message :'.$row['message'].'</h5>
                    ';
                }
            }
            else
            {
                echo $return = "<h5>No message found</h5>";
            }
        }
        ?>