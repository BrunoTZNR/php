<?php
require __DIR__.'./conexao.php';

session_destroy();
header('location: ./../index.php');