
<?php
 class mysqlconex
    {
        public function conex()
        {
            $enlace = mysql_connect ("127.0.0.1", "root", "","Vivel");
            return $enlace;
        }
}
?>
