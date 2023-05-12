<!-- Display total mini club, club room, royal club, book now start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-hotel fa-2x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-nowrap">Mini Club</p>
                    <h6 class="mb-0"><?= $miniclub; ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-hotel fa-2x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-nowrap">Club Room</p>
                    <h6 class="mb-0"><?= $clubroom; ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-hotel fa-2x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 w text-nowrap">Royal Club</p>
                    <h6 class="mb-0"><?= $royalclub; ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-book-open fa-2x  text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 text-nowrap">Book Now</p>
                    <h6 class="mb-0"><?= $bookNow; ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Display total mini club, club room, royal club, book now End -->


<!-- Recent Book now Start -->
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4">Recent Book Now</h6>
                <div class="table-responsive">

                    <table class="table align-middle table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th width="30" scope="col">#</th>
                                <th class="text-nowrap" scope="col">Check In Date</th>
                                <th class="text-nowrap" scope="col">Check Out Date</th>
                                <th class="text-nowrap" scope="col">First Name</th>
                                <th class="text-nowrap" scope="col">Last Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Children</th>
                                <th scope="col">Adults</th>
                                <th scope="col">Room</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = '1';
                            foreach ($booknow as $row) {
                            ?>
                                <tr class="royal-club">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['checkin_date'] ?></td>
                                    <td><?php echo $row['checkout_date'] ?></td>
                                    <td><?php echo $row['fname'] ?></td>
                                    <td><?php echo $row['lname'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['childrens'] ?></td>
                                    <td><?php echo $row['adults'] ?></td>
                                    <td><?php echo $row['room_name'] ?></td>
                                    <td>
                                        <a type="submit" href="<?= base_url('booknow/delete/' . $row['id']) ?>" class="royal-btn btn btn-danger btn-sm ml-2 text-nowrap">
                                            <li class="far fa-trash-alt"></li> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php $i++;
                            }  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table End -->
<!-- Recent Book now End -->