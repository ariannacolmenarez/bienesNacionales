<?php 
	require('./assets/pdf/tcpdf.php');
	class pdfModel extends Conexion
	{
		public function __construct()
		{
			parent::__construct();
		}

        public static function pdfAsignacion(){

			$desde=date('Y/m/d',strtotime($_POST['desde']));
			$hasta=date('Y/m/d',strtotime($_POST['hasta']));
            
			$sql= "SELECT * FROM asignacion a inner join bienes b on b.codigo=a.codigo_bien
            inner join dependencias d on d.codigo_dependencia=a.codigo_dependencia   
            inner join asignacion_descripcion ad on ad.num_movimiento=a.num_movimiento  
            WHERE ad.fecha >= '$desde' AND ad.fecha <=  '$hasta'";
			$consulta= Conexion::conect()->prepare($sql);
			$consulta->execute();
			$resultado = $consulta->fetchALL(PDO::FETCH_OBJ);
	
		    

            $pdf=new TCPDF('p','mm','A4', true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Bienes Nacionales');
            date_default_timezone_set("America/Caracas");
            $today=date("d/m/Y", time());
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            $pdf->AddPage();
            // Table with rowspans and THEAD

		
            $pdf->SetFont('times','B',20);
            $pdf->Write(0, 'Bienes Nacionales', '', 0, 'C');
            $pdf->Ln(10);
        
            $pdf->SetFont('times','',12);
            $html='<div align="center"><img src="./assets/img/bienes.png" width="100px"></div>
		    <div align="center"><h2>Asignacion</h2></div>
            <div align="center"><h5 >Desde: '.$desde.' - Hasta: '.$hasta.'</h5></div><br>
	
                <table border="1">
	                <thead>
                        <tr>
                            <th align="center" style="color:#0000FF;"><h4><b>Movimiento</b></h4></th>
                            <th WIDTH="120" HEIGHT="20" align="center"align="center" style="color:#0000FF;"><h4><b>Bien</b></h4></th>
                            <th WIDTH="60" HEIGHT="20" align="center"align="center" style="color:#0000FF;"><h4><b>Fecha</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>Prestamo</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>Dependencia</b></h4></th>
                        </tr>
                    </thead>
                    <tbody>';
					    foreach ($resultado as $consulta){
                            $html.='<tr>
                                        <td  align="center"><h6>'.$consulta->num_movimiento.'</h6></td>
                                        <td WIDTH="120" HEIGHT="20" align="center"align="center"><h6>'.$consulta->nombre.'</h6></td>
                                        <td WIDTH="60" HEIGHT="20" align="center"align="center"><h6>'.$consulta->fecha.'</h6></td>
                                        <td align="center"><h6>'.$consulta->prestamo.'</h6></td>
                                        <td align="center"><h6>'.$consulta->dependencia.'</h6></td>
                                    </tr>';
						}
                    $html.='</tbody>
	            </table>
                <table style="border-spacing: 5px;">
                    <tr>
                        <td width="400" ></td>
                        <td width="100"><h5 align="left">Fecha: '.$today.'</h5></td>
                    </tr>
                </table>';

            $pdf->WriteHTMLCell(190,0,'','',$html,0);
            $pdf->Output();
	    }

        public static function pdfDesincorporar(){

			$desde=date('Y/m/d',strtotime($_POST['desde']));
			$hasta=date('Y/m/d',strtotime($_POST['hasta']));
            
			$sql= "SELECT * FROM desincorporar desing inner join bienes b on b.codigo=desing.codigo_bien
            inner join dependencias d on d.codigo_dependencia=desing.codigo_dependencia   
            WHERE desing.fecha >= '$desde' AND desing.fecha <=  '$hasta'";
			$consulta= Conexion::conect()->prepare($sql);
			$consulta->execute();
			$resultado = $consulta->fetchALL(PDO::FETCH_OBJ);
	
		    

            $pdf=new TCPDF('l','mm','A5 LANDSCAPE', true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Bienes Nacionales');
            date_default_timezone_set("America/Caracas");
            $today=date("d/m/Y", time());
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            $pdf->AddPage('L', 'A5 LANDSCAPE');
            // Table with rowspans and THEAD

		
            $pdf->SetFont('times','B',20);
            $pdf->Write(0, 'Bienes Nacionales', 0, 0, 'C');
            $pdf->Ln(8);
        
            $pdf->SetFont('times','',12);
            $html='      
        
            <img src="./assets/img/bienes.png" width="100px">
            <div align="center"><h2>Desincorporacion</h2></div>
		    
            <div align="center"><h5 >Desde: '.$desde.' - Hasta: '.$hasta.'</h5></div><br>
	
                <table  border="1" align="center">
	                <thead>
                        <tr style="border-bottom:2px solid #e5e5e5;">
                            <th  WIDTH="90" HEIGHT="20" align="center" style="color:#0000FF;"><h4><b>Movimiento</b></h4></th>
                            <th WIDTH="50" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>N Acta</b></h4></th>
                            <th WIDTH="100" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Bien</b></h4></th>
                            <th WIDTH="60" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Fecha</b></h4></th>
                            <th WIDTH="120" HEIGHT="20" align="center" style="color:#0000FF;"><h4><b>Concepto</b></h4></th>
                            <th WIDTH="100" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Dependencia</b></h4></th>
                            <th WIDTH="80" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Denuncia</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>Fecha</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>Oficio</b></h4></th>
                        </tr>
                    </thead>
                    <tbody>';
					    foreach ($resultado as $consulta){
                            $html.='<tr>
                                        <td WIDTH="90" HEIGHT="20" align="center"><h6>'.$consulta->num_movimiento.'</h3></td>
                                        <td WIDTH="50" HEIGHT="20"align="center"><h6>'.$consulta->num_acta.'</h3></td>
                                        <td WIDTH="100" HEIGHT="20"align="center"><h6>'.$consulta->nombre.'</h3></td>
                                        <td WIDTH="60" HEIGHT="20"align="center"><h6>'.$consulta->fecha.'</h3></td>
                                        <td WIDTH="120" HEIGHT="20"align="center"><h6>'.$consulta->concepto.'</h3></td>
                                        <td WIDTH="100" HEIGHT="20"align="center"><h6>'.$consulta->dependencia.'</h3></td>
                                        <td WIDTH="80" HEIGHT="20"align="center"><h6>'.$consulta->denuncia.'</h3></td>
                                        <td align="center"><h6>'.$consulta->fecha_denuncia.'</h3></td>
                                        <td align="center"><h6>'.$consulta->oficio.'</h3></td>
                                    </tr>';
						}
                    $html.='</tbody>
	            </table>
                <div align="rigth"><h5 >Desde: '.$today.'</h5></div><br>';

            $pdf->WriteHTMLCell(0,0,1,1,$html,0);
            $pdf->Output();
	    }

        public static function pdfreasignar(){

			$desde=date('Y/m/d',strtotime($_POST['desde']));
			$hasta=date('Y/m/d',strtotime($_POST['hasta']));
            
			$sql= "SELECT * FROM reasignar r inner join bienes b on b.codigo=r.codigo_bien
            inner join reasignar_descripcion rd on rd.num_movimiento=r.num_movimiento
            inner join tipo_reasignacion t on t.id_tipo=rd.id_tipo inner join dependencias d on
             d.codigo_dependencia=r.nueva_dependencia   
            WHERE rd.fecha >= '$desde' AND rd.fecha <=  '$hasta'";
			$consulta= Conexion::conect()->prepare($sql);
			$consulta->execute();
			$resultado = $consulta->fetchALL(PDO::FETCH_OBJ);
	
		    

            $pdf=new TCPDF('l','mm','A5 LANDSCAPE', true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Bienes Nacionales');
            date_default_timezone_set("America/Caracas");
            $today=date("d/m/Y", time());
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            $pdf->AddPage('L', 'A5 LANDSCAPE');
            // Table with rowspans and THEAD

		
            $pdf->SetFont('times','B',20);
            $pdf->Write(0, 'Bienes Nacionales', 0, 0, 'C');
            $pdf->Ln(8);
        
            $pdf->SetFont('times','',12);
            $html='<img src="./assets/img/bienes.png" width="100px">
            <div align="center"><h2>Reasignar</h2></div>
		    
            <div align="center"><h5 >Desde: '.$desde.' - Hasta: '.$hasta.'</h5></div><br>
	
                <table border="1" width="100%">
	                <thead>
                        <tr>
                            <th align="center" style="color:#0000FF;"><h4><b>Movimiento</b></h4></th>
                            <th WIDTH="70" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Acta</b></h4></th>
                            <th WIDTH="70" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>fecha</b></h4></th>
                            <th WIDTH="180" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Concepto</b></h4></th>
                            <th WIDTH="150" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Nueva dependencia</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>Tipo de reasignación</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>Bien</b></h4></th>
                        </tr>
                    </thead>
                    <tbody>';
					    foreach ($resultado as $consulta){
                            $html.='<tr>
                                        <td align="center"><h6>'.$consulta->num_movimiento.'</h6></td>
                                        <td WIDTH="70" HEIGHT="20"align="center"><h6>'.$consulta->nombre.'</h6></td>
                                        <td WIDTH="70" HEIGHT="20"align="center"><h6>'.$consulta->fecha.'</h6></td>
                                        <td WIDTH="180" HEIGHT="20"align="center"><h6>'.$consulta->concepto.'</h6></td>
                                        <td WIDTH="150" HEIGHT="20"align="center"><h6>'.$consulta->nueva_dependencia.'</h6></td>
                                        <td align="center"><h6>'.$consulta->tipo.'</h6></td>
                                        <td align="center"><h6>'.$consulta->nombre.'</h6></td>
                                    </tr>';
						}
                    $html.='</tbody>
	            </table>
                <div align="rigth"><h5 >Desde: '.$today.'</h5></div><br>';

            $pdf->WriteHTMLCell(0,0,1,1,$html,0);
            $pdf->Output();
	    }

        public static function pdfInventarioDep(){
                $dependencias=$_POST['dependencia'];
                $desde=date('Y/m/d',strtotime($_POST['desde']));
			    $hasta=date('Y/m/d',strtotime($_POST['hasta']));
            
			
            
			$sql= "SELECT * FROM asignacion a inner join asignacion_descripcion ad on ad.num_movimiento=a.num_movimiento
            inner join bienes b on b.codigo=a.codigo_bien inner join acta ac on ac.num_acta=b.num_acta
            inner join tipo_bien t on t.id_tipo=b.id_tipo inner join categoria_sigecof c 
            on c.codigo_categoria=b.codigo_categoria inner join dependencias d 
            on d.codigo_dependencia = a.codigo_dependencia   
            WHERE ad.fecha >= '$desde' AND ad.fecha <=  '$hasta' AND a.codigo_dependencia='$dependencias'";
			$consulta= Conexion::conect()->prepare($sql);
			$consulta->execute();
			$resultado = $consulta->fetchALL(PDO::FETCH_OBJ);
	
		    

            $pdf=new TCPDF('l','mm','A5 LANDSCAPE', true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Bienes Nacionales');
            date_default_timezone_set("America/Caracas");
            $today=date("d/m/Y", time());
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            $pdf->AddPage('L', 'A5 LANDSCAPE');
            // Table with rowspans and THEAD

		
            $pdf->SetFont('times','B',20);
            $pdf->Write(0, 'Bienes Nacionales', 0, 0, 'C');
            $pdf->Ln(8);
        
            $pdf->SetFont('times','',12);
            $html='<img src="./assets/img/bienes.png" width="100px">
            <div align="center"><h2>Inventario de la dependencia '.$dependencias.'</h2></div>
		    
            <div align="center"><h5 >Desde: '.$desde.' - Hasta: '.$hasta.'</h5></div><br>
	
                <table border="1" width="100%">
	                <thead>
                        <tr>
                            <th align="center" style="color:#0000FF;"><h4><b>Movimiento</b></h4></th>
                            <th WIDTH="70" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Acta</b></h4></th>
                            <th WIDTH="190" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Bien</b></h4></th>
                            <th WIDTH="90" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Fecha</b></h4></th>
                            <th WIDTH="120" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Categoria</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>N Factura</b></h4></th>
                            <th align="center" style="color:#0000FF;"><h4><b>N Orden C</b></h4></th>
                        </tr>
                    </thead>
                    <tbody>';
					    foreach ($resultado as $consulta){
                            $html.='<tr>
                                        <td align="center"><h6>'.$consulta->num_movimiento.'</h6></td>
                                        <td WIDTH="70" HEIGHT="20"align="center"><h6>'.$consulta->num_acta.'</h6></td>
                                        <td WIDTH="190" HEIGHT="20"align="center"><h6>'.$consulta->nombre.'</h6></td>
                                        <td WIDTH="90" HEIGHT="20"align="center"><h6>'.$consulta->fecha.'</h6></td>
                                        <td WIDTH="120" HEIGHT="20"align="center"><h6>'.$consulta->codigo_categoria.'</h6></td>
                                        <td align="center"><h6>'.$consulta->num_factura.'</h6></td>
                                        <td align="center"><h6>'.$consulta->num_ordenC.'</h6></td>
                                    </tr>';
						}
                    $html.='</tbody>
	            </table>
                <div align="rigth"><h5 >Desde: '.$today.'</h5></div><br>';

            $pdf->WriteHTMLCell(0,0,1,1,$html,0);
            $pdf->Output();
	    }

        public static function pdfInventario(){
        
        $sql= "SELECT * FROM bienes b inner join tipo_bien t on t.id_tipo=b.id_tipo 
        inner join categoria_sigecof c on c.codigo_categoria=b.codigo_categoria
        inner join acta a on a.num_acta=b.num_acta ";
        $consulta= Conexion::conect()->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchALL(PDO::FETCH_OBJ);

        

        $pdf=new TCPDF('l','mm','A5 LANDSCAPE', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Bienes Nacionales');
        date_default_timezone_set("America/Caracas");
        $today=date("d/m/Y", time());
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage('L', 'A5 LANDSCAPE');
        // Table with rowspans and THEAD

    
        $pdf->SetFont('times','B',20);
        $pdf->Write(0, 'Bienes Nacionales', 0, 0, 'C');
        $pdf->Ln(8);
    
        $pdf->SetFont('times','',12);
        $html='<img src="./assets/img/bienes.png" width="100px">
        <div align="center"><h2>Inventario General</h2></div>

            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th align="center" style="color:#0000FF;"><h4><b>Acta</b></h4></th>
                        <th WIDTH="70" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Factura</b></h4></th>
                        <th WIDTH="90" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>N Orden C</b></h4></th>
                        <th WIDTH="190" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Bien</b></h4></th>
                        <th WIDTH="120" HEIGHT="20"align="center" style="color:#0000FF;"><h4><b>Categoria</b></h4></th>
                        <th align="center" style="color:#0000FF;"><h4><b>Tipo</b></h4></th>
                        <th align="center" style="color:#0000FF;"><h4><b>Fecha</b></h4></th>
                    </tr>
                </thead>
                <tbody>';
                    foreach ($resultado as $consulta){
                        $html.='<tr>
                                    <td align="center"><h6>'.$consulta->num_acta.'</h6></td>
                                    <td WIDTH="70" HEIGHT="20"align="center"><h6>'.$consulta->num_factura.'</h6></td>
                                    <td WIDTH="90" HEIGHT="20"align="center"><h6>'.$consulta->num_ordenC.'</h6></td>
                                    <td WIDTH="190" HEIGHT="20"align="center"><h6>'.$consulta->nombre.'</h6></td>
                                    <td WIDTH="120" HEIGHT="20"align="center"><h6>'.$consulta->codigo_categoria.'</h6></td>
                                    <td align="center"><h6>'.$consulta->tipo.'</h6></td>
                                    <td align="center"><h6>'.$consulta->fecha.'</h6></td>
                                </tr>';
                    }
                $html.='</tbody>
            </table>
            <div align="rigth"><h5 >Desde: '.$today.'</h5></div><br>';

        $pdf->WriteHTMLCell(0,0,1,1,$html,0);
        $pdf->Output();
    }
    }

?>