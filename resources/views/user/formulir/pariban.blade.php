@extends('layouts.app', ['tittle' => 'Form Buletin'])

@section('header')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
        data-background="assets/img/breadcurmb/breadcurmb.jpg"
        style="background-image: url(&quot;assets/img/breadcurmb/breadcurmb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content z-index text-center">
                        <h3 class="breadcrumb__title">Form buletin</h3>
                        <div class="breadcrumb__list">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- contact area end -->
@endsection


@section('content')
    <!-- contact area start -->
    <div class="contact-area grey-bg-2 z-index pb-120 pt-120">
        <div class="container">
            <div class="contact-top-wrap">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-left-thumb mb-60 p-relative">
                            <img id="imagePreview" style="height: 500px" src="assets/img/contact/contact-2.jpg"
                                alt="">
                        </div>
                        <div class="contact-social">
                            <span>Social Media :</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="contact-wrapper">
                            <form id="add">
                                <div class="tp-contact-2-form">
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="error-message text-danger" id="author-error"></div>
                                            <div class="tp-contact-2-input p-relative">
                                                <input type="text" name="authoradd" id="authoradd" placeholder="Author">
                                                <span><i class="fal fa-user"></i></span>

                                            </div>

                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="error-message text-danger" id="email-error"></div>

                                            <div class="tp-contact-2-input p-relative">
                                                <input type="email" name="emailadd" id="emailadd" placeholder="Email">
                                                <span><i class="fa-light fa-envelope"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="error-message text-danger" id="sekolah-error"></div>

                                            <div class="tp-contact-2-input p-relative">
                                                <input type="text" name="sekolah" id="sekolahadd"
                                                    placeholder="Asal Sekolah">
                                                <span><i class="fa-regular fa-school"></i></span>
                                            </div>
                                        </div>    <div class="col-xl-6 col-lg-6">
                                            <div class="error-message text-danger" id="sekolah-error"></div>

                                            <div class="tp-contact-2-input p-relative">
                                                <input type="text" name="nis" id="nisadd"
                                                    placeholder="NIS/NISN">
                                                <span><i class="fa-regular fa-school"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="error-message text-danger" id="kelas-error"></div>

                                            <div class="tp-contact-2-input p-relative">
                                                <input type="text" name="kelas" id="kelasadd" placeholder="Kelas">
                                                <span><i class="fa-regular fa-school"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="error-message text-danger" id="judul-error"></div>

                                            <div class="tp-contact-2-input p-relative">
                                                <input type="text" name="judul" id="juduladd"
                                                    placeholder="Judul Buletin">
                                                <span><i class="fa-sharp fa-light fa-circle-info"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="tp-checkout-input">
                                               <label>Category</label>
                                               <div class="error-message text-danger" id="category-error"></div>
                                               <select id="categoryadd" name="categoryadd" >
                                                  <option value="1">Puisi</option>
                                                  <option value="2">Cerpen</option>
                                                  <option value="3">Lukisan</option>
                                                  <option value="4">Vidio</option>
                                                  <option value="5">Pantun</option>
                                                  <option value="6">Kata-Kata Motivasi</option>
                                               </select>

                                            </div>
                                         </div>

                                        <div class="col-xl-12">
                                            <div class="error-message text-danger" id="deskripsi-error"></div>
                                            <div class="tp-contact-2-input p-relative">
                                                <textarea id="deskripsiadd" name="deskripsiadd" placeholder="Tulis deskripsi dari pariban yang disubmit"></textarea>
                                                <span class="icon-1"><i class="fa-light fa-pen"></i></span>
                                            </div>
                                        </div>
                                        <div class="error-message text-danger" id="file-error"></div>

                                        <div class="col-xl-12">
                                            <div>Upload File Pdf Pariban
                                            </div>
                                            <div class="tp-contact-2-input p-relative">
                                                <input type="file" id="fileadd" name="fileadd" style="width:100%;">
                                                <span><i class="fa-sharp fa-light fa-upload"></i></span>
                                            </div>
                                        </div>
                                        <div class="error-message text-danger" id="foto-error"></div>

                                        <div class="col-xl-12">
                                            <div>Upload Foto Siswa

                                            </div>
                                            <div class="tp-contact-2-input p-relative">

                                                <input type="file" onchange="previewFile()" id="coveradd"
                                                    name="coveradd" style="width:100%;">
                                                <span><i class="fa-sharp fa-light fa-upload"></i></span>




                                            </div>

                                        </div>

                            </form>
                            <div class="tp-contact-2-btn">
                                <button type="button" onclick="saveAdd()" class="tp-btn-xl green-anim">Send
                                    Message</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    <script>
        function generateToken() {
            return new Promise(function(resolve, reject) {
                $.ajax({
                    url: serverConfig.dispusar + '/api/generate-token',
                    type: 'POST',
                    success: function(response) {
                        var token = response.token;
                        resolve(token); // Mengembalikan token jika berhasil
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Failed to retrieve token: ' + error, "Error");
                        reject(error); // Menolak promise jika terjadi kesalahan
                    }
                });
            });
        }

        function previewFile() {
            var preview = document.getElementById('imagePreview'); // Menentukan elemen img dengan id 'imagePreview'
            var file = document.getElementById('coveradd').files[0]; // Mengambil file yang dipilih oleh pengguna
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result; // Menetapkan hasil bacaan file sebagai src dari elemen img
            }

            if (file) {
                reader.readAsDataURL(file); // Membaca file sebagai URL data
            } else {
                preview.src = ""; // Menetapkan src img ke string kosong jika tidak ada file yang dipilih
            }
        }

        function saveAdd() {
            generateToken()
                .then(function(token) {
                    var judul = $('#juduladd').val();
                    var author = $('#authoradd').val();
                    var kelas = $('#kelasadd').val();
                    var nisn = $('#nisadd').val();
                    var sekolah = $('#sekolahadd').val();
                    var category = $('#categoryadd').val();
                    var email = $('#emailadd').val();
                    var deskripsi = $('#deskripsiadd').val();
                    var foto = $('#coveradd')[0].files[0];
                    var file = $('#fileadd')[0].files[0];

                    var formData = new FormData();
                    formData.append('judul', judul);
                    formData.append('author', author);
                    formData.append('sekolah', sekolah);
                    formData.append('kelas', kelas);
                    formData.append('nisn', nisn);
                    formData.append('category', category);
                    formData.append('deskripsi', deskripsi);
                    formData.append('email', email);
                    formData.append('foto', foto);
                    formData.append('file', file);
                    formData.append('token', token);
                    console.log(formData);
                    $.ajax({
                        url: serverConfig.dispusar + '/api/formulir_pariban/store',
                        type: 'POST',
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function(response) {
                            toastr.success('Data berhasil ditambahkan.');
                            clear();
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            if (xhr.status == 400) {
                                var errors = xhr.responseJSON;
                                var errorMessage = "<ul>";
                                for (var key in errors) {
                                    errorMessage += "<li>" + errors[key][0] + "</li>";
                                    $('#' + key + '-error').text(errors[key][0]);
                                }
                                errorMessage += "</ul>";
                                toastr.error(errorMessage, "Validation Error");
                            } else {
                                toastr.error('Terjadi kesalahan saat menyimpan perubahan: ' + error,
                                    "Error");
                            }
                        }
                    });
                })
                .catch(function(error) {
                    // Tangani kesalahan dari generateToken()
                    console.error('Error in generateToken(): ', error);
                });
        }

        function clear() {
            $('#juduladd').val('');
            $('#authoradd').val('');
            $('#no_hpadd').val('');
            $('#emailadd').val('');
            $('#deskripsiadd').val('');
            $('#coveradd').val('');
            $('#fileadd').val('');
            $('#sekolahadd').val('');
            $('#kelasadd').val('');
            $('#nisadd').val('');
            $('#categoryadd').val('');

        }
    </script>
@endsection
