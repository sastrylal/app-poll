<div class="container-fluid">
    <?php getMessage(); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Polls</h6>
        </div>
        <div class="card-body">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="key" placeholder="Key"
                        value="<?php echo!empty($_GET['key']) ? $_GET['key'] : ""; ?>" />
                </div>
                <div class="form-group mb-2 mx-sm-2">
                    <input type="submit" class="btn btn-primary" value="Search" />
                    <a href="/admin/managePolls/" class="btn mx-sm-2 btn-primary">Reset</a>
                </div>
            </form>
            <div class="text-right">
                <a href="/admin/managePoll/" class="btn mx-sm-2 btn-primary">Add</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Vote</th>
                            <th style="width: 180px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($polls)) { ?>
                        <?php foreach ($polls as $poll) { ?>
                        <tr>
                            <td><?php echo $poll['poll_id']; ?></td>
                            <td><?php echo!empty($poll['poll_title']) ? substr($poll['poll_title'], 0, 90) : ""; ?></td>
                            <td>
                                <?php echo (!empty($poll['is_active']) && $poll['is_active'] == "1") ? "Active" : "Inactive"; ?>
                            </td>
                            <td><?php echo $poll['vote_cnt']; ?></td>
                            <td>
                                <a href="/admin/managePollVotes/<?php echo $poll['poll_id']; ?>/"
                                    class="btn btn-link"><i class="fas fa-list"></i></a>
                                <a href="/admin/managePoll/<?php echo $poll['poll_id']; ?>/" class="btn btn-link"><i
                                        class="fas fa-edit"></i></a>
                                <a href="/admin/managePollDel/<?php echo $poll['poll_id']; ?>/" class="btn btn-link"
                                    onclick="return confirm('Do you want to delete this item?');"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
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