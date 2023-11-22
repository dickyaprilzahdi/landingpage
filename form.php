<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="icon" href="https://sekolahrelawan.org/img/fav.png" type="image/png">

    <title>DLT - Disaster Leadership Training</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Formulir waitinglist</h2>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">INGIN BERKONTRIBUSI JADI RELAWAN DI LOKASI BENCANA?</h5>
                    <div class="contact-text">
                        <p><i>Jadi relawan di lokasi bencana bukan hal mudah yang bisa diikuti siapa saja.
                                karena kondisi bencana, bahaya bisa mengancam kapan saja dan di mana saja</i>
                            <br><i>Maka setiap relawan harus terlatih dan mempunyai kemampuan dasar di situasi
                                bencana.</i>
                        </p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">

                        <!-- Form -->
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <div class="help-blockk"></div>
                                    <input name="txtNama" type="text" class="form-control" id="txtNama"
                                        placeholder="Nama" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <div class="help-blockk"></div>
                                    <input name="txtUsia" type="number" class="form-control" id="txtUsia"
                                        placeholder="Usia" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <div class="help-blockk"></div>
                                    <input name="txtPekerjaan" type="text" class="form-control" id="txtPekerjaan"
                                        placeholder="Pekerjaan" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <div class="help-blockk"></div>
                                    <input name="noHp" type="tel" pattern="[0-9]+" class="form-control" id="noHp"
                                        placeholder="Nomor HP" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <div class="help-blockk"></div>
                                    <input name="txtDomisili" type="text" class="form-control" id="txtDomisili"
                                        placeholder="Domisili" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <div class="help-blockk"></div>
                                    <input name="txtInstagram" type="text" class="form-control" id="txtInstagram"
                                        placeholder="Instagram" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="button" id="submitBtn" class="main-button">DAFTAR</button>
                                </fieldset>
                            </div>
                        </div>
                        <!-- Form End -->

                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->

    <!-- Sertakan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Fungsi untuk menampilkan notifikasi kesalahan pada elemen formulir
        function showError(element, errorMessage) {
            element.addClass("error");
            var helpBlock = element.siblings(".help-blockk");
            helpBlock.text(errorMessage).css({
                "color": "red",
                "font-size": "12px",
                "margin-bottom": "5px"
            });
        }

        // Fungsi untuk menghapus kelas kesalahan dari elemen formulir
        function clearErrorStyles() {
            $(".error").removeClass("error");
            $(".help-blockk").text("").css({
                "color": "",
                "font-size": "",
                "margin-bottom": ""
            });
        }

        // Fungsi untuk menampilkan notifikasi
        function showNotification(type, message) {
            var notification = $("<div class='notification " + type + "'>" + message + "</div>");
            $("body").append(notification);

            // Hilangkan notifikasi setelah beberapa detik
            setTimeout(function () {
                notification.fadeOut(500, function () {
                    $(this).remove();
                });
            }, 3000);
        }

        $(document).ready(function () {
            // Tangkap klik tombol "DAFTAR"
            $("#submitBtn").click(function () {
                // Hapus notifikasi kesalahan sebelumnya
                clearErrorStyles();

                // Ambil nilai input dari formulir
                var txtNama = $("#txtNama");
                var txtUsia = $("#txtUsia");
                var txtPekerjaan = $("#txtPekerjaan");
                var noHp = $("#noHp");
                var txtDomisili = $("#txtDomisili");
                var txtInstagram = $("#txtInstagram");

                // Validasi isian formulir
                var formIsValid = true;

                if (txtNama.val().trim() === "") {
                    showError(txtNama, "Silakan isi nama.");
                    formIsValid = false;
                }

                if (isNaN(txtUsia.val()) || txtUsia.val().trim() === "") {
                    showError(txtUsia, "Silakan isi usia dengan angka.");
                    formIsValid = false;
                }

                if (txtPekerjaan.val().trim() === "") {
                    showError(txtPekerjaan, "Silakan isi pekerjaan.");
                    formIsValid = false;
                }

                if (isNaN(noHp.val()) || noHp.val().trim() === "" || noHp.val().length < 10) {
                    showError(noHp, "Silakan isi nomor HP dengan benar.");
                    formIsValid = false;
                }

                if (txtDomisili.val().trim() === "") {
                    showError(txtDomisili, "Silakan isi domisili.");
                    formIsValid = false;
                }

                if (txtInstagram.val().trim() === "") {
                    showError(txtInstagram, "Silakan isi akun Instagram.");
                    formIsValid = false;
                }

                if (formIsValid) {
                    // Kirim data ke file PHP menggunakan Ajax
                    $.ajax({
                        type: "POST",
                        url: "controllers.php", // Sesuaikan dengan path yang benar
                        data: {
                            txtNama: txtNama.val(),
                            txtUsia: txtUsia.val(),
                            txtPekerjaan: txtPekerjaan.val(),
                            noHp: noHp.val(),
                            txtDomisili: txtDomisili.val(),
                            txtInstagram: txtInstagram.val()
                        },
                        success: function (response) {
                            // Tanggapi kesuksesan dari server di sini
                            if (response === "1") {
                                alert("Pendaftaran berhasil!");
                                // Alihkan ke halaman utama setelah pendaftaran berhasil
                                window.location.href = "https://sekolahrelawan.com/dlt/";
                            } else {
                                alert("Pendaftaran gagal. Silakan coba lagi.");
                            }
                        },
                        error: function () {
                            // Tanggapi kesalahan Ajax di sini
                            alert("Terjadi kesalahan. Silakan coba lagi.");
                        }
                    });
                }
            });
        });
    </script>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>