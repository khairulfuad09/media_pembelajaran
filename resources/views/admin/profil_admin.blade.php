@extends('template.main_admin')
@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                            width="150px"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                            class="font-weight-bold">Admin</span><span class="text-black-50">admin@gmail.com</span><span>
                        </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Nama</label><input type="text"
                                    class="form-control" placeholder="nama" value=""></div>
                            <div class="col-md-6"><label class="labels">email</label><input type="text"
                                    class="form-control" value="" placeholder="email"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">nomor telepon</label><input type="text"
                                    class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12"><label class="labels">gender</label><input type="text"
                                    class="form-control" placeholder="enter address line 1" value=""></div>
                            <div class="col-md-12"><label class="labels">tanggal lahir</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">alamat</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">role</label><input type="text"
                                    class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">password</label><input type="text"
                                    class="form-control" value="" placeholder="state"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                                Profile</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
