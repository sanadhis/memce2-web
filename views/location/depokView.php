<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Depok</h3>
	</div>
	
	<div class="panel-body">
		<h2>Lihat per Lokasi</h2>
		<br>
		<div class="row">
			<div class="col-sm-8">
				<table class="table">
					<tr>
						<td style="width:20%">Lokasi</td>
						<td>: Depok</td>
					</tr>
						<td>Status alat</td>
						<td>: Aktif</td>
					</tr>
				</table>
				
				<br>
				<div class="panel panel-info">
					<div id="suhuChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
				<br>
				<div class="panel panel-info">
					<div id="humidityChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
				<br>
				<table class="table table-hover table-bordered" id="tabledepok">
					<thead>
						<th>Suhu</th>
						<th>Kelembaban</th>
						<th>Kecepatan Angin</th>
						<th>Curah Hujan</th>
						<th>Intensitas Cahaya</th>
						<th>Tekanan Udara</th>
					</thead>
					<tbody>
						<?php
							foreach ($data as $row) {
								echo "<tr>";
								echo "<td>".$row['suhu']."</td>";	
								echo "<td>".$row['kelembaban']."</td>";	
								echo "<td>".$row['kecepatan_angin']."</td>";	
								echo "<td>".$row['curah_hujan']."</td>";	
								echo "<td>".$row['intensitas_cahaya']."</td>";	
								echo "<td>".$row['tekanan_udara']."</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-4">
				<h4>Peta Lokasi</h4>
				<br>
				<div id="depokMap" style="width:300px;height:300px;"></div>
				<br>
				<br>
				<h4><b>Hasil Analisa Otomatis</b></h4><br>
				<h5>Pengelompokkan Cuaca: </h5>
				<p><i>Berawan</i></p>
			</div>
		</div>
	</div>
</div>