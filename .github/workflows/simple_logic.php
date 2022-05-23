<?php 
	
	if(isset($_POST['datetime_start'])) {
		$datetime_start = $_POST['datetime_start'];
		$datetime_from = $_POST['datetime_from'];
		$datetime_to = $_POST['datetime_to'];
		$label = $_POST['label'];

		$time_start = '2021-11-29T11:00:00-05:00';

		$datetime_start = Date('Y-m-d h:i:s');
		$datetime_from = Date('Y-m-d h:i:s');
		$datetime_to = Date('Y-m-d h:i:s');

		$status = '';
		$message = '';
		$available = '';

		if ($datetime_start != $time_start  && $datetime_from = '' && $datetime_to = ''){
			$data[] = array(
			  'status'   => 'success',
			  'message'   => 'The datetime_start is available.',
			  'available'   => true
			 );
			echo json_encode($data);
		} elseif ($datetime_start == $time_start  && $datetime_from != '' && $datetime_to != ''){
			$data[] = array(
			  'status'   => 'success',
			  'message'   => 'The datetime_start is not available.',
			  'available'   => false
			 );
			echo json_encode($data);
		} else {
			$data[] = array(
			  'status'   => 'error',
			  'message'   => 'The datetime_start is not valid.',
			  'available'   => false
			 );
			echo json_encode($data);
		}

	}

?>