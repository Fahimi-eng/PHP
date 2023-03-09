<?php 
	include_once "view/admin/layouts/header.php";
?>

					<!-- row -->
    <div class="row">
        <div class="col-12">
        <div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">دسته بندی ها</h4>
										<div>
											<a href="index.php?c=procat&a=create" class="btn btn-primary-gradient btn-block">افزودن دسته بندی جدید</a>
										</div>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">دسته بندی ها و زیر دسته بندی های فروشگاه </p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mg-b-0 text-md-nowrap">
											<thead>
											<tr>
												<th>ردیف</th>
												<th>نام</th>
												<th>موقعیت</th>
												<th>عملیات</th>
											</tr>
											</thead>
											<tbody>
                                            <?php
                                                foreach($procats as $key=>$item):
                                            ?>
											<tr>
												<th scope="row"><?php  echo ++$key;  ?></th>
												<td><?php  echo $item['title'];  ?></td>
												<td><?php echo "سطح ".$item['chid'];  ?></td>
												<td class="btn-icon-list">
													<form action="index.php?c=procat&a=edit" method="post" class="mx-1">
														<input type="text" name="id" value="<?php echo $item['id']; ?>" hidden>
														<button type="submit" class="btn btn-warning btn-icon"><i class="typcn typcn-pen"></i></button>
													</form>
													
													<form action="index.php?c=procat&a=destroy" method="post" class="mx-1">
														<input type="text" name="id" value="<?php echo $item['id']; ?>" hidden>
														<button type="submit" class="btn btn-danger btn-icon"><i class="si si-trash"></i></button>
													</form>
												</td>
											</tr>
                                            <?php 
                                            endforeach;
                                            ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
        </div>
    </div>

<?php
	include_once "view/admin/layouts/footer.php";