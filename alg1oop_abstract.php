
<?php
    //3x+1 klase vienam skaiciui skaiciuoti
    //Atspausdina visus skaiciaus 3x+1 interakciju skaicius ir
    //bendra interakciju skaiciu

    abstract class Skaiciuotojas {
        abstract protected function set_sk($sk);
        abstract protected function get_sk();
        abstract public function get_cycles();
        abstract public function skaiciuoti(): void;
        abstract public function interakciju_skaiciai(): void;
    }

    class trys extends Skaiciuotojas {
        private $sk; //pats skaicius kuri skaiciuojam
        private $cycles = 0; //interakciju skaicius
        public $sk_i = []; //skaiciaus visi interakcijos skaiciai

        const MULTIPLIER = 3; //constant variable

        function __construct($sk) {
            $this->sk = $sk;
        }

        protected function set_sk($sk) {
            $this->sk = $sk;
        }

        protected function get_sk() {
            return $this->sk;
        }

        public function get_cycles() {
            return $this->cycles;
        }

        public function skaiciuoti(): void {
            $this->cycles = 0;
            $this->sk_i = [];
            $sk = $this->sk;

            while($sk != 1){
                if ($sk % 2 == 0)
                    $sk = $sk/2;
                else
                    $sk = $sk*self::MULTIPLIER + 1;

                $this->sk_i[] = $sk;
                $this->cycles++;
            }
        }

        public function interakciju_skaiciai(): void {
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
