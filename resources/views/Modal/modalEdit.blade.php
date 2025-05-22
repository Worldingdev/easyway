<div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" id="edit">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modifye koli</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal mt-4" method="post" action="/update">
                                        @csrf
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-group">
                                                <label>Non ekspedite</span></label>
                                                <input name="senderName" type="text" id="senderName" class="form-control" placeholder="Antre nom moun osinon antrepriz ki depoze koli a">
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="example-email">Tracking #</label>
                                                <input type="text" id="trackingNumber" name="trackingNumber" class="form-control"
                                                placeholder="Antre nimero koli a">
                                            </div>
                                            <div class="form-group">
                                                <label>Pwa koli </label>
                                                <input type="number" name="weight" id="weight" class="form-control" placeholder="Antre pwa koli a">
                                            </div>
                                            <div class="form-group">
                                                <label>Fre koli pa liv<span> *</span></label>
                                                <input required type="number" name="fee_lb" id="fee_lb" class="form-control" placeholder="Antre fre koli a pa liv">
                                            </div>
                                            <div class="form-group">
                                                <label>Nivo livrezon</label>
                                                <select class="form-select shadow-none col-12" id="nivo" name="state">
                                                    <!-- <option selected>Chwazi...</option> -->
                                                    <option value="Etazini">Etazini</option>
                                                    <option value="Disponib">Disponib</option>
                                                    <option value="Livre">Livre</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Non reseve</label>
                                                <input type="text" id="receiverName" name="receiverName" class="form-control" placeholder="Antre nom moun kap resevwa koli a">
                                            </div>
                                            <div class="form-group">
                                                <label>Dat depozit<span> *</span></label>
                                                <input required type="date" id="D_deposite" name="D_Deposite" class="form-control" placeholder="Antre dat koli a depoze">
                                            </div>
                                            <div class="form-group">
                                                <label>Dat livrezon<span> *</span></label>
                                                <input  id="D_delivery" type="date" name="D_Delivery" class="form-control" placeholder="Antre dat koli a livre">
                                            </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-outline-success " data-bs-dismiss="modal">Anile</button>
                                            <button type="submit" class="btn btn-success text-white">Anrejistre</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>