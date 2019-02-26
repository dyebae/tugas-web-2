<div class="container top">
<h2>Edit Order</h2>
<?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      echo form_open('orders/edit_proses', $attributes);
      ?>
	  <input type="hidden" name="id" value="<?php echo $order->id; ?>">
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Nama Barang</label>
            <div class="controls">
              <input type="text" id="" name="nama_barang" value="<?php echo $order->nama_barang; ?>">
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Merek</label>
            <div class="controls">
              <input type="text" name="merek" value="<?php echo $order->merek; ?>">
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Banyak Barang</label>
            <div class="controls">
              <input type="text" id="" name="qty"  value="<?php echo $order->qty; ?>">
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Harga</label>
            <div class="controls">
              <input type="text" id="" name="harga"  value="<?php echo $order->harga; ?>">
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Perbaharui</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>