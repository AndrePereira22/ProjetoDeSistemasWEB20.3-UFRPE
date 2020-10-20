@extends('layouts.app')

@section('content')
    <div class="container  mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Dados do Usuario</div>
                    <div class="card-body">

                        <div name="header">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ __('Profile') }}
                            </h2>
                        </div>

                        <div>
                            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
                                    @livewire('profile.update-profile-information-form')

                                    <section-border />
                                @endif

                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.update-password-form')
                                    </div>

                                    <section-border />
                                @endif

                                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.two-factor-authentication-form')
                                    </div>

                                    <section-border />
                                @endif

                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.logout-other-browser-sessions-form')
                                </div>

                                <section-border />

                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.delete-user-form')
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
