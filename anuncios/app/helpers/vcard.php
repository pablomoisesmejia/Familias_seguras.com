<?php
use JeroenDesloovere\VCard\VCard;
class VcardExport
{
    public function CrearteVcard($nombre, $telefono)
    {
        require_once('Behat-Transliterator/Transliterator.php');
        require_once('jeroendesloovere-vcard/VCard.php');

        $vCard = new VCard();
        $vCard->addName($nombre);
        $vCard->addPhoneNumber($telefono);

        return $vCard->download();
    }
}
$Card = new VcardExport();
$Card->CrearteVcard($_GET['nombre'], $_GET['cel']);
?>