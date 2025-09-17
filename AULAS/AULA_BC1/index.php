<?php

    echo "Olá estou rodando em um  servidor local!!";

?>

import mysql.connector

#   Connect to the MySQL server 
conn = mysql.connector.connect(
    host="localhost",
    user="root",
    password="senaisp",
    database="avalicao"
)
cursor = conn.cursor()

# run a query
cursor.execute("SELECT * FROM cidades")