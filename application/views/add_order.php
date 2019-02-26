<div class="container top">
<h2>Tambah Order</h2>
<?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      echo form_open('orders/add_proses', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Nama Barang</label>
            <div class="controls">
              <input type="text" id="" name="nama_barang" required>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Merek</label>
            <div class="controls">
              <input type="text" name="merek" required>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Banyak Barang</label>
            <div class="controls">
              <input type="text" id="" name="qty"  required>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <div class="control-group">
            <label for="inputError" class="control-label">Harga</label>
            <div class="controls">
              <input type="text" id="" name="harga"  required>
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>