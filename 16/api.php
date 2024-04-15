<?php
require_once 'DatabaseRepository.php';

//print_r(DatabaseRepository::getContactById(4));
//echo DatabaseRepository::insertContact("Bruno Chaveiro", "11 99756688", "bruno_chave_gold@mail.com");
//echo DatabaseRepository::updateContact(9, "Pessa B", "11 99755555", "pessoa_b@mail.com");
echo DatabaseRepository::deleteContact(11);
?>