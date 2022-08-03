<?php

namespace Modules\Section\Providers;
use Illuminate\Support\ServiceProvider;
use Section\Repository\Contract\SectionInterface;
use Section\Repository\Eloquent\SectionRepository;
class RepositoryServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind(SectionInterface::class, SectionRepository::class);
    }

    public function provides() {
        return [];
    }
}
