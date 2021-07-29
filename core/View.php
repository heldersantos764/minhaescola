<?php

namespace Core;

use League\Plates\Engine;

class View
{
    /**
     * Retorna a view renderizada pelo template 
     * engine Twig
     * 
     * @param string $view
     * @param array $data
     * @return string view renderizada
     */
    public static function render(string $view, array $data = []): string
    {
        try {
            return self::renderTemplate($view, $data);
        } catch (\Exception $e) {
            return self::renderTemplate("Errors/Error500", [
                'message' => 'Erro interno no servidor'
            ]);
        }
    }

    /**
     * Rederiza a página usando League/PLates
     * 
     */
    private static function renderTemplate($view, $data): string
    {
        $template = new Engine('../app/Views');
        return $template->render($view, $data);
    }
}
