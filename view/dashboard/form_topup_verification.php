<?php ?>


<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Form Accept or Reject Top Up</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <table id="myTabletopup" class="display compact">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Tanggal</th>
                                <th>Member ID</th>
                                <th>Amount</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $topupDao = new TopupDao();
                            $topups = $topupDao->getAllTopupBelumProses();
                            $member = new Member();
                            $memberDao = new MemberDao();

                            /* @var $topup Topup*/

                            foreach ($topups as $topup){
                                $member->setMemberId($topup["tbMember_member_id"]);
                                $result = $memberDao->getMemberById($member);
                                echo '<tr align="center">';
                                echo '<td>' . $topup["Topup_id"] . '</td>';
                                if (!empty($topup["Topup_image"])) {
                                    echo '<td> <img src="../../' . $topup["Topup_image"] . '" width="100" height="100" alt="Photo" class="photo-list"> </td>';
                                }
                                else {
                                    echo '<td width="100" height="100">';
                                }
                                echo '<td>' . $topup["Topup_tanggal"] . '</td>';
                                echo '<td>' . $result->getMemberUsername() . '</td>';

                                echo '<td>' . $topup["Topup_amount"] . '</td>';

                                $cek = $topup["Topup_status"];
                                if($cek=="1"){
                                    echo "Berhasil di Topup";
                                }elseif ($cek=="0"){
                                    echo "Topup Ditolak";
                                }else {
                                    echo '<td><button onclick="accTopup(\'' . $topup["Topup_id"]  . '\')">Accept</button>';
                                    echo '<button onclick="rejectTopup(\'' . $topup["Topup_id"]  . '\')">Reject</button></td>';

                                }
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
