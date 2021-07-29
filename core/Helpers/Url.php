<?php

/**
 * Retorna uma URL de acordo com a URL base
 * 
 * @param string $uri
 * @return string
 */
function baseUrl(string $uri = ''): string
{
    if ($_ENV['APP_ENVIRONMENT'] == 'production') {
        return $_ENV['APP_URL_BASE'] . $uri;
    }

    return $_ENV['APP_URL_DEVELOPMENT'] . $uri;
}
