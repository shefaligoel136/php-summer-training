<?php
class mrng
{
  private function h1()
  {
     echo "this is h1";
  }
	 function h2()
  {
     $this->h1();
  }
}
class mrng1 extends mrng
{
    function h3()
  {
     echo "this is h3";
  }
	 function h4()
  {
     echo "this is h14";
  }
 }
		
		$a1= new mrng();
		$a1->h2();
?>
