<?php 
  //error_reporting( E_ALL );
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  class PrimeMembers{
	  public $primeArray;
	  public $primeNumCount;
	  public $num;
	  public $countVar;
	 public function __construct(){		 
		$this->primeArray=array();	
        $this->primeNumCount=10;
        $this->countVar = 0;  
		$this->num = 2;
	  }
	

	function getprimenumbers(){
		
		while ($this->countVar < $this->primeNumCount )  
		{  
			$divis_count=0;  
			for ( $i=1; $i<=$this->num; $i++)  
			{  
				if (($this->num%$i)==0)  
				{  
					$divis_count++;  
				}  
			}  
			if ($divis_count<3)  
			{  
				$this->primeArray[]=$this->num;
				$this->countVar=$this->countVar+1;  
			}  
			$this->num=$this->num+1;  
		 }
        return  $this->primeArray;		 
	}
  			 
	function generateprimestable($primes){
		
		$primesCount=count($primes);
		/* Iterate over each row */
		for($i=0; $i<=$primesCount; $i++) 
		{   
			$firstElement=$i!=0?$primes[$i-1]:'';
			
			echo $i==0?"\t\t" : "\t".$firstElement;
			
			/* Iterate over each column */
			for($j=0; $j<=$primesCount; $j++)
			{
				if($i==0 and $j<=$primesCount)
				{
					/* Print star for 1st row, column values */
					 echo $j==10?"\t":$primes[$j]."\t";					 
				}else{ 
					if($i>=1 and $j==0) //To print first column space
					{    
						echo("\t");
					}else{ //print remaining columns values
						echo  $firstElement*$primes[$j-1]; 
						echo("\t"); 
					} 
				}
			}
			 //if($i==0)
			 //echo "<hr/> ";  
			/* Move to the next line */
			print("\n");
		} 
		 
	 }
    // End of the Generate Table   
   } 
   
   $object=new PrimeMembers();
   
   $primes=$object->getprimenumbers();
   
   //echo "<pre>"; print_r($primes);
   
   $object->generateprimestable($primes); 
   
   ?>
   