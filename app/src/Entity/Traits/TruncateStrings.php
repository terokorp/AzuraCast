<?php
namespace Entity\Traits;

trait TruncateStrings
{
    /**
     * Truncate the specified string to the maximum length specified, or return NULL if the value was previously NULL.
     *
     * @param null|string $string
     * @param int $length
     * @return null|string
     */
    protected function _truncateString(?string $string = null, $length = 255): ?string
    {
        if ($string === null) {
            return null;
        }

        return mb_substr($string, 0, $length, 'UTF-8');
    }
}