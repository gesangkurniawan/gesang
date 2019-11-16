<html>
	<head>
		<style>
			table {
			  position: relative;
			  border-collapse: collapse;
			  width: 100%;


			}

			th, td {
			  text-align: left;
			  padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}

			th {
			  background-color: grey;
			  color: white;
			}
			.topright {
			  position: absolute;
			  top: 8px;
			  right: 16px;
			  font-size: 18px;
			}
			.topleft {
			  position: absolute;
			  top: 8px;
			  left: : 16px;
			  font-size: 18px;
			}
			.tabel {
				padding-top: 20px;
			}
			.button3 {font-size: 24px;
				background-color: pink;
				color: white;
				padding-top: 20%;padding-bottom: 5px;
			}
		</style>
	</head>
	<body>  
		<table>
			 <div class="topleft"><img width="70%" src="download.png"></div>
		
			<center> <h2 style="padding-top: 5%;padding-bottom: 5px;padding-right: 50%;"><a style="color: red ">ARKADEMI</a> <a style="color: black">COFFE SHOP</a></h2></center>
		   
		    <div class="topright"> 
		    	<button class="button button3"><a href="tambah.php">ADD</button>
		  <div class="tabel"></div>
		  <tr>
		    <th>no</th>
		    <th>product</th>
		    <th>category</th>
		    <th>cashier</th>
		    <th>price</th>
		    <th>action</th>
		  </tr>
		  <?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select name,price from product");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['name']; ?></td>
					<td><?php echo $d['']; ?></td>
					<td><?php echo $d['']; ?></td>
					<td><?php echo $d['price']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php 
			}
		?>
		</div>
		</table>

	</body>
</html>
