<div class="modal modal-danger fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p class="text-center">
                       {{$slot}}
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </div>
            </form>

        </div>
    </div>
</div>