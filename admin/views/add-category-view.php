<form action="" method="POST">

        <div class="form-group">
            <label for="ctg_name">Category Name</label>
            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
            <label for="ctg_des">Category Description</label>
            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
            <label for="ctg_status">Category Status</label>
             <select name="ctg_status" class="form-control">
                <option class="Disabled" value="selected">Select</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
             </select>
        <input type="submit" value="Add Category" name="ctg_btn" class="btn btn-primary  mt-2" >
        </div>
</form>