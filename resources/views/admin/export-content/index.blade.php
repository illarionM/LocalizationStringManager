@extends(backpack_view('blank'))

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ backpack_url('export-content') }}">
            @csrf

            <h2><small><b>1. Select platform:</b></small></h2>
            <div class="inline-flex flex-wrap">
                @foreach($platforms as $platform)
                    <div class="inline-flex mr-20">
                        <input type="radio" name="platform" id="{{$platform->name}}" value="{{$platform->name}}">
                        <label class="w-max mb-0" for="{{$platform->name}}">{{$platform->name}}</label>
                    </div>
                @endforeach
                @error('platform')
                <div class="w-100 mt-20">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <h2><small><b>2. Select exportable languages:</b></small></h2>
            <div class="inline-flex flex-wrap">
                @foreach($languages as $language)
                    <div class="form-group mr-20">
                        <input type="checkbox" name="exportLanguages[{{$language->code}}]" id="{{$language->code}}"
                               class="crud_bulk_actions_main_checkbox" value="{{$language->code}}">
                        <label>{{$language->code}}</label>
                    </div>
                @endforeach
            </div>
            @error('languages')
            <div class="w-100 mt-20">
                <div class="alert alert-danger">{{ $message }}</div>
            </div>
            @enderror

            <button type="submit" class="btn btn-primary">
                Export
            </button>
        </form>
    </div>
@endsection
