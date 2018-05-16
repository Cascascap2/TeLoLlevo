<?php
    class usuario{

        private $id;
        private $nickname;
        private $email;
        private $telefono;
        private $nombre_completo;
        private $biografia;
        private $imagen;
        private $reputacion;
        private $viajes;
        private $pedidos;

        /**
         * usuario constructor.
         * @param $id
         * @param $nickname
         * @param $email
         * @param $telefono
         * @param $nombre_completo
         * @param $biografia
         * @param $imagen
         * @param $reputacion
         */
        public function __construct($nickname, $email, $telefono, $nombre_completo, $biografia, $imagen, $reputacion)
        {
            $this->nickname = $nickname;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->nombre_completo = $nombre_completo;
            $this->biografia = $biografia;
            $this->imagen = $imagen;
            $this->reputacion = $reputacion;
            $this->viajes = array();
            $this->pedidos = array();
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNickname()
        {
            return $this->nickname;
        }

        /**
         * @param mixed $nickname
         */
        public function setNickname($nickname)
        {
            $this->nickname = $nickname;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getTelefono()
        {
            return $this->telefono;
        }

        /**
         * @param mixed $telefono
         */
        public function setTelefono($telefono)
        {
            $this->telefono = $telefono;
        }

        /**
         * @return mixed
         */
        public function getNombreCompleto()
        {
            return $this->nombre_completo;
        }

        /**
         * @param mixed $nombre_completo
         */
        public function setNombreCompleto($nombre_completo)
        {
            $this->nombre_completo = $nombre_completo;
        }

        /**
         * @return mixed
         */
        public function getBiografia()
        {
            return $this->biografia;
        }

        /**
         * @param mixed $biografia
         */
        public function setBiografia($biografia)
        {
            $this->biografia = $biografia;
        }

        /**
         * @return mixed
         */
        public function getImagen()
        {
            return $this->imagen;
        }

        /**
         * @param mixed $imagen
         */
        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }

        /**
         * @return mixed
         */
        public function getReputacion()
        {
            return $this->reputacion;
        }

        /**
         * @param mixed $reputacion
         */
        public function setReputacion($reputacion)
        {
            $this->reputacion = $reputacion;
        }

        /**
         * @return mixed
         */
        public function getViajes()
        {
            return $this->viajes;
        }

        /**
         * @param mixed $viajes
         */
        public function setViajes($viajes)
        {
            $this->viajes = $viajes;
        }

        /**
         * @return mixed
         */
        public function getPedidos()
        {
            return $this->pedidos;
        }

        /**
         * @param mixed $pedidos
         */
        public function setPedidos($pedidos)
        {
            $this->pedidos = $pedidos;
        }


    }