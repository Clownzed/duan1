<?php

include_once "./controller/prd.php";
include_once "./model/prd.php";
include_once "./model/cate.php";
$cate = show_cate();
if (is_array($prd)) {
    extract($prd);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <style>
        html,
        body,
        .intro {
            height: 100%;
        }

        @media (min-width: 550px) and (max-width: 750px) {

            html,
            body,
            .intro {
                height: 750px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            .intro {
                height: 750px;
            }
        }

        .mask-custom {
            backdrop-filter: blur(15px);
            background-color: rgba(255, 255, 255, .2);
            border-radius: 3em;
            border: 2px solid rgba(255, 255, 255, .1);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }
    </style>
</head>

<body>

    <section class="intro">
        <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/glassmorphism-article/img5.jpg');">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6">
                            <div class="card mask-custom">
                                <div class="card-body p-5 text-white">

                                    <div class="my-4">

                                        <h2 class="text-center mb-5">Cập nhập sản phẩm</h2>

                                        <form action="index.php?act=update_prd" method="POST" enctype="multipart/form-data">
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <input type="hidden" name="id_prd" value="<?= $prd['id_prd'] ?>">
                                            <input type="hidden" name="img_prd" value="../image/img_prd/<?= $prd['img_prd'] ?>">
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-4">
                                                    <label class="form-label" for="form3Example1">Tên Loại hàng </label>
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Example1" class="form-control form-control-lg" name="name_prd" value="<?= $prd['name_prd'] ?>" />

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb-4">
                                                    <label class="form-label" for="form3Example2">Giá loại hàng</label>
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Example2" class="form-control form-control-lg" name="price_prd" value="<?= $prd['price_prd'] ?>" />

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Email input -->
                                            <label class="form-label" for="form3Example3">Mô tả</label>
                                            <div class="form-outline form-white mb-4">

                                                <textarea id="form3Example3" cols="10" rows="5" class="form-control form-control-lg" name="desc_prd"><?= $prd['desc_prd'] ?></textarea>

                                            </div>

                                            <!-- Password input -->
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-4">
                                                    <label class="form-label" for="form3Example3" style="color: white;">Danh mục</label>
                                                    <select class="form-select" aria-label="Default select example" name="id_cate">
                                                        <?php foreach ($cate as $item) : ?>
                                                            <option value="<?= $item['id_cate'] ?>" <?= ($item['id_cate'] == $id_cate ? 'selected' : '') ?>><?= $item['name_cate'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-6 mb-4">
                                                    <label class="form-label" for="form3Example3" style="color: white;">Ảnh sản phẩm</label>
                                                    <input type="file" name="img_prd" id="">
                                                </div>
                                            </div>


                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" checked />
                                                <label class="form-check-label" for="form2Example3">
                                                    Subscribe to our newsletter
                                                </label>
                                            </div>

                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-light btn-block mb-4" name="btn_update_prd">Cập nhập sản phẩm</button>

                                            <!-- Register buttons -->
                                            <div class="text-center">
                                                <p>or sign up with:</p>
                                                <button type="button" class="btn btn-light btn-floating mx-1">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>

                                                <button type="button" class="btn btn-light btn-floating mx-1">
                                                    <i class="fab fa-google"></i>
                                                </button>

                                                <button type="button" class="btn btn-light btn-floating mx-1">
                                                    <i class="fab fa-twitter"></i>
                                                </button>

                                                <button type="button" class="btn btn-light btn-floating mx-1">
                                                    <i class="fab fa-github"></i>
                                                </button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>