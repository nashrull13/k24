@extends('home')

@section('title')
	User
@endsection

@section('extra-css')

@endsection

@section('index')
        <div class="content">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="">
                            <h3>
                                Add New User
                            </h3>
                        </div>
                        <div class="card-body">
                           <form id="form_validation" method="POST" action="{{ route('users.store') }}">
                                @csrf
                                <div class="form-group ">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Nama" required autofocus>
                                    @error('name')
                                        <label id="name-error" class="error" for="name">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Email" required autofocus>
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{old('mobile')}}" pattern="\d*" placeholder="No. HP" required>
                                    @error('mobile')
                                        <label id="mobile-error" class="error" for="mobile">{{ $message }}</label>
                                    @enderror
                                </div>

                                                                <div class="form-group ">
                                    <label class="form-label">No. KTP</label>
                                    <input type="number" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{old('no_ktp')}}" placeholder="No KTP" required>
                                    @error('no_ktp')
                                        <label id="no_ktp-error" class="error" for="no_ktp">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{old('tgl_lahir')}}"  required>
                                    @error('tgl_lahir')
                                        <label id="tgl_lahir-error" class="error" for="tgl_lahir">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{old('jenis_kelamin')}}" placeholder="Jenis Kelamin" required>
                        <option value="" selected disabled>-- pilih -- </option>
                                    <option value="laki-laki">Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                        @error('no_ktp')
                            <label id="no_ktp-error" class="error" for="no_ktp">{{ $message }}</label>
                        @enderror
                    </div>    

                                <div class="form-group ">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                    @error('password')
                                        <label id="password-error" class="error" for="name">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Role</label>
                                    <select class="form-control" name="roles[]" required>
                                        @foreach($roles as $role)
                                            <option>{{ $role }}</option>
                                        @endforeach
                                    </select>
                                     @error('roles')
                                        <label id="roles-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>

                                <button class="btn btn-primary btn-sm" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->

        </div>
@endsection

@section('extra-script')
@endsection
