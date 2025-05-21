</body>

<!-- Modal Map -->
<div class="modal fade" id="modalMap">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Xem bản đồ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1314.5507837524422!2d105.78871915249151!3d21.037547932773276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3613967dbf%3A0x3e1ad0c809d813b7!2sAcademy%20of%20Journalism%20and%20Communication!5e1!3m2!1sen!2s!4v1747822628667!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<footer class="container bg-light border border-3 border-gold p-3 rounded-5 rounded-bottom mt-5">
    <div class="row">

        <div class="col-12 col-lg-6">
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                <img width="40" src="<?= URL_STORAGE ?>system/logo.png" alt="DUCLONG LOGO">
                <div class="navbar-brand fw-bold">DUCLONG GLOBAL CO.,LTD</div>
            </div>
            <div class="d-flex align-items-center align-items-lg-start flex-column gap-2 my-3 mt-lg-5 ps-lg-2">
                <div class="">
                    <i class="fas fa-map-marker-alt me-1 text-brown"></i>
                    <span class="text-muted small">
                        36/80 Xuân Thuỷ, Quận Nam Từ Liêm, TP. Hà Nội
                    </span>
                    <span class="text-center text-lg-start small text-brown fst-italic text-decoration-underline">
                        <div data-bs-toggle="modal" data-bs-target="#modalMap" >Xem bản đồ</div>
                    </span>
                </div>
                <div class="">
                    <i class="fas fa-phone me-1 text-brown"></i>
                    <span class="text-muted small">
                        094 859 4444
                    </span>
                </div>
                <div class="">
                    <i class="fas fa-at me-1 text-brown"></i>
                    <span class="text-muted small">
                        contact@duclong.com
                    </span>
                </div>
            </div>
        </div>

        <div class="col-4 col-lg-2 mt-4 text-center text-lg-start">
            <h6 class="text-brown fw-bold">
                Dịch vụ
            </h6>
            <div class="d-flex flex-column mt-4 gap-1">
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Tour du lịch</a>
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Tổ chức sự kiện</a>
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Dẫn chương trình</a>
            </div>
        </div>

        <div class="col-4 col-lg-2 mt-4 text-center text-lg-start">
            <h6 class="text-brown fw-bold">
                Truyền thông
            </h6>
            <div class="d-flex flex-column mt-4 gap-1">
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Fanpage</a>
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Youtube</a>
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Instagram</a>
            </div>
        </div>

        <div class="col-4 col-lg-2 mt-4 text-center text-lg-start">
            <h6 class="text-brown fw-bold">
                Liên kết
            </h6>
            <div class="d-flex flex-column mt-4 gap-1">
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Đặt câu hỏi</a>
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Hướng dẫn</a>
                <a href="#" class="text-decoration-none text-muted small fw-semibold">Chính sách & Điều khoản</a>
            </div>
        </div>

    </div>
</footer>

</html>