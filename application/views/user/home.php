<?php
$data= $this->session->userdata();
echo '<ul>';
foreach ($data as $key => $val){
	echo '<li>'.$key.'=>'.$val.' </li>';
}

echo '<ul>';
