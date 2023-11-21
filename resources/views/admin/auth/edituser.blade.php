<base href="/public">
@include('admin.layout.head')
@include('admin.layout.navbar')
@include('admin.layout.sidebar')
<main id="main" class="main">
    @foreach ($data as $item)
    @endforeach
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="/storage/profile/{{ Auth::user()->photo }}" alt="Profile" class="rounded-circle">
                        <h2>{{ Auth::user()->name }}</h2>
                        <h3>{{ Auth::user()->email }}</h3>
                        <div class="social-links mt-2">

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profile</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Hak Akses</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->role }}</div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Edit Profile Form -->
                                <form action="{{ route('saveprofil', ['id' => auth()->user()->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="photo" class="col-md-4 col-lg-3 col-form-label">Foto
                                            Profil</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="profile/{{ auth()->user()->photo }}" alt="Profil">
                                            <div class="pt-2">
                                                <input type="file" name="photo" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama
                                            Lengkap</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="name"
                                                value="{{ auth()->user()->name }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="email"
                                                value="{{ auth()->user()->email }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-lg-3 col-form-label">Kata Sandi
                                            (kosongkan jika tidak ingin mengubah)</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form><!-- End Edit Profile Form -->


                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@include('admin.layout.footer')
