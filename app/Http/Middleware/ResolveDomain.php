<?php

namespace App\Http\Middleware;

use App\Services\CourseRegistry;
use App\Services\DomainService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

/**
 * Leest het domein uit /kennis/{domain}/… en maakt het actief voor de rest van het verzoek.
 *
 * - Het domein moet bestaan; met de parameter 'course' moet het ook een cursus hebben.
 * - route() vult {domain} daarna vanzelf in, zodat views geen domein hoeven mee te geven.
 * - De parameter verdwijnt uit de route, zodat controllers hun eigen parameters
 *   ({module}, {lesson} …) op dezelfde plek blijven krijgen.
 */
class ResolveDomain
{
    public function __construct(
        private readonly DomainService $domains,
        private readonly CourseRegistry $courses,
    ) {}

    public function handle(Request $request, Closure $next, ?string $requires = null): Response
    {
        $route = $request->route();
        $id = (string) $route->parameter('domain');

        abort_if($this->domains->find($id) === null, 404, 'Dit kennisdomein bestaat niet.');
        abort_if($requires === 'course' && ! $this->courses->has($id), 404, 'Dit domein heeft nog geen cursus.');

        $request->attributes->set('domain', $id);
        URL::defaults(['domain' => $id]);
        $route->forgetParameter('domain');

        return $next($request);
    }
}
