<?php

class CatalogTest extends CI_Controller
{
	public function index()
	{
		$memberId = 0;

		$this->load->library('unit_test');

		$this->load->model('Catalog');

		#######################add##################################
		$this->Catalog->setName('peeklom');
		$this->Catalog->setMoldsale('12255');
		$this->Catalog->setMembersmold('15552');
		$this->Catalog->setInsurace('2Y');

		$test=$this->Catalog->add();
		$memberId=$test;

		$expected_result='is_int';

		$this->unit->run($test,$expected_result,'UT-01:INSERT TEST ACCOUNT');
		########################Login#################################

		$this->Catalog->setUsername('catamin');
		$this->Catalog->setPassword('1234567');


		$test=$this->Catalog->Login();
		$expected_result=true;

		$this->unit->run($test,$expected_result,'UT-02:Login Pass');

		#########################Login################################

		$this->Catalog->setUsername('caamin');
		$this->Catalog->setPassword('1234567');

		$test=$this->Register->Login();
		$expected_result=false;

		$this->unit->run($test,$expected_result,'UT-03:Login fail(UserName Not Match)');

		#######################Login##################################

		$this->Catalog->setUserName('catadmin');
		$this->Catalog->setPassWord('knn');

		$test=$this->Catalog->Login();
		$expected_result=false;

		$this->unit->run($test,$expected_result,'UT-04:Login  fail(PassWord Not Match)');


		########################Login#################################

		$this->Catalog->setUserName('nnnnn');
		$this->Catalog->setPassWord('dlfskd');

		$test=$this->Catalog->Login();
		$expected_result=false;
		$this->unit->run($test,$expected_result,'UT-05:Login  fail(UserName and PassWord Not Match)');
		########################UPDATE #################################

		$result=$this->Catalog->findByPk($memberId);

		$test=$result['Name'];
		$expected_result='wijittra';

		$this->unit->run($test,$expected_result,'UT-07: name Change');

		########################UPDATE #################################


		$test=$result['moldsale'];
		$expected_result='12';

		$this->unit->run($test,$expected_result,'UT-08:moldsale Change');
		########################UPDATE #################################


		$test=$result['membersmold'];
		$expected_result='321';

		$this->unit->run($test,$expected_result,'UT-08:lastname Change');

		########################UPDATE #################################


		$test=$result['insurace'];
		$expected_result='1Y';

		$this->unit->run($test,$expected_result,'UT-08:lastname Change');


		echo $this->unit->report();

		###http://localhost/catalog/index.php/unittest/catalogtest



	}
}
?>
