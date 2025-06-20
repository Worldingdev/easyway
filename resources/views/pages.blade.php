@include('Layout.Admin.header')
<!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Modifye paj akey</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Akey</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Jere paj akey</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="col">
                    <!-- Column -->
                    <div class="row">

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img" src="{{ $page->flyer_1_d ? asset('storage/' . $page->flyer_1_d ) : asset('admin/assets/images/no-image-icon-6.png') }}" class="rounded" width="150" />

                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="file-upload" role="button"><i class="mdi mdi-camera"> Chanje premye imaj dyaporama</i></label>
                                                            <input type="file" data-target="#img" id="file-upload" class="d-none" name="image" required>
                                                            <input type="text" value="flyer_1_d" name="flyer" hidden >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                        </div>
                                                    </div>
                                                </form>
                                        </center>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img1" src="{{ $page->flyer_2_d ? asset('storage/' . $page->flyer_2_d ) : asset('admin/assets/images/no-image-icon-6.png') }}" class="rounded" width="150" />
    
                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="file-upload-1" role="button"><i class="mdi mdi-camera"> Chanje dezyem imaj dyaporama</i></label>
                                                        <input type="file" data-target="#img1" id="file-upload-1" class="d-none" name="image" required>
                                                        <input type="text" value="flyer_2_d" name="flyer" hidden >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img2" src="{{ $page->flyer_3_d ? asset('storage/' . $page->flyer_3_d ) : asset('admin/assets/images/no-image-icon-6.png') }}" width="150" />
    
                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="file-upload-2" role="button"><i class="mdi mdi-camera"> Chanje twazyem imaj dyaporama</i></label>
                                                        <input type="file" data-target="#img2" id="file-upload-2" class="d-none" name="image" required>
                                                        <input type="text" value="flyer_3_d" name="flyer" hidden >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </center>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img" src="{{ $page->flyer_1 ? asset('storage/' . $page->flyer_1 ) : asset('admin/assets/images/users/profilDefault.png') }}" class="rounded" width="150" />

                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="file-upload" role="button"><i class="mdi mdi-camera"> Chanje flyer 1</i></label>
                                                            <input type="file" data-target="#img" id="file-upload" class="d-none" name="image" required>
                                                            <input type="text" value="flyer_1" name="flyer" hidden >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                        </div>
                                                    </div>
                                                </form>
                                        </center>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img1" src="{{ $page->flyer_2 ? asset('storage/' . $page->flyer_2 ) : asset('admin/assets/images/users/profilDefault.png') }}" class="rounded" width="150" />
    
                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="file-upload-1" role="button"><i class="mdi mdi-camera"> Chanje flyer 2</i></label>
                                                        <input type="file" data-target="#img1" id="file-upload-1" class="d-none" name="image" required>
                                                        <input type="text" value="flyer_2" name="flyer" hidden >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img2" src="{{ $page->flyer_3 ? asset('storage/' . $page->flyer_3 ) : asset('admin/assets/images/users/profilDefault.png') }}" class="rounded" width="150" />
    
                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="file-upload-2" role="button"><i class="mdi mdi-camera"> Chanje flyer 3</i></label>
                                                        <input type="file" data-target="#img2" id="file-upload-2" class="d-none" name="image" required>
                                                        <input type="text" value="flyer_3" name="flyer" hidden >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img3" src="{{ $page->flyer_4 ? asset('storage/' . $page->flyer_4 ) : asset('admin/assets/images/users/profilDefault.png') }}" class="rounded" width="150" />
  
                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="file-upload-3" role="button"><i class="mdi mdi-camera"> Chanje flyer 4</i></label>
                                                        <input type="file" data-target="#img3" id="file-upload-3" class="d-none" name="image" required>
                                                        <input type="text" value="flyer_4" name="flyer" hidden >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img4" src="{{ $page->flyer_5 ? asset('storage/' . $page->flyer_5 ) : asset('admin/assets/images/users/profilDefault.png') }}" class="rounded" width="150" />
   
                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="file-upload-4" role="button"><i class="mdi mdi-camera"> Chanje flyer 4</i></label>
                                                        <input type="file" data-target="#img4" id="file-upload-4" class="d-none" name="image" required>
                                                        <input type="text" value="flyer_5" name="flyer" hidden >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </center>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img id="img5" src="{{ $page->flyer_6 ? asset('storage/' . $page->flyer_6 ) : asset('admin/assets/images/users/profilDefault.png') }}" class="rounded" width="150" />
                                            
                                            <form action="/changeFlyer" method="POST" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="file-upload-5" role="button"><i class="mdi mdi-camera"> Chanje flyer 6</i></label>
                                                        <input type="file" data-target="#img5" id="file-upload-5" class="d-none" name="image" required>
                                                        <input type="text" value="flyer_6" name="flyer" hidden >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success text-white">Anrejistre </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/editContainPage" class="form-horizontal form-material mx-2">
                                    @csrf
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="col-md-12">Paragraf 1</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="text_1" rows="3">
                                                {{ $page->text_1 ?? "Fè komand anliy pou livre nan warehouse nou osinon fè fanmi'w al depoze koli nan adrès nou," }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Paragraf 2</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="text_2" rows="2">
                                                {{ $page->text_2 ?? "pou'w kapab jwenn sèvis livrezon nan 5-8 jou max lan" }}
                                            </textarea>                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Lyen Videyo eksplikatif la</label>
                                        <div class="col-md-12">
                                            <input type="text" name="videoLink" value="{{ $page->videoLink ?? "#"}}"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Adres nou USA</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $page->adress_1 ?? "#"}}" name="adress_1" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nimero Tel USA</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $page->tel_usa ?? "#"}}" name="tel_usa" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Adres nou Ayiti</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $page->adress_2 ?? "#"}}" name="adress_2" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nimero Tel Ayiti</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $page->tel_ht ?? "#"}}" name="tel_ht" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Imel nou</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{ $page->email ?? "#"}}" name="email" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Anrejistre</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <script>

document.querySelectorAll('input[type="file"]').forEach(input => {
        input.addEventListener('change', function () {
            const targetSelector = this.getAttribute('data-target');
            const targetImg = document.querySelector(targetSelector);

            if (targetImg && this.files.length > 0) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    targetImg.src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    });



    var collapseElement = document.getElementById('collapseExample');

    collapseElement.addEventListener('show.bs.collapse', function () {
        document.getElementById('change_password_clicked').value = 1;
    });

    collapseElement.addEventListener('hide.bs.collapse', function () {
        document.getElementById('change_password_clicked').value = 0;
    });



</script>

@include('Modal.AlertUpdate')
@include('Modal.AlertError')







@include('Layout.Admin.footer')