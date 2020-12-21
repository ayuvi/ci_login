                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
					
					<div class="row">
						<div class="col-lg">

						<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newEmployeeModal">Add New Employee</a>

							<table class="table table-hover" id="listEmployeeTable">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama</th>
										<th scope="col">NIK</th>
										<th scope="col">Email</th>
										<th scope="col">Divis</th>
										<th scope="col">No. Telp</th>
										<th scope="col">Status</th>
									</tr>
								</thead>
								<tbody id="listEmployee">
								<!-- untuk menampilkan data menggunakan jquery + ajax -->
								</tbody>
							</table>
						</div>
					</div>

                </div>
					

                </div>
                <!-- /.container-fluid -->


        