<?php

// Exercício 4 – Notificações
// Crie duas classes:
// - `Email` com o método `enviar()`, que retorna "Enviando email...",
// - `Sms` com o método `enviar()`, que retorna "Enviando SMS...".
// Depois crie uma função `notificar($meio)` que aceite qualquer objeto com `enviar()` e faça a
// chamada. Teste com ambos os objetos.
    
    class Email {
        public function enviar(){
            return "Enviando email...";
        }
    }
    class Sms {
        public function enviar(){
            return "Enviando sms...";
        }
    }
    function notificar($meio) {
        echo $meio->enviar();
    }
    $email = new Email();
    notificar($email);
    $sms = new Sms();
    notificar($sms);
?>