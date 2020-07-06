<?php
class mrng
{
  protected function h1()
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
      $this->h1();
  }
	 function h4()
  {
     echo "this is h14";
  }
 }
		
		$obj= new mrng1();
		$obj->h3();
?>
