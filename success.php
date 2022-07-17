    <?php 

        $title = 'Success';
        require_once 'includes/header.php';
        require_once 'db/conn.php';

        if(isset($_POST['submit'])){
            $pname = $_POST['pname'];
            $fname = $_POST['fname'];
            $pemail = $_POST['pemail'];
            $pno = $_POST['pno'];
            $padd = $_POST['padd'];
            $pcity = $_POST['pcity'];
            $pstate = $_POST['pstate'];
            $pzip = $_POST['pzip'];
            $px = $_POST['px'];
            $pxii = $_POST['pxii'];
            $pcollege = $_POST['pcollege'];
            $pdegree = $_POST['pdegree'];
            $mname = $_POST['mname'];
            $mid = $_POST['mid'];
            $memail = $_POST['memail'];
            $mdept = $_POST['mdept'];
            $rname = $_POST['rname'];
            $rid = $_POST['rid'];
            $remail = $_POST['remail'];
            $rdept = $_POST['rdept'];
            
            $success = $crud->insert($pname,$fname,$pemail,$pno,$padd,$pcity,$pstate,$pzip,$px,$pxii,$pcollege,$pdegree,$mname,$mid,$memail,$mdept,$rname,$rid,$remail,$rdept);

            if($success){
                echo "<h1 class='text-center text-success'>You have been registered !</h1>";
            }else{
                echo "<h1 class='text-center text-danger'>Error!!</h1>";
            }
        }
    ?>




