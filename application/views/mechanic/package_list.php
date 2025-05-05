<?php    
    
    $this->load->view('mechanic/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>

<style type="text/css">
.primary__btn {
    border-radius: 0.5rem !important;
}

.animated_btn {
    position: relative;
    overflow: hidden;
    padding: 5px 20px;
    font-size: 12px;
    text-transform: uppercase;
    border-radius: 5px;
    border: none;
    background-color: #dc3545;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Wave Animation */
.animated_btn::before {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);

    transform: scale(0);
    animation: wave 3s infinite;

    pointer-events: none;

    top: 50%;
    left: 50%;
    width: 100px;

    height: 100px;


}


@keyframes wave {
    0% {
        transform: scale(0);
        opacity: 1;
    }

    50% {
        transform: scale(2);

        opacity: 0.3;

    }

    100% {
        transform: scale(4);

        opacity: 0;

    }
}

.title_3d {
    text-shadow: 0 13.36px 8.896px #482c2c, 0 -2px 1px #ffffff;
    text-transform: uppercase;

    color: #6b4040;
}

.table-wrapper {
    border-radius: 5px;
    border: 1px solid rgb(21, 94, 117);
}

tbody tr:nth-child(odd) {
    background-color: light-dark(rgba(0 0 0 / 0.05), rgba(255 255 255 / 0.1));
}

tbody tr:hover td {
    background-color: rgb(249, 240, 240);
}

th {
    padding: 0.25rem 0.75rem;
}

td {
    padding: 0.5rem 0.75rem;
    transition: background-color 150ms ease-in-out;
}

thead {
    background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
}

.cart__table--header__list {
    padding: 2rem 2rem 2rem 2rem;
    color: white;
}

.cart__table--body__list {
    border-bottom: 1px solid var(--border-color);
    padding: 2rem 2rem 2rem 2rem;
}

.cart__content--title a {
    color: blue;
    font-family: emoji;
}

.badge-beat {
    display: inline-block;
    padding: 5px 15px;
    background-color: #ff6347;
    color: white;
    border-radius: 12px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    animation: beat 2s infinite;
}


@keyframes beat {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.1);
    }

    100% {
        transform: scale(1);
    }
}

.primary__btn_outlined {

    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.cart__table--header__list {
    padding: 10px;
    text-align: left;
    font-weight: bold;
    font-size: 1.3rem;

}
</style>


<div class="row" style="margin-bottom: 20px;">
    <div class="col-12 p-3 d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
    border-radius: 10px;">


        <h2 class="pl_0 title_3d"><?=$heading ?></h2>
        <div class="text-end">
            <a href="<?=base_url('mechanic/package_add') ?>" class="contact__form--btn animated_btn" type="submit">
                <span>Add</span></a>
        </div>


    </div>
</div>

<div class="row">

    <div class="card shadow-lg" style="padding: 0;">
        <div class="card-header" style="padding: 20px 10px;">
            <form method="post">
                <div class="hstack d-flex gap-3">
                    <input class="contact__form--input" value="<?=@$_SESSION['pk_search']['searches'] ?>"
                        name="searches" placeholder="Search by Package / Service Name & Info" type="text"
                        style="height: 40px;">

                    <div class="text-start">
                        <button class="contact__form--btn animated_btn" type="submit" style="height: 4rem;">
                            <span>Search</span></button>



                    </div>

                    <div class="text-start">

                        <a href="?reset=Y" class="contact__form--btn animated_btn">Reset</a>


                    </div>
                </div>

            </form>
        </div>

        <div class="card-body">
            <table class="table" style="border-collapse: collapse; width: 100%;">
                <thead class="cart__table--header" style="border-bottom: 2px solid #ddd;">
                <tr class="cart__table--header__items">
                        <!-- <th style="text-align: left; padding: 8px;">
                                    <i class="fas fa-hashtag"></i>Sl.
                                </th> -->
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;">
                            <i class="fas fa-list"></i> Category
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;">
                            <i class="fas fa-box"></i> Package
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;">
                            <i class="fas fa-tag"></i> Price
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;">
                            <i class="fas fa-percent"></i> Offer Price
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;">
                            <i class="fas fa-info-circle"></i> Info
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;">
                            <i class="fas fa-cogs"></i> Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $i = 0;
                            foreach ($mypack as $dd) {
                                $i++;
                            ?>
                    <tr style="border-bottom: 1px solid #eee;">
                        <!-- <td style="padding: 8px;"><?= $i; ?></td> -->
                        <td style="padding: 8px;"><?= $dd->cat_nm ?></td>
                        <td style="padding: 8px;"><?= $dd->name ?></td>
                        <td style="padding: 8px;"><?= $dd->mrp_price ?></td>
                        <td style="padding: 8px;"><?= $dd->offer_price ?></td>
                        <td style="padding: 8px;"><?= $dd->offer_text ?></td>
                        <td style="padding: 8px;">
                            <a href="<?=base_url('mechanic/package_edit/'.spl_encode($dd->id)) ?>"
                                style="color: #007bff; text-decoration: none;" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?=base_url('mechanic/package_delete/'.spl_encode($dd->id)) ?>"
                                style="color: #dc3545; text-decoration: none; margin-left: 10px;" title="Delete"
                                onclick="return confirm('Are you sure you want to delete this package?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                            }
                            ?>
                </tbody>
            </table>
        </div>


    </div>

</div>








<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>