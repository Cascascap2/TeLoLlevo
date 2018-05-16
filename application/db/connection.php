<?php
    class connection{

        public static function conect(){
            $server     = "localhost";
            $username   = "root";
            $password   = "root";
            $db         = "telollevodb";


            $conn = mysqli_connect( $server, $username, $password, $db );


            if( !$conn ) {
                die( "Connection failed: " . mysqli_connect_error() );
            }
            else
                echo "connected" . "<br/>";

            return $conn;
        }

    }


