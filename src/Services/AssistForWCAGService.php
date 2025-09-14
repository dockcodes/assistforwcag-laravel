<?php

namespace Dock\AssistForWCAG\Services;

use Dock\AssistForWCAG\Services\Contracts\AssistForWCAGServiceContract;

class AssistForWCAGService implements AssistForWCAGServiceContract
{
    public static function render(): string
    {
        $token = config('assistforwcag.token');

        if (!$token) {
            return '<!-- Assist For WCAG token not set -->';
        }

        return <<<HTML
<script>
    (function (d, s, t) {
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            a = new Date().getTime();
        j.async = true;
        j.src = '//wcag.dock.codes/accessibility/' + t + '/start.js?t=' + a;
        f.parentNode.insertBefore(j, f);
    })(document, 'script', '$token');
</script>
HTML;
    }
}