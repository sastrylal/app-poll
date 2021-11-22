<div class="container-fluid">
    <?php getMessage(); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Poll Votes</h6>
        </div>
        <div class="card-body">
            <h4>Poll : <?php echo!empty($poll['poll_title']) ? $poll['poll_title'] : ""; ?></h4>
            <div class="text-right"></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vode</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($poll_votes)) { ?>
                        <?php foreach ($poll_votes as $poll_vote) { ?>
                        <tr>
                            <td><?php echo $poll_vote['vote_id']; ?></td>
                            <td><?php echo!empty($poll_vote['vote']) ? "Yes" : "No"; ?></td>
                            <td><?php echo $poll_vote['created_on']; ?></td>
                        </tr>
                        <?php } ?><?php } else { ?>
                        <tr>
                            <td colspan="5">No records found.</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <?php echo $PAGING; ?>
                </div>
            </div>
        </div>
    </div>
</div>