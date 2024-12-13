<?php

session_start();

if(isset ($_SESSION ['mensaje'])){
    echo $_SESSION ['mensaje'];
}
