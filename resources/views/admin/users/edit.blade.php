@extends('home')

@section('title')
    Edit Permission
@endsection

@section('extra-css')
@endsection

@section('index')
        <div class="content">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="">
                            <h3>
                                Edit User Details
                            </h3>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('users.update',$user->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">
                            <div class="form-group ">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" placeholder="Nama" required autofocus>
                                    @error('name')
                                        <label id="name-error" class="error" for="name">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" placeholder="Email" required autofocus>
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$user->mobile}}" placeholder="No HP"  pattern="\d*" required>
                                    @error('mobile')
                                        <label id="mobile-error" class="error" for="mobile">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">No. KTP</label>
                                    <input type="number" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{$user->no_ktp}}" required>
                                    @error('no_ktp')
                                        <label id="no_ktp-error" class="error" for="no_ktp">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{$user->tgl_lahir}}" required>
                                    @error('tgl_lahir')
                                        <label id="tgl_lahir-error" class="error" for="tgl_lahir">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required>
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
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                    @error('password')
                                        <label id="password-error" class="error" for="password">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="form-label">Roles</label>
                                    <select id="your-select" class="form-control @error('roles') is-invalid @enderror" name="roles[]" multiple required>
                                            @foreach($roles as $role)
                                                <option>{{ $role }}</option>
                                            @endforeach
                                    </select>
                                     @error('roles')
                                        <label id="roles-error" class="error" for="roles">{{ $message }}</label>
                                    @enderror
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->

        </div>
@endsection

@section('extra-script')
<script type="text/javascript">
    var test = "{{$selectedRoles}}";
    if (test != '') {
        document.getElementById('your-select').value = test;
    }
</script>

@endsection
