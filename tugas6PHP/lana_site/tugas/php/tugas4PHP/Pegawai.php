<?php
class Pegawai
{
	public $nip;
	public $nama;
	public $jabatan;
	public $agama;
	public $status;

	const PT = "PT. Mencari Ridho Allah";
	static $no = 1;

	public function __construct($nip, $nama, $jabatan, $agama, $status)
	{
		$this->nip = $nip;
		$this->nama = $nama;
		$this->jabatan = $jabatan;
		$this->agama = $agama;
		$this->status = $status;
	}

	public function setGapok()
	{
		switch ($this->jabatan) {
			case 'Manager':
				$gapok = 15000000;
				break;
			case 'Asmen':
				$gapok = 10000000;
				break;
			case 'Kabag':
				$gapok = 7000000;
				break;
			case 'Staff':
				$gapok = 4000000;
				break;
			default:
				$gapok = 0;
				break;
		}
		return $gapok;
	}

	public function setTunjab()
	{
		$tunjab = (20 * $this->setGapok()) / 100;
		return $tunjab;
	}

	public function setTunkel()
	{
		$tunkel = ($this->status == "Menikah") ? (10 * $this->setGapok()) / 100 : 0;
		return $tunkel;
	}

	public function setGator()
	{
		$gator = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
		return $gator;
	}

	public function setZakat()
	{
		$zakat = ($this->agama == "Islam" && $this->setGator() >= 6000000) ? (2.5 * $this->setGapok()) / 100 : 0;
		return $zakat;
	}

	public function setGaber()
	{
		$gaber = $this->setGator() - $this->setZakat();
		return $gaber;
	}

	public function mencetak()
	{
		echo '
		<tr>
			<td>' . self::$no++ . '</td>
			<td>' . $this->nip . '</td>
			<td>' . $this->nama . '</td>
			<td>' . $this->jabatan . '</td>
			<td>' . $this->agama . '</td>
			<td>' . $this->status . '</td>
			<td>Rp.' . number_format($this->setGapok(), 2, ',', '.') . '</td>
			<td>Rp.' . number_format($this->setTunjab(), 2, ',', '.') . '</td>
			<td>Rp.' . number_format($this->setTunkel(), 2, ',', '.') . '</td>
			<td>Rp.' . number_format($this->setZakat(), 2, ',', '.') . '</td>
			<td>Rp.' . number_format($this->setGaber(), 2, ',', '.') . '</td>
		</tr>
			';
	}
}
