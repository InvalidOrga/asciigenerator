<?php

class Ascii {
    public const BASE = "https://asciified.thelicato.io/api/v2/";

    public function createAsciiText($text, $font = "") {
        $fontParam = "";
        if ($font != "") $fontParam = "&font=" . $font;
        return file_get_contents(self::BASE . "ascii?text=" . $text);
    }

}
