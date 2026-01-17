<?php

namespace App\Filament\App\Pages;

use App\Models\Plan;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class Subscription extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static string $view = 'filament.app.pages.subscription';

    public function getViewData(): array
    {
        return [
            'plans' => Plan::all(),
            'currentSubscription' => Auth::user()->subscription('default'),
        ];
    }
}
