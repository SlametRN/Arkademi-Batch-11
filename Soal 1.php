<?php
// membuat class biodata
 class Biodata{
 	// menyimpan data dalam array
 	public $data = [];
 	// fungsi nama
 	public function nama($nama)
 	{
 		$this->data['name'] = $nama;
 		return $this;
 	}
	// fungsi umur
 	public function umur($umur)
 	{
 		$this->data['age'] = $umur;
 		return $this;
 	}
 	// fungsi alamat
 	public function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}
 	// fungsi hobi
 	public function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}

 	// fungsi menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}

 	// fungsi sekolah
 	public function sekolah($sekolah = array())
 	{
 		$this->data['school'] = $sekolah;
 		return $this;
 	}
 	// fungsi kemampuan
 	public function kemampuan($kemampuan = array())
 	{
 		$this->data['skills'] = $kemampuan;
 		return $this;
 	}
	// fungsi ketertarikan
 	public function tertarik($tertarik)
 	{
 		$this->data['interest'] = $tertarik;
 		return $this;
 	}
 	// fungsi konvert ke json
 	public function konjson(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}

}
$biodata 	= new Biodata();
$nama		= "Slamet Raharjo Nurwidyansyah";
$umur		= 24;
$alamat		= "Pekalongan";
$hobi 		= ['Renang','Membaca'];
$sekolah	= [
				
				"university" 	=> "Universitas Dian Nuswantoro",
				"year_in"		=> 2013,
				"year_out"		=> 2018,

			  ];
$kemampuan	= [
				"Programming Web"	=> ['HTML','CSS','PHP'],
				"Level"	=> ['Beginner']
			  ];

print_r($biodata->nama($nama)
				->umur($umur)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
				->kemampuan($kemampuan)
				->tertarik(true)
				->konjson()
);
