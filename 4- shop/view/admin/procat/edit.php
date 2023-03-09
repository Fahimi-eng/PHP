<?php include_once "view/admin/layouts/header.php"; ?>

<div class="row row-sm">
	<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0 ">
								<div class="card-header">
									<h4 class="card-title mb-1">ویرایش دسته بندی </h4>
									<p class="mb-2">سفارشی سازی آن بسیار آسان است و از آن در پیاده سازی وب سایت شما استفاده می شود.</p>
								</div>
								<div class="card-body pt-0">
									<form method="post" action="index.php?c=procat&a=update">
										<div class="">
											<div class="form-group">
												<label for="title">عنوان دسته بندی</label>
												<input value="<?php echo $procat['title'];  ?>" name="title" type="text" class="form-control" id="title" placeholder="عنوان دسته بندی">
											</div>
											<input type="text" name="id" value="<?php echo $procat['id']; ?>" hidden>
                                            <div class="form-group">
											    <p class="mg-b-10">سرگروه</p>
                                                <select name="chid" class="form-control select2-no-search select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">
											        <option value="0" label="دسته بندی اصلی" data-select2-id="15">
                                                        دسته بندی اصلی
											        </option>
                                                    <?php foreach($procats_chid_0 as $item): ?>
											        <option <?php if($procat['id'] == $item['id']) echo "selected";  ?> value="<?php echo $item['id']; ?>" data-select2-id="27">
											        	<?php echo $item['title'];  ?>
											        </option>
                                                    <?php endforeach;  ?>
										        </select>
										    </div>
										</div>
										<button type="submit" class="btn btn-primary mt-3 mb-0">ثبت</button>
									</form>
								</div>
							</div>
						</div>
</div>

<?php include_once "view/admin/layouts/footer.php"; ?>