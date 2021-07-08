<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				
				<form action="<?php echo base_url('Inbox/update_inbox') ?>" method="post" class="form-horizontal">
					<div class="box box-solid">
						<div class="box-body">
							<input type="hidden" name="id" value="<?php echo $view['id'] ?>">
							<div class="form-group">
				        		<label for="tanggal" class="control-label col-md-3 text-right">Tanggal Masuk :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control tanggal" name="tanggal" id="tanggal" value="<?php echo $view['tanggal'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="nomor" class="control-label col-md-3 text-right">Nomor Surat :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="nomor" id="nomor" value="<?php echo $view['nomor'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="pengirim" class="control-label col-md-3 text-right">Pengirim :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="pengirim" id="pengirim" value="<?php echo $view['pengirim'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
							<div class="form-group">
				        		<label for="pengirim" class="control-label col-md-3 text-right">Tujuan :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="tujuan" id="tujuan" value="<?php echo $view['tujuan'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="perihal" class="control-label col-md-3 text-right">Perihal :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="perihal" id="perihal" value="<?php echo $view['perihal'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
							<?php if($this->session->userdata('level') == "Admin"){ ?>
				        	<div class="form-group">
				        		<label for="disposisi" class="control-label col-md-3 text-right">Disposisi :</label>
				        		<div class="col-md-8">
				        			<select name="disposisi" id="disposisi" class="form-control" required>
										<option value="<?php echo $view['disposisi'] ?>"><?php echo $view['disposisi'] ?></option>
				        				<option value="">-- Belum Ditentukan --</option>
				        				<option value="Diterima TU" <?php $view['disposisi'] == "Diterima TU" ? 'selected' : '' ?>>Diterima TU</option>
				        				<option value="Diserahkan Ke Waka" <?php $view['disposisi'] == "Diserahkan Ke Waka" ? 'selected' : '' ?>>Diserahkan Ke Waka</option>
				        				<option value="Diserahkan Ke Kepala Sekolah" <?php $view['disposisi'] == "Diserahkan Ke Kepala Sekolah" ? 'selected' : '' ?>>Diserahkan Ke Kepala Sekolah</option>
				        			</select>
				        		</div>
				        	</div>
							<?php } ?>
				        	<div class="form-group">
				        		<label for="isi_disposisi" class="control-label col-md-3 text-right">Isi Disposisi :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="isi_disposisi" id="isi_disposisi" value="<?php echo $view['isi_disposisi'] ?>" autocomplete="off" required>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<label for="berkas" class="control-label col-md-3 text-right">Berkas :</label>
				        		<div class="col-md-8">
				        			<input type="text" class="form-control" name="berkas" id="berkas" value="<?php echo $view['berkas'] ?>" autocomplete="off" readonly>
				        		</div>
				        	</div>
							<?php if($this->session->userdata('level') == "Admin"){ ?>
								<div>
									<div class="form-group">
										<label for="is_approved" class="control-label col-md-3 text-right">Status Surat :</label>
										<div class="col-md-8">
											<select name="is_approved" id="is_approved" class="form-control" required>
												<option value="">-- Belum Ditentukan --</option>
												<option value="1" <?php if($view['is_approved'] == 1) { echo 'selected';} ?>>Diterima TU</option>
												<option value="0" <?php if($view['is_approved'] == 0) { echo 'selected';} ?>>Terkirim</option>
												<option value="2" <?php if($view['is_approved'] == 2) { echo 'selected';} ?>>Ditolak</option>
											</select>
										</div>
									</div>
								</div>
							<?php } ?>
				        	<div class="form-group">
				        		<label for="" class="control-label col-md-3"></label>
				        		<div class="col-md-8">
				        			<button type="submit" name="submit" class="btn btn-flat btn-success"><i class="fas fa-sync"></i> UPDATE</button>
				        		</div>
				        	</div>
						</div>
					</div>
				</form>
					
			</div>
		</div>

	</section>
	<!-- Akhir isi Kontent -->
</div>