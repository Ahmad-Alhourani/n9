<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($helloos as $helloo)
        <tr>
            
                

               <td>{!! $helloo->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>