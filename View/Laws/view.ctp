<?php //debug($law) ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $law['TbLawdatum']['c_name']; ?></h1>
    </div>
</div>
<div class="row">
<p>
<?php echo nl2br(str_replace(' ','&nbsp;',$law['TbLawdatum']['c_desc'])); ?>
</p>
	</div>
<hr/>
<div class="row">
<p>
<?php echo nl2br(str_replace(' ','&nbsp;',$law['TbLawdatum']['c_comment'])); ?>
</p>
	</div>