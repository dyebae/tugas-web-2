<div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("index.php/orders/"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(1));?> 
          <a  href="<?php echo base_url("index.php/orders/tambah")?>" class="btn btn-success">Tambah Order</a>
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
          
            echo form_open('orders/', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', "");

              echo form_label('Search by:', 'order');
			  $options_order_by = array('nama_barang' => 'Nama Barang', 'merek' => 'Merek');
			  echo form_dropdown('search_by', $options_order_by, "", 'class="span1"');
			  
              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Go');

              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>
<div class="row">
        <div class="span12 columns">
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">No</th>
                <th class="yellow header headerSortDown">Nama</th>
                <th class="yellow header headerSortDown">Merek</th>
                <th class="yellow header headerSortDown">Banyaknya</th>
                <th class="yellow header headerSortDown">Harga</th>
                <th class="yellow header headerSortDown">Action</th>
              </tr>
            </thead>
            <tbody>
				<tr>
				<tbody>
              <?php
			  $no = 1;
              foreach($orders as $row)
              {
                echo '<tr>';
                echo '<td>'.$no++.'</td>';
                echo '<td>'.$row->nama_barang.'</td>';
                echo '<td>'.$row->merek.'</td>';
                echo '<td>'.$row->qty.'</td>';
                echo '<td>'.$row->harga.'</td>';
                echo '<td><a href="'.base_url()."index.php/orders/edit/".$row->id.'" class="btn btn-info">Edit</a> 
				<a href="'.base_url()."index.php/orders/hapus/".$row->id.'" class="btn btn-danger">Hapus</a></td>';
                
                echo '</tr>';
              }
              ?>      
            </tbody>
				</tr>
			</tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>
</div>