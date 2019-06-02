
<?php



  class database
   {



 
     public $connect;

         public function connection()
	       {
	         $this->connect=mysqli_connect("localhost","root","","credit_management");

           }
		
		
		
		public function fetch()
    {
           
    $this->connection();          
    $sql=mysqli_query($this->connect,"SELECT `name`,`email`,`current_credit`,`cnt` FROM `user` ");   
    while($fet=mysqli_fetch_array($sql))
     {
     ?><form method="post">

        <tr >
          
          <td><?php   print $fet[0];    ?></td>
          <td><?php   print $fet[1];    ?></td>
		  <td><?php   print $fet[2];    ?><input type="hidden" name="search" value="<?php   print $fet[3];  ?>"></td>
		  <td><button  type="submit" name="select">Select</button></td>
     
       </tr>
     </form>
    <?php  
 
     }
    }
	
	public function search_user()
      {
		  
         $this->connection();   

        echo" <script> location.href='transfer.php'; </script>  "; 
     }   
	
	public function getname()
	{
		$cnt=$_SESSION['cnt'];
		$this->connection();   
		 $sql=mysqli_query($this->connect,"SELECT `name` FROM `user`  WHERE`cnt`= '$cnt' ");
          $fet=mysqli_fetch_array($sql); 
		return $fet[0] ;
	}
	
	
	public function fetch_email()
    {
           
    $this->connection();          
    $sql=mysqli_query($this->connect,"SELECT `name` FROM `user` ");   
	$temp=$_SESSION['cnt'];
	$sql1=mysqli_query($this->connect,"SELECT `name` FROM `user`  WHERE`cnt`= '$temp' ");
	
	 while($fet1=mysqli_fetch_array($sql1))
	 {
    while($fet=mysqli_fetch_array($sql))
     {
		  if($fet1[0]!= $fet[0])
	                     {
     ?>
	 
	 <option ><?php 
	                      print $fet[0];  
	                     	

			 ?></option>
						
	  
    <?php  
						 }
 
     }
	}
    }
	
	
	public function transfers($emails,$amount)
	{
		$temp=$_SESSION['cnt'];
		
		$this->connection();
		
		
		$sql=mysqli_query($this->connect,"SELECT  `current_credit`,`name`  FROM `user` WHERE  `cnt` = '$temp' ");
		while($fet=mysqli_fetch_array($sql))
         {
        if( $fet[0] >= $amount)  
		 {
	      mysqli_query($this->connect,"UPDATE `user` SET `current_credit`=`current_credit`-'$amount' WHERE  `cnt` = '$temp' ");
		  mysqli_query($this->connect,"UPDATE `user` SET `current_credit`=`current_credit`+'$amount' WHERE `name` = '$emails' ");
		   mysqli_query($this->connect,"INSERT INTO `transfers`(`send`, `received`, `credit_send`) VALUES ('$fet[1]','$emails','$amount')") ;
		  
		    echo"<script>alert('Transaction Successful');</script>";
			  
		 }
		else
		 {
			 
			echo"<script>alert('Insufficient Amount');</script>"; 
			
		 }
		  
       
		 
         }
		
		
	}
	
	public function transactions()
	{
		
	$this->connection();
      $sqlll=mysqli_query($this->connect,"SELECT * FROM `transfers`");  

    while($fetc=mysqli_fetch_array($sqlll))
     {
		  
     ?><form method="post">

        <tr >
          
          <td><?php   print $fetc[0];    ?></td>
          <td><?php   print $fetc[1];    ?></td>
		  <td><?php   print $fetc[2];    ?></td>
		 
     
       </tr>
     </form>
    <?php  
 
     }
	
		
	}
	
	
	
  }

$database= new database();

?>