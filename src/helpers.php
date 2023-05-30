<?php

if (!function_exists('getModelForGuard')) {
    /**
     * @return string|null
     */
    function getModelForGuard(string $guard)
    {
        return collect(config('auth.guards'))
            ->map(fn ($guard) => isset($guard['provider']) ? config("auth.providers.{$guard['provider']}.model") : null)
            ->get($guard);
    }
}
