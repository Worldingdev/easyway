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
                        <h4 class="page-title">Lis itilizate</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Akey</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Jere itilizate</li>
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
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Ratio</h4>
                                <div class="sales ct-charts mt-3"></div>
                            </div>
                        </div>
                    </div> -->
                    {{-- <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Kantite koli</h4>
                                    <h2 class="font-light">{{$allcolis->count()}} <span class="font-16 text-success font-medium">+{{$pourcentageToday}}%</span>
                                    </h2>
                                    <div class="mt-4">
                                        <div class="row text-center">
                                            <div class="col-6 border-right">
                                                <h4 class="mb-0">{{$pourcentageLivres}}%</h4>
                                                <span class="font-14 text-muted">Koli deja livre</span>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="mb-0">{{$pourcentageNonLivres}}%</h4>
                                                <span class="font-14 text-muted">koli poko livre</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body mb-3">
                                    <h5 class="card-title mb-1">Total fre ki genere</h5>
                                    <h3 class="font-light">${{$totalFraisLivres}}</h3>
                                    <div class="mt-3 text-center">
                                        <div id="earnings"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card" style=" border-left-width: 16px; border-right-width: 16px;">
                            <div class="row card-body">
                                <h4 class="col-sm-10 card-title">Lis itilizate yo</h4>
                                <div class="col-sm-2">
                                    <a class="btn btn-success text-white" href="/register">Nouvo kont</a>
                                </div>
                            </div>
                            
                            
                            <div class="table-responsive">
                                <table id="" class="display table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Non itilizate</th>
                                            <th class="border-top-0">Telofon</th>
                                            <th class="border-top-0">imel</th>
                                            <th class="border-top-0">Wol</th>
                                            <th class="border-top-0">eta</th>
                                            <th class="border-top-0">Aksyon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allusers as $user)
                                        <tr>

                                            <td class="txt-oflo">{{$user->name}}</td>
                                            <td><span class="label label-success label-rounded">{{ strtoupper($user->tel) ? strtoupper($user->tel) : 'N/A' }}</span> </td>
                                            <td class="txt-oflo">{{$user->email}}</td>
                                            <td class="txt-oflo">{{$user->type}}</td>
                                            <td class="txt-oflo">{{$user->state}}
                                                {{-- <button @if ( $user->state == 'Livre')
                                                    disabled
                                                    @endif class="btn btn-success text-white btn-edit"
                                                            data-id="{{$user->email}}"
                                                            data-type="{{$user->type}}"   
                                                    >
                                                        <i class="mdi mdi-border-color"></i>
                                                    </button> --}}
                                            </td>
                                            
                                            <td>
                                                
                                                    <button class="btn btn-danger text-white btn-disabled"
                                                            data-email="{{$user->email}}"
                                                            data-state="{{$user->state}}"
                                                    >
                                                    @if ($user->state == 'aktive')
                                                        <i class="mdi mdi-account-off"> Dezaktive</i>
                                                    @else
                                                        <i class="mdi mdi-account-check"> Aktive</i>
                                                    @endif
                                                    </button>
                                                
                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                            @include('Modal.modalSave')
                            @include('Modal.AlertUpdate')
                            @include('Modal.modalEdit')
                            @include('Modal.modalDisabled')
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        @include('Layout.Admin.footer')