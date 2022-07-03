<?php

namespace App\Routing;

class Route
{
    public string $pattern;
    public string $controller;
    public string $action;
    public function __construct($pattern, $controller, $action)
    {
        $this->pattern = $pattern;
        $this->controller = $controller;
        $this->action = $action;
    }

    public function match(string $url): ?MatchedRoute
    {
        $urlParts = $this->getUrlParts($url);
        $patternParts = $this->getUrlParts($this->pattern);
        if (count($urlParts) !== count($patternParts)) {
            return null;
        }

        $parametrs = [];
        for ($i = 0; $i < count($urlParts); $i++) {
            if (str_starts_with($patternParts[$i], ':')) {
                $parametrs[substr($patternParts[$i], 1)] = $urlParts[$i];
            } else if ($patternParts[$i] != $urlParts[$i]) {
                return null;
            }
        }
        // echo '<pre>';
        // var_dump($this->controller);
        // var_dump($parametrs);

        return new MatchedRoute(
            $this->controller,
            $this->action,
            $parametrs,
        );
    }

    private function getUrlParts(string $url): array
    {
        return array_values(array_filter(
            explode('/', $url),
            fn ($value) => !is_null($value) && $value !== ''
        ));
    }
}
