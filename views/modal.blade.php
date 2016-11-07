<div id="flash-overlayModal" class="overlayModal modal fade {{ $level }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            @if($title)
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title bold compressed">{{ $title }}</h3>
                </div>
            @else
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            @endif
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3 a-center"><span class="glyphicons glyphicons-{{ $level }} x3"></span></div>
                    <div class="col-xs-12 visible-xs">&nbsp;</div>
                    <div class="col-sm-9">{!! $message !!}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modalOk" class="btn btn-modal btn-lg dax btn-addon" data-dismiss="modal">
                    <i class="glyphicons glyphicons-ok"></i>
                    Aceptar
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->