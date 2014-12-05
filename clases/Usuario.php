<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 17/10/2014
 * Time: 18:15
 */

class Usuario {

    private $name;

    public function getUsuario(){
        echo "<br> Mostrar Usuario: ".$this->name;
    }

    public function setUusuario(){
    $this->name = "Ra&uacute;l";
        return $this->name;
    }

    public function consultaG()
    {
        $sql01 = "select * from usuario where status=1 order by ApellidoPaterno ASC";
        $result01 = mysql_query($sql01) or die ("Error1 $sql01");
        echo " <div id='contact'>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<table class='table table-striped'>";
        echo "<tr class=info'>";
        echo "<tr> <td colspan=4> <strong> Lista de Usuarios </strong></td></tr>";
        echo "<tr> <td> Id </td> <td> Nombre </td> <td> Apellido P </td> <td> Apellido M </td> <td> Nivel </td>";
        while ($field = mysql_fetch_array($result01)) {
            $this->Id = $field['Id'];
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
            $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
            $this->Nivel = $field['Nivel'];
            switch ($this->Nivel) {
                case 1:
                    $type = 'Administrador';
                    break;
                case 2:
                    $type = 'Maestro';
                    break;
                case 3:
                    $type = 'Alumno';
                    break;
            }
            echo "<tr class='success'><td>" . $this->Id . "</td>";
            echo "<td>" . $this->Nombre . "</td>";
            echo "<td>" . $this->ApellidoPaterno . "</td>";
            echo "<td>" . $this->ApellidoMaterno . "</td>";
            echo "<td>" . $type . "</td></tr>";

        }
        echo "</table> </div> </div> </div>";
    }
}
?>