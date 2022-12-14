<!DOCTYPE html>
<html lang="en">

<head>


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" nama="password1" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password" nama="password2" placeholder="Ulang Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary 
                                btn-user btn-block">
                                    Registrasi Akun
                                </button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('');?>">Sudah Punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>