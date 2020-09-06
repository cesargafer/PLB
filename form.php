<?php
            $user_data_parrafo = "";
            $user_data_lista = array();
            $mensaje_para_completar_formulario = "Favor de llenar todos los campos";
            //$name = $_POST["name"];

//            echo $name;

            if(empty($_POST["name"])) {
              echo $mensaje_para_completar_formulario;
            } elseif(empty($_POST["last_name"]))
            {
              echo $mensaje_para_completar_formulario;
            } elseif(empty($_POST["nickname"]))
            {
              echo $mensaje_para_completar_formulario;
            } elseif(empty($_POST["cars"]))
            {
              echo $mensaje_para_completar_formulario;
            } else {
              if(isset($_POST["name"]) and
                      ($_POST["last_name"]) and
                      ($_POST["nickname"]) and
                      ($_POST["cars"]) and
                      ($_POST["gender"]));
              {
                //  campos de texto y seleccion unica en un parrafo
                echo "Campos de texto y seleccion unica en un parrafo: ";
                $user_data_parrafo = $_POST["name"] . ", " .
                                $_POST["last_name"] . ", " .
                                 $_POST["nickname"] . ", " .
                                 $_POST["gender"];
                var_dump($user_data_parrafo);
                echo gettype($user_data_parrafo) . "<br />", "<br />";

               //  campos de texto y seleccion unica en un parrafo
               echo "Datos de seccion de seleccion multiple en un lista: ";
               $user_data_lista = array("cars" => $_POST["cars"]);
               var_dump($user_data_lista);
               echo gettype($user_data_lista) . "<br />", "<br />";
             }
            }
?>
