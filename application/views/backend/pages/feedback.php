<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4">Feedback</h6>
                <div class="table-responsive">

                    <table class="table align-middle table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Message</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = '1';
                            foreach ($feedback as $row) {
                            ?>
                                <tr class="royal-club">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['fname'] ?></td>
                                    <td><?php echo $row['lname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['message'] ?></td>
                                    <td>
                                        <a type="submit" href="<?= base_url('feed-back/delete/' . $row['id']) ?>" class="royal-btn btn btn-danger btn-sm ml-2 text-nowrap">
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