<?php
	
	if(isset($_POST['export_excel']))
	{
		$fromd=$_POST['fromd'];
		$fromm=$_POST['fromm'];
		$fromy=$_POST['fromy'];
		$tod=$_POST['tod'];
		$tom=$_POST['tom'];
		$toy=$_POST['toy'];
		$fdate=$fromy.'-'.$fromm.'-'.$fromd.' 00:00:00';			
		$tdate=$toy.'-'.$tom.'-'.$tod.' 23:59:59';			
		$connect=mysqli_connect("localhost","root","","online hra claim system");
        header("content-type:text/csv;charset=utf-8");
        header("content-Disposition:attachment; filename=download.csv");
        $output=fopen("php://output","w");
        fputcsv($output, array('CPF.NO','EMPLOYEE NAME','APPLICATION_ID','REMARKS','TIME_STAMP','CURRENT USER','CURRENT STATUS','PROOF FILE NAME'));
        $query="SELECT * FROM hra_claim_workflow WHERE `current_status`='A' and `cur_user`='T'and `time_stamp` BETWEEN '$fdate' AND '$tdate' ";
        $result=mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            fputcsv($output, $row);
        }           
        fclose($output);

	}
?>




