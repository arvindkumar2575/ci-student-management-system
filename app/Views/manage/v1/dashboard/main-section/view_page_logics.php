<?php  //echo '<pre>';print_r($permissions);die; ?>

<?php 
if($uri3=='dashboard'){ 
    echo view('manage/v1/dashboard/main-section/dashboard');
}else if($uri3=='users'){
    echo view('manage/v1/dashboard/main-section/users');
}
?>