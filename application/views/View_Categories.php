<?php
 echo $judul;
 
 $this->table->set_heading('No', 'Category Name', 'Description','Action');
 
 $no=0;
 foreach($categories as $row):
	$no++;
	$this->table->add_row($no,$row->CategoryName, $row->Description, 'Delete');
	
	$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
	);
	
	$url = site_url('Beranda/delete/' .$row

	$this->table->set_template($template);
 
 endforeach;
 
 echo $this->table->generate();
?>