@extends ('backend.layouts.app')

@section ('title', __('labels.backend.helloos.management') . ' | ' . __('labels.backend.helloos.edit'))

@section('breadcrumb-links')
@include('backend.helloos.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($helloo, 'PATCH', route('admin.helloo.update', $helloo->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.helloos.management') }}
                        <small class="text-muted">{{ __('labels.backend.helloos.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.helloos.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.helloo.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection