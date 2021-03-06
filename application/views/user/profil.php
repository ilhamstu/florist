<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>" data-nama="<?= $this->session->userdata('nama')?>"></div>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade active show" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div><center><h4>Profil Manajemen</h4></center></div>
                                            <div class="card-body">
                                                <form method="post" action="<?= base_url('user/update_profil')?>" enctype="multipart/form-data">
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label class="">Nama Lengkap</label>
                                                                <input type="hidden" name="id" value="<?= $member->idKonsumen ;?>">
                                                                <input name="nama" placeholder="Nama Lengkap" type="text" class="form-control" value="<?= $member->namaKonsumen?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label class="">Email</label>
                                                                <input name="email" type="email" placeholder="email@email.com" class="form-control" value="<?= $member->email; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group">
                                                                <label class="">No. Telepon</label>
                                                                <input name="tlpn" type="text" placeholder="087123567890" class="form-control" value="<?= $member->tlpn; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Kota</label>
                                                            <select name="kota" id="selectjenis" class="form-control">
                                                                <?php foreach($kota as $item){?>
                                                                <option value="<?= $item->idKota;?>" <?= $member->idKota == $item->idKota ? "selected" : null ?>><?= $item->namaKota;?></option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label class="">Username</label>
                                                                <input name="username" placeholder="username" type="text" class="form-control" value="<?= $member->username; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label>Password</label>
                                                                <input name="passwd" placeholder="******" type="password" class="form-control" value="<?= $member->passwd; ?>">
                                                            </div>
                                                        </div>    
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <div class="position-relative form-group">
                                                                <label>Alamat</label>
                                                                <textarea name="alamat" rows="2" class="form-control"><?= $member->alamat?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        
                                                    </div>
                                                    <button class="mt-2 btn btn-primary" type="submit">Ubah</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>