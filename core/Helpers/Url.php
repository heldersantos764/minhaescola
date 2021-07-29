<?php

function baseUrl(string $uri = ''): string
{
    if (APP_ENVIRONMENT == 'production') {
        return APP_URL_BASE . $uri;
    }

    return APP_URL_DEVELOPMENT . $uri;
}
