@if (flash()->message())
    @if (flash()->overlay())
        @include('Flash::modal', [
            'level'      => flash()->level(),
            'title'      => flash()->title(),
            'body'       => flash()->message(),
            'important'  => flash()->important()
        ])
    @else
        <div class="
            alert
            alert-{{ flash()->level() }}
            {{ flash()->important() ? 'alert-important' : '' }}
        ">
            @if(flash()->important())
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;</button>
            @endif
            {!! flash()->message() !!}
        </div>
    @endif
@endif
