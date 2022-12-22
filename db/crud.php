<?php

    class crud{

            private $db;

            function __construct($conn){
                $this->db = $conn;
            }


                public function insertclient($fname, $email, $haddress, $contactinfo, $gender){

                        try {
                            $sql = "INSERT INTO client(fname,email,haddress,contactinfo,gender_id) VALUES (:fname, :email, :haddress, :contactinfo, :gender)";
                            $stmt = $this->db->prepare($sql);


                            $stmt->bindparam(':fname', $fname);
                            $stmt->bindparam(':email', $email);
                            $stmt->bindparam(':haddress', $haddress);
                            $stmt->bindparam(':contactinfo', $contactinfo);
                            $stmt->bindparam(':gender', $gender);
                            

                            $stmt->execute();
                            return true;


                        } catch (PDOException $e) {
                            //throw $th;
                            echo $e->getMessage();
                            return false;

                        }
                
                }
                   

                public function editclient($id,$fname, $email, $haddress, $contactinfo, $gender){
                    $sql = "UPDATE  `client` SET `fname`=:fname,`email`=:email,`haddress`=:haddress,`contactinfo`=:contactinfo,`gender_id`=:gender WHERE client_id= :id";

                    try {
                        
                        $stmt = $this->db->prepare($sql);


                        $stmt->bindparam(':id', $id);
                        $stmt->bindparam(':fname', $fname);
                        //$stmt->bindparam(':lastname', $lastname);
                        $stmt->bindparam(':haddress', $haddress);
                        $stmt->bindparam(':email', $email);
                        $stmt->bindparam(':contactinfo', $contactinfo);
                        $stmt->bindparam(':gender', $gender);

                        $stmt->execute();
                        return true;


                    } catch (PDOException $e) {
                        //throw $th;
                        echo $e->getMessage();
                        return false;

                    }

                }

                public function getclientDetails($id){
                
                    try{ 
                        $sql = "SELECT * FROM client a inner join sexualrole s on a.gender_id = s.gender_id where client_id = :id;";
                        $stmt=$this->db->prepare($sql);
                        $stmt->bindparam(':id', $id);
                        $stmt->execute();
                        $result = $stmt->fetch(); 
        
                        return $result;
    
                    }catch (PDOException $e) {
                        //throw $th;
                        echo $e->getMessage();
                        return false;
    
                    }
                }

                public function deleteclient($id){
                
                    try{
                    $sql = "delete from client where client_id = :id;";
                    $stmt=$this->db->prepare($sql);
                    $stmt->bindparam(':id', $id);
                    $stmt->execute();
                    //$result = $stmt->fetch(); 
    
                    return true;
                            
                    }catch (PDOException $e) {
                            //throw $th;
                            echo $e->getMessage();
                            return false;
                        }
                    
                }

                public function getclients(){

                    try{

                        $sql = "SELECT * FROM client a inner join sexualrole s on a.gender_id = s.gender_id";;
                        //$stmt=$this->db->query($sql);
                        $result = $this->db->query($sql); 
                        return $result;

                    }catch (PDOException $e) {
                        //throw $th;
                        echo $e->getMessage();
                        return false;
                    }
                }

                public function getsexualroles(){

                    try{

                    
                    $sql = "SELECT * FROM `sexualrole`;";
                    //$sql = "SELECT * FROM 'sexualrole' ";
                    //$stmt=$this->db->query($sql);
                    $result = $this->db->query($sql); 
                    return $result;

                    }catch (PDOException $e) {
                        //throw $th;
                        echo $e->getMessage();
                        return false;
                    }
            
                }
            
                
                //try{ 
                                  //$sql = "SELECT * FROM client a inner join sexualrole s on a.gender_id = s.gender_id where client_id = :id;";
                    //$stmt=$this->db->prepare($sql);
                    //$stmt->bindparam(':id', $id);
                    //$stmt->execute();
                    //$result = $stmt->fetch(); 
    
                    //return $result;

                //}catch (PDOException $e) {
                    //throw $th;
                    //echo $e->getMessage();
                    //return false;

                //}
           // }
                
                }


    























?>