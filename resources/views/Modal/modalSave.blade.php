<div class="modal fade" id="save" tabindex="-1" aria-labelledby="exampleModalLabelsave" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabelsave">Anrejistre nouvo koli</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal mt-4" method="post" action="/dashboard">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Non ekspedite<span> *</span></label>
                                                    <input required type="text" name="senderName" class="form-control" placeholder="Antre nom moun osinon antrepriz ki depoze koli a">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email">Nimero koli<span> *</span></label>
                                                    <input required type="text" name="trackingNumber" class="form-control"
                                                    placeholder="Antre Tracking number koli a">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pwa koli<span> *</span></label>
                                                    <input required type="number" name="weight" class="form-control" placeholder="Antre pwa koli a">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fre koli pa liv<span> *</span></label>
                                                    <input required type="number" name="fee_lb" class="form-control" placeholder="Antre fre koli a pa liv">
                                                </div>
                                                <div class="form-group">
                                                    <label>Taks</label>
                                                    <input  type="number" name="tax" class="form-control" placeholder="Antre taks koli a">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nivo livrezon<span> *</span></label>
                                                    <select required class="form-select shadow-none col-12" name="state" id="nivo1">
                                                        <option value="Etazini">Etazini</option>
                                                        <option value="Disponib">Disponib</option>
                                                        <option value="Livre">Livre</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Non reseve<span> *</span></label>
                                                    <input required type="text" name="receiverName" class="form-control" placeholder="Antre nom moun kap resevwa koli a">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dat depozit<span> *</span></label>
                                                    <input required type="date" name="D_Deposite" class="form-control" placeholder="Antre dat koli a depoze">
                                                </div>
                                                <div id="date_livraison_group1" class="form-group">
                                                    <label>Dat livrezon</label>
                                                    <input id="D_delivery1"  type="date" name="D_Delivery" class="form-control" placeholder="Antre dat koli a livre">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-outline-success " data-bs-dismiss="modal">Anile</button>
                                                    <button type="submit" class="btn btn-success text-white">Anrejistre</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>