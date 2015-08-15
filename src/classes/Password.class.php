<?php

namespace classes;

/**
 * Description of password
 *
 * @author mika
 */
class Password {

    private $new_password;

    public function create_password($lenght) {
        /* 
         *  Récuperer le nombre de caractère désiré
         * Choisir au hasard la répartition des chiffres et des lettres
         * mélanger le tout
         * le retourner
         * 
         *          */
        
        
        $this->new_password = "mon mot de passe depuis ma class password avec " . $lenght . " caractères";
        return $this->new_password;
    }

    public function random_number($lenght){
        $random_number = rand(0, 9);
        return $random_number;
    }
    
    public function setNew_password($new_password) {
        $this->new_password = (string) $new_password;
        return $this;
    }
    
    public function getNew_password() {
        return $this->new_password;
    }

}
