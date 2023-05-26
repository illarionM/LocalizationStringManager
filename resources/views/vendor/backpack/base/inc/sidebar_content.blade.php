{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('export-content') }}"><i class="nav-icon la la-arrow-alt-circle-down"></i> Export Content</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('module') }}"><i class="nav-icon la la-cube"></i> Modules</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform') }}"><i class="nav-icon la la-mobile"></i> Platforms</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('language') }}"><i class="nav-icon la la-language"></i> Languages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('localization-key') }}"><i class="nav-icon la la-key"></i> Localization keys</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform-module') }}"><i class="nav-icon la la-link"></i> Platform modules</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('translation') }}"><i class="nav-icon la la-language"></i> Translations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform-translation') }}"><i class="nav-icon la la-link"></i> Platform translations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('export-format') }}"><i class="nav-icon la la-remove-format"></i> Export formats</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('platform-export-format') }}"><i class="nav-icon la la-remove-format"></i> Platform export formats</a></li>
