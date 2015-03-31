<?php

/**
 * Třída pro vytvoření seznamu
 *
 * @author Jiří Hanuš <jiri.96@gmail.com>
 * @version 1.0
 * @package Si & WAP
 */
class seznam {

    /**
     * Uložení položek seznamum.
     * @var array 
     */
    private $polozka = array();

    /**
     * Typ seznamu UL nebo OL
     * @var string 
     */
    private $typ;

    /**
     * ´Konstruktor tříry.
     * @param string $type Zde zadáte typ tabulky (UL nebo OL)
     */
    function __construct($type) {
        $this->typ = $type;
    }
    
    /**
     * Vygeneruje tabulku.
     * @return string Vrátí tabulku k vypsání.
     */
    function __toString() {
        $vrat = "";
        $vrat .= "<" . $this->typ . ">";
        for ($i = 0; $i < count($this->polozka); $i++) {
            $vrat .= "<li>";
            $vrat .= $this->polozka[$i];
            $vrat .= "</li>";
        }
        $vrat .= "</" . $this->typ . ">";
        return $vrat;
    }

    /**
     * Přidá další položku do seznamu.
     * @param string $text Obsah položiky
     */
    function pridej($text) {
        $this->polozka[] = $text;
    }

}
