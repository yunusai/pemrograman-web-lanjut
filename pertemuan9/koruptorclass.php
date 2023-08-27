<?php
    class koruptor{
        public $nama, $hukuman, $jumlah_korupsi;

        //Contructor
        function __contruct($nama){
            $this->nama = $nama;
        }

        //Methods
        function masuk_nama ($nama){
            $this->nama = $nama;
        }

        function ambil_nama (){
            return $this->nama;
        }
    }
?>