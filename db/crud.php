<?php
    class crud{
        //private object
        private $db;

        //constructor
        function __construct($conn)
        {
            $this->db = $conn;
        }

        //inserting the values to the database
        public function insert($pname, $fname,$pemail,$pno,$padd,$pcity,$pstate,$pzip,$px,$pxii,$pcollege,$pdegree,$mname,$mid,$memail,$mdept,$rname,$rid,$remail,$rdept){
            try{
                $sql = "INSERT INTO register(name,father_name,email,contact,address,city,state,zip,x_mark,xii_mark,college,degree,guide_name,guide_emp_id,guide_email, guide_dept,refer_name,refer_id,refer_email,refer_dept) 
                VALUES (:pname,:fname,:pemail,:pno,:padd,:pcity,:pstate,:pzip,:px,:pxii,:pcollege,:pdegree,:mname,:mid,:memail,:mdept,:rname,:rid,:remail,:rdept)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':pname',$pname);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':pemail',$pemail);
                $stmt->bindparam(':pno',$pno);
                $stmt->bindparam(':padd',$padd);
                $stmt->bindparam(':pcity',$pcity);
                $stmt->bindparam(':pstate',$pstate);
                $stmt->bindparam(':pzip',$pzip);
                $stmt->bindparam(':px',$px);
                $stmt->bindparam(':pxii',$pxii);
                $stmt->bindparam(':pcollege',$pcollege);
                $stmt->bindparam(':pdegree',$pdegree);
               

                $stmt->bindparam(':mname',$mname);
                $stmt->bindparam(':mid',$mid);
                $stmt->bindparam(':memail',$memail);
                $stmt->bindparam(':mdept',$mdept);
                $stmt->bindparam(':rname',$rname);
                $stmt->bindparam(':rid',$rid);
                $stmt->bindparam(':remail',$remail);
                $stmt->bindparam(':rdept',$rdept);

                $stmt->execute();
                return true;

            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
                //throw new PDOStatement->e.messag
            }

        }
    }
?>