<div class="container-fluid">
    <?php getMessage(); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Poll -
                <?php echo!empty($poll['poll_id']) ? "Edit" : "Add"; ?></h6>
        </div>

        <div class="card-body">
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="poll_title" class="col-sm-3 text-right control-label col-form-label">Poll
                            Title</label>
                        <div class="col-sm-7">
                            <textarea required="true" class="form-control" rows="8"
                                name="poll_title"><?php echo!empty($poll['poll_title']) ? $poll['poll_title'] : ""; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="is_active" class="col-sm-3 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-3">
                            <select name="is_active" class="form-control">
                                <option value="1"
                                    <?php echo (isset($poll['is_active']) && $poll['is_active'] == "1") ? 'selected="true"' : ''; ?>>
                                    Active</option>
                                <option value="0"
                                    <?php echo (isset($poll['is_active']) && $poll['is_active'] == "0") ? 'selected="true"' : ''; ?>>
                                    Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right"></label>
                        <div class="col-sm-4">
                            <input type="hidden" name="poll_id"
                                value="<?php echo!empty($poll['poll_id']) ? $poll['poll_id'] : ""; ?>" />
                            <input type="submit" class="btn btn-primary"
                                value="<?php echo!empty($poll['poll_id']) ? "Update" : "Add"; ?>" />
                            <a href="/my/managePolls/" class="btn btn-primary">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>