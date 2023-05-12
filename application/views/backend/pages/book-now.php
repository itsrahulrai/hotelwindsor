<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4">Book Now</h6>
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