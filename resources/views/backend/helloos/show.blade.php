@extends ('backend.layouts.app')

@section ('title', __('labels.backend.helloos.management') . ' | ' . __('labels.backend.helloos.view'))

@section('breadcrumb-links')
@include('backend.helloos.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.helloos.management') }}
                        <small class="text-muted">{{ __('labels.backend.helloos.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.helloos.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.helloos.content.created_at') }}:</strong> {{ $helloo->updated_at->timezone(get_user_timezone()) }} ({{ $helloo->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.helloos.content.last_updated') }}:</strong> {{ $helloo->created_at->timezone(get_user_timezone()) }} ({{$helloo->updated_at->diffForHumans() }})--}}
                        @if ($helloo->trashed())
                            <strong>{{ __('labels.backend.helloos.content.deleted_at') }}:</strong> $helloo->deleted_at->timezone(get_user_timezone())  ($helloo->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection