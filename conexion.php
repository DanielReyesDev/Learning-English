<?php
	class conexion
	{
		public  $link;
        
		function conectar()
        {
			$this->link = mysqli_connect('localhost', 'fcccpmx7', '5lucario5','fcccpmx7_english') or die("Error " . mysqli_error($this->link));

			//$this->link = mysqli_connect('localhost','root','root','english') or die("Error " . mysqli_error($this->link));

			return $this->link;
		}

		function cerrar()
        {
			$this->link= mysqli_close();
		}
	}

?>