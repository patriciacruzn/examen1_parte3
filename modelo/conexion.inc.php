<?php 
class Conexion{
	private $con;

	public function __construct()
	{
		$this->con=new mysqli('localhost','ejemplo','123456','academico');
	}
	public function getUsuarios()
 	{
 		$query=$this->con->query('select * from identificador');
 		
 		$retorno=[];
 		$i=0;
 		while($fila=mysqli_fetch_assoc($query)){
 			$retorno[$i]=$fila;
 			$i++;
 		}
 		return $retorno;
    }
    public function getNotas(){
    	$query=$this->con->query('select * from nota');
    	$retorno=[];
 		$i=0;
 		while($fila=mysqli_fetch_assoc($query)){
 			$retorno[$i]=$fila;
 			$i++;
 		}
 		return $retorno;
    }
    public function getAprobadosCH(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="01" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) ch FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['ch'];
			
		}
 		return $output;
    }
       public function getAprobadosLP(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="02" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) lp FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['lp'];
			
		}
 		return $output;
    }
       public function getAprobadosCB(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="03" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) cb FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['cb'];
			
		}
 		return $output;
    }
       public function getAprobadosOR(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="04" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) oru FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['oru'];
			
		}
 		return $output;
    }
       public function getAprobadosPT(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="05" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) pt FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['pt'];
			
		}
 		return $output;
    }
       public function getAprobadosTJ(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="06" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) tj FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['tj'];
			
		}
 		return $output;
    }
       public function getAprobadosSC(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="07" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) sc FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['sc'];
			
		}
 		return $output;
    }
       public function getAprobadosBE(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="08" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) be FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['be'];
			
		}
 		return $output;
    }
       public function getAprobadosPD(){
    	$query=$this->con->query('SELECT sum(case  when i.residencia="09" and  n.nota>=51 and i.ci=n.ci then 1 else 0 end) pd FROM identificador i,nota n');
    
    	while($row=mysqli_fetch_assoc($query))
    	{
			$output=$row['pd'];
			
		}
 		return $output;
    }
}
?>