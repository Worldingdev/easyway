<div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Siprime koli</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal mt-4" method="post" action="/deleteColis">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <h3 class="text-center">Ou vle siprime koli sa vre?</h3>
                </div>
                <input type="hidden" id="trackingNumberdel" name="trackingNumber" class="form-control">
                <div class="modal-footer">
                    <button type="reset" class="btn btn-outline-success " data-bs-dismiss="modal">Anile</button>
                    <button type="submit" class="btn btn-danger text-white">wi, Siprime</button>
                </div>
            </form>
        </div>
    </div>
</div>