<?php 



/**
* 
*/
class AdminBase 
{
	
	function __construct($argument='')
	{
		# code...
	}

	public static  function is_admin()
	{
		# code...
   if (isset($_SESSION['user'])) {
   	# code...
   	// to db
   	return true;
   }
   else return false;

		
	 //	return false;
		
	}
}
 ?>