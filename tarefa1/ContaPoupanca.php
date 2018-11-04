<?php

    class ContaPoupanca extends Conta{

        public function juros($valor){
            this->juros += $valor;
        }
        
    }