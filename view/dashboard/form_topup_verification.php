<?php ?>


<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Add Film</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <table id="myTable" class="display compact">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Tanggal</th>
                                <th>Member ID</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            /* @var $topup Topup*/
                            foreach ($topups as $topup)
                            {
                                echo '<tr align="center">';
                                echo '<td>' . $topup->getTopupId() . '</td>';
                                if (!empty($topup->getTopupImage())) {
                                    echo '<td> <img src="../../' . $topup->getTopupImage() . '" width="100" height="100" alt="Photo" class="photo-list"> </td>';
                                }
                                else {
                                    echo '<td width="100" height="100">';
                                }
                                echo '<td>' . $topup->getTopupTanggal() . '</td>';
                                echo '<td>' . $topup->getTbMemberMemberId() . '</td>';
                                echo '<td>' . $topup->getTopupStatus() . '</td>';
                                echo '<td>' . $topup->getTopupAmount() . '</td>';
                                echo '<td><button onclick="acceptTopup(\'' .$topup->getTopupId() . '\');">Delete</button><button onclick="rejectTopup(' . $topup->getTopupId() .')">Update</button></td>';

                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
