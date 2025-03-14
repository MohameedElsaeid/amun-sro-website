<?php

namespace App\Jobs;

use App\Services\Facebook\ConversionEventService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Http\Client\ConnectionException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ContactUsEventJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private readonly array $userData, private readonly array $customData = [])
    {
        //
    }

    /**
     * Execute the job.
     * @param ConversionEventService $conversionService
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function handle(ConversionEventService $conversionService): void
    {
        $conversionService->trackContact($this->userData, $this->customData);
    }

    /**
     * Get the tags that should be assigned to the job.
     *
     * @return array<int, string>
     */
    public function tags(): array
    {
        return ['ContactUsEventJob'];
    }
}
