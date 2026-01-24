<?php
/**
 * Formatea un número de teléfono a 10 dígitos: 000-000-0000
 */
if (!function_exists('formatPhone')) {
    function formatPhone($phone) {
        // Quitamos cualquier cosa que no sea un número por seguridad
        //$cleaned = preg_replace('/[^0-09]/','', $phone);
        $cleaned = preg_replace('/\D/', '', $phone);
        // Aplicamos el formato con guiones
        return preg_replace('/(\d{3})(\d{3})(\d{4})/','$1-$2-$3', $cleaned);
    }
}

/**
 * Formatea un número a moneda: $1,500.00
 */
if (!function_exists('formatPrice')) {
    function formatPrice($price) {
        // number_format(número, decimales, separador_decimal, separador_miles)
        return '$' . number_format($price, 2, '.', ',');
    }
}
