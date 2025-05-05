<?php
include ('inc/header.php');

?>


<link href="<?= base_url() ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?= base_url() ?>/slimcrop/slim/slim.kickstart.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>




<div class="page-content">
    <div class="container-fluid">


        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                        <a href="<?= base_url('admin/product') ?>" class="btn btn-danger" style="float:right;">Back</a>
                        <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">
                            <?= (isset($ptyp) && $ptyp == 'edit') ? 'Edit' : 'Add' ?> Product</h4>
                    </div>
                </div>
            </div>
        </div>







        <form method="post" role="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body" style=" min-height: 500px;">


                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label>Category*</label>
                                    <div class="col-md-12">
                                        <select name="cat_id" required class="form-select form-control">
                                            <option value="">Select Category* </option>
                                            <?php
                                                    foreach ($parent_categories as $category):
                                                        $sel = '';
                                                        if (isset($info->cat_id) && $info->cat_id == $category->id) {
                                                            $sel = 'selected';
                                                        }
                                                        ?>
                                            <option <?= $sel ?> value="<?= $category->id; ?>"><?= $category->name; ?>
                                            </option>
                                            <?php
                                                        $myl2 = array_search_multidim($l2_categories, 'parent_id', $category->id);
                                                        foreach ($myl2 as $kv) {
                                                            $sel = '';
                                                            if (isset($info->cat_id) && $info->cat_id == $kv->id) {
                                                                $sel = 'selected';
                                                            }
                                                            ?>
                                            <option <?= $sel ?> value="<?= $kv->id; ?>">--<?= $kv->name; ?></option>
                                            <?php
                                                            $myl3 = array_search_multidim($l2_categories, 'parent_id', $kv->id);
                                                            foreach ($myl3 as $kv3) {
                                                                $sel = '';
                                                                if (isset($info->cat_id) && $info->cat_id == $kv3->id) {
                                                                    $sel = 'selected';
                                                                }
                                                                ?>
                                            <option <?= $sel ?> value="<?= $kv3->id; ?>">-- -- <?= $kv3->name; ?>
                                            </option>
                                            <?php
                                                            }
                                                        }
                                                        ?>

                                            <?php
                                                    endforeach;
                                                    ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Brand </label>
                                    <div class="col-md-12">
                                        <select name="brand_id" class="form-select form-control">
                                            <option value="">Select Brand</option>
                                            <?php
                                                    foreach ($brands as $bb) {
                                                        $sel = '';
                                                        if (isset($info->brand_id) && $info->brand_id == $bb->id) {
                                                            $sel = 'selected';
                                                        }
                                                        ?>
                                            <option <?= $sel ?> value="<?= $bb->id; ?>"><?= $bb->name; ?></option>


                                            <?php
                                                    }
                                                    ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Name*</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" id="name" value="<?= @$info->name ?>" required
                                            placeholder="Type something" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Url Slug*</label>
                                    <div class="col-md-12">
                                        <input type="text" name="urlslug" value="<?= @$info->urlslug ?>" id="name_url"
                                            required placeholder="Type something" class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <label>Car Maker</label>
                                    <select id="manufacturer" class="form-select form-control"
                                        name="car_manufacturer_id">
                                        <option value="" disabled selected>Select Car</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Model</label>
                                    <select id="model" class="form-select form-control" name="car_model_id">
                                        <option value="" disabled selected>Car Model</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Fuel</label>
                                    <select class="form-select form-control" name="fuel_type_id">
                                        <option value="" disabled selected>Fuel Type</option>
                                        <?php
                                                        foreach ($fuel_type as $cft) {
                                                            $selg = '';
                                                            if (isset($info->fuel_type_id) && $info->fuel_type_id == $cft->id) {
                                                                $selg = 'selected';
                                                            }
                                                            echo '<option ' . $selg . ' value="' . $cft->id . '">' . $cft->name . '</option>';
                                                        }
                                                        ?>
                                    </select>
                                </div>



                                <div class="col-md-2">
                                    <label>TransMission</label>
                                    <select class="form-select form-control" name="transmission">
                                        <option value="">Select</option>
                                        <option
                                            <?= (isset($info->transmission) && $info->transmission == 'Manual') ? 'selected' : '' ?>
                                            value="Manual">Manual</option>
                                        <option
                                            <?= (isset($info->transmission) && $info->transmission == 'Automatic') ? 'selected' : '' ?>
                                            value="Automatic">Automatic</option>

                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Year Of Mfg</label>
                                    <select class="form-select form-control" name="year_of_mfg">
                                        <option value="">Select</option>

                                        <?php
                                                        for ($i = 2010; $i < date('Y'); $i++) {
                                                            $selz = (isset($info->year_of_mfg) && $info->year_of_mfg == $i) ? 'selected' : '';
                                                            echo '<option ' . $selz . '  value="' . $i . '" >' . $i . '</option>';
                                                        }

                                                        ?>

                                    </select>
                                </div>






                            </div>


                            <div class="form-group row">
                                <label>Info</label>

                                <div class="col-md-12">
                                    <textarea id="editor1" required style="height:100px;" name="product_info"
                                        class="form-control"><?= @$info->product_info ?></textarea>
                                </div>
                            </div>





                            <div class="row">


                                <div class="col-md-4" style="float: left;">
                                    <div class="form-group">
                                        <label>Thumbnail (840X560)*</label>

                                        <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                            data-ratio="840:560" data-size="840,560">


                                            <?php
            if (isset($info->thumb)) {
                $img_url = $info->thumb;
                if (@getimagesize($img_url)) {
                    echo '<img src="' . $img_url . '" class="img-thumbnail" alt="avatar">';
                }
            }
            ?>




                                            <input type="file" name="thumb" required>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4" style="float: left;">
                                    <div class="form-group">
                                        <label>Pic1 (840X560)*</label>
                                        <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                            data-ratio="840:560" data-size="840,560">
                                            <?php
            if (isset($info->pic1)) {
                $img_url = $info->pic1;
                if (@getimagesize($img_url)) {
                    echo '<img src="' . $img_url . '" class="img-thumbnail" alt="avatar">';
                }
            }
            ?>
                                            <input type="file" name="pic1" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pic2 -->

                                <div class="col-md-4" style="float: left;">
                                    <div class="form-group">
                                        <label>Pic2 (840X560)*</label>
                                        <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                            data-ratio="840:560" data-size="840,560">
                                            <?php
            if (isset($info->pic2)) {
                $img_url = $info->pic2;
                if (@getimagesize($img_url)) {
                    echo '<img src="' . $img_url . '" class="img-thumbnail" alt="avatar">';
                }
            }
            ?>
                                            <input type="file" name="pic2" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pic3 -->

                                <div class="col-md-4" style="float: left;">
                                    <div class="form-group">
                                        <label>Pic3 (840X560)*</label>
                                        <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                            data-ratio="840:560" data-size="840,560">
                                            <?php
            if (isset($info->pic3)) {
                $img_url = $info->pic3;
                if (@getimagesize($img_url)) {
                    echo '<img src="' . $img_url . '" class="img-thumbnail" alt="avatar">';
                }
            }
            ?>
                                            <input type="file" name="pic3" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="float: left;">
                                    <div class="form-group">
                                        <label>Pic4 (840X560)*</label>
                                        <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                            data-ratio="840:560" data-size="840,560">
                                            <?php
            if (isset($info->pic4)) {
                $img_url = $info->pic4;
                if (@getimagesize($img_url)) {
                    echo '<img src="' . $img_url . '" class="img-thumbnail" alt="avatar">';
                }
            }
            ?>
                                            <input type="file" name="pic4" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


        </form>




























        <script type="text/javascript">
        var feature = 'd_drop';
        var d_drop_id = '<?= @$info->car_manufacturer_id ?>';
        var scnd_drop_id = '<?= @$info->car_model_id ?>';
        </script>

        <?php
include ('inc/footer.php');

?>
        <script src="<?= base_url() ?>lokscript.js?v=<?= rand() ?>"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#name").keyup(function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace('/\s/g', '-');
                Text = Text.replace(/ /g, '-');
                Text = Text.replace(/[^\w-]+/g, '');
                Text = Text.replace(/-{2,}/g, '-');



                $("#name_url").val(Text);
            });
        });
        </script>


        <script>
        var editor = CKEDITOR.replace('editor1', {
            allowedContent: true,
            height: 500,
            filebrowserBrowseUrl: "<?= base_url() ?>ckfinder/ckfinder.html",
            filebrowserImageBrowseUrl: "<?= base_url() ?>ckfinder/ckfinder.html?type=Images",
            filebrowserFlashBrowseUrl: "<?= base_url() ?>ckfinder/ckfinder.html?type=Flash",
            filebrowserUploadUrl: "<?= base_url() ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "<?= base_url() ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "<?= base_url() ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"

        });

        CKFinder.setupCKEditor(editor, {
            basePath: "<?= base_url() ?>ckfinder/",
            rememberLastFolder: false
        });
        </script>