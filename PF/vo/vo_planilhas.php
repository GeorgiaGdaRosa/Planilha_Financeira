<?php
    class vo_planilhas{
        private $id_planilha;
        private $data;
        private $categoria;
        private $descricao;
        private $nome;


        public function construct_vo_planilhas($sql) {
            $this->id_planilha = $sql->id_planilha;
            $this->data = $sql->data;
            $this->categoria = $sql->categoria;
            $this->descricao = $sql->descricao;
            $this->nome = $sql->nome;
        }

        public function get_id_planilha(){
            return $this->id_planilha;
        }

        public function get_data(){
            return $this->data;
        }

        public function get_categoria(){
            return $this->categoria;
        }

        public function get_descricao(){
            return $this->descricao;
        }

        public function get_nome(){
            return $this->nome;
        }

        public function set_id_planilha($id_planilha){
            $this->id_planilha = $id_planilha;
        }

        public function set_data($data){
            $this->data = $data;
        }

        public function set_categoria($categoria){
            $this->categoria = $categoria;
        }

        public function set_descricao($descricao){
            $this->descricao = $descricao;
        }

         public function set_nome($nome){
            $this->nome = $nome;
        }

    }