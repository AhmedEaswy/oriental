<?php

namespace App\Providers;

use App\Repository\Blog\BlogRepository;
use App\Repository\Blog\BlogRepositoryInterface;
use App\Repository\Branch\BranchRepository;
use App\Repository\Branch\BranchRepositoryInterface;
use App\Repository\Category\CategoryRepository;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Contact\ContactRepository;
use App\Repository\Contact\ContactRepositoryInterface;
use App\Repository\Project\ProjectRepository;
use App\Repository\Project\ProjectRepositoryInterface;
use App\Repository\Service\ServiceRepository;
use App\Repository\Service\ServiceRepositoryInterface;
use App\Repository\Slider\SliderRepository;
use App\Repository\Slider\SliderRepositoryInterface;
use App\Repository\Partner\PartnerRepository;
use App\Repository\Partner\PartnerRepositoryInterface;
use App\Repository\User\UserRepository;
use App\Repository\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(BranchRepositoryInterface::class, BranchRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(SliderRepositoryInterface::class, SliderRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(PartnerRepositoryInterface::class, PartnerRepository::class);
    }
}
