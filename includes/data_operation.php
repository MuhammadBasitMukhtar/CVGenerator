<?php
include 'connection.php';
$company = new companies();
$user = new users();
if(isset($_POST['action']))
{
    if($_POST['action'] == "LoadComp")
    {
        $company->getCompany();
    }  
    if($_POST['action'] == "InsertComp")
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $skills = implode(', ', $_POST['skills_required']);
        $website = $_POST['website'];
        $data = array($name,$address,$skills,$website);
        $company->insert($data);
        echo "Category Saved";
    } 
    if($_POST['action'] == "UpdateCompStatus")
    {
        $company->UpdateStatus($_POST['id'],$_POST['status']);
    }
    class obj
    {
        public $name = '';
        public $address = '';
        public $skills = '';
        public $website = '';
    }
    if($_POST['action'] == "GetComp")
    {
        $out = new obj();
        $res = $company->GetSingleComp($_POST['id']);
        while($row = mysqli_fetch_array($res))
        {
            $out->name = $row['name'];
            $out->address = $row['address'];
            $out->skills = explode(',', $row['skills_required']);
            $out->website = $row['website'];
        }
        echo json_encode($out);
    }
    if($_POST['action'] == "EditCat")
    {
        
        $data = array($_POST['name'],$image,$_POST['id']);
        $company->UpdateComp($data);
    }
    if($_POST['action'] == "DelComp")
    {
        $company->DelComp($_POST['id']);
    }
    if($_POST['action'] == "cv")
    {
        echo 'reached here';
        $img = $user->UploadFile($_FILES("pdf"));
        $SESSION["img"] = $img;
    }
    if($_POST['action'] == 'getcompany')
    {
        $sql = "select * from companies where skills_required like '%". $_POST["skills"][0] ."%' and status = 1";
        $out = '';
        if(isset($_POST["skills"]))
        {
            for ($i=1; $i < count($_POST['skills']) ; $i++) { 
                $sql .= " UNION select * from companies where skills_required like '%". $_POST['skills'][$i]."%' and status = 1";
            }
            $out = $company->getCompanies($sql);
            echo $out;
            return $out;
        }
    }
    if($_POST['action'] == 'gettotal')
    {
        $com = $company->getTotal();
        $use = $user->getTotal();
        return array($com,$use);
    }

}
?>