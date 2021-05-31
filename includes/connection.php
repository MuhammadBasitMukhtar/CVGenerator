<?php
//Database Connection

class db
{
    protected $db_name = 'cv_builder';
    protected $db_user = 'root';
    protected $db_host = 'localhost';
    protected $db_pass = '';

    //Connection Open

    public function connect()
    {
        
        $con = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        if(mysqli_connect_errno())
        {
            printf("Connection Error: %s",mysqli_connect_error());
            exit();
        }
        return $con;
    }
}

//Categories Class

class companies
{
    private $DB;
    public function __construct()
    {
        $db = new db();
        $this->DB = $db->connect();
    }

    public function insert($data)
    {
    
        $sql = "INSERT INTO companies(name,address,skills_required,website,status) VALUES ('".strval($data[0])."','".strval($data[1])."','".strval($data[2])."','".strval($data[3])."',1)";
        $query = mysqli_query($this->DB,$sql);
        if($query == true)
        {
            echo 'Company has been added successfully';
        }
        else {
            print_r(mysqli_error());
        }
    }

    public function GetSingleComp($id)
    {
        $sql = "select * from companies where company_id = ".$id;
        $query = mysqli_query($this->DB,$sql);
        return $query;
    }

    public function getCompany()
    {
        $sql = "select * from companies";
        $query = mysqli_query($this->DB,$sql);
        $output = '<table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>Company ID</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>Skills Required</th>
                <th>Website</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="CatData">';
        
        while ($row = mysqli_fetch_array($query))
        {
            $status = '';
            if($row['status'] == 1){
                $status = 'checked';
            }
            
            $output .= '<tr>';
            $output .= '<td>'.$row['company_id'].'</td>';
            $output .= '<td class="table-user"><b>'.$row['name'].'</b></td>';
            $output .= '<td>'.$row['address'].'</td>';
            $output .= '<td><span class="text-muted">'.$row['skills_required'].'</span></td>';
            $output .= '<td>'.$row['website'].'</td>';
            $output .= '<td><label class="custom-toggle">
            <input type="checkbox" onchange="UpdateStatus('.$row['status'].','.$row['company_id'].')" id="checkbox'.$row['company_id'].'" '.$status.'>
            <span class="custom-toggle-slider rounded-circle" data-label-off="OFF" data-label-on="ON"></span>
            </label></td>';
            $output .= '<td class="table-actions">
            <a href="#!" class="table-action update" data-toggle="tooltip" data-original-title="Edit Category" id="'.$row['company_id'].'">
            <i class="fas fa-user-edit"></i>
            </a>
            <a href="#!" class="table-action table-action-delete delete" catname="'.$row['name'].'" data-toggle="tooltip" data-original-title="Delete Category" id="'.$row['company_id'].'">
            <i class="fas fa-trash"></i>
            </a>
         </td>';
         $output .= '</tr>';
         
        }
        $output .= '</tbody>
        </table>';
        echo $output;
    }

    public function UploadFile($file)
    {
        if(isset($file))
        {
            $ext = explode('.',$file['name']);
            $new_name = rand() . '.' . $ext;
            $dest = '../assets/img/' . $new_name;
            move_uploaded_file($file["tmp_name"],$dest);
            return $new_name;
        }
    }

    public function UpdateStatus($id,$status)
    {
        if($status == 1)
        {
            $sql = "UPDATE companies SET status = 0 WHERE company_id = ".$id;
        }
        else {
            $sql = "UPDATE companies SET status = 1 WHERE company_id = ".$id;
        }
        $query = mysqli_query($this->DB,$sql);
        if($query == true)
        {
            echo 'Company has been Updated successfully';
        }
        else {
            print_r(mysqli_error());
        }
    }

    public function UpdateComp($data)
    {
        $sql = "UPDATE companies SET name = '".strval($data[0])."' , address = '".strval($data[1])."',skills_required = '".strval($data[2])."', website= '".strval($data[3])."'  WHERE id = ".strval($data[4]);
        $query = mysqli_query($this->DB,$sql);
        if($query == true)
        {
            echo 'Company has been Updated successfully';
        }
        else {
            print_r(mysqli_error());
        }
    }

    public function DelComp($id)
    {
        $sql = "DELETE from companies WHERE company_id =".$id;
        $query = mysqli_query($this->DB,$sql);
        if($query == true)
        {
            echo 'Company has been Deleted successfully';
        }
        else {
            print_r(mysqli_error());
        }
    }
    public function getCompanies($sql)
    {
        $query = mysqli_query($this->DB,$sql);
        $output = '<ul>';
        while ($row = mysqli_fetch_array($query))
        {
            $output .= '<li>';
            $output .= '<h5>'.$row['name'].'</h5>';
            $output .= '<p>'.$row['address'].' <br><b>Skills Required: </b><span>'.$row['skills_required'].'</span></p>';
            $output .= '<a href="'.$row['website'].'">'.$row['website'].'</a>';
            $output .= '</li>';
            $output .= '<hr>';
        }
        $output .= "</ul>";
        return $output;
    }
    public function getTotal()
    {
        $sql = "select COUNT(company_id) from companies";
        $query = mysqli_query($this->DB,$sql);
        return $query;
    } 
}

class users
{
    public $DB;
    public function __construct()
    {
        $db = new db();
        $this->DB = $db->connect();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO users(name,email,password) VALUES ('".strval($data[0])."','".strval($data[1])."','".strval($data[2])."')";
        $query = mysqli_query($this->DB,$sql);
          
    }
    public function UploadFile($file,$file1)
    {
        if(isset($file))
        {
            $ext = explode('.',$file['name']);
            $new_name = rand() . '.' . $ext;
            $dest = '../cvs/' . $new_name;
            move_uploaded_file($file["tmp_name"],$dest);
            $SESSION["cvupload"] = $dest;
            return $file1;
        }
    }
    public function login($email,$pass)
    {
        if($email == "admin@gmail.com" && $pass == "admin")
    {
        $cookie_name = "user";
        $cookie_value = $email; 
        header("location:admin/index.php");
        die();
    }
    else {
        $user = get_safe_value($this->DB,$email);
        $pass = get_safe_value($this->DB,$pass);
        $sql = "select * from users where email = '".$user."' and password = '".$pass."'";
        $res = mysqli_query($this->DB,$sql);
        $count = mysqli_num_rows($res);
        if($count > 0)
        {
            $cookie_name = "user";
            $cookie_value = $email;  
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=2');
        }
        else {
            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=3');
        }
        
    }
}
    public function logout()
    {
        unset($_COOKIE['user']);
        setcookie("user", "", time() - 3600, "/");
                 
    }
    public function getTotal()
    {
        $sql = "select COUNT(user_id) from users";
        $query = mysqli_query($this->DB,$sql);
        return $query;
    } 
}
?>