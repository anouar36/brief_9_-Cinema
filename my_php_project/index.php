<?php
CLASS anouar {
    public $name;
    public $email;

    public function __constauct($na, $em) {
        $this->name = $na;
        $this->email = $em; 
    }
}
$user1 = new anouar("anouar", "anouaharai@gmail.com");
echo '<pre>';
print_r($user1);
echo '</pre>';

?>