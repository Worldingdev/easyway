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
                        <h4 class="page-title">Pwofil</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Akey</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Pwofil</li>
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
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img id="img" src="{{ Auth::user()->profil ? asset('storage/' . Auth::user()->profil) : asset('admin/assets/images/users/profilDefault.png') }}" class="rounded-circle" width="150" />


                                    <h4 class="card-title mt-2">{{ \Illuminate\Support\Facades\Auth::user()->name }}</h4>
                                    
                                    
                                    <form action="/editProfil" method="POST" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="file-upload" role="button"><i class="mdi mdi-camera"> Chanje pwofil</i></label>
                                                <input type="file" id="file-upload" class="d-none" name="image" required>

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
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6> {{\Illuminate\Support\Facades\Auth::user()->email }}</h6> 
                                <small class="text-muted pt-4 db">Phone</small>
                                <h6>{{ \Illuminate\Support\Facades\Auth::user()->tel }}</h6> 
                                <a href="/logout"><i class="mdi mdi-logout me-1 ms-1"></i>
                                    Dekonekte</a>
                            </div>
                        </div>
                    </div>
                    

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/updateUser" class="form-horizontal form-material mx-2">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Non konple</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"
                                                class="form-control form-control-line"
                                                id="example-email" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nimero telefon</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->tel }}" name="tel" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div>
                                        <hr>
                                    </div>
                                    <p>
                                        <a class="btn btn-success text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Chanje kod sekre
                                        </a>  
                                        <input type="hidden" name="change_password_clicked" id="change_password_clicked" value="0">
  
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="form-group">
                                            <label class="col-md-12"> Kod sekre</label>
                                            <div class="col-md-12">
                                                <input type="password" name="old_password" placeholder="Antre aktyel kod sekre a"
                                                    class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Nouvo kod sekre</label>
                                            <div class="col-md-12">
                                                <input type="password" name="new_password" placeholder="Antre nouvo kod sekre a"
                                                    class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Konfime nouvo kod sekre</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password_confirmation" placeholder="Konfime nouvo kod sekre a"
                                                    class="form-control form-control-line">
                                            </div>
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
                    <script>

</script>

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
document.getElementById('file-upload').addEventListener('change', function (e) {
    const reader = new FileReader();
    reader.onload = function (e) {
        document.querySelector('#img').src = e.target.result;
    };
    reader.readAsDataURL(this.files[0]);
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