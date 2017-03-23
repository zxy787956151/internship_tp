<?php 
	function test($data)
	{
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

/* 数组转xls格式的excel文件
 * @param  array  $data      需要生成excel文件的数组
 * @param  string $filename  生成的excel文件名
 *      示例数据：
        $data = array(
            array(NULL, 2010, 2011, 2012),
            array('Q1',   12,   15,   21),
            array('Q2',   56,   73,   86),
            array('Q3',   52,   61,   69),
            array('Q4',   30,   32,    0),
           );
 */
	function create_xls($data,$filename='simple.xls'){
	    ini_set('max_execution_time', '0');
	    Vendor('PHPExcel.PHPExcel');
	    $filename=str_replace('.xls', '', $filename).'.xls';
	    $phpexcel = new PHPExcel();
	    $phpexcel->getProperties()
	        ->setCreator("Maarten Balliauw")
	        ->setLastModifiedBy("Maarten Balliauw")
	        ->setTitle("Office 2007 XLSX Test Document")
	        ->setSubject("Office 2007 XLSX Test Document")
	        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
	        ->setKeywords("office 2007 openxml php")
	        ->setCategory("Test result file");
	    $phpexcel->getActiveSheet()->fromArray($data);
	    $phpexcel->getActiveSheet()->setTitle('Sheet1');
	    $phpexcel->setActiveSheetIndex(0);
	    header('Content-Type: application/vnd.ms-excel');
	    header("Content-Disposition: attachment;filename=$filename");
	    header('Cache-Control: max-age=0');
	    header('Cache-Control: max-age=1');
	    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	    header ('Pragma: public'); // HTTP/1.0
	    $objwriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel5');
	    $objwriter->save('php://output');
	    exit;
	}

	function findChild(&$arr,$id){
	  $childs=array();
	  foreach ($arr as $k => $v){
	   if($v['pid']== $id){
	    $childs[]=$v;
	   }
	  }
	  return $childs;
	 }
	 
	 function build_tree($rows,$root_id){
	  $childs=findChild($rows,$root_id);
	  if(empty($childs)){
	   return null;
	  }
	 foreach ($childs as $k => $v){
	  $rescurTree=build_tree($rows,$v['id']);
	  if( null != $rescurTree){
	  $childs[$k]['child']=$rescurTree;
	  }
	 }
	  return $childs;
 	}


 	function arr_foreach ($arr)
	{
	    foreach ($arr as $key => $val )
	    {
	        if ($val['pid']!=0)
	        {
	            arr_foreach ($val['childs']);
	        }
	        else
	        {
	            echo $val['name'].'<br/>';
	        }
	    }
	}

	function zxy_foreach($arr,$level,$num){
		//$num参数为计数器 无特别作用 但必须

		//BUG!!!!!!!!!!!!!!!!!!!
		foreach ($arr as $k => $v) {
						if ($v['level'] == 0) {
							$num = 0;
						}
						if (isset($v['child'])) {
								echo "
									<li class='grid'>
										<a href='".U('Product/index',array('id'=>$v['id']))."'>".$v['name']."</a>
										<div class='mepanel'>
											<div class='row'>
												
													<div class='col1 me-one'>
														<h4>Shop</h4>
														<ul>
								";
								$num ++;
								$fun = zxy_foreach($v['child'],$level+1,$num);
						}else{
							echo "
									<li class='grid'>
										<a href='".U('Product/index',array('id'=>$v['id']))."'>".$v['name']."</a>
										<div class='mepanel'>
											<div class='row'>
													<div class='col1 me-one'>
														<h4>Shop</h4>
														<ul>
														</ul>
													</div>
											</div>
										</div>
									</li>
								";
							if($v['level']==0 && !isset($arr["$k+1"])){
								//下一个数组元素的level是0,即此元素是这个顶级元素的最后一级子元素的最后一个元素
								for($i=0;$i<2;$i++){
									echo "
															</ul>
														</div>
												</div>
											</div>
										</li>
									";
								}	
							}	
						}			
					}
	}

	function array_remove_key($array, $keys) 
	{ 
		$num = count($keys); 
		$num_last = $num - 1; 
		$this_array_0 = &$array; 
		$last_key = $keys[$num_last]; 
		for ($i = 0; $i < $num_last; $i++) 
		{ 
		$this_key = $keys[$i]; 
		$this_var_name = 'this_array_' . $i; 
		$next_var_name = 'this_array_' . ($i + 1); 
		if (!array_key_exists($this_key, $$this_var_name)) { 
		break; 
		} 
		$$next_var_name = &${$this_var_name}[$this_key]; 
		} 
		unset(${$next_var_name}[$last_key]); 
		return $array; 
	} 



 ?>