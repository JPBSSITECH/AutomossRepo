<?php    
    
    $this->load->view('customer/inc/headerv3');
?>

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
    font-size: 1.3rem;
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
</style>




<div class="row mb-5">


    <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
      border-radius: 10px;">
        <h2 class="pl_0 title_3d">Reviews</h2>
        <div class="text-end">

        </div>
    </div>


</div>


<div class="row">

    <div class="card-body table-responsive" style="padding: 10px 0;">


        <div class="cart__table table-wrapper">
            <!-- Table -->
            <table class="cart__table--inner">
                <thead class="cart__table--header">
                    <tr class="cart__table--header__items">

                        <th class="cart__table--header__list">
                            <i class="fas fa-heading"></i> Review
                        </th>

                        <th class="cart__table--header__list">
                            Rating
                        </th>

                        <th class="cart__table--header__list">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                            $i = 0;
                            foreach ($rvw as $dd) {
                            $i++;
                            ?>
                    <tr>
                        <!-- <td><?=$i; ?></td> -->
                        <td><?=$dd->review_text ?></td>
                        <td><?=$dd->rating ?> Star</td>

                        <td>
                            <a href="<?=$dd->link ?>" style="color: red;" title="View Details">
                                <i class="fas fa-eye"></i>
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
    
    $this->load->view('customer/inc/footerv3');
?>