{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@includeWhen(class_exists(\Backpack\DevTools\DevToolsServiceProvider::class), 'backpack.devtools::buttons.sidebar_item')

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('export-content') }}"><i class="nav-icon la la-question"></i> Export Content</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('module') }}"><i class="nav-icon la la-question"></i> Modules</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform') }}"><i class="nav-icon la la-question"></i> Platforms</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('language') }}"><i class="nav-icon la la-question"></i> Languages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('localization-key') }}"><i class="nav-icon la la-question"></i> Localization keys</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform-module') }}"><i class="nav-icon la la-question"></i> Platform modules</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('translation') }}"><i class="nav-icon la la-question"></i> Translations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform-translation') }}"><i class="nav-icon la la-question"></i> Platform translations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('export-format') }}"><i class="nav-icon la la-question"></i> Export formats</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform-export-format') }}"><i class="nav-icon la la-question"></i> Platform export formats</a></li>
