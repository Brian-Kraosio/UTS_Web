<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Editing Piano Data
                </div>
                <div class="card-body">
                    <?php if(validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div> 
                    <?php endif ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="inst_type">Piano type</label>
                            <select class="form-cotrol" name="inst_type" id="inst_type" >
                            <?php foreach ($inst_type as $key) :?>
                                    <?php if($key == $piano['inst_type']) : ?>
                                        <option value="<?= $key ?>" selected><?=$key?></option>
                                    <?php else : ?>
                                <option value="<?= $key ?>"><?=$key?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="item_name">Instrument Name</label>
                            <input type="text" name="item_name" class="form-control" id="item_name" placeholder="Instrument Name" value="<?=$piano['item_name']?>">
                        </div>
                        <div class="form-group">
                            <label for="color">Colour</label>
                            <select class="form-cotrol" name="color" id="color">
                            <?php foreach ($color as $key) :?>
                                    <?php if($key == $piano['color']) : ?>
                                        <option value="<?= $key ?>" selected><?=$key?></option>
                                    <?php else : ?>
                                <option value="<?= $key ?>"><?=$key?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                        </div>
                        <div class="form-group">
                            <label for="spec">Specification</label>
                            <input type="text" name="spec" class="form-control" id="spec" placeholder="Speculation" value="<?=$piano['spec']?>">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Price of the Instrument" value="<?=$piano['price']?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-warning float-right">Submit</button> <a href="<?= base_url();?>admin/piano" class="btn btn-danger">Go back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>