<?php
    class Petshop
    {
        private $id;
        private $nama;
        private $kategori;
        private $harga;
        private $gambar;

        public function __construct($id="", $nama="", $kategori="", $harga="", $gambar){
            $this->id = $id;
            $this->nama = $nama;
            $this->kategori = $kategori;
            $this->harga = $harga;
            $this->gambar = $gambar;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setNama($nama){
            $this->nama = $nama;
        }
        public function getNama(){
            return $this->nama;
        }
        public function setKategori($kategori){
            $this->kategori = $kategori;
        }
        public function getKategori(){
            return $this->kategori;
        }
        public function setHarga($harga){
            $this->harga = $harga;
        }
        public function getHarga(){
            return $this->harga;
        }
        public function setGambar($gambar){
            $this->gambar = $gambar;
        }
        public function getGambar(){
            return $this->gambar;
        }
    }
?>