<?php
	//3x+1 klase vienam skaiciui skaiciuoti
	//Atspausdina visus skaiciaus 3x+1 interakciju skaicius ir
	//bendra interakciju skaiciu
	
	class trys {
		private $sk; //pats skaicius kuri skaiciuojam
		private $cycles = 0; //interakciju skaicius
		public $sk_i = []; //skaiciaus visi interakcijos skaiciai
		
		function __construct($sk) {
			$this->sk = $sk;
		}
		
		function set_sk($sk) {
			$this->sk = $sk;
		}
			
		function get_sk() {
			return $this->sk;
		}
			
		function get_cycles() {
			return $this->cycles;
		}
			
		function skaiciuoti(): void {
			$this->cycles = 0;
			$this->sk_i = [];
			$sk = $this->sk;
			
			while($sk != 1){
				if ($sk % 2 == 0)
					$sk = $sk/2;
				else
					$sk = $sk*3 + 1;

				$this->sk_i[] = $sk;
				$this->cycles++;
			}
		}
		
		function interakciju_skaiciai(): void {
			foreach ($this->sk_i as $sk) {
				echo $sk . "<br>";
			}
		}
	}
	
	if (isset($_POST['sk'])) { //Check if the form was submitted and the 'sk' field is set
		$sk = intval($_POST['sk']); //get number from the form and convert it into int
		echo "Ivestas skaicius $sk<br><br>";
		
		$sk = new trys($sk);
		$sk->skaiciuoti();
		$sk->interakciju_skaiciai();
		echo "<br>";
		echo "Interakciju kiekis " . $sk->get_cycles();
	}
?>

