<?php

    function cleanInt($integer) {
        $string_sanitize = filter_var($integer, FILTER_VALIDATE_INT);
        return $string_sanitize;
    }

    function cleanString($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
    