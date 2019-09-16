<?php
require_once 'dashboard/dash_header.php';
 ?>

 <section class="text-white has-overlay blue4 responsive">
                <div class="container">
                    <div class="p-t-b-50 ">
                        <h2> BANNER <small>Control Panel</small></h2></div>
                </div>
            </section>

<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Add Banner</h2>
  </div>
  <form  action="banner_post.php" method="post" enctype="multipart/form-data">
    <div class="col-lg-12" style="margin-bottom:20px;">
      <input type="file" name="banner" class="form-control">
    </div>
    <div class="col-lg-12">
      <label for="">select status</label>
      <select name="status">
        <option value="1">Active</option>
        <option value="0">Deactive</option>
      </select>
    </div>
    <div class="col-lg-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
