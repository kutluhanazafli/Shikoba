<!-- Edit Product -->
<div class="modal fade" id="editproduct<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Product</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editproduct.php?product=<?php echo $row['id']; ?>" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Product Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $row['pname']; ?>" name="pname">
                            </div>
                        </div>
                    </div>
                        <div class="form-group" style="margin-top:10px;">
                            <div class="row">
                                <div class="col-md-3" style="margin-top:7px;">
                                    <label class="control-label">Product Description:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $row['pdescription']; ?>" name="pdescription">
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Category:</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="category">
                                    <option value="<?php echo $row['categoryid']; ?>"><?php echo $row['catname']; ?></option>
                                    <?php
                                        $sql="select * from category where categoryid != '".$row['categoryid']."'";
                                        $cquery=$conn->query($sql);

                                        while($crow=$cquery->fetch_array()){
                                            ?>
                                            <option value="<?php echo $crow['categoryid']; ?>"><?php echo $crow['catname']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Price:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $row['price']; ?>" name="price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Photo:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="image">
                            </div>
                        </div>
                    </div>
                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Update</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Delete Product -->
<div class="modal fade" id="deleteproduct<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo $row['pname']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <a href="delete_product.php?product=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>