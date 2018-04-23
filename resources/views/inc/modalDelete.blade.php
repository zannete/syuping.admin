{!! Form::open(["action" => [$controller, $id], "method" => "POST"]) !!}
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Konfirmasi Penghapusan</h4>
      </div>
      <div class="modal-body">
        <p>Apakah Anda ingin menghapus <b>{{ $name }}</b>? Sesuatu yang dihapus tidak dapat dipulihkan.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
        {{ Form::hidden("_method", "DELETE") }}
        {{ Form::submit("Delete", ["class" => "btn btn-danger"]) }}
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}