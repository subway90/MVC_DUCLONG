<div class="container-fluid p-0">
    <video autoplay loop muted class="w-100">
        <source src="<?= URL_STORAGE ?>system/welcome.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<div class="container mt-5 border border-3 border-gold rounded-5">
    <div class="p-3 p-lg-5">
        <div class="d-flex flex-column-reverse flex-md-row">
            <div class="col-12 col-md-6 pe-lg-5">
                <h1 class="fw-bold text-center text-lg-start">
                    Về chúng tôi
                </h1>
                <p class="fw-bold mt-3 mt-lg-5 text-center text-lg-start">
                    How we rose up to become leaders in the consulting industry.
                </p>
                <p class="fw-normal small mt-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ad nobis, facere aut sapiente
                    voluptatum expedita deleniti laborum qui delectus temporibus magni tenetur eum perferendis minima
                    vero. Sequi, magnam praesentium!
                </p>
                <button class="btn-lg btn-gold rounded-pill text-brown mt-md-0 mt-lg-3 col-12 col-md-6 col-lg-4">
                    <small>Tìm hiểu thêm</small>
                </button>
            </div>
            <div class="col-12 col-md-6 mb-5 mb-lg-0">
                <img class="rounded-4" width="100%" src="<?= URL_STORAGE ?>system/about_us.png" alt="ABOUT US">
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 py-5">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h1 class="fw-bold text-center text-lg-start">
                Dịch vụ
            </h1>
            <p class="fw-normal small mt-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ad nobis, facere aut sapiente
                voluptatum expedita deleniti laborum qui delectus temporibus magni tenetur eum perferendis minima vero.
                Sequi, magnam praesentium!
            </p>
        </div>
        <div class="col-12 row mx-auto">
            <?php for ($i = 0; $i < 6; $i++): ?>
                <div class="col-12 col-md-6 col-lg-4 p-2">
                    <div class="border-mix-gold card-service">
                        <div class="p-4 rounded-3 bg-light">
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <img class="col-12 col-lg-6" src="<?= URL_STORAGE ?>system/service.png" alt="">
                                <h6 class="col-12 col-lg-6 fw-bold text-center mt-3 mt-lg-0">
                                    Tổ chức sự kiện
                                </h6>
                            </div>
                            <div class="small text-muted mt-3">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores corrupti, consequatur
                                quod quis vero dolor aliquam illum et earum sit.
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</div>

<div class="container mt-5 py-5">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h1 class="fw-bold text-center text-lg-start">
                Đối tác của chúng tôi
            </h1>
        </div>
        <div class="col-12 mt-3 mt-md-2 mt-1 mx-auto">
            <img src="<?= URL_STORAGE ?>system/brand.png" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5 py-5">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h1 class="fw-bold text-center text-lg-start">
                Dự án tiêu biểu
            </h1>
        </div>

        <div id="carouselProject" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="carousel-item <?= !($i === 1) ?: 'active' ?>" data-bs-interval="2000">
                        <div class="col-12 row mx-auto">
                            <?php for ($j = 1; $j <= 3; $j++): ?>
                                <div class="col-12 col-md-6 col-lg-4 px-0 <?= (!$j == 2) ?: 'py-1 px-lg-1' ?>">
                                    <div class="border-mix-gold border border-2 border-gold d-flex gap-2 p-3">
                                        <div class="col-6">
                                            <img src="<?= URL_STORAGE ?>system/project.png" class="w-100">
                                        </div>
                                        <div class="col-6 rounded-3 bg-light p-2">
                                            <h6 class="fw-bold">
                                                Dự án <?= ($i - 1) * 3 + $j ?>
                                            </h6>
                                            <p class="text-muted small">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, et magni
                                                expedita
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
            <div class="carousel-indicators position-relative py-3">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="<?= $i - 1 ?>"
                        aria-label="Slide <?= $i ?>" <?= !($i == 1) ?: 'class="active" aria-current="true"' ?>></button>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h1 class="fw-bold text-center text-lg-start">
                Quy trình làm việc
            </h1>
        </div>

        <div class="col-12 mt-3">
            <div class="d-flex flex-column gap-3">

                <div class="card-process border-mix-gold">
                    <div class="bg-light d-flex flex-column flex-lg-row align-items-center rounded-3 py-2">
                        <div class="col-12 col-lg-2 text-center text-lg-start fw-bold fs-3 ps-lg-3">
                            01
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end pe-lg-5 fs-6 fw-semibold my-2 my-lg-0">
                            Analysis & Research
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-end pe-lg-5">
                            Finding unique challenges and opportunities for growth
                        </div>
                    </div>
                </div>

                <div class="card-process border-mix-gold">
                    <div class="bg-light d-flex flex-column flex-lg-row align-items-center rounded-3 py-2">
                        <div class="col-12 col-lg-2 text-center text-lg-start fw-bold fs-3 ps-lg-3">
                            02
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end pe-lg-5 fs-6 fw-semibold my-2 my-lg-0">
                            Strategy
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-end pe-lg-5">
                            Crafting tailored solutions that align with your core objectives
                        </div>
                    </div>
                </div>

                <div class="card-process border-mix-gold">
                    <div class="bg-light d-flex flex-column flex-lg-row align-items-center rounded-3 py-2">
                        <div class="col-12 col-lg-2 text-center text-lg-start fw-bold fs-3 ps-lg-3">
                            03
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end pe-lg-5 fs-6 fw-semibold my-2 my-lg-0">
                            Execution
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-end pe-lg-5">
                            Creating impactful, lasting results
                        </div>
                    </div>
                </div>

                <div class="card-process border-mix-gold">
                    <div class="bg-light d-flex flex-column flex-lg-row align-items-center rounded-3 py-2">
                        <div class="col-12 col-lg-2 text-center text-lg-start fw-bold fs-3 ps-lg-3">
                            04
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end pe-lg-5 fs-6 fw-semibold my-2 my-lg-0">
                            Ongoing Support
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-end pe-lg-5">
                            Monitoring and providing support as needed
                        </div>
                    </div>
                </div>

                <div class="card-process border-mix-gold">
                    <div class="bg-light d-flex flex-column flex-lg-row align-items-center rounded-3 py-2">
                        <div class="col-12 col-lg-2 text-center text-lg-start fw-bold fs-3 ps-lg-3">
                            05
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end pe-lg-5 fs-6 fw-semibold my-2 my-lg-0">
                            CI/CD
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-end pe-lg-5">
                            With CI/CD tools and meeting
                        </div>
                    </div>
                </div>

                <div class="card-process border-mix-gold">
                    <div class="bg-light d-flex flex-column flex-lg-row align-items-center rounded-3 py-2">
                        <div class="col-12 col-lg-2 text-center text-lg-start fw-bold fs-3 ps-lg-3">
                            06
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end pe-lg-5 fs-6 fw-semibold my-2 my-lg-0">
                            Deploy to production
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-end pe-lg-5">
                            Use Hosting Server & Domain
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h1 class="fw-bold text-center text-lg-start">
                Khách hàng nói về chúng tôi
            </h1>
        </div>

        <div class="col-12 border-mix-gold mt-3">
            <div class="d-flex flex-column flex-lg-row align-items-center bg-light rounded-3 p-2 p-lg-5">
                <div class="col-12 col-lg-6 pe-lg-5 p-3 py-lg-0">
                    <h2 class="fw-bold text-center text-lg-start">
                        I'm a paragraph. Click here to add your own text.
                    </h2>
                    <h5 class="my-3 fw-bold text-center text-lg-start">
                        Your trust is our motivation
                        </>
                        <p class="mt-3 fw-normal text-center text-lg-start">
                            I'm a paragraph. Click here to add your own text and edit me. Let your users get to know
                            you.
                        </p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="bg-head-mail d-flex align-items-center p-3 gap-3">
                        <i class="fas fa-envelope fs-5"></i>
                        <div class="fw-semibold fs-5">
                            Hòm thư góp ý
                        </div>
                    </div>
                    <div class="box-mail py-3 d-flex flex-column gap-3">

                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <div class="d-flex p-2 border rounded-3 gap-3 mx-3">
                                <img width="52" height="52" class="rounded-circle"
                                    src="<?= URL_STORAGE ?>system/user_example_01.png">
                                <div class="">
                                    <div class="fs-5 fw-normal">
                                        Jenifer Cohen
                                    </div>
                                    <div class="small fw-light text-muted">
                                        Techcombank
                                    </div>
                                    <p class="mt-3">
                                        “I'm a testimonial. Click to edit me and add text that says something nice about you
                                        and your services. Let your customers review you and tell their friends how great
                                        you are.”
                                    </p>
                                </div>
                            </div>
                        <?php endfor ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 py-5">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h1 class="fw-bold text-center text-lg-start">
                Tin tức nổi bật
            </h1>
        </div>

        <div id="carouselProject" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="carousel-item <?= !($i === 1) ?: 'active' ?>" data-bs-interval="2000">
                        <div class="col-12 row mx-auto py-3">
                            <?php for ($j = 1; $j <= 4; $j++): ?>
                                <div class="col-6 col-md-3 col-lg-3 px-1">
                                    <div class="border shadow rounded-4 mt-3 mt-lg-0">
                                        <img src="<?= URL_STORAGE ?>system/blog.png" class="w-100">
                                        <div class="p-2">
                                            <h5>
                                                Tổ chức team building
                                            </h5>
                                            <div class="small text-muted d-flex align-items-center gap-2">
                                                <i class="far fa-clock small"></i> <?= date('H:i - d/m/Y') ?>
                                            </div>
                                            <hr class="text-muted my-2">
                                            <p class="small">
                                                Teambuilding là gì mà lại trở thành một phần quan trọng đối với hầu hết các
                                                doanh nghiệp? Có thể hiểu đây là dịp để các nhân viên trong công ty thể hiện...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
            <div class="carousel-indicators position-relative py-3">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="<?= $i - 1 ?>"
                        aria-label="Slide <?= $i ?>" <?= !($i == 1) ?: 'class="active" aria-current="true"' ?>></button>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h1 class="fw-bold text-center text-lg-start">
                Liên hệ
            </h1>
        </div>
        <form id="formCreateCalender">
            <div class="col-12 d-flex flex-column flex-lg-row py-4 rounded-3 gap-3 mt-3">

                <div class="col-12 col-lg-7 border-mix-gold">
                    <div class="bg-light p-3 p-lg-5 rounded-3 border border-1">
                        <div class="mb-2 mb-lg-3">
                            <label for="full_name" class="form-label fw-semibold">Họ và tên</label>
                            <input id="full_name" type="text" class="form-control bg-warning bg-opacity-25 border-gold">
                        </div>
                        <div class="mb-2 mb-lg-3">
                            <label for="phone" class="form-label fw-semibold">Số điện thoại</label>
                            <input id="phone" type="text" class="form-control bg-warning bg-opacity-25 border-gold">
                        </div>
                        <div class="mb-2 mb-lg-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input id="email" type="email" class="form-control bg-warning bg-opacity-25 border-gold">
                        </div>
                        <div class="mb-2 mb-lg-3">
                            <label for="message" class="form-label fw-semibold">Lời nhắn</label>
                            <textarea id="message" class="form-control bg-warning bg-opacity-25 border-gold" rows="3"></textarea>
                        </div>
                        <button id="btnCreateCalender" type="submit" class="btn btn-gold mt-3 w-100">Gửi đi</button>
                    </div>
                </div>

                <div class="col-12 col-lg-5 d-flex flex-column gap-3 ps-lg-5 text-center text-lg-start mt-3 mt-lg-0">
                    <h4 class="text-uppercase text-brown fw-semibold mb-3">
                        công ty tnhh du lịch và sự kiện duclong global
                    </h4>
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-3 fs-5">
                        <i class="fas fa-map-marker-alt text-brown"></i>
                        36/80 Xuân Thuỷ, Quận Nam Từ Liêm, Hà Nội
                    </div>
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-3 fs-5">
                        <i class="fas fa-phone text-brown"></i>
                        0948594444
                    </div>
                    
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-3 fs-5">
                        <i class="fas fa-envelope text-brown"></i>
                        contact@duclong.com
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>